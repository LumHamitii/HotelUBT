@extends('layoutm')
@section('content')
               <!-- Begin Page Content -->
               <div class="container-fluid">



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Employee 
        <a href="{{url('manager/staff')}}" class="float-right btn btn-success btn-sm"> View all</a>

        </h6>
    </div>
    <div class="card-body">
        @if(Session::has('success'))
        <p class="text-success">{{session('success')}}</p>
        @endif
        <div class="table-responsive">
        <form enctype="multipart/form-data" method="post" action="{{url('manager/staff/'.$data->id)}}">
        @csrf
        @method('put')
    <table class="table table-bordered">
    <tr>
            <th>Full Name</th>
            <td><input type="text" value="{{$data->full_name}}" name="full_name" class="form-control"></td>
        </tr>
    <tr>
            <th>Select Department</th>
            <td><select name="department_id" class="form-control" >
                <option value="0">--Select--</option>
                @foreach($departs as $dp)
                <option @if($data->id==$dp->id) selected @endif value="{{$dp->id}}" >{{$dp->title}}</option>
                @endforeach
            </select></td>
        </tr>
    
        <tr>
            <th>Bio</th>
            <td><input type="text" value="{{$data->bio}}" name="bio" class="form-control"></td>
        </tr>
        <tr>
            <th>Salary</th>
            <td><input type="number" value="{{$data->salary}}" name="salary" class="form-control"></td>
        </tr>
        
        <tr>
            <td colspan="2">
                <input type="submit" class="btn btn-primary"/>
            </td>
        </tr>
    </table>
</form>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->



@endsection