<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
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
        $service = Services::orderBy('id')->paginate(5);
        return view('admin.service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
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
        Services::create($data);
        return redirect()->route('services.index')->with('sucess', "Content posted successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.service.index', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $data = Services::find($id);
        //show the edit form and pass the content
        return View('admin.service.Edit')
            ->with(['service' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Services $services, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:250',
            'description' => 'required',
            // 'image_url'=>['nullable','mimes:'jpeg,'jpg']

        ]);
        $services->update($validatedData);
        // $content->fill($request->post())->save();
        return redirect()->route('services.index')->with('sucess', 'Content Created');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {

        $content = Services::findOrFail($id);
        $content->delete($request->all());
        // $content->delete($content, $id);
        return redirect()->route('services.index')->with('success', 'Content deleted');
    }
}