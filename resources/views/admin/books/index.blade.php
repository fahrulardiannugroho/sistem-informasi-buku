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
											<a href="/home/books/add" class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Buku</a>

											<table class="table table-striped table-bordered" id="bookTable">
												<thead>
													<tr>
														<th scope="col">No</th>
														<th scope="col">Judul Buku</th>
														<th scope="col">Penulis</th>
														<th scope="col">Penerbit</th>
														<th scope="col">Stok</th>
														<th scope="col">Kategori</th>
														<th scope="col">Aksi</th>
													</tr>
												</thead>
												<tbody>
													@foreach($books as $index => $book)
														<tr>
																<td> {{ $index + 1 }}</td>
																<td> {{ $book->judul_buku }} </a> </td>
																<td> {{ $book->penulis }} </td>
																<td> {{ $book->penerbit }} </td>
																<td> {{ $book->stok_buku }}</td>
																<td> {{ $book->kategori }}</td>
																<td>
																	<div class="row">
																		<div class="col"><a class="btn btn-sm btn-outline-primary" href="{{ url("/home/book/show", $book->id_buku) }}"> Detail </a></div>
																		<div class="col"><a class="btn btn-sm btn-outline-dark" href="{{ url("/home/book/edit", $book->id_buku) }}"> Edit </a></div>
																		<div class="col">
																			<form method="POST" action="/home/book/{{$book->id_buku}}">
																				{{ method_field('DELETE') }}
																				{{ csrf_field() }}

																				<button onclick="return confirm('Hapus buku?')" type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
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
			$('#bookTable').DataTable();
		});
	</script>
@endsection
