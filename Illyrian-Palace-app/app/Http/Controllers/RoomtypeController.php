<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\RoomTypeimage;


class RoomtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //shows all data 
        $data=RoomType::all();
        return view('roomtype.index',['data'=>$data]); // per mi tregu ne admin page roomtype te insertuara nepermes array 

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //form for adding data 
        return view('roomtype.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //stores data in databse
        $request->validate([
            'title'=>'required',
            'price'=>'required',
            'detail'=>'required',
        ]);
        $data= new Roomtype;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->detail=$request->detail;
        $data->save();
        foreach($request->file('imgs')as $img){
            $imgPath=$img->store('public/imgs');
            $imgData= new Roomtypeimage;
            $imgData->room_type_id=$data->id;
            $imgData->img_src=$imgPath;
            $imgData->img_alt=$request->title;
            $imgData->save();
        }
        return redirect('admin/roomtype/create')->with('success', 'Data has been added to the database');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show specific data

        $data=Roomtype::find($id);
        return view ('roomtype.show', ['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //edit data
       

        $data=Roomtype::find($id);
        return view ('roomtype.edit', ['data'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        //
        $data= Roomtype::find($id);
        $data->title=$request->title;
        $data->price=$request->price;
        $data->detail=$request->detail;
        $data->save();

        
        return redirect('admin/roomtype/'.$id.'/edit')->with('success', 'Data has been changed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       RoomType::where('id',$id)->delete();
       return redirect('admin/roomtype')->with('success','Data has been deleted.');
    }
}
