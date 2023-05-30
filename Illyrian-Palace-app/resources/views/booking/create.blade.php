@extends('layout')
@section('content')
               <!-- Begin Page Content -->
               <div class="container-fluid">



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Booking
        <a href="{{url('admin/customer')}}" class="float-right btn btn-success btn-sm"> View all</a>

        </h6>
    </div>
    <div class="card-body">

       @if($errors->any())
       @foreach($errors ->all() as $error)
       <p class="text-danger">{{$error}}</p>
       @endforeach
       @endif
        @if(Session::has('success'))
        <p class="text-success">{{session('success')}}</p>
        @endif
        <div class="table-responsive">
        <form action="{{url('admin/customer')}}" method="post" enctype="multipart/form-data">
    @csrf
    <table class="table table-bordered">
        <tr>
            <th>Customers</th>
            <td>
                <select class="form-control">
                    <option >--- Select customer ---</option>
                    @foreach($data as $customer)  
                    <option value="{{$customer->id}}" >{{$customer->full_name}}</option>
                    @endforeach 
                </select>
            </td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email" class="form-control"></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="password" class="form-control"></td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td><input type="text" name="mobile" class="form-control"></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><input type="text" name="address" class="form-control"></td>
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