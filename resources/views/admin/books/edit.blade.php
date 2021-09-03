@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card mt-3">
								<div class="card-header">Tambah Buku</div>
                <div class="card-body">
									<form method="post" action="{{ url("/home/book", $book->id_buku ) }}">
										{{ method_field('PUT') }}
										{{ csrf_field() }}
										<div class="form-group row">
											<label for="judulBuku" class="col-sm-2 col-form-label">Judul Buku</label>
											<div class="col-sm-10">
												<input name="judul_buku" type="text" value="{{ $book->judul_buku }}" class="form-control" id="judulBuku">
											</div>
										</div>

										<div class="form-group row">
											<label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
											<div class="col-sm-10">
												<input name="penulis" type="text" value="{{ $book->penulis }}" class="form-control" id="penulis">
											</div>
										</div>

										<div class="form-group row">
											<label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
											<div class="col-sm-10">
												<input name="penerbit" type="text" value="{{ $book->penerbit }}" class="form-control" id="penerbit">
											</div>
										</div>

										<div class="form-group row">
											<label for="stokBuku" class="col-sm-2 col-form-label">Stok Buku</label>
											<div class="col-sm-10">
												<input name="stok_buku" type="number" value="{{ $book->stok_buku }}" min="0" class="form-control" id="stokBuku">
											</div>
										</div>

										<div class="form-group row">
											<label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
											<div class="col-sm-10">
												<select name="kategori" class="form-control" id="kategori">
													<option selected>{{ $book->kategori }}</option>
													<option>Dongeng</option>
													<option>Sejarah</option>
													<option>Biografi</option>
													<option>Sains</option>
												</select>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-2"></div>
											<div class="col-sm-10">
												<button class="btn btn-sm btn-primary" type="submit"> Update </button>
												<a href="/home/books" class="btn btn-sm btn-secondary" > Batal </a>
											</div>
										</div>
									</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection