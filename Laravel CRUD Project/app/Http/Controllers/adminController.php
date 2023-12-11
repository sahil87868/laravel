<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\customer;
use Illuminate\Http\Request;
use Alert;
use Hash;
use Session;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/adminlogin');
    }
    public function login_auth(Request $request)
    {
        $data=admin::where('email','=',$request->email)->first();
       // echo $data;exit;
        if($data)
        {
            if(Hash::check($request->password,$data->password))
               session()->put('userid',$data->id);
               session()->put('email',$data->email);

            Alert::success('congrats','login success');
            return redirect('/dashboard');
        }
        else
        {
            Alert::error('failed','wrong password');
            return redirect()->back(); 
        }
    }
    public function logout()
    {
        session()->pull('userid');
            session()->pull('name');

            Alert::success('congrats','logout success');
            return redirect('/');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admin $admin)
    {
        //
    }
}
