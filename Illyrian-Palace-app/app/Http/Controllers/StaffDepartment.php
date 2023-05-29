<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

class StaffDepartment extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //shows all data 
        $data=Department::all();
        return view('department.index',['data'=>$data]); 

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //form for adding data 
        return view('department.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //stores data in databse
        $data= new Department;
        $data->title=$request->title;
        $data->detail=$request->detail;
        $data->save();

        return redirect('manager/department/create')->with('success', 'Data has been added to the database');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show specific data

        $data=Department::find($id);
        return view ('department.show', ['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //edit data
       
        $data=Department::find($id);
        return view ('department.edit', ['data'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data= Department::find($id);
        $data->title=$request->title;
        $data->detail=$request->detail;
        $data->save();
        return redirect('manager/department/'.$id.'/edit')->with('success', 'Data has been changed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       Department::where('id',$id)->delete();
       return redirect('manager/department')->with('success','Data has been deleted.');
    }
}
