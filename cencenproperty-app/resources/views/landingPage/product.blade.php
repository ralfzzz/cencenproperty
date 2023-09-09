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
    <nav class="navbar navbar-expand-xxxl navbar-light overflow-hidden">
        <div class="container-fluid justify-content-space-around">
            <a class="navbar-brand" href="#">
                <!-- Brand Logo -->
                <div id="crop">
                    <img src="/img/live_logo.png" alt="Live@" id="logo">
                </div>
            </a>
            <button class="btn btn-primary ms-auto buttongold" id="btn-titip">Titip&Jual</button>
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
                            Testimoni
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">
                            About
                        </a>
                    </li>
                </ul>
            </div>  
        </div>   
    </nav>
  	<!-- Column -->
  	<div class="container text-center">
	  <div class="row align-items-start">
	    <div class="col-md-7">
	    	<p class="container h1 text-start fw-bold">Cencen Property <span class="badge fw-normal fs-6 px-3 rounded-1" style="background-color: #BC9C22;">Dijual</span> <span class="badge fw-normal fs-6 px-3 rounded-1" style="background-color: #BC9C22;">Rumah</span></p>
	    	<img src="https://source.unsplash.com/home" class="container rounded-2 my-4 object-fit-cover" style="max-height: 350px;">
	    	
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
			      	<a><span class="bi bi-water"></span> Kolam renang</a><br>
			      	<a><span class="bi bi-house-door-fill"></span> Clubhouse</a><br>
			      	<a><span class="bi bi-wifi"></span> Wifi</a>
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
      	<img class="card-img-top mx-5 mt-2 mx-auto d-block" src="https://source.unsplash.com/200x200?home" alt="Card image" style="width:250px">
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
<footer class="text-white text-center text-lg-start" style="background-image:url(https://source.unsplash.com/800x800?home);">
        <div class="container p-4">
          <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h5 class="text-uppercase">Footer Content</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                voluptatem veniam, est atque cumque eum delectus sint!
              </p>
            </div>
  
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0 ps-5">
              <h5 class="text-uppercase mb-0">Links</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="#!" class="text-white">Link 1</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 2</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 3</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 4</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  
</body>
</html>