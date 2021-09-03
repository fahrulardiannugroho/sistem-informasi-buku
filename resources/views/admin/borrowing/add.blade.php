@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card mt-3">
								<div class="card-header">Tambah Peminjaman</div>
                <div class="card-body">
									<form method="post" action="{{ url("/home/borrowings") }}">
										{{ csrf_field() }}
										<div class="form-group row">
											<label for="idAnggota" class="col-sm-2 col-form-label">Peminjam</label>
											<div class="col-sm-10">
												<select required class="form-control" id="idAnggota" name="id_anggota">
													<option selected disabled>Pilih Anggota</option>
													@foreach ($members as $member)
															<option value="{{ $member->id_anggota }}">{{$member->id_anggota}} - {{ $member->nama }}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="form-group row">
											<label for="id_buku" class="col-sm-2 col-form-label">Buku</label>
											<div class="col-sm-10">
												<select required class="form-control" id="idAnggota" name="id_buku">
													<option selected disabled>Pilih Buku</option>
													@foreach ($books as $book)
															<option value="{{ $book->id_buku }}">{{$book->id_buku}} - {{ $book->judul_buku }}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="form-group row">
											<label for="tanggalPinjam" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
											<div class="col-sm-10">
												<input required name="tanggal_pinjam" type="date" value="{{ $dateNow }}" min="{{ $dateNow }}" class="form-control" id="tanggalPinjam">
											</div>
										</div>

										<div class="form-group row">
											<label for="tanggalKembali" class="col-sm-2 col-form-label">Tanggal Kembali</label>
											<div class="col-sm-10">
												<input required name="tanggal_kembali" type="date" value="{{ $dateNextToSeventDay }}" min="{{ $dateNow }}" max="{{ $dateNextToSeventDay }}" class="form-control" id="tanggalKembali">
											</div>
										</div>

										<div class="row">
											<div class="col-sm-2"></div>
											<div class="col-sm-10">
												<button class="btn btn-sm btn-primary" type="submit"> Tambah </button>
												<a href="/home/borrowings" class="btn btn-sm btn-secondary" > Batal </a>
											</div>
										</div>
									</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
