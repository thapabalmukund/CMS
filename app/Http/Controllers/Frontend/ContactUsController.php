<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Display()
    {
        return view('Frontend.contact');
    }

    public function index()
    {
        $contact = ContactUs::orderBy('id')->paginate(5);
        return view('admin.contact.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contact.create');
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
        ContactUs::create($data);
        return redirect()->route('contact.index')->with('sucess', "Content posted successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.contact.index', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $data = ContactUs::find($id);
        //show the edit form and pass the content
        return View('admin.contact.Edit')
            ->with(['contact' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactUs $contactUs, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:250',
            'description' => 'required',
            // 'image_url'=>['nullable','mimes:'jpeg,'jpg']

        ]);
        $contactUs->update($validatedData);
        // $content->fill($request->post())->save();
        return redirect()->route('contact.index')->with('sucess', 'Content Created');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {

        $content = ContactUs::findOrFail($id);
        $content->delete($request->all());
        // $content->delete($content, $id);
        return redirect()->route('contact.index')->with('success', 'Content deleted');
    }
}
