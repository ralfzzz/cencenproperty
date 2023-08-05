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
        {{-- {{ dd($posts) }} --}}
        {{-- NAVBAR --}}
        <nav class="navbar navbar-expand-lg bg-dark shadow sticky-top pe-3">
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
                <h5 class="mx-3 my-1"><a href="/dashboard2" class="text-decoration-none text-white {{ $active }}">Edit</a></h5>
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
            <div class="col-md-4 gap-2 d-flex px-0 justify-content-end">
              <form action="">
                <button class="btn btn-primary">Sell</button>
              </form>
              <form action="">
                <button class="btn btn-primary">Rent</button>
              </form>
            </div>
            <div class="col-md-5 ps-0 pe-3 me-5">
                <form action="">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                  <button class="btn btn-primary" type="submit" id="editSearch">Search</button>
                </div>
              </form>
              </div>
          </div>
        </div>
        @if(session()->has('success'))
        <div class="container-fluid">
          <div class="row ps-md-5 me-md-1">
            <div class="col-md-7 pe-md-4">
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            </div>
          </div>
        </div>
        @endif
        @foreach($posts as $post)
        <div class="container-fluid mb-3">
          <div class="row">
            <div class="col-md-1 ms-md-5 me-md-5 p-0">
              <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid object-fit-cover rounded" alt="image house" style="max-width: 180px">
            </div>
            <div class="col-md-9 border border-3 rounded px-3 py-2 ms-md-4">
              <h6>{{ $post->title }} <span class="badge bg-light text-bg-light border border-dark">{{ $post->sell_rent }}</span> <span class="badge bg-light text-bg-light border border-dark">{{ $post->property_type }}</span></h6>
              <h6 class="p-0 m-0">IDR. {{ $post->price }}</h6>
              <p class="p-0 m-0">{{ $post->size_type }} | <small>{{ $post->size }} sqm</small></p>
              <p class="p-0 m-0"><i class="bi bi-bricks"></i> {{ $post->bedroom }}+{{ $post->additional_bedroom }}</p>
              <p class="p-0 mb-0"><i class="bi bi-bricks"></i> {{ $post->bathroom }}</p>
              <div class="d-flex inline-flex gap-2">
                <button class="btn btn-primary btn-sm mt-1" type="submit"><a href="/dashboard/posts/{{ $post->id }}/edit" class="text-decoration-none text-white">Edit</a></button>
                <form action="/dashboard/posts/{{ $post->id }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm mt-1 text-decoration-none text-white" type="submit">Delete</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        @endforeach


        {{-- FOOTER --}}
        <footer style="background-color: rgba(0, 0, 0, 0.1)" class="mb-0 mt-3">
          <p class="text-md-end text-body-secondary text-white p-4 m-0">© 2023 Wepsait</p>
        </footer>
</body>
  {{-- Bootstrap JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>