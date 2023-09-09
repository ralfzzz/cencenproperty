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
<body class="page-container">
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
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-1 mb-5">
                <!--Card-->
                <!--Card Dijual-->
                <div class="col">
                    <div class="card h-100">
                        <img
                            src="/img/Cencen Property Logo (Sosmed).png"
                            class="card-img-top"
                            alt="..."
                        />
                        <!--Hot list-->
                        <div
                            class="card-img-overlay d-flex justify-content-end"
                        >
                            <p
                                class="badge bg-danger text-wrap"
                                style="
                                    color: white;
                                    font-size: 15px;
                                    height: 50px;
                                    width: 50px;
                                    border-radius: 50%;
                                    padding: 10px;
                                "
                            >
                                Hot List
                            </p>
                        </div>
                        <!--Hot list-->
                        <div class="dijual">
                            <div class="card-body py-1 h-100">
                                <div class="row d-flex">
                                    <p
                                        class="card-title mb-0"
                                        style="font-weight: bold; color: white"
                                    >
                                        Cencen Property
                                    </p>
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p
                                                class="card-text mb-0"
                                                style="
                                                    color: white;
                                                    font-size: 13px;
                                                "
                                            >
                                                Jakarta Pusat
                                            </p>
                                            <p
                                                class="badge bg-light text-wrap mb-0"
                                                style="font-size: 9px"
                                            >
                                                Rumah
                                            </p>
                                            <p
                                                class="badge bg-light text-wrap mb-2"
                                                style="font-size: 9px"
                                            >
                                                Furnished
                                            </p>
                                        </div>
                                        <div class="d-flex px-2">
                                            <div
                                                class="vertical-line"
                                                style="
                                                    border-right: 3px solid
                                                        white;
                                                    height: 80%;
                                                    margin-top: 6px;
                                                "
                                            ></div>
                                        </div>

                                        <div class="d-flex align-items-center">
                                            <p
                                                class="badge bg-light text-wrap p-2 py-3 mb-0"
                                                style="font-size: 13px"
                                            >
                                                Dijual
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dijual">
                            <div
                                class="card-body py-1"
                                style="background-color: white"
                            >
                                <p
                                    class="card-text pb-1"
                                    style="
                                        margin-bottom: 0;
                                        margin-top: 0;
                                        font-size: 13px;
                                    "
                                >
                                    Rp500.000.000,-
                                </p>
                                <div class="d-flex">
                                    <div class="pe-2">
                                        <p style="font-size: 12px">
                                            <i class="fa-solid fa-bed"></i> 1+1
                                        </p>
                                    </div>
                                    <div class="pe-2">
                                        <p style="font-size: 12px">
                                            <i class="fa-solid fa-bath"></i> 2
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Card Dijual-->
                <!--Card Disewa-->
                <div class="col">
                    <div class="card h-100">
                        <img
                            src="/img/Cencen Property Logo (Sosmed).png"
                            class="card-img-top"
                            alt="..."
                        />
                        <div class="disewa">
                            <div class="card-body py-1 h-100">
                                <div class="row d-flex">
                                    <p
                                        class="card-title mb-0"
                                        style="font-weight: bold; color: white"
                                    >
                                        Cencen Property
                                    </p>
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p
                                                class="card-text mb-0"
                                                style="
                                                    color: white;
                                                    font-size: 13px;
                                                "
                                            >
                                                Jakarta Pusat
                                            </p>
                                            <p
                                                class="badge bg-light text-wrap mb-0"
                                                style="font-size: 9px"
                                            >
                                                Apartemen
                                            </p>
                                            <p
                                                class="badge bg-light text-wrap mb-2"
                                                style="font-size: 9px"
                                            >
                                                Semi Furnished
                                            </p>
                                        </div>
                                        <div class="d-flex px-2">
                                            <div
                                                class="vertical-line"
                                                style="
                                                    border-right: 3px solid
                                                        white;
                                                    height: 80%;
                                                    margin-top: 6px;
                                                "
                                            ></div>
                                        </div>

                                        <div class="d-flex align-items-center">
                                            <p
                                                class="badge bg-light text-wrap p-2 py-3 mb-0"
                                                style="font-size: 13px"
                                            >
                                                Disewa
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="disewa">
                            <div
                                class="card-body py-1"
                                style="background-color: white"
                            >
                                <p
                                    class="card-text pb-1"
                                    style="
                                        margin-bottom: 0;
                                        margin-top: 0;
                                        font-size: 13px;
                                    "
                                >
                                    Rp500.000.000,-
                                </p>
                                <div class="d-flex">
                                    <div class="pe-2">
                                        <p style="font-size: 12px">
                                            <i class="fa-solid fa-bed"></i> 1+1
                                        </p>
                                    </div>
                                    <div class="pe-2">
                                        <p style="font-size: 12px">
                                            <i class="fa-solid fa-bath"></i> 2
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Card Disewa-->
                <!--Card Dijual-->
                <div class="col">
                    <div class="card h-100">
                        <img
                            src="/img/Cencen Property Logo (Sosmed).png"
                            class="card-img-top"
                            alt="..."
                        />
                        <!--Hot list-->
                        <div
                            class="card-img-overlay d-flex justify-content-end"
                        >
                            <p
                                class="badge bg-danger text-wrap"
                                style="
                                    color: white;
                                    font-size: 15px;
                                    height: 50px;
                                    width: 50px;
                                    border-radius: 50%;
                                    padding: 10px;
                                "
                            >
                                Hot List
                            </p>
                        </div>
                        <!--Hot list-->
                        <div class="dijual">
                            <div class="card-body py-1 h-100">
                                <div class="row d-flex">
                                    <p
                                        class="card-title mb-0"
                                        style="font-weight: bold; color: white"
                                    >
                                        Cencen Property
                                    </p>
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p
                                                class="card-text mb-0"
                                                style="
                                                    color: white;
                                                    font-size: 13px;
                                                "
                                            >
                                                Jakarta Pusat
                                            </p>
                                            <p
                                                class="badge bg-light text-wrap mb-0"
                                                style="font-size: 9px"
                                            >
                                                Rumah
                                            </p>
                                            <p
                                                class="badge bg-light text-wrap mb-2"
                                                style="font-size: 9px"
                                            >
                                                Furnished
                                            </p>
                                        </div>
                                        <div class="d-flex px-2">
                                            <div
                                                class="vertical-line"
                                                style="
                                                    border-right: 3px solid
                                                        white;
                                                    height: 80%;
                                                    margin-top: 6px;
                                                "
                                            ></div>
                                        </div>

                                        <div class="d-flex align-items-center">
                                            <p
                                                class="badge bg-light text-wrap p-2 py-3 mb-0"
                                                style="font-size: 13px"
                                            >
                                                Dijual
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dijual">
                            <div
                                class="card-body py-1"
                                style="background-color: white"
                            >
                                <p
                                    class="card-text pb-1"
                                    style="
                                        margin-bottom: 0;
                                        margin-top: 0;
                                        font-size: 13px;
                                    "
                                >
                                    Rp500.000.000,-
                                </p>
                                <div class="d-flex">
                                    <div class="pe-2">
                                        <p style="font-size: 12px">
                                            <i class="fa-solid fa-bed"></i> 1+1
                                        </p>
                                    </div>
                                    <div class="pe-2">
                                        <p style="font-size: 12px">
                                            <i class="fa-solid fa-bath"></i> 2
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Card Dijual-->
                <!--Card Disewa-->
                <div class="col">
                    <div class="card h-100">
                        <img
                            src="/img/Cencen Property Logo (Sosmed).png"
                            class="card-img-top"
                            alt="..."
                        />
                        <div class="disewa">
                            <div class="card-body py-1 h-100">
                                <div class="row d-flex">
                                    <p
                                        class="card-title mb-0"
                                        style="font-weight: bold; color: white"
                                    >
                                        Cencen Property
                                    </p>
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p
                                                class="card-text mb-0"
                                                style="
                                                    color: white;
                                                    font-size: 13px;
                                                "
                                            >
                                                Jakarta Pusat
                                            </p>
                                            <p
                                                class="badge bg-light text-wrap mb-0"
                                                style="font-size: 9px"
                                            >
                                                Apartemen
                                            </p>
                                            <p
                                                class="badge bg-light text-wrap mb-2"
                                                style="font-size: 9px"
                                            >
                                                Semi Furnished
                                            </p>
                                        </div>
                                        <div class="d-flex px-2">
                                            <div
                                                class="vertical-line"
                                                style="
                                                    border-right: 3px solid
                                                        white;
                                                    height: 80%;
                                                    margin-top: 6px;
                                                "
                                            ></div>
                                        </div>

                                        <div class="d-flex align-items-center">
                                            <p
                                                class="badge bg-light text-wrap p-2 py-3 mb-0"
                                                style="font-size: 13px"
                                            >
                                                Disewa
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="disewa">
                            <div
                                class="card-body py-1"
                                style="background-color: white"
                            >
                                <p
                                    class="card-text pb-1"
                                    style="
                                        margin-bottom: 0;
                                        margin-top: 0;
                                        font-size: 13px;
                                    "
                                >
                                    Rp500.000.000,-
                                </p>
                                <div class="d-flex">
                                    <div class="pe-2">
                                        <p style="font-size: 12px">
                                            <i class="fa-solid fa-bed"></i> 1+1
                                        </p>
                                    </div>
                                    <div class="pe-2">
                                        <p style="font-size: 12px">
                                            <i class="fa-solid fa-bath"></i> 2
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Card Disewa-->
                <!--Card-->
            </div>
        </div>
    </div>

    <!--Kategori-->
    <div class="container-fluid ps-5 fw-bold" style="font-family: Arial, Helvetica, sans-serif; font-size: 20px;">
        <p class="mt-4 ms-3 mb-4" style="color: #bc9c22">Kategori Pilihan Untukmu</p>
          <div id="Kategori" class="row mx-auto text-white text-center" style="flex-wrap: nowrap">
            <div class="col-md-3 ms-3 rounded-2" style="background-image: url(/img/apartement1.jpg);
            height:158px; width:500px">
            <p class="pt-5 mt-3">Apartemen</p>
              <div class="row pt-3">
                <div class="col-md-12 ms-0 mt-5 rounded-2" style="background-image: url(/img/apartement1.jpg); 
                height:158px; width:500px;">
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
      <div class="container-fluid px-0">
        <div class="Testimoni" style="background-image: url(/img/livroom.jpg); 
        background-size:100%; height:600px; width: 100%;">
          <div class="mask text-white fw-bold pt-5 ps-5" style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; 
          background-color: rgba(188, 157, 34, 0.70); height:100%; width:100%;">
          <p>Testimoni</p>
          <div class="container">
            <div class="row">
                <div class="col-md-3 p-0">
                    <div class="row-md-5 bg-primary">
                            <img class="img-fluid w-100" src="https://source.unsplash.com/200x200?home" alt="Card image" style="max-height: 270px;">
                    </div>
                    <div class="row-md-7 px-3 py-2" style="background-color: #BC9C22;"> 
                        <p class="my-0 text-white">Fadhil <br>CEO</p>
                    </div>
                </div>
                <div class="col-md-9 p-5 bg-white">
                    <p class="fs-6 text-align-justify my-auto mt-5" style="color: #BC9C22;"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                </div>
            </div></div>
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
<script
            src="https://kit.fontawesome.com/ef9fe87b9c.js"
            crossorigin="anonymous"
        ></script>
</html>