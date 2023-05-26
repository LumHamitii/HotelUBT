<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Department;

class StaffController extends Controller
{
    public function index()
    {
        //shows all data 
        $data=Staff::all();
        return view('staff.index',['data'=>$data]); 

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //form for adding data 
        $departs= Department ::all();
        return view('staff.create',['departs'=>$departs]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //stores data in databse
        $data= new Staff;
        $imgPath=$request->file('photo')->store('public/imgs');
        $data->full_name=$request->full_name;
        $data->department_id=$request->department_id;
        $data->photo=$imgPath;
        $data->bio=$request->bio;
        $data->salary=$request->salary;
        $data->save();

        return redirect('admin/staff/create')->with('success', 'Data has been added to the database');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show specific data

        $data=Staff::find($id);
        return view ('staff.show', ['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {   
        $departs=Department::all();
        $data=Staff::find($id);
        return view('staff.edit',['data'=>$data,'departs'=>$departs]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data= Staff::find($id);
        $data->full_name=$request->full_name;
        $data->department_id=$request->department_id;
        $data->bio=$request->bio;
        $data->salary=$request->salary;
        $data->save();
        return redirect('admin/staff/'.$id.'/edit')->with('success', 'Data has been changed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       Staff::where('id',$id)->delete();
       return redirect('admin/staff')->with('success','Data has been deleted.');
    }
}
