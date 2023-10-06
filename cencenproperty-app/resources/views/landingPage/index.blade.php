@extends('landingPage.layouts.main')
@section('container')
  
<!-- Search Bar -->
<form action="/searchAll" method="GET">
<div id="search-bar" class="container-fluid" style="font-family:Arial, Helvetica, sans-serif">
  <div id="search-box" class="container">
      <div class="container"  id="title-bar">
          <h1 style="font-family: Arial, Helvetica, sans-serif">Cari Properti Anda</h1>
      </div>
      <div class="text-center" id="search-content">
          <div class="col-wrapper" id="sewa-beli-container">
            <input class="sewa-beli-btn sewa-beli-btn-active" type="button" value="Sewa" name="sewa_beli">
            <input class="sewa-beli-btn " type="button" value="Beli" name="sewa_beli">
            {{-- <button class="sewa-beli-btn" type="button">Beli</button> --}}
            {{-- ketika tombol sewa/beli dipencet memasukkan value ke input bawah ini Sewa/Beli--}}
            {{-- <input class=".sewa-beli-btn" type="hidden" name="sewa_beli" id="sewa_beli" value=""> --}}
            <script>
                const stateBtn = document.querySelectorAll('.sewa-beli-btn');
                stateBtn.forEach( state =>{
                    state.addEventListener('click',()=>{
                    document.querySelector('.sewa-beli-btn-active')?.classList.remove('sewa-beli-btn-active')
                    state.classList.add('sewa-beli-btn-active')
                    // console.log("tes")
                    });
                });
            </script>
          </div>
          <div class="input-group col-wrapper">
              <input type="text" class="form-control" id="search-input" placeholder="Search everything..." value="{{ request('search') }}" name="search">
          </div>
          <span>
              <hr>
          </span>
          <div class="row align-items-center col-wrapper" id="dropdown-filter-container" >
              <div class="col dropdown" id="dropdown-filter" style="font-family: Arial, Helvetica, sans-serif;">
                  <label class="form-label">Lokasi</label>
                  {{-- <button data-bs-display="static"  class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="filter-menu">
                  Cari
                  </button> --}}
                  <select name="locations" id="locations">
                    @foreach($datas as $data)
                    <option value="{{ $data->address }}">{{ $data->address }}</option>
                    <option value="{{ $data->kota_kabupaten }}">{{ $data->kota_kabupaten }}</option>
                    <option value="{{ $data->located_near }}">{{ $data->located_near }}</option>
                    @endforeach
                  </select>
                  {{-- <ul class="dropdown-menu">
                      @foreach($datas as $data)
                      <li><a class="dropdown-item" href="#">{{ $data->address }}</a></li>
                      <li><a class="dropdown-item" href="#">{{ $data->kota_kabupaten }}</a></li>
                      <li><a class="dropdown-item" href="#">{{ $data->located_near }}</a></li>
                      @endforeach
                  </ul> --}}
              </div>
              <div class="col dropdown" id="dropdown-filter">
                  <label class="form-label">Tipe</label>
                  {{-- <button data-bs-display="static" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="filter-menu">
                      Cari
                  </button> --}}
                  <select name="type" id="type">
                    @foreach($property as $data)
                    <option value="{{ $data->property_type }}">{{ $data->property_type }}</option>
                    @endforeach
                  </select>
                  {{-- <ul class="dropdown-menu">
                    @foreach($datas as $data)
                      <li><a class="dropdown-item" href="#">{{ $data->property_type }}</a></li>
                    @endforeach
                  </ul> --}}
              </div>
              <div class="col dropdown" id="dropdown-filter">
                  <label class="form-label">Furnishing</label>
                  {{-- <button data-bs-display="static" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="filter-menu">
                      Cari
                  </button> --}}
                  <select name="furnishing" id="furnishing">
                    @foreach($furniture as $data)
                    <option value="{{ $data->furniture_electronics }}">{{ $data->furniture_electronics }}</option>
                    @endforeach
                  </select>
                  {{-- <ul class="dropdown-menu" >
                        <li><a class="dropdown-item" href="#">{{ $data->furniture_electronics }}</a></li>
                  </ul> --}}
              </div>
          </div>
      </div>
      <div class="col-wrapper" id="btn-container">
          <button class="btn btn-primary buttongold" type="submit" id="search-button">Search</button>
      </div>
  </div>
</div>
</form>

<!-- Properti Terbaru -->
<div class="container">
<div
  class="container fw-bold px-0"
  style="font-family: Arial, Helvetica, sans-serif; font-size: 20px"
>
  <p class="mt-4 mb-4" style="color: #bc9c22">Properti Terbaru</p>
</div>
<!--Carousel-->
<div class="owl-carousel owl-theme">
  <!--Dijual-->
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
        @endif

        <!--Hot list-->
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
  <!--Dijual-->
</div>
<!--Selengkapnya-->
<div class="container mt-3 px-0 d-flex justify-content-end">
  <form action="/all">
    {{-- <input type="hidden" name="category" value="{{ $category }}"> --}}
    <button class="btn btn-primary" type="submit" id="search">Lihat Selengkapnya...</i></button>
  </form>
</div>
<!--Selengkapnya-->
</div>

<!--Kategori-->
<div class="container fw-bold px-2" style="font-family: Arial, Helvetica, sans-serif; font-size: 20px; ">
<p class="mt-4 mb-4" style="color:#bc9c22">Kategori Pilihan Untukmu</p>
  <div class="container" style="max-width: 1261px;" id="Kategori">
    <div class="row text-white text-center px-0 " style=" justify-content:space-around;">
      <div class="row col-md-3 px-0 mt-2" style="padding:0px;margin:0;">
        <div class="col-md-12 rounded-2" style=" padding:0px; background-image: url(https://source.unsplash.com/450x400?home)">
          <form action="/category" method="GET" style="height: 100%; width: 100%;"> 
            <input type="hidden" name="category" value="Apartemen" />
            <button type="Apartment" class="btn text-white fw-bold px-0 rounded-2" style="background-color: rgba(0, 0, 0, 0.4); height:100%; width:100%; padding-top: 30px;">
              <p class="text-white fw-bold" style="background-color:#0000; font-size: 20px;border: #0000;">Apartment</p> 
            </button>
          </form>
        </div>
        <div class="col-md-12 rounded-2 mt-2" style="padding:0px; background-image: url(https://source.unsplash.com/500x400?home)">
          <form action="/category" method="GET" style="height: 100%; width: 100%;"> 
            <input type="hidden" name="category" value="Rumah" />
            <button type="Rumah" class="btn text-white fw-bold px-0 rounded-2" style="background-color: rgba(0, 0, 0, 0.4); height:100%; width:100%; padding-top: 30px;">
              <p class="text-white fw-bold" style="background-color:#0000; font-size: 20px;border: #0000;">Rumah</p> 
            </button>
          </form>
        </div>
        </form>
      </div>

      <div class="col-md-2 mx-0 my-0 mt-2 px-0" style="padding:0px;">
        <div class=" rounded-2" style="background-image: url(https://source.unsplash.com/600x400?home); max-height:333px; height:100%; width: auto;">
          <form action="/category" method="GET" style="height: 100%; width: 100%;"> 
            <input type="hidden" name="category" value="Ruko" />
            <button type="Ruko" class="btn text-white fw-bold px-0 rounded-2" style="background-color: rgba(0, 0, 0, 0.4); height:100%; width:100%; padding-top: 20px;">
              <p class="text-white fw-bold" style="background-color:#0000; font-size: 20px; border: #0000;">Ruko</p> 
            </button>
          </form>
        </div>
      </div> 
      <div class="col-md-2 mx-0 my-0 mt-2 px-0" style="padding:0px;">
        <div class="rounded-2" style="background-image: url(https://source.unsplash.com/400x400?home); max-height:333px; height:100%; width: auto;">
          <form action="/category" method="GET" style="height: 100%; width: 100%;"> 
            <input type="hidden" name="category" value="Kos" />
            <button type="Kost" class="btn text-white fw-bold px-0 rounded-2" style="background-color: rgba(0, 0, 0, 0.4); height:100%; width:100%; padding-top: 20px;">
              <p class="text-white fw-bold" style="background-color:#0000; font-size: 20px; border: #0000;">Kos</p> 
            </button>
          </form>
        </div> 
      </div>

      <div class="row col-md-4 mt-2 px-0 mx-0 my-0 ">
        <div class=" rounded-2 px-0" style="background-image: url(https://source.unsplash.com/1000x800?home)">
          <form action="/category" method="GET" style="height: 100%; width: 100%;"> 
            <input type="hidden" name="category" value="Kios" />
            <button type="Kios" class="btn text-white fw-bold px-0 rounded-2" style="background-color: rgba(0, 0, 0, 0.4); height:100%; width:100%; padding-top: 25px;">
              <p class="text-white fw-bold" style="background-color:#0000; font-size: 20px; border: #0000;">Kios</p> 
            </button>
          </form>
        </div>
        <div class=" mt-2 rounded-2 px-0" style="background-image: url(https://source.unsplash.com/800x800?home)">
          <form action="/category" method="GET" style="height: 100%; width: 100%;"> 
            <input type="hidden" name="category" value="Tanah" />
            <button type="Tanah" class="btn text-white fw-bold px-0 rounded-2" style="background-color: rgba(0, 0, 0, 0.4); height:100%; width:100%; padding-top: 25px;">
              <p class="text-white fw-bold" style="background-color:#0000; font-size: 20px; border: #0000;">Tanah</button> 
            </button>
          </form>
        </div>
        <div class=" mt-2 rounded-2 px-0" style="background-image: url(https://source.unsplash.com/900x800?home)">
          <form action="/category" method="GET" style="height: 100%; width: 100%;"> 
            <input type="hidden" name="category" value="Kantor" />
            <button type="Kantor" class="btn text-white fw-bold px-0 rounded-2" style="background-color: rgba(0, 0, 0, 0.4); height:100%; width:100%; padding-top: 25px;">
              <p class="text-white fw-bold" style="background-color:#0000; font-size: 20px; border: #0000;">Kantor</p> 
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Testimoni-->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-label="Slide 1" style="width: 125px"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" style="width: 125px"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" style="width: 125px"></button>
  </div>
  <div class="container-fluid px-0 pt-5" style="padding-left: 110px; padding-right: 110px;">
    <div class="Testimoni" style="background-image: url(Asset/livroom.jpg); background-size: 100%; width: 100%">
      <div class="mask text-white fw-bold pt-4 px-2" style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; 
        background-color: rgba(188, 157, 34, 0.70); height:100%; width:100%;"><p class="container px-0 mt-1 mb-4">Testimoni</p>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container pb-5">
              <div class="row">
                <div class="col-md-3 p-0">
                  <div class="row-md-5 bg-primary">
                    <img class="img-fluid w-100 object-fit-cover" src="/img/Cencen Property Logo (Sosmed).png" alt="Testimoni 0" style="max-height: 270px;">
                  </div>
                  <div class="row-md-7 px-3 py-3" style="background-color: #BC9C22;"> 
                    <p class="my-0 text-white">M.Fadhil<br>CEO</p>
                  </div>
                </div>
                <div class="col-md-9 p-5 bg-white">
                  <p class="fs-6 text-align-justify my-auto mt-3" style="color: #BC9C22;"> 
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of 
                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
                    like Aldus PageMaker including versions of Lorem Ipsum
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container pb-5">
              <div class="row">
                <div class="col-md-3 p-0">
                  <div class="row-md-5 bg-primary">
                    <img class="img-fluid w-100 object-fit-cover" src="/img/Cencen Property Logo (Sosmed).png" alt="Testimoni 1" style="max-height: 270px;">
                  </div>
                  <div class="row-md-7 px-3 py-3" style="background-color: #BC9C22;"> 
                    <p class="my-0 text-white">Nur<br>User 1</p>
                  </div>
                </div>
                <div class="col-md-9 p-5 bg-white">
                  <p class="fs-6 text-align-justify my-auto mt-3" style="color: #BC9C22;"> 
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic typesetting, 
                    remaining essentially unchanged. It was popularised in the 1960s with the release of 
                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
                    software like Aldus PageMaker including versions of Lorem Ipsum
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container pb-5">
              <div class="row">
                <div class="col-md-3 p-0">
                  <div class="row-md-5 bg-primary">
                    <img class="img-fluid w-100 object-fit-cover" src="/img/Cencen Property Logo (Sosmed).png" alt="Testimoni 2" style="max-height: 270px;">
                  </div>
                  <div class="row-md-7 px-3 py-3 " style="background-color: #BC9C22;"> 
                    <p class="my-0 text-white">Hidayat<br>User 2</p>
                  </div>
                </div>
                <div class="col-md-9 p-5 bg-white">
                  <p class="fs-6 text-align-justify my-auto mt-3" style="color: #BC9C22;"> 
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of 
                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
                    software like Aldus PageMaker including versions of Lorem Ipsum
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!--Pertanyaan-->
<div class="container pt-5" style="font-family: Arial, Helvetica, sans-serif; color: #bc9c22; ">
<h4 class="fw-bold text-center" style="font-size: 20px">Ajukan Pertanyaan</h4>
<form action="/action_page.php">
  <div class="mb-3 mt-4">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3 mt-4">
    <label for="pertantyaan">Pertanyaan</label>
    <textarea class="form-control" rows="6" id="pertanyaan" name="text"></textarea>
  </div>
  <div style="text-align-last:right">
    <button type="submit" class="btn text-white mb-5 " style="background-color: #bc9c22;">
      <a><span class="fa fa-paper-plane me-2"></span>Submit</a>
    </button>
  </div>
</form>
</div>

@endsection
