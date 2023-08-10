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
              <form action="/dashboard2">
                <button class="btn btn-secondary"><strong>All Posts</strong></button>
              </form>
              <form action="/dashboard/posts/sell">
                <button class="btn btn-secondary"><strong>Sell</strong></button>
              </form>
              <form action="/dashboard/posts/rent">
                <button class="btn btn-secondary" type="submit"><strong>Rent</strong></button>
              </form>
            </div>
            <div class="col-md-5 ps-0 pe-3 me-5 ms-2">
                <form action="/dashboard/posts/search">
                <div class="input-group mb-3">
                  <input name="search" type="text" class="form-control" placeholder="Search Title or Description..." aria-describedby="button-addon2" value="{{ request('search') }}">
                  <input type="hidden" name="sell_rent_category" value="{{ $sell_rent }}">
                  <button class="btn btn-secondary" type="submit" id="search"><i class="fa-solid fa-magnifying-glass"></i></button>
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
@if($posts->count() >= 1)
        @foreach($posts as $post)
        <div class="container-fluid mb-3">
          <div class="row">
            <div class="col-md-1 ms-md-5 me-md-5 p-0">
              @if($post->image)
                <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid object-fit-cover rounded" alt="image house" style="max-width: 180px">
              @else
                <img src="https://source.unsplash.com/200x200?home" class="img-fluid object-fit-cover rounded" alt="image house" style="max-width: 180px">
              @endif
            </div>
            <div class="col-md-9 border border-3 rounded px-3 py-2 ms-md-4">
              @if($post->sell_rent == 'Sell')
              <h6>{{ $post->title }} <span class="badge text-bg-warning">{{ $post->sell_rent }}</span> <span class="badge bg-light text-bg-light border border-dark">{{ $post->property_type }}</span></h6>
              @else
              <h6>{{ $post->title }} <span class="badge text-bg-primary">{{ $post->sell_rent }}</span> <span class="badge bg-light text-bg-light border border-dark">{{ $post->property_type }}</span></h6>
              @endif
              <h6 class="p-0 m-0">IDR. {{ $post->price }}</h6>
              <p class="p-0 m-0">{{ $post->size_type }} | <small>{{ $post->size }} sqm</small></p>
              <p class="p-0 m-0"><i class="fa-solid fa-bed"></i> {{ $post->bedroom }}+{{ $post->additional_bedroom }}</p>
              <p class="p-0 mb-0"><i class="fa-solid fa-bath fa-lg"></i> {{ $post->bathroom }}</p>
              <div class="d-flex inline-flex gap-2">
                <button class="btn btn-primary btn-sm mt-1" type="submit"><a href="/dashboard/posts/{{ $post->id }}/edit" class="text-decoration-none text-white"><i class="fa-solid fa-pen-to-square"></i></a></button>
                <form action="/dashboard/posts/{{ $post->id }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm mt-1 text-decoration-none text-white" type="submit"><i class="fa-solid fa-trash-can"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
        @endforeach

@else
<div class="container-fluid mt-5">
<div class="row d-flex justify-content-center align-items-center" id="nothing-found">
  <div class="col-md-6">
    <div class="alert alert-warning text-center" role="alert">
      Nothing Found!
    </div>
  </div>
</div>
</div>
@endif
@endsection