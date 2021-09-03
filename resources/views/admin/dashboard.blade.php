@extends('layouts.adminapp')

@section('content')
	@section('content_header')
	<h1>Dashboard</h1>
	@endsection

	<div class="container">
			<div class="row">
					<div class="col-4">
						<div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $bookcount }}</h3>

                <p>Buku</p>
              </div>
              <div class="icon">
								<i class="fas fa-book"></i>
              </div>
              <a href="/home/books" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
					</div>

					<div class="col-4">
						<div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $membercount }}</h3>

                <p>Anggota</p>
              </div>
              <div class="icon">
								<i class="fas fa-user"></i>
              </div>
              <a href="/home/members" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
					</div>

					<div class="col-4">
						<div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $borrowingcount }}</h3>

                <p>Peminjaman</p>
              </div>
              <div class="icon">
								<i class="fas fa-arrow-alt-circle-up"></i>
              </div>
              <a href="/home/borrowings" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
					</div>

					<div class="col-4">
						<div class="small-box bg-info">
              <div class="inner">
                <h3>0</h3>

                <p>Pengembalian</p>
              </div>
              <div class="icon">
								<i class="fas fa-arrow-alt-circle-down"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
					</div>
			</div>
	</div>
@endsection
