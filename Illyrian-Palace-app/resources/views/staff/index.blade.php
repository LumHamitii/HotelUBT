@extends('layoutm')
@section('content')
               <!-- Begin Page Content -->
               <div class="container-fluid">



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Staff
            <a href="{{url('manager/staff/create')}}" class="float-right btn btn-success btn-sm"> Add new</a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Department</th>
                        <th>Photo</th>
                        <th>Salary</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>#</th>
                        <th>Full Name</th>
                        <th>Department</th>
                        <th>Photo</th>
                        <th>Salary</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                    @if($data)
                    @foreach($data as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->full_name}}</td>
                        <td>{{$d->department->title}}</td>
                        <td><img src="{{asset('storage/app/'.$d->photo)}}" width=80/></td>
                        <td>{{$d->salary}}</td>
                        <td>
                        <a href="{{url('manager/staff/'.$d->id)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                        <a href="{{url('manager/staff/'.$d->id).'/edit'}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="{{url('manager/staff/payments/'.$d->id)}}" class="btn btn-dark btn-sm"><i class="fa fa-credit-card"></i></a>
                        <a onclick="return confirm('Are you sure you want to delete this employee?')" href="{{url('manager/staff/'.$d->id).'/delete'}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>

                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->



@section ('scripts')
    <!-- Page level plugins -->
    <script src="{{asset('public')}}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('public')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('public')}}/js/demo/datatables-demo.js"></script>

    @endsection
@endsection