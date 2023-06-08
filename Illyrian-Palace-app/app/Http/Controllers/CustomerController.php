<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //shows all data 
        $data=Customer::all();
        return view('customer.index',['data'=>$data]); // per mi tregu ne admin page customer te insertuara nepermes array 

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //form for adding data 
        return view('customer.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'mobile'=>'required',
            'address'=>'required'
        ]);
        
        //stores data in databse
        $data= new Customer;
        $data->full_name=$request->full_name;
        $data->email=$request->email;
        $data->password=sha1($request->password);
        $data->mobile=$request->mobile;
        $data->address=$request->address;
        
        $data->save();

        return redirect('admin/customer/create')->with('success', 'Data has been added to the database');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show specific data

        $data=Customer::find($id);
        return view ('customer.show', ['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //edit data
       

        $data=Customer::find($id);
        return view ('customer.edit', ['data'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
        $request->validate([
            'full_name'=>'required',
            'email'=>'required|email',
            'mobile'=>'required',
            'address'=>'required'
        ]);
        
        //stores data in databse
        $data= Customer::find($id);
        $data->full_name=$request->full_name;
        $data->email=$request->email;
        $data->password=sha1($request->password);
        $data->mobile=$request->mobile;
        $data->address=$request->address;
        
        $data->save();
        return redirect('admin/customer/'.$id.'/edit')->with('success', 'Data has been changed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       Customer::where('id',$id)->delete();
       return redirect('admin/customer')->with('success','Data has been deleted.');
    }

    //Login
    function login(){
        return view('login.blade.php');
    }
      //Register
      function register(){
        return view('register.blade.php');
    }
}
