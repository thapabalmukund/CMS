<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontend\Home;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Display()
    {
        return view('Frontend.index');
    }

    public function index()
    {
        $home = Home::orderBy('id')->paginate(5);
        return view('admin.Home.index', compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Home.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);
        //create a new content using the content model
        Home::create($data);
        return redirect()->route('admin.home.index')->with('sucess', "Content posted successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.Home.index', compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $data = Home::find($id);
        //show the edit form and pass the content
        return View('admin.Home.Edit')
            ->with(['home' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($id);
        $validatedData = $request->validate([
            'title' => 'required|max:250',
            'description' => 'required',
            // 'image_url'=>['nullable','mimes:'jpeg,'jpg']

        ]);
        // dd($home, $validatedData);
        $home = Home::find($id);

        $home->update($validatedData);
        // $content->fill($request->post())->save();
        return redirect()->route('admin.index')->with('sucess', 'Content Created');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {

        $content = Home::findOrFail($id);
        $content->delete($request->all());
        // $content->delete($content, $id);
        return redirect()->route('admin.index')->with('success', 'Content deleted');
    }
}