@extends('landingPage.layouts.main')
@section('container')


    </div>
		<!-- Column -->
		<div class="container text-center">
		<div class="row align-items-start">
			<div class="col-md-7">
				<p class="container h1 text-start fw-bold">Cencen Property <span class="badge fw-normal fs-6 px-3 rounded-1" style="background-color: #BC9C22;">Dijual</span> <span class="badge fw-normal fs-6 px-3 rounded-1" style="background-color: #BC9C22;">Rumah</span></p>
				<div id="carouselHero" class="carousel slide" data-bs-ride="carousel">
				  <div class="carousel-inner rounded-3">
				  	@if($post[0]->image)
				    <div class="carousel-item active"><img src="{{ asset('storage/'.$post[0]->image) }}" class="d-block w-100"></div>
					@endif
					@if($post[0]->image2)
				    <div class="carousel-item"><img src="{{ asset('storage/'.$post[0]->image2) }}" class="d-block w-100">
					@endif
					@if($post[0]->image3)
				    <div class="carousel-item"><img src="{{ asset('storage/'.$post[0]->image3) }}" class="d-block w-100">
					@endif
				</div>
				</div> 
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselHero" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselHero" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>

						
			<div class="container">
				<!-- Nav tabs -->
				<ul class="nav nav-underline" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#home" style="color: #BC9C22;">Deskripsi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#menu1" style="color: #BC9C22;">Fasilitas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#menu2" style="color: #BC9C22;">Lokasi</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content text-start">
					<div id="home" class="container tab-pane active"><br>
						<p style="color: #BC9C22">Harga</p>
						<p>{{ $post[0]->price }}</p>
						<hr>
						<div class="row"> 
							<div class="col-md-3">
								<p style="color: #BC9C22">Kamar Tidur</p>
								<a><span class="fa fa-bed"></span> {{ $post[0]->bedroom }}+{{ $post[0]->additional_bedroom }}</a>
							</div>
							<div class="col-md-3">
								<p style="color: #BC9C22">Kamar Mandi</p>
								<a><span class="fa fa-bath"></span> {{ $post[0]->bathroom }}</a>
							</div>
						</div>
						<hr>
						<div class="row"> 
							<div class="col-md-3">
								<p style="color: #BC9C22">Tipe</p>
								<p>{{ $post[0]->size_type }}</p>
							</div>
							<div class="col-md-3">
								<p style="color: #BC9C22">Luas</p>
								<p>{{ $post[0]->size }} sqm</p>
							</div>
						</div>
						<hr>
						<p style="color: #BC9C22">Tentang</p>
						<p class="text-align-justify">{{ $post[0]->description }}</p>
						
					</div>

					<div id="menu1" class="container tab-pane fade"><br>
                        @foreach(preg_split('/[,\\n]/', $post[0]->facility) as $value) 
                        <li>{{ $value }}</li>
                        @endforeach
					</div>
					<div id="menu2" class="container tab-pane fade"><br>
						<div class="row align-items-start">
						<div class="col-md-5">
							<p style="color: #BC9C22">Alamat</p>
							<p>{{ $post[0]->address }}</p>
						</div>

						<div class="col-md-5">
							<div id="map-container-google-1" class="container">
								<iframe src="https://maps.google.com/maps?q={{ $post[0]->address }}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
									style="border:0" class="w-100" allowfullscreen class="mx-0"></iframe>
							</div>
						</div>
						</div>

					</div>
				</div>
			</div>

		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane container active" id="home"></div>
			<div class="tab-pane container fade" id="menu1"></div>
			<div class="tab-pane container fade" id="menu2"></div>
		</div>
		</div>
		<div class="col-md-5 sticky-top container-md">
			<div class="card mt-3">
				<img class="card-img-top mx-5 mt-2 mx-auto d-block" src="https://source.unsplash.com/900x800?home" alt="Card image" style="width:250px">
				<div class="card-body">
					<div class="row d-flex justify-content-center">
						<div class="col-md-5 d-grid">
							<button type="button" class="btn text-white mb-2" style="background-color: #BC9C22;"> <i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp</button>
						</div>
						<div class="col-md-5 d-grid">
							<button type="button" class="btn text-white mb-2" style="background-color: #BC9C22;"><i class="fa fa-phone" aria-hidden="true"></i> Phone</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>

@endsection