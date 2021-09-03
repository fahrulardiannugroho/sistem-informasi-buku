@extends('layouts.adminapp')

@section('content')
	@section('content_header')
	<h1>Kelola Anggota</h1>
	@endsection

	<div class="container">
			<div class="row justify-content-center">
					<div class="col">
							<div class="card">
									<div class="card-body">
											<a href="/home/members/add" class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Anggota</a>

											<table class="table table-striped table-bordered" id="memberTable">
												<thead>
													<tr>
														<th scope="col">No</th>
														<th scope="col">Nama</th>
														<th scope="col">Status Anggota</th>
														<th scope="col">Alamat</th>
														<th scope="col">Nomor HP</th>
														<th scope="col">Aksi</th>
													</tr>
												</thead>
												<tbody>
													@foreach($members as $index => $member)
														<tr>
																<td> {{ $index + 1 }}</td>
																<td> {{ $member->nama }} </a> </td>
																<td> {{ $member->status_anggota }} </td>
																<td> {{ $member->alamat }} </td>
																<td> {{ $member->nomor_hp }}</td>
																<td>
																	<div class="row">
																		<div class="col"><a class="btn btn-sm btn-outline-primary" href="{{ url("/home/member/show", $member->id_anggota) }}"> Detail </a></div>
																		<div class="col"><a class="btn btn-sm btn-outline-dark" href="{{ url("/home/member/edit", $member->id_anggota) }}"> Edit </a></div>
																		<div class="col">
																			<form method="POST" action="/home/member/{{$member->id_anggota}}">
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
			$('#memberTable').DataTable();
		});
	</script>
@endsection