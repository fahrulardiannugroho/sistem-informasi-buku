@extends('layouts.adminapp')

@section('content')
	@section('content_header')
	<h1>Kelola Buku</h1>
	@endsection

	<div class="container">
			<div class="row justify-content-center">
					<div class="col">
							<div class="card">
									<div class="card-body">
											<a href="/home/borrowings/add" class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Peminjaman</a>

											<table class="table table-striped table-bordered" id="memberTable">
												<thead>
													<tr>
														<th scope="col">No</th>
														<th scope="col">Nama Anggota</th>
														<th scope="col">Judul Buku</th>
														<th scope="col">Tanggal Pinjam</th>
														<th scope="col">Tanggal Kembali</th>
														<th scope="col">Status Peminjaman</th>
														<th scope="col">Aksi</th>
													</tr>
												</thead>
												<tbody>
													@foreach($borrowings as $index => $borrowing)
														<tr>
																<td> {{ $index + 1 }}</td>
																<td> {{ $borrowing->nama }} </a> </td>
																<td> {{ $borrowing->judul_buku }} </td>
																<td> {{ $borrowing->tanggal_pinjam }} </td>
																<td> {{ $borrowing->tanggal_kembali }}</td>
																<td>
																	<!-- {{ $borrowing->status_peminjaman }} -->
																	{{ date('d-m-Y'); }}
																</td>
																<td>
																	<div class="row">
																		<div class="col"><a class="btn btn-sm btn-outline-primary" href="{{ url("/home/borrowing/show", $borrowing->id_peminjaman) }}"> Detail </a></div>
																		<div class="col"><a class="btn btn-sm btn-outline-dark" href="{{ url("/home/borrowing/edit", $borrowing->id_peminjaman) }}"> Perpanjang </a></div>
																		<div class="col">
																			<form method="POST" action="/home/borrowing/{{$borrowing->id_peminjaman}}">
																				{{ method_field('DELETE') }}
																				{{ csrf_field() }}

																				<!-- <button onclick="return confirm('Hapus buku?')" type="submit" class="btn btn-sm btn-success">Kembalikan</button> -->
																			</form>
																		</div>
																	</div>
																</td>
														</tr>
													@endforeach
												</tbody>
											</table>
									</div>
							</div>
					</div>
			</div>
	</div>
@endsection

@section('scripts')
	<script>
		$(document).ready( function () {
			$('#memberTable').DataTable();
		});
	</script>
@endsection
