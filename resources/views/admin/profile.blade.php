@extends('adminlte::page')

@section('title', 'Profile')


@section('css')
	
@stop

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')
This is profile
	<br>
	{{ $varname }}
@stop

@section('js')

@stop
