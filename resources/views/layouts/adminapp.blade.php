@extends('adminlte::page')

@yield('title')


@section('content')
		@yield('content_header')
@stop

@section('css')
    <!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
		<link href=" {{ mix('css/app.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
		
@stop

@section('js')
	<script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
	<!-- <script src="{{ mix('js/app.js') }}"></script> -->

	<!-- DataTables -->
	<script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>

	@yield('scripts')
@stop