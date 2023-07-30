<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- Bootstrap CSS --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  {{-- Main CSS --}}
  <link rel="stylesheet" href="./css/styles.css">

  {{-- Bootstrap Icons --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <title>{{ $title }}</title>
</head>
<body>
        {{-- NAVBAR --}}
        <nav class="navbar navbar-expand-lg bg-dark shadow sticky-top">
          <div class="container-fluid px-0">
            <div class="col-md-2 d-flex justify-content-center">
              <a class="navbar-brand mx-auto" href="#"><img src="./img/logo_white.png" alt="white logo"></a>
            </div>
            <button class="navbar-toggler navbar-light bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-3">
                <li class="nav-item">
                  <h5 class="text-white mb-0">Welcome, {{ auth()->user()->name }}</h5>
                </li>
              </ul>
                <h5 class="mx-3 my-1"><a href="/dashboard" class="text-white text-decoration-none">Upload</a></h5>
                <h5 class="mx-3 my-1"><a href="/edit" class="text-decoration-none text-white {{ $active }}">Edit</a></h5>
              <span class="navbar-text">
                <form action="/logout" method="post">
                  @csrf
                  <button class="btn btn-danger mx-3 my-1">Logout</button>
                </form>
              </span>
            </div>
          </div>
        </nav>

        {{-- EDIT VIEW --}}
        <div class="container-fluid mt-5 mb-3">
          <div class="row ps-md-5">
            <div class="col-md-2">
              <h3 class="d-block">Edit</h3>
            </div>
          </div>
        </div>
        <div class="container-fluid mb-3">
          <div class="row">
            <div class="col-md-2">
              <img src="https://source.unsplash.com/200x200?house" class="img-fluid ms-md-5 rounded" alt="image house">
            </div>
            <div class="col-md-5 border border-3 rounded px-3 py-2 ms-md-3">
              <h6>Title</h6>
              <h6 class="p-0 m-0">IDR. 4.500.000,00</h6>
              <p class="p-0 m-0"><small>150 sqm</small></p>
              <p class="p-0 m-0"><i class="bi bi-bricks"></i>2</p>
              <p class="p-0 mb-0"><i class="bi bi-bricks"></i>1</p>
              <button class="btn btn-primary btn-sm mt-1"><a href="/edit" class="text-decoration-none text-white">Edit</a></button>
              <button class="btn btn-danger btn-sm mt-1"><a href="/delete" class="text-decoration-none text-white">Delete</a></button>
            </div>
          </div>
        </div>
        <div class="container-fluid mb-3">
          <div class="row">
            <div class="col-md-2">
              <img src="https://source.unsplash.com/200x200?home" class="img-fluid ms-md-5 rounded" alt="image house">
            </div>
            <div class="col-md-5 border border-3 rounded px-3 py-2 ms-md-3">
              <h6>Title</h6>
              <h6 class="p-0 m-0">IDR. 4.500.000,00</h6>
              <p class="p-0 m-0"><small>150 sqm</small></p>
              <p class="p-0 m-0"><i class="bi bi-bricks"></i>2</p>
              <p class="p-0 mb-0"><i class="bi bi-bricks"></i>1</p>
              <button class="btn btn-primary btn-sm mt-1"><a href="/edit" class="text-decoration-none text-white">Edit</a></button>
              <button class="btn btn-danger btn-sm mt-1"><a href="/delete" class="text-decoration-none text-white">Delete</a></button>
            </div>
          </div>
        </div>
</body>
  {{-- Bootstrap JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>