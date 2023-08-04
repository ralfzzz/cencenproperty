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
        {{-- FORM UPLOAD --}}
        <form action="/dashboard/posts" method="POST" class="mb-5" enctype="multipart/form-data">
          @csrf
          {{-- sell/rent --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="sell_rent" class="col-form-label d-block ps-md-5">Sell/Rent</label>
              </div>
              <div class="col-md-5">
                <select class="form-select @error('sell_rent') is-invalid @enderror" id="sell_rent" name="sell_rent">
                  <option disabled selected>Choose...</option>
                  <option value="Sell">Sell</option>
                  <option value="Rent">Rent</option>
                </select>
                @error('sell_rent')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
          {{-- property type --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="property_type" class="col-form-label d-block ps-md-5">Property Type</label>
              </div>
              <div class="col-md-5">
                <select class="form-select @error('property_type') is-invalid @enderror" id="property_type" name="property_type">
                  <option disabled selected>Choose...</option>
                  <option value="Rumah">Rumah</option>
                  <option value="Apartemen">Apartemen</option>
                  <option value="Tanah">Tanah</option>
                  <option value="Rumah Susun/ Townhouse">Rumah Susun/ Townhouse</option>
                  <option value="Ruko">Ruko</option>
                  <option value="Kios">Kios</option>
                  <option value="Kost">Kost</option>
                </select>
                @error('property_type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
          {{-- title --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="title" class="col-form-label d-block ps-md-5">Title</label>
              </div>
              <div class="col-md-5">
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
          {{-- deskripsi --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="description" class="col-form-label d-block ps-md-5">Description</label>
              </div>
              <div class="col-md-5">
                <div class="input-group">
                  <textarea class="form-control @error('description') is-invalid @enderror" rows="5" id="description" name="description" placeholder="Rumah ini adalah...">{{ old('description') }}</textarea>
                  @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
              </div>
            </div>
          </div>
          {{-- address --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="address" class="col-form-label d-block ps-md-5">Address</label>
              </div>
              <div class="col-md-5">
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}">
                @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
          {{-- size type --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="size_type" class="col-form-label d-block ps-md-5">Size Type</label>
              </div>
              <div class="col-md-5">
                <select class="form-select @error('size_type') is-invalid @enderror" id="size_type" name="size_type">
                  <option disabled selected>Choose...</option>
                  <option>Land Size</option>
                  <option>Building Size</option>
                </select>
                @error('size_type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
          {{-- size --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="size" class="col-form-label d-block ps-md-5">Size</label>
              </div>
              <div class="col-md-5">
                <div class="input-group">
                <input type="number" class="form-control @error('size') is-invalid @enderror" id="size" name="size" value="{{ old('size') }}">
                <span class="input-group-text bg-dark text-white">sqm</span>
                @error('size')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
              </div>
            </div>
          </div>
          {{-- bedroom --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="bedroom" class="col-form-label d-block ps-md-5">Bedroom</label>
              </div>
              <div class="col-md-5">
                <select class="form-select @error('bedroom') is-invalid @enderror" id="bedroom" name="bedroom">
                  <option disabled selected>Choose...</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
                @error('bedroom')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
          {{-- addtional bedroom --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="addtional_bedroom" class="col-form-label d-block ps-md-5">Addtional Bedroom</label>
              </div>
              <div class="col-md-5">
                <input type="number" class="form-control @error('additional_bedroom') is-invalid @enderror" id="additional_bedroom" name="additional_bedroom" value="{{ old('additional_bedroom') }}">
                @error('additional_bedroom')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
          {{-- bathroom --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="bathroom" class="col-form-label d-block ps-md-5">Bathroom</label>
              </div>
              <div class="col-md-5">
                <select class="form-select @error('bathroom') is-invalid @enderror" id="bathroom" name="bathroom">
                  <option disabled selected>Choose...</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                </select>
                @error('bathroom')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
          {{-- furniture --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="furniture_electronics" class="col-form-label d-block ps-md-5">Furniture & Electronics</label>
              </div>
              <div class="col-md-5">
                <select class="form-select @error('furniture_electronics') is-invalid @enderror" id="furniture_electronics" name="furniture_electronics">
                  <option disabled selected>Choose...</option>
                  <option>Unfurnished</option>
                  <option>Semi Furnished</option>
                  <option>Fully Furnished</option>
                </select>
                @error('furniture')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
          {{-- facility --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="facility" class="col-form-label d-block ps-md-5">Facility</label>
              </div>
              <div class="col-md-5">
                <div class="input-group">
                  <textarea class="form-control @error('facility') is-invalid @enderror" rows="5" id="facility" placeholder="&#8226 Gym..." name="facility">{{ old('facility') }}</textarea>
                  @error('facility')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
              </div>
            </div>
          </div>
          {{-- locate --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="located_near" class="col-form-label d-block ps-md-5">Located near</label>
              </div>
              <div class="col-md-5">
                <div class="input-group">
                  <textarea class="form-control @error('located_near') is-invalid @enderror" rows="5" id="located_near" name="located_near" placeholder="&#8226 Supermal Karawaci...">{{ old('located_near') }}</textarea>
                  @error('located_near')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
              </div>
            </div>
          </div>
          {{-- price --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="price" class="col-form-label d-block ps-md-5">Price</label>
              </div>
              <div class="col-md-5">
                <div class="input-group">
                  <span class="input-group-text bg-dark text-white">IDR</span>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}">
                @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
              </div>
            </div>
          </div>
          {{-- image --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="image" class="col-form-label d-block ps-md-5">Image</label>
              </div>
              <div class="col-md-5">
                <div class="input-group">
                  <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage()">
                  {{-- <img class="img-preview img-fluid mb-2 col-sm-5 px-0"> --}}
                </div>
                <img class="img-preview img-fluid mt-2 col-sm-5 px-0">
              </div>
            </div>
          </div>
          {{-- upload button --}}
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

        {{-- FOOTER --}}
          <footer style="background-color: rgba(0, 0, 0, 0.1)">
            <p class="text-md-end text-body-secondary text-white p-4 m-0">© 2023 Wepsait</p>
          </footer>
</body>
  {{-- Bootstrap JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script>
    function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function (oFREvent) {
                imgPreview.src=oFREvent.target.result;
            }
        }
  </script>
</html>