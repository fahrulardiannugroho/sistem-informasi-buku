@extends('adminlte::page')

@yield('title')

<div id="app">
	@section('content')
			@yield('content_header')
	@stop
</div>

@section('css')
		<!-- <link href=" {{ asset('css/app.css') }}" rel="stylesheet"> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
		
@stop

@section('js')
	<!-- <script type="text/javascript" src="{{ asset('js/app.js') }}"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

	@yield('scripts')
@stop