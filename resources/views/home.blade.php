@extends('adminlte::page')

@section('title', 'AdminLTE')
@section('css')
	<link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/datatables/dataTables.bootstrap.css') }}">
@stop
@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')  	
    	<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Count</th>
                  <th>Name</th>
                  <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $key=>$user)
                <tr>
                  <td>{{ ++$key }}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>                  
                </tr>     
                @endforeach
                </tfoot>
              </table>
            </div>
            
          </div>
          
          

@stop


@section('js')
	<script src="{{ asset('vendor/adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('vendor/adminlte/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
	
	
	<script>
	  $(function () {
	    $('#example1').DataTable({
	      "paging": true,
	      "lengthChange": true,
	      "searching": true,
	      "ordering": true,
	      "info": true,
	      "autoWidth": true
	    });
	  });

	</script>	
@stop









