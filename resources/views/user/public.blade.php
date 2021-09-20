@extends('layouts.userapp')

@section('styles')
<style>
	.book-title {
		color: #0589FF;
	}
	.book-title, .book-writter {
		overflow: hidden;
		display: -webkit-box;
		-webkit-line-clamp: 2;
		-webkit-box-orient: vertical;
	}
	.kategori-mobile {
		overflow-x: scroll;
		width: 100%;
	}

	::-webkit-scrollbar {
    display: none;
	}

	.active {
		background-color: #0589FF !important;
	}

	.floatingNav {
			/* border-bottom: 1px solid rgba(0, 0, 0, 0.2); */
	}

	@media only screen and (max-width: 767px) {
		.book-title {
			font-size: 1.2rem;
		}

		.book-title, .book-writter {
		overflow: hidden;
		display: -webkit-box;
		-webkit-line-clamp: 3;
		-webkit-box-orient: vertical;
		}
	}
</style>
@endsection

@section('content')
	<div class="container mt-4">
		<div class="row">

			<!-- kategori versi medium -->
			<div class="d-none d-md-block col-md-3">
					<ul class="nav flex-column nav-pills shadow-sm p-2">
						<li class="nav-item mb-1">
							<a class="nav-link {{  active('/') }}" href="/"> Semua Kategori </a>
						</li>

						@foreach($categories as $index => $category)
						<li class="nav-item mb-1">
							<a class="nav-link {{ active('category/'.$category->id_kategori) }}"  href="{{ url('/category', $category->id_kategori) }}"> {{ $category->kategori }} </a>
						</li>
						@endforeach
					</ul>
			</div>
			<div class="col-12 col-md-9">
				<img style="width: 100%;" src="{{ url('/images/banner.png') }}" alt="">

				<!-- kategori versi mobile -->
				<div class="col-12 d-md-none p-0 mt-4 bg-white">
					<div class="d-flex flex-row kategori-mobile">
					@if ($categoriescount != 0)
						<div class="badge mr-1 pl-0 pr-0">
							<a class="nav-link p-3 rounded {{ active_mobile('/') }}" href="/">Semua Kategori</a>
						</div>
						@foreach($categories as $index => $category)
						<div class="badge mr-1">
							<a class="nav-link p-3 rounded {{ active_mobile('category/'.$category->id_kategori) }}" href="{{ url('/category', $category->id_kategori) }}">{{ $category->kategori }}</a>
						</div>
						@endforeach
					@endif
					</div>
				</div>

				<div class="row mt-4">
					@if ($bookcount == 0 || $querycategories == 0)
					<div class="container">
						<div class="alert alert-primary" role="alert">
							Buku Tidak Tersedia
					</div>
					</div>
					@else
						@foreach($books as $index => $book)
						<div class="col-12 col-md-4">
							<div class="card shadow-sm border border-white">
								<div class="row p-2">
									<div class="col-4">
										<img style="width: 100%;" src="{{ url('/data_file/'.$book->gambar_buku) }}" class="card-img-top" alt="...">
									</div>
									<div class="col-8 pl-0">
										<div class="card-body p-0">
											<p class="card-text">
												<a class="book-title" href="{{ url("/book", $book->id_buku) }}" title="{{ $book->judul_buku }}">{{ $book->judul_buku }}</a>
												<small class="book-writter">Penulis: {{ $book->penulis }}</small>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					@endif
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
		<script>
			$(document).ready( function () {
				$(window).scroll(function() {
					if ($(window).scrollTop() > 10) {
							$('.kategori-mobile-container').addClass('floatingNav');
					} else {
							$('.kategori-mobile-container').removeClass('floatingNav');
					}
				});
			});
		</script>
@endsection