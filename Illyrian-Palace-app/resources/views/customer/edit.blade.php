@extends('layout')
@section('content')
               <!-- Begin Page Content -->
               <div class="container-fluid">



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Update Customer
        <a href="{{url('admin/customer')}}" class="float-right btn btn-success btn-sm"> View all</a>

        </h6>
    </div>
    <div class="card-body">
        @if(Session::has('success'))
        <p class="text-success">{{session('success')}}</p>
        @endif
        <div class="table-responsive">
        <form enctype="multipart/form-data" method="post" action="{{url('admin/customer/'.$data->id)}}">
        @csrf
        @method('put')
        <table class="table table-bordered">
        <tr>
            <th>Full Name</th>
            <td><input value = "{{$data->full_name}}" type="text" name="full_name" class="form-control"></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input value = "{{$data->email}}" type="email" name="email" class="form-control"></td>
        </tr>
        
        <tr>
            <th>Mobile</th>
            <td><input value = "{{$data->mobile}}" type="text" name="mobile" class="form-control"></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><input value = "{{$data->address}}" type="text" name="address" class="form-control"></td>
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