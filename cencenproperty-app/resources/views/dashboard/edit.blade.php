@extends('dashboard.layouts.main')
@section('container')

<body>
        {{-- UPLOAD --}}
        <div class="container-fluid mt-5 mb-3">
          <div class="row ps-md-5">
            <div class="col-md-2">
              <h3 class="d-block">Edit</h3>
            </div>
          </div>
        </div>
        {{-- FORM Edit --}}
        <form action="/dashboard/posts/{{ $posts->id }}" method="POST" class="mb-5" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          {{-- sell/rent --}}
          <div class="container-fluid mb-3">
            <div class="row">
              <div class="col-md-2">
                <label for="sell_rent" class="col-form-label d-block ps-md-5">Sell/Rent</label>
              </div>
              <div class="col-md-5">
                <select class="form-select @error('sell_rent') is-invalid @enderror" id="sell_rent" name="sell_rent">
                  <option disabled >Choose...</option>
                  <option value="Sell"  @if($posts->sell_rent == 'Sell') selected @endif>Sell</option>
                  <option value="Rent"  @if($posts->sell_rent == 'Rent') selected @endif>Rent</option>
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
                  <option disabled>Choose...</option>
                  <option value="Rumah" @if($posts->property_type == 'Rumah') selected @endif>Rumah</option>
                  <option value="Apartemen" @if($posts->property_type == 'Apartemen') selected @endif>Apartemen</option>
                  <option value="Tanah" @if($posts->property_type == 'Tanah') selected @endif>Tanah</option>
                  <option value="Rumah Susun/ Townhouse" @if($posts->property_type == 'Rumah Susun/ Townhouse') selected @endif>Rumah Susun/ Townhouse</option>
                  <option value="Ruko" @if($posts->property_type == 'Ruko') selected @endif>Ruko</option>
                  <option value="Kios" @if($posts->property_type == 'Kios') selected @endif>Kios</option>
                  <option value="Kantor" @if($posts->property_type == 'Kantor') selected @endif>Kantor</option>
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
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $posts->title) }}">
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
                  <textarea class="form-control @error('description') is-invalid @enderror" rows="5" id="description" name="description" placeholder="Rumah ini adalah...">{{ old('description', $posts->description) }}</textarea>
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
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', $posts->address) }}">
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
                  <option disabled >Choose...</option>
                  <option value="Land Size" @if($posts->size_type == 'Land Size') selected @endif>Land Size</option>
                  <option value="Building Size" @if($posts->size_type == 'Building Size') selected @endif>Building Size</option>
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
                <input type="number" class="form-control @error('size') is-invalid @enderror" id="size" name="size" value="{{ old('size', $posts->size) }}">
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
                <input type="number" class="form-control @error('bedroom') is-invalid @enderror" id="bedroom" name="bedroom" value="{{ old('bedroom', $posts->bedroom) }}">
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
                <input type="number" class="form-control @error('additional_bedroom') is-invalid @enderror" id="additional_bedroom" name="additional_bedroom" value="{{ old('additional_bedroom', $posts->additional_bedroom) }}">
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
                <input type="number" class="form-control @error('bathroom') is-invalid @enderror" id="bathroom" name="bathroom" value="{{ old('bathroom', $posts->bathroom) }}">
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
                  <option disabled>Choose...</option>
                  <option value="Unfurnished" @if($posts->furniture_electronics == 'Unfurnished') selected @endif>Unfurnished</option>
                  <option value="Semi Furnished" @if($posts->furniture_electronics == 'Semi Furnished') selected @endif>Semi Furnished</option>
                  <option value="Fully Furnished" @if($posts->furniture_electronics == 'Fully Furnished') selected @endif>Fully Furnished</option>
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
                  <textarea class="form-control @error('facility') is-invalid @enderror" rows="5" id="facility" placeholder="&#8226 Gym..." name="facility">{{ old('facility', $posts->facility) }}</textarea>
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
                  <textarea class="form-control @error('located_near') is-invalid @enderror" rows="5" id="located_near" name="located_near" placeholder="&#8226 Supermal Karawaci...">{{ old('located_near', $posts->located_near) }}</textarea>
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
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $posts->price) }}">
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
                  <input type="hidden" name="oldImage" value="{{ $posts->image }}">
                  <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage()">
                  {{-- <img class="img-preview img-fluid mb-2 col-sm-5 px-0"> --}}
                </div>
                @if($posts->image)
                    <img src="{{ asset('storage/'.$posts->image) }}" class="img-preview img-fluid mb-2 col-sm-5 px-0 d-block mt-2">
                @else
                  <img class="img-preview img-fluid mt-2 col-sm-5 px-0">
                @endif
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
                    <button type="submit" class="btn btn-secondary">Edit</button>
                  </div>
              </div>
            </div>
          </div>
        </form>
</body>

@endsection