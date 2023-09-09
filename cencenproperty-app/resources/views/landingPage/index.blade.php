<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js” integrity=”sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/” crossorigin=”anonymous”></script>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/index.css">
</head>
<body class=" oveflow-hidden page-container">
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
            <img src="https://source.unsplash.com/200x200?home" alt="" id="property-card">
            <img src="https://source.unsplash.com/200x200?home" alt="" id="property-card">
            <img src="https://source.unsplash.com/200x200?home" alt="" id="property-card">
            <img src="https://source.unsplash.com/200x200?home" alt="" id="property-card">
            <img src="https://source.unsplash.com/200x200?home" alt="" id="property-card">
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>