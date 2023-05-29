@extends('layoutm')
@section('content')
               <!-- Begin Page Content -->
               <div class="container-fluid">



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$data->full_name}} 's Details
        <a href="{{url('manager/staff')}}" class="float-right btn btn-success btn-sm"> View all</a>

        </h6>
    </div>
    <div class="card-body">
       
        <div class="table-responsive">
    
    <table class="table table-bordered">
        <tr>
            <th>Full Name</th>
            <td>{{$data->full_name}}</td>
        </tr>
        <tr>
            <th>Department</th>
            <td>{{$data->department->title}}</td>
        </tr>
        <tr>
            <th>Photo</th>
            
            <td><img src="{{asset('storage/app/'.$data->photo)}}" width=200 height=200/></td>
        </tr>
        <tr>
            <th>Bio</th>
            <td>{{$data->bio}}</td>
        </tr>
        <tr>
            <th>Salary</th>
            <td>{{$data->salary}}</td>
        </tr>
        
       
    </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->



@endsection