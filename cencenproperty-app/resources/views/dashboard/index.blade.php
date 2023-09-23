
@extends('dashboard.layouts.main')
@section('container')
        
        {{-- UPLOAD --}}
        <div class="container-fluid mt-5 mb-3">
          <div class="row ps-md-5">
            <div class="col-md-2">
              <h3 class="d-block">Upload</h3>
            </div>
          </div>
        </div>
        {{-- @if(session()->has('success'))
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
        @endif --}}
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
                  <option value="Dijual">Dijual</option>
                  <option value="Disewa">Disewa</option>
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
                  <option value="Kos">Kos</option>
                  <option value="Ruko">Ruko</option>
                  <option value="Kios">Kios</option>
                  <option value="Kantor">Kantor</option>
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
          {{-- kota/kabupaten --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="kota_kabpaten" class="col-form-label d-block ps-md-5">Kota/Kabupaten</label>
              </div>
              <div class="col-md-5">
                <input type="text" class="form-control @error('kota_kabupaten') is-invalid @enderror" id="kota_kabupaten" name="kota_kabupaten" value="{{ old('kota_kabupaten') }}">
                @error('kota_kabupaten')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
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
                <input type="number" class="form-control @error('bedroom') is-invalid @enderror" id="bedroom" name="bedroom" value="{{ old('bedroom') }}">
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
                <input type="number" class="form-control @error('bathroom') is-invalid @enderror" id="bathroom" name="bathroom" value="{{ old('bathroom') }}">
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
          <div class="container-fluid mb-4">
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
          {{-- image1 --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="image" class="col-form-label d-block ps-md-5">Image</label>
              </div>
              <div class="col-md-5">
                <div class="input-group mb-1">
                  <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage()">
                  {{-- <img class="img-preview img-fluid mb-2 col-sm-5 px-0"> --}}
                </div>
                <img class="img-preview img-fluid mt-2 col-sm-5 px-0 " style="max-width: 180px; max-height: 180px;">
                {{-- <img class="img-preview img-fluid object-fit-cover img-thumbnail" style="max-width: 180px; max-height: 180px; min-width: 180px; min-height: 180px"> --}}
              </div>
            </div>
          </div>
          {{-- image2 --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="image2" class="col-form-label d-block ps-md-5">Image</label>
              </div>
              <div class="col-md-5">
                <div class="input-group mb-1">
                  <input type="file" class="form-control @error('image2') is-invalid @enderror" id="image2" name="image2" onchange="previewImage2()">
                  {{-- <img class="img-preview img-fluid mb-2 col-sm-5 px-0"> --}}
                </div>
                <img class="img-preview img-fluid mt-2 col-sm-5 px-0 image2" style="max-width: 180px; max-height: 180px;">
                {{-- <img class="img-preview img-fluid object-fit-cover img-thumbnail" style="max-width: 180px; max-height: 180px; min-width: 180px; min-height: 180px"> --}}
              </div>
            </div>
          </div>
          {{-- image3 --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="image3" class="col-form-label d-block ps-md-5">Image</label>
              </div>
              <div class="col-md-5">
                <div class="input-group mb-1">
                  <input type="file" class="form-control @error('image3') is-invalid @enderror" id="image3" name="image3" onchange="previewImage3()">
                  {{-- <img class="img-preview img-fluid mb-2 col-sm-5 px-0"> --}}
                </div>
                <img class="img-preview img-fluid mt-2 col-sm-5 px-0 image3" style="max-width: 180px; max-height: 180px;">
                {{-- <img class="img-preview img-fluid object-fit-cover img-thumbnail" style="max-width: 180px; max-height: 180px; min-width: 180px; min-height: 180px"> --}}
              </div>
            </div>
          </div>
          {{-- image4 --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="image4" class="col-form-label d-block ps-md-5">Image</label>
              </div>
              <div class="col-md-5">
                <div class="input-group mb-1">
                  <input type="file" class="form-control @error('image4') is-invalid @enderror" id="image4" name="image4" onchange="previewImage4()">
                  {{-- <img class="img-preview img-fluid mb-2 col-sm-5 px-0"> --}}
                </div>
                <img class="img-preview img-fluid mt-2 col-sm-5 px-0 image4" style="max-width: 180px; max-height: 180px;">
                {{-- <img class="img-preview img-fluid object-fit-cover img-thumbnail" style="max-width: 180px; max-height: 180px; min-width: 180px; min-height: 180px"> --}}
              </div>
            </div>
          </div>
          {{-- image5 --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="image4" class="col-form-label d-block ps-md-5">Image</label>
              </div>
              <div class="col-md-5">
                <div class="input-group mb-1">
                  <input type="file" class="form-control @error('image5') is-invalid @enderror" id="image5" name="image5" onchange="previewImage5()">
                  {{-- <img class="img-preview img-fluid mb-2 col-sm-5 px-0"> --}}
                </div>
                <img class="img-preview img-fluid mt-2 col-sm-5 px-0 image5" style="max-width: 180px; max-height: 180px;">
                {{-- <img class="img-preview img-fluid object-fit-cover img-thumbnail" style="max-width: 180px; max-height: 180px; min-width: 180px; min-height: 180px"> --}}
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
                    <button type="submit" class="btn btn-secondary"><strong class="text-white">Upload</strong></button>
                  </div>
              </div>
            </div>
          </div>
        </form>

@endsection