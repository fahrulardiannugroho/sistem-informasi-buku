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
		@yield('styles')
		<style>
			.navbar {
				background-color: #FFFFFF;
			}
			.navbar-brand {
				color: black;
			}

			.btn-search {
				background-color: #0589FF !important;
			}

			.floatingNav {
				border-radius: 2px;
				box-shadow: 0 2px 4px -2px rgba(0,0,0,.2);
			}

		</style>
</head>
<body>
		<nav class="navbar navbar-expand-lg navbar-light sticky-top py-3">
				<div class="container">
					<a class="navbar-brand" href="/">
						<img src="{{ url('/data_file/LOGO_KIK.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
						TBM KIK
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<div class="navbar-nav mr-auto ml-auto">
							<form class="form-inline my-2 my-lg-0" method="get" action="/search">
								<div class="input-group">
									<input type="text" name="search" value="{{ old('search') }}" class="form-control" placeholder="Cari buku apa?" aria-label="Recipient's username" aria-describedby="basic-addon2">
									<div class="input-group-append">
										<button type="submit" class="btn btn-primary btn-search">Cari</button>
									</div>
								</div>
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
		
		<script>
			$(document).ready( function () {
				$(window).scroll(function() {
					if ($(window).scrollTop() > 10) {
							$('.navbar').addClass('floatingNav');
					} else {
							$('.navbar').removeClass('floatingNav');
					}
				});
			});
		</script>
		@yield('scripts')
</body>
</html>

