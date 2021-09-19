<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
		<link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
		
    <!-- Styles -->
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
		<nav class="navbar navbar-expand-lg sticky-top navbar-light py-3">
				<div class="container">
					<a class="navbar-brand" href="/">SisfobukuApp</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<div class="navbar-nav mr-auto ml-auto">
							<form class="form-inline my-2 my-lg-0">
								<input class="form-control mr-sm-2" type="search" placeholder="Mau Cari Buku Apa?" aria-label="Search">
								<button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
							</form>
						</div>
						<a class="btn btn-outline-dark" href="{{ route('login') }}">Login Admin</a>
						@if (Route::has('register'))
              	<a href="{{ route('register') }}" class="btn btn-outline-dark ml-1">Register</a>
            @endif
					</div>
				</div>
		</nav>
		
    @yield('content')

		<script src="{{ mix('js/app.js') }}"></script>
		<script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
		@yield('scripts')
</body>
</html>

