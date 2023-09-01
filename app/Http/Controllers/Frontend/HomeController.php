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
        $request->validate([
            'heading1' => 'required',
            'heading2' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $fileName);

        $home = new Home;
        $home->heading1 = $request->input('heading1');
        $home->heading2 = $request->input('heading2');
        $home->description = $request->input('description');
        $home->image = $fileName;
        $home->save();

        return redirect()->route('admin.index')->with([
            'message'=>'User Added Successfully!',
            'alert-type'=>"success",
        ]);

    }
    









        //        dd($home);
        //        if ($request->hasFile('image')) {
            //            echo "ok";die();

        // dd($data);
        // $data = ([
        //     //                'name'=>$request['name'],
        //     'heading1' => $request['heading1'],
        //     'heading2' => $request['heading2'],
        //     'description' => $request['description'],
        //     'image' => $request['image']
        // ]);
        // $image = $request->file('image');
        // $imageName = time() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('images'), $imageName);
        // //create a new content using the content model

            // [
            //     'image' => $image,
            //     'filename' => $imageName,
            //     'path' => 'images/' . $imageName,
            // ]

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
            'heading1' => 'required|max:250',
            'heading2' => 'required|max:250',
            'description' => 'required',
            'image' => ['nullable', 'mimes: png, jpg']

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