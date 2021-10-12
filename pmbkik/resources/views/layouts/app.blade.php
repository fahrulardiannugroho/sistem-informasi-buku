<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

		<!-- favicon -->
		<link rel="icon" href="{{ url('css/favicon.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

		<style>
			html, body{
				height: 100% !important;
			}

			body {
				background-image: url("{{ asset('images/background-autentikasi.JPG') }}");
				background-size: cover;
			}

			body::after {
				content: '';
				display: block;
				width: 100%;
				height: 100%;
				background-image: linear-gradient(to bottom, rgba(0,0,0,0.7), rgba(0,0,0,0));
				position: absolute;
				bottom: 0;
			}

			.container {
				height: 100%;
				display: flex;
				justify-content: center;
				align-items: center;
				position: relative;
				z-index: 99;
			}

			.app {
				flex-basis: 90%;
			}

			@media only screen and (min-width: 767px) {
				.app {
					flex-basis: 45%;
				}
			}

		</style>

		@yield('styles')
</head>
<body>
		<div class="container">
			<div id="app" class="app">        
					<main>
							@yield('content')
					</main>
			</div>
		</div>

		@section('js')
			@yield('scripts')
		@stop
</body>
</html>
