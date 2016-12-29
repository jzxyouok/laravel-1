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
<div id="idx"></div>

@stop

@section('js')
<script src="http://idx2.mlsstratus.com/Lib/SDS/MLSLI.IDX.js"></script>

<script>

jQuery(document).ready(function() {

new com.mlsstratus.idx.IdxInstance($get('idx'), '4e8f94e4fd12a264d1d67efef6aafba6');

});

</script>
@stop
