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
                <h5 class="mx-3 my-1"><a href="/dashboard" class="text-white text-decoration-none {{ $active }}">Upload</a></h5>
                <h5 class="mx-3 my-1"><a href="/dashboard2" class="text-decoration-none text-white">Edit</a></h5>
              <span class="navbar-text">
                <form action="/logout" method="post">
                  @csrf
                  <button class="btn btn-danger mx-3 my-1">Logout</button>
                </form>
              </span>
            </div>
          </div>
        </nav>

        {{-- UPLOAD --}}
        <div class="container-fluid mt-5 mb-3">
          <div class="row ps-md-5">
            <div class="col-md-2">
              <h3 class="d-block">Upload</h3>
            </div>
          </div>
        </div>
        <form action="" method="" class="mb-5">
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="inputTitle" class="col-form-label d-block ps-md-5">Title</label>
              </div>
              <div class="col-md-5">
                <input type="text" class="form-control" id="inputTitle">
              </div>
            </div>
          </div>
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="inputAddress" class="col-form-label d-block ps-md-5">Address</label>
              </div>
              <div class="col-md-5">
                <input type="text" class="form-control" id="inputAddress">
              </div>
            </div>
          </div>
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="inputSize" class="col-form-label d-block ps-md-5">Size</label>
              </div>
              <div class="col-md-5">
                <div class="input-group">
                <input type="text" class="form-control" id="inputSize">
                <span class="input-group-text bg-dark text-white">sqm</span>
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="inputBedroom" class="col-form-label d-block ps-md-5">Bedroom</label>
              </div>
              <div class="col-md-5">
                <select class="form-select" id="inputBedroom">
                  <option disabled selected>Choose...</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
            </div>
          </div>
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="inputBathroom" class="col-form-label d-block ps-md-5">Bathroom</label>
              </div>
              <div class="col-md-5">
                <select class="form-select" id="inputBathroom">
                  <option disabled selected>Choose...</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
            </div>
          </div>
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="inputBathroom" class="col-form-label d-block ps-md-5">Furniture & Electronics</label>
              </div>
              <div class="col-md-5">
                <select class="form-select" id="inputBathroom">
                  <option disabled selected>Choose...</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
              </div>
            </div>
          </div>
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="facility" class="col-form-label d-block ps-md-5">Facility</label>
              </div>
              <div class="col-md-5">
                <div class="input-group">
                  <textarea class="form-control" rows="5" id="facility" name="text" placeholder="&#8226 Gym..."></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="location" class="col-form-label d-block ps-md-5">Locate near</label>
              </div>
              <div class="col-md-5">
                <div class="input-group">
                  <textarea class="form-control" rows="5" id="location" name="text" placeholder="&#8226 Supermal Karawaci..."></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="inputPrice" class="col-form-label d-block ps-md-5">Price</label>
              </div>
              <div class="col-md-5">
                <div class="input-group">
                  <span class="input-group-text bg-dark text-white">IDR</span>
                <input type="text" class="form-control" id="inputPrice">
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="inputImage" class="col-form-label d-block ps-md-5">Image</label>
              </div>
              <div class="col-md-5">
                <div class="input-group">
                  <input type="file" class="form-control" id="inputImage">
                </div>
                <img class="img-preview img-fluid mb-2 col-sm-5 px-0">
              </div>
            </div>
          </div>
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
              </div>
              <div class="col-md-5">
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Upload</button>
                  </div>
              </div>
            </div>
          </div>
        </form>
</body>
  {{-- Bootstrap JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>