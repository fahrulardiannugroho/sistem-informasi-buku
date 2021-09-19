@extends('layouts.userapp')

@section('content')
	<div class="container mt-4">
		<div class="row">
			<div class="col-3">
					<ul class="nav flex-column nav-pills">
						<li class="nav-item">
							<a class="nav-link active" href="#">Menu 1</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Menu 2</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Menu 3</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Menu 4</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Menu 5</a>
						</li>
					</ul>
			</div>
			<div class="col-9">
				<img style="width: 100%;" src="{{ url('/images/banner.png') }}" alt="">

				<div class="row mt-4">
					<div class="col-3">
						<div class="card">
							<img style="height: 30%;" src="{{ url('/images/default.png') }}" class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text">
									Ki Hajar Dewantara <br>
									<small>Nulllll</small>
								</p>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
							<img style="height: 30%;" src="{{ url('/images/default.png') }}" class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text">
									Ki Hajar Dewantara <br>
									<small>Nulllll</small>
								</p>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
							<img style="height: 30%;" src="{{ url('/images/default.png') }}" class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text">
									Ki Hajar Dewantara <br>
									<small>Nulllll</small>
								</p>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
							<img style="height: 30%;" src="{{ url('/images/default.png') }}" class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text">
									Ki Hajar Dewantara <br>
									<small>Nulllll</small>
								</p>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="card">
							<img style="height: 30%;" src="{{ url('/images/default.png') }}" class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text">
									Ki Hajar Dewantara <br>
									<small>Nulllll</small>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection