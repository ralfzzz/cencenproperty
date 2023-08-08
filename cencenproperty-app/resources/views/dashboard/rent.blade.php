@extends('dashboard.layouts.main')
@section('container')

        {{-- {{ dd($posts) }} --}}

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
            <div class="col-md-5 ps-0 pe-3 me-5 ms-2">
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

</body>
@endsection