<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Roomtype;
use App\Models\Room;

class RoomController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //shows all data 
        $data=Room::all();
        return view('room.index',['data'=>$data]); // per mi tregu ne admin page roomtype te insertuara nepermes array 

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //form for adding data 
        $roomtypes= RoomType ::all();
        return view('room.create',['roomtypes'=>$roomtypes]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //stores data in databse
        $data= new Room;
        $data->room_type_id=$request->rt_id;
        $data->title=$request->title;
        $data->save();

        return redirect('admin/room/create')->with('success', 'Data has been added to the database');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show specific data

        $data=Room::find($id);
        return view ('room.show', ['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //edit data
       
        $roomtypes= RoomType ::all();
        $data=Room::find($id);
        return view ('room.edit', ['data'=>$data,['roomtypes'=>$roomtypes]]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data= Room::find($id);
        $data->room_type_id=$request->rt_id;
        $data->title=$request->title;
        $data->save();
        return redirect('admin/rooms/'.$id.'/edit')->with('success', 'Data has been changed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       Room::where('id',$id)->delete();
       return redirect('admin/rooms')->with('success','Data has been deleted.');
    }
}
