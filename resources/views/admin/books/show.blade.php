@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card mt-3">
								<div class="card-header">Detail Buku</div>
                <div class="card-body">
									<div class="row">
										<div class="col-4"><p>Judul Buku</p></div>
										<div class="col"><b>{{ $book->judul_buku }}</b></div>
									</div>
									<div class="row">
										<div class="col-4"><p>Penulis</p></div>
										<div class="col"><b>{{ $book->penulis }}</b></div>
									</div>
									<div class="row">
										<div class="col-4"><p>Penerbit</p></div>
										<div class="col"><b>{{ $book->penerbit }}</b></div>
									</div>
									<div class="row">
										<div class="col-4"><p>Stok Buku</p></div>
										<div class="col"><b>{{ $book->stok_buku }}</b></div>
									</div>
									<div class="row">
										<div class="col-4"><p>Kategori</p></div>
										<div class="col"><b>{{ $book->kategori }}</b></div>
									</div>

									<a href="/home/books" class="btn btn-sm btn-secondary" > Kembali </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
