<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

use Alert;
class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website/contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'name'=>'required|alpha',
            'email'=>'required|email',
            'comment'=>'required',
            
        ]);     
        $data=new contact;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->contact=$request->contact;
        $data->comment=$request->comment;
        $data->save();
        return back();
     
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        $data=contact::all();
        return view('admin/manage_cont',['data_contacts'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact,$id)
    {
       contact::find($id)->delete();
        Alert('success');
        return redirect()->back();
    }
}
