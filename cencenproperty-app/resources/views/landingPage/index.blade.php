<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js” integrity=”sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/” crossorigin=”anonymous”></script>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/index.css">
</head>
<body class=" overflow-hidden page-container">
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
    <!-- Search Bar -->
    <div id="search-bar" class="container-fluid">
        <div id="search-box" class="container">
            <div class="container"  id="title-bar">
                <h1>Cari Properti Anda</h1>
            </div>
            <div class="text-center" id="search-content">
                <div class="col-wrapper" id="sewa-beli-container">
                    <button class="btn btn-primary buttongold" type="submit" id="sewa-beli-btn">Sewa</button>
                    <button class="btn btn-primary buttongold" type="submit" id="sewa-beli-btn">Beli</button>
                </div>
                <div class="input-group col-wrapper">
                    <input type="text" class="form-control" id="search-input" placeholder="Search Anything" >
                </div>
                <span>
                    <hr>
                </span>
                <div class="row align-items-center col-wrapper" id="dropdown-filter-container" >
                    <div class="col dropdown" id="dropdown-filter">
                        <label class="form-label">Lokasi</label>
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="filter-menu">
                        Cari
                        </button>
                        <ul class="dropdown-menu">
                            <li><h6 class="dropdown-header">Dropdown header</h6></li>
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <div class="col dropdown" id="dropdown-filter">
                        <label class="form-label">Tipe</label>
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="filter-menu">
                            Cari
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>                            
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <div class="col dropdown" id="dropdown-filter">
                        <label class="form-label">Furnishing</label>
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="filter-menu">
                            Cari
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-wrapper" id="btn-container">
                <button class="btn btn-primary buttongold" type="submit" id="search-button">Search</button>
            </div>
            
        </div>
    </div>
    <!-- Properti Terbaru -->
    <div class="container-fluid" id="new-property">
        <div class="container"  id="section-title">
            <h1>Properti Terbaru</h1>
        </div>
        <div class="container" id="new-list">
            <img src="https://source.unsplash.com/400x400?home" alt="" id="property-card">
            <img src="https://source.unsplash.com/400x400?home" alt="" id="property-card">
            <img src="https://source.unsplash.com/400x400?home" alt="" id="property-card">
            <img src="https://source.unsplash.com/400x400?home" alt="" id="property-card">
            <img src="https://source.unsplash.com/400x400?home" alt="" id="property-card">
        </div>
    </div>

    <!--Kategori-->
    <div class="container-fluid ps-5 fw-bold" style="font-family: Arial, Helvetica, sans-serif; font-size: 20px;">
        <p class="mt-4 ms-3 mb-4" style="color: #bc9c22">Kategori Pilihan Untukmu</p>
          <div id="Kategori" class="row mx-auto text-white text-center">
            <div class="col-md-3 ms-3 rounded-2" style="background-image: url(/img/apartement1.jpg);
            height:158px; width:350px">
            <p class="pt-5 mt-3">Apartemen</p>
              <div class="row pt-3">
                <div class="col-md-12 ms-0 mt-5 rounded-2" style="background-image: url(/img/apartement1.jpg); 
                height:158px; width:350px;">
                <p class="pt-3 mt-5">Rumah</p>
                </div>
              </div>
            </div>
  
            <div class="col-md-3 ms-3 pt-5 rounded-2" style="background-image: url(/img/apartement1.jpg); 
            height: 333px; width: 161px;">
            <p class="pt-5 mt-5">Ruko</p>
            </div>
            
            <div class="col-md-3 ms-3 pt-5 rounded-2" style="background-image: url(/img/apartement1.jpg); 
            height: 333px; width: 161px;">
            <p class="pt-5 mt-5">Kost</p>
            </div>
  
            <div class="col-md-3 ms-3 rounded-2" style="background-image: url(/img/apartement1.jpg); 
            height:99px; width:505px;">
            <p class="pt-3 mt-3">Kios</p>
              <div class="row pt-4">
                <div class="col-md-6 ms-0 mt-3 rounded-2" style="background-image: url(/img/apartement1.jpg); 
                height:99px; width:525px;">
                <p class="pt-3 mt-3">Tanah</p>
                </div>
                <div class="col-md-12 ms-0 mt-3 rounded-2" style="background-image: url(/img/apartement1.jpg); 
                height:99px; width:525px;">
                <p class="pt-4 mt-2">Kantor</p>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  
      <!--Testimoni-->
    <div id="carouselExampleIndicators" class="carousel slide pt-5" data-bs-ride="carousel">
      <div class="container-fluid">
        <div class="Testimoni" style="background-image: url(/img/livroom.jpg); 
        background-size:100%; height:600px; width: 1335px;">
          <div class="mask text-white fw-bold pt-5 ps-5" style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; 
          background-color: rgba(188, 157, 34, 0.70); height:100%; width:100%;">Testimoni</div>
        </div>
  
        <div class="carousel-item">
          <div class="card mb-3" style="max-width: 540px; background-color: white;">
            <div class="row">
              <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
            style="width: 125px;"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
            style="width: 125px;"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
            style="width: 125px;"
          ></button>
        </div>
      </div>
    </div>
  
      
      <!--Pertanyaan-->
      <div class="container pt-5 mt-5 mb-5" style="font-family: Arial, Helvetica, sans-serif; 
      color: #bc9c22; width:600px">
        <h4 class="fw-bold text-center" style="font-size: 20px">Ajukan Pertanyaan</h4>
        <form action="/action_page.php">
          <div class="mb-3 mt-4">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="mb-3 mt-4">
            <label for="pertantyaan">Pertanyaan</label>
            <textarea class="form-control" rows="6 " id="pertanyaan" name="text"></textarea>
          </div>
          <div style="text-align-last:right">
            <button type="submit" class="btn text-white mb-5 " style="background-color: #bc9c22;">Submit</button>
          </div>
        </form>
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
</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="/js/owl.carousel.min.js"></script>
</html>