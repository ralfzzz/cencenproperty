@extends('landingPage.layouts.main')
@section('container')
  

    <div class="container">
      <!--Seacrh bar-->
      <nav class="navbar my-5">
        <div class="container-fluid p-0">
          <form class="d-flex" role="search" action="/search" method="get">
            <input type="hidden" name="category" value="{{ $label }}">
            <input
              class="form-control"
              type="search"
              placeholder="Cari"
              aria-label="Cari"
              style="
                border-color: #bc9c22;
                border-bottom-right-radius: 0;
                border-top-right-radius: 0;
              "
              name="search"
              id="search"
              value="{{ request('search') }}"
            />
            <button
              class="btn"
              type="submit"
              style="
                background-color: #bc9c22;
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
              "
            >
              <i class="fa-solid fa-magnifying-glass" style="color: white"></i>
            </button>
          </form>
        </div>
      </nav>
  
      <!--Seacrh bar-->

      <!--Kategori-->
      <div class="align-items-start mb-3">
        <p
          class="badge bg text-wrap p-4 py-3 mb-0"
          style="font-size: 15px; background-color: #366ace"
        >
          {{ $label }}
        </p>
      </div>
      <!--Kategori-->

      <!--Card-->
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3 mb-4">
        <!--Card Dijual-->
        @if($posts->count() >= 1)
        @foreach($posts as $post)
        <div class="item">
          <div class="card h-100">
            @if($post->image)
            <img
            src="{{ asset('storage/'.$post->image) }}"
            class="img-fluid object-fit-scale"
            style="height: 300px; min-height: 300px"
          />
            @else
              <img src="https://source.unsplash.com/200x200?home" class="img-fluid object-fit-fill" style="height: 300px; min-height: 300px" alt="image house">
            @endif
            @if($post->hot_list == "Yes")  
            <!--Hot list-->
            <div class="card-img-overlay d-flex justify-content-end">
              <p
                class="badge bg-danger text-wrap"
                style="
                  color: white;
                  font-size: 20px;
                  height: 70px;
                  width: 70px;
                  border-radius: 50%;

                  padding: 15px;
                "
              >
                Hot List
              </p>
            </div>
            <!--Hot list-->
            @endif
            @if($post->sell_rent == 'Dijual')
              <div class="dijual">
            @else
              <div class="disewa">
            @endif
              <div class="card-body py-1 h-100">
                <div class="row d-flex">
                  <a href="/post?id={{ $post->id }}" class="stretched-link text-decoration-none">
                  <p
                    class="card-title mb-0"
                    style="font-weight: bold; color: white"
                  >
                    {{ $post->title }}
                  </p>
                  </a>
                  <div class="d-flex">
                    <div class="flex-grow-1">
                      <p
                        class="card-text mb-0"
                        style="color: white; font-size: 13px"
                      >
                        {{ $post->kota_kabupaten }}
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-0"
                        style="font-size: 8px"
                      >
                        {{ $post->property_type }}
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-2"
                        style="font-size: 8px"
                      >
                        {{ $post->furniture_electronics }}
                      </p>
                    </div>
                    <div class="d-flex px-2">
                      <div
                        class="vertical-line"
                        style="
                          border-right: 3px solid white;
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
                        {{ $post->sell_rent }}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @if($post->sell_rent == 'Dijual')
              <div class="dijual">
            @else
              <div class="disewa">
            @endif
              <div class="card-body py-1" style="background-color: white">
                <p
                  class="card-text pb-1"
                  style="margin-bottom: 0; margin-top: 0; font-size: 13px"
                >
                  Rp. {{ $post->price }},-
                </p>
                <div class="d-flex">
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bed"></i> {{ $post->bedroom }}+{{ $post->additional_bedroom }}
                    </p>
                  </div>
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bath"></i> {{ $post->bathroom }}
                    </p>
                  </div>
                </div>
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
        <!--Card Dijual-->

        <!--Card-->
      </div>
      <!--Card-->
          <div class="d-flex justify-content-center">
            {{ $posts->links() }}
          </div>
    </div>

@endsection
