<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LiveAt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="stylesheet" href="/css/index.css">
  </head>
  <body>
    <!-- NavBar -->
    <div class="shadow container-fluid">
    <nav class="navbar navbar-expand-xxxl navbar-light overflow-hidden" >
        <div class="container-fluid" style="justify-content: flex-end;">
            <a class="navbar-brand" href="#">
                <!-- Brand Logo -->
                <div id="crop">
                    <img src="/img/live_logo.png" alt="Live@" id="logo">
                </div>
            </a>
            <button class="btn btn-primary ms-auto buttongold" id="btn-titip">Titip Jual</button>
    
    <style type="text/css">
      a img {
        width: 46%;
        margin: 2px;
        margin-right: 0px;
        align-items: center;
      }
        </style>
    </head>
    <body>
        <!-- Button trigger modal -->
        <button
            type="button"
            class="btn p-2 "
            data-bs-toggle="modal"
            data-bs-target="#staticBackdrop"
            style="background-color: transparent"
            ;
        >
            <i
                class="fa-brands fa-instagram fa-2xl"
                style="color: #bc9c22"
            ></i>
        </button>

        <!-- Modal -->
        <div
            class="modal fade"
            id="staticBackdrop"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="staticBackdropLabel"
            aria-hidden="true"
        >
            <div
                class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
            >
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">
                            <i
                                class="fa-brands fa-instagram fa-bounce fa-lg"
                            ></i>
                            Cencen Property
                        </h1>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body" id="instafeed-container"></div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn"
                            data-bs-dismiss="modal"
                            style="background-color: #bc9c22; color: white"
                        >
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
        <script type="text/javascript">
            var userFeed = new Instafeed({
                get: "user",
                target: "instafeed-container",
                resolution: "low_resolution",
                accessToken:
                    "IGQWRPTk8xNUJXSjdQa3oxQmlXRjJLMnBqNDFkSDd0WFdlNVRNVUswQWNhOFJjUFdIdWFRTG1EOHNTSW15VTg5R2N4aXg5WHZAKMVFLRVNmNTh0Yl9sb3JMcFZADOUVLVC1IUzIybDZA6ZATVyaEVXOW84OE9GcDhFSmcZD",
            });
            userFeed.run();
        </script>

            <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse"
            data-bs-target="#toggleMobileMenu"
            aria-controls="toggleMobileMenu"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
            <span class="navbar-toggler-icon"> </span>
            </button>
            <div class="collapse navbar-collapse flex-grow-0" id="toggleMobileMenu">
                
                <ul class="navbar-nav ms-auto text-left">
                    <li>
                        <a href="#" class="nav-link">
                            Home
                        </a>
                    </li>
                </ul>
            </div>  
        </div>
       
    </nav>
    </div>

		<!-- Column -->
		<div class="container text-center">
		<div class="row align-items-start">
			<div class="col-md-7">
				<p class="container h1 text-start fw-bold">Cencen Property <span class="badge fw-normal fs-6 px-3 rounded-1" style="background-color: #BC9C22;">Dijual</span> <span class="badge fw-normal fs-6 px-3 rounded-1" style="background-color: #BC9C22;">Rumah</span></p>
				<div id="carouselExample" class="carousel slide my-3">
					<div class="carousel-inner rounded-3"  style="max-height: 300px;">
						<div class="carousel-item active">
							<img src="sss.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="aaa.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="types-of-homes-hero.jpg" class="d-block w-100" alt="...">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
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
						<p>Rp. 500 jt</p>
						<hr>
						<div class="row"> 
							<div class="col-md-3">
								<p style="color: #BC9C22">Kamar Tidur</p>
								<a><span class="fa fa-bed"></span> 2</a>
							</div>
							<div class="col-md-3">
								<p style="color: #BC9C22">Kamar Mandi</p>
								<a><span class="fa fa-bath"></span> 1</a>
							</div>
						</div>
						<hr>
						<div class="row"> 
							<div class="col-md-3">
								<p style="color: #BC9C22">Tipe</p>
								<p>Land Size</p>
							</div>
							<div class="col-md-3">
								<p style="color: #BC9C22">Luas</p>
								<p>150 sqm</p>
							</div>
						</div>
						<hr>
						<p style="color: #BC9C22">Tentang</p>
						<p class="text-align-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						
					</div>

					<div id="menu1" class="container tab-pane fade"><br>
							<li>Kolam renang</li>
							<li>Clubhouse</li>
							<li>Taman</li>
					</div>
					<div id="menu2" class="container tab-pane fade"><br>
						<div class="row align-items-start">
						<div class="col-md-5">
							<p style="color: #BC9C22">Alamat</p>
							<p>Jl. Gatot subroto</p>
						</div>

						<div class="col-md-5">
							<div id="map-container-google-1" class="container">
								<iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
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
				<img class="card-img-top mx-5 mt-2 mx-auto d-block" src="Karya_Seni_Tanpa_Judul 3_copy.png" alt="Card image" style="width:250px">
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

     <!-- Footer -->
     <footer class="container-fluid px-0 mt-3" style="background-image:url(https://source.unsplash.com/900x800?home); height: 400px; width: 100%;">
        <div class="mask text-white" style="background-color: rgba(89, 89, 89, 0.6); height:100%; width:100%;">
          <div class="container">
            <div class="row">
              <div class="col-md-5 mb-3" style="padding-top: 60px; font-family: Arial, Helvetica, sans-serif">
                <ul class="text-white px-0 text-decoration-underline fw-bold" style="font-size: 20px;">
                  <img src="/img/logo_white.png" alt="" style="width: 150px;">
                </ul>
                <p> 
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                </p>
              </div>
              <div class="col-md-1">
                <div class="vr mt-4 bg-light" style="height: 350px; min-width: 2px; margin-left: 35px;"></div>
              </div>
              <div class="col-md-6 mb-3" style="padding-top: 60px; font-family: Arial, Helvetica, sans-serif">
                <ul class="text-white px-0 text-decoration-underline fw-bold" style="font-size: 20px;">Contact Us</ul>
                <a><span class="fa fa-whatsapp me-2"></span>+62812345679</a></br>
                <a><span class="fa fa-envelope me-2"></span>liveat@gmail.com</a>
              </div>
            </div>
          </div>
        </div>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/ef9fe87b9c.js" crossorigin="anonymous"></script>

  
</body>
</html>