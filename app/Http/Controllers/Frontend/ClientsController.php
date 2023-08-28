<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Display()
    {
        return view('Frontend.clients');
    }

    public function index()
    {
        $client = Clients::orderBy('id')->paginate(5);
        return view('admin.clients.index', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.clients.create');
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
        //create a new Clients using the Clients model
        Clients::create($data);
        return redirect()->route('clients.index')->with('sucess', "Content posted successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.clients.index', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $data = Clients::find($id);
        //show the edit form and pass the content
        return View('admin.clients.Edit')
            ->with(['client' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clients $clients, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:250',
            'description' => 'required',
            // 'image_url'=>['nullable','mimes:'jpeg,'jpg']

        ]);
        $clients->update($validatedData);
        // $content->fill($request->post())->save();
        return redirect()->route('clients.index')->with('sucess', 'Content Created');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {

        $content = Clients::findOrFail($id);
        $content->delete($request->all());
        // $content->delete($content, $id);
        return redirect()->route('clients.index')->with('success', 'Clients data deleted');
    }
}
