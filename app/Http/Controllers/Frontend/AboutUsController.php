<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Display()
    {
        return view('Frontend.about');
    }

    public function index()
    {
        $About = AboutUs::orderBy('id')->paginate(5);
        return view('admin.about.index', compact('About'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
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
        AboutUs::create($data);
        return redirect()->route('about.index')->with('sucess', "Content posted successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        return view('admin.about.index', compact('About'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $data = AboutUs::find($id);
        //show the edit form and pass the content
        return View('admin.about.Edit')
            ->with(['About' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutUs $aboutUs, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:250',
            'description' => 'required',
            // 'image_url'=>['nullable','mimes:'jpeg,'jpg']

        ]);
        $aboutUs->update($validatedData);
        // $content->fill($request->post())->save();
        return redirect()->route('about.index')->with('sucess', 'Content Created');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {

        $content = AboutUs::findOrFail($id);
        $content->delete($request->all());
        // $content->delete($content, $id);
        return redirect()->route('about.index')->with('success', 'Content deleted');
    }
}
