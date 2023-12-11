<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\country;
use Illuminate\Http\Request;
use Hash;
use Session;
use Alert;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function create()
    {
        $data=country::all();
        return view('website/signup',['country'=>$data]);     }

    /**
     * Show the form for creating a new resource.
     */
    public function login()
    {
        return view('website/login');
    }

  
    public function login_auth(Request $request)
    {
        $validated=$request->validate([
            
            'email'=>'required|email',
            'password'=>'required',
            
        ]);   
        $data=customer::where('email','=',$request->email)->first();
        if($data)
        {

            if(Hash::check($request->password,$data->password))
            session()->put('userid',$data->id);
            session()->put('name',$data->name);

            Alert::success('congrats','login success');
            return redirect('/');
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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'name'=>'required|alpha',
            'email'=>'required|email',
            'password'=>'required|unique:customers',
            'contact'=>'required|min:10|max:10',
            'cid'=>'required',
            'file'=>'required|image',
          
            
        ]);     
        $data=new customer;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->contact=$request->contact;
        $data->gender=$request->gender;
        $data->languages=implode(",",$request->languages);
        $data->cid=$request->cid;
        $file=$request->file('file');
        $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
        $file->move('upload/customer/',$filename);
        $data->file=$filename;
        
        $data->save();
        return back();  
    }
    public function profile(customer $customer)
    {
        $data=customer::where('id',session('userid'))->first();
        return view('website/profile',['data'=>$data]);

    }



    /**
     * Display the specified resource.
     */
    public function show(customer $customer)
    {
        $data=customer::all();
        return view('admin/manage_cust',['data_customer'=>$data]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(customer $customer,$id)
    {
        $countrydata=country::all();
        $data=customer::find($id);
        return view('website/editprofile',['country'=>$countrydata,'data'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, customer $customer, $id)
    {
        $data=customer::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->contact=$request->contact;
        $data->gender=$request->gender;
        $data->languages=implode(",",$request->languages);
        $data->cid=$request->cid;

        if($request->hasfile('file'))
        {
            $old_img=$data->file;
            unlink('upload/customer/'.$old_img);

           $file=$request->file('file');
            $filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
            $file->move('upload/customer/',$filename);
            $data->file=$filename;
        }
       
        
        $data->update();
        Alert::success('congrats');
        return redirect('/profile');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customer $customer ,$id)
    {
        $data=customer::find($id);
        $filename=$data->file;

        customer::find($id)->delete();
        if($filename!="")
        {
            unlink('upload/customer/'.$filename);
        }
        Alert('success');
        return redirect()->back();
    }
}
