<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\StaffPayment;
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

        return redirect('manager/staff/create')->with('success', 'Data has been added to the database');
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
        return redirect('manager/staff/'.$id.'/edit')->with('success', 'Data has been changed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       Staff::where('id',$id)->delete();
       return redirect('manager/staff')->with('success','Data has been deleted.');
    }

    //All payments
    function all_payments(Request $request,$staff_id){
        $data=StaffPayment::where('staff_id', $staff_id)->get();
        $staff=Staff::find($staff_id);
        return view('staffpayment.index',['staff_id'=>$staff_id, 'data'=>$data, 'staff'=>$staff]);
    }

    //Add payment

    function add_payment($staff_id){
        return view('staffpayment.create',['staff_id'=>$staff_id]);
    }


    function save_payment(Request $request,$staff_id){

        $data=new StaffPayment;
        $data->staff_id=$staff_id;
        $data->amount=$request->amount;
        $data->payment_date=$request->amount_date;
        $data->save();

        return redirect('manager/staff/payment/'.$staff_id.'/add')->with('success','Data has been added.');
    }

    public function delete_payment($id,$staff_id)
    {
       StaffPayment::where('id',$id)->delete();
       return redirect('manager/staff/payments/'.$staff_id)->with('success','Data has been deleted.');
    }
}
