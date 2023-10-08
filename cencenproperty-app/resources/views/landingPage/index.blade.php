@extends('landingPage.layouts.main')
@section('container')
  
<!-- Search Bar -->
<form action="/searchAll" method="GET">
  <div id="search-bar" class="container-fluid" style="font-family:Arial, Helvetica, sans-serif; position:relative; z-index:2;">
      <div id="search-box" class="container">
        <div class="container"  id="title-bar">
          <h1 style="font-family: Arial, Helvetica, sans-serif">Cari Properti Anda</h1>
        </div>
        <div class="text-center px-4 py-3" id="search-content">
          <div class="col-wrapper" id="sewa-beli-container">
            <button class="sewa-beli-btn mx-1" type="button" id="sewa-btn">Sewa</button>
            <button class="sewa-beli-btn mx-1" type="button" id="beli-btn">Beli</button>
            <button class="fa-solid fa-xmark" type="button" id="close-beli-btn"></button>
            {{-- ketika tombol sewa/beli dipencet memasukkan value ke input bawah ini Sewa/Beli--}}
            <input type="hidden" name="sewa_beli" id="sewa_beli" value="">
          </div>   
          <script>
            const buttonValue=document.getElementById("sewa_beli");
            const closeBeliBtn=document.getElementById("close-beli-btn");
            const stateBtn = document.querySelectorAll('.sewa-beli-btn');
            let flagCheck=false;
            stateBtn.forEach( state =>{
                state.addEventListener('click',()=>{
                document.querySelector('.sewa-beli-btn-active')?.classList.remove('sewa-beli-btn-active')
                state.classList.add('sewa-beli-btn-active')
                if($("#sewa-btn").hasClass('sewa-beli-btn-active')){
                  $("#sewa_beli").val('Disewa');
                  closeBeliBtn.style.display="block";
                  
                }
                if($("#beli-btn").hasClass('sewa-beli-btn-active')){
                  $("#sewa_beli").val('Dijual');
                  closeBeliBtn.style.display="block";
                }
              });
            });
            
            closeBeliBtn.addEventListener('click',function(){
              if(buttonValue.value!=''){
                closeBeliBtn.style.display="none";
                buttonValue.value='';
                $("#sewa-btn").removeClass('sewa-beli-btn-active');
                $("#beli-btn").removeClass('sewa-beli-btn-active');
              }
            });
            
          </script>
          <div class="input-group ">
            <input type="text" class="form-control" id="search-input" placeholder="Search everything..." value="{{ request('search') }}" name="search" required>
          </div>
          <span>
              <hr>
          </span>
          <div class="row align-items-center col-wrapper" id="dropdown-filter-container" >
            <div class="col dropdown loc" id="dropdown-filter" style="font-family: Arial, Helvetica, sans-serif;">
              <label class="form-label">Lokasi</label>
                  
              <div id="filter-menu">
                <div data-bs-display="static"  class="btn btn-secondary loc" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="default">Cari</span>
                  <button class="fa-solid fa-caret-down pr-3" id="loc-icon" type="button"></button>
                </div>
                <input type="hidden" name='location' id="location" value="">
                <ul class="dropdown-menu">
                    @foreach($datas as $data)
                    <li class="option"><a class="dropdown-item" href="#!" >{{ $data->address }}</a></li>
                    <li class="option"><a class="dropdown-item" href="#!" >{{ $data->kota_kabupaten }}</a></li>
                    <li class="option"><a class="dropdown-item" href="#!" >{{ $data->located_near }}</a></li>
                    @endforeach
                </ul>
              </div>
              <script>

                    const optionMenu =document.querySelector(".loc"),
                        options=optionMenu.querySelectorAll(".option"),
                        sBtn_text = optionMenu.querySelector(".default"),
                        closeBtn=document.querySelector("#loc-icon");

                    options.forEach(option =>{
                    option.addEventListener("click", ()=>{
                      let selectedOption = option.querySelector(".dropdown-item").innerText; 
                      sBtn_text.innerText = selectedOption;
                      $("input[name='location']").val(selectedOption)
                      // console.log($("input[name='location']").val())
                      if(($("input[name='location']").val())!=''){
                        $("#loc-icon").removeClass('fa-caret-down');
                        $("#loc-icon").addClass('fa-xmark');
                        
                      }
                      })
                    })
                    
                    closeBtn.addEventListener('click',function(){
                      if(($("#loc-icon").hasClass('fa-xmark'))){
                        $("input[name='location']").val('')
                        sBtn_text.innerText = 'Cari';
                        // console.log($("input[name='location']").val())
                        $("#loc-icon").addClass('fa-caret-down');
                        $("#loc-icon").removeClass('fa-xmark');
                        $(".btn.btn-secondary.loc").removeClass("show");
                        $(".dropdown-menu").removeClass("show");
                      }
                    });
                    

              </script>
            </div>

            <div class="col dropdown type" id="dropdown-filter">
              <label class="form-label">Tipe</label>
              <div id="filter-menu">
                <div data-bs-display="static" name="type" value="" class="btn btn-secondary type" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                  <span class="default">Cari</span>
                  <button class="fa-solid fa-caret-down pr-3" id="type-icon" type="button"></button>
                </div>
                <input type="hidden" name='type' id="type" value="">
                  <ul class="dropdown-menu">
                    @foreach($property as $data)
                      <li class="option" value="{{ $data->property_type }}"><a class="dropdown-item" href="#!" >{{ $data->property_type }}</a></li>
                    @endforeach
                  </ul>
              </div>
              <script>
                    const optionMenu2 = document.querySelector(".type"),
                        options2=optionMenu2.querySelectorAll(".option"),
                        sBtn_text2 = optionMenu2.querySelector(".default"),
                        closeBtn2=document.getElementById("type-icon");

                    options2.forEach(option =>{
                    option.addEventListener("click", ()=>{
                      let selectedOption2 = option.querySelector(".dropdown-item").innerText; 
                      sBtn_text2.innerText = selectedOption2;
                      $("input[name='type']").val(selectedOption2)
                      if(($("input[name='type']").val())!=''){
                        $("#type-icon").removeClass('fa-caret-down');
                        $("#type-icon").addClass('fa-xmark');
                      }
                      })
                    })
                    
                    closeBtn2.addEventListener('click',function(){
                      if(($("#type-icon").hasClass('fa-xmark'))){
                        $("input[name='type']").val('')
                        sBtn_text2.innerText = 'Cari';
                        // console.log($("input[name='type']").val())
                        $("#type-icon").addClass('fa-caret-down');
                        $("#type-icon").removeClass('fa-xmark');
                        $(".dropdown-menu").removeClass("show");
                      }
                    });
              </script>
            </div>
              
            <div class="col dropdown fur" id="dropdown-filter">
              <label class="form-label">Furnishing</label>
              <div id="filter-menu">
                <div data-bs-display="static" name="furnishing" value="tes" class="btn btn-secondary fur" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                  <span class="default">Cari</span>
                  <button class="fa-solid fa-caret-down pr-3" id="fur-icon" type="button"></button>
                </div>
                <input type="hidden" name='furnishing' id="furnishing" value="">
                <ul class="dropdown-menu" >
                    @foreach($furniture as $data)
                      <li class="option"><a class="dropdown-item" href="#!" >{{ $data->furniture_electronics }}</a></li>
                    @endforeach
                </ul>
              </div>
              <script>
                    const optionMenu3 = document.querySelector(".fur"),
                        options3=optionMenu3.querySelectorAll(".option"),
                        sBtn_text3 = optionMenu3.querySelector(".default"),
                        closeBtn3=document.getElementById("fur-icon");

                    options3.forEach(option =>{
                    option.addEventListener("click", ()=>{
                      let selectedOption3 = option.querySelector(".dropdown-item").innerText; 
                      sBtn_text3.innerText = selectedOption3;
                      $("input[name='furnishing']").val(selectedOption3)
                      if(($("input[name='furnishing']").val())!=''){
                        $("#fur-icon").removeClass('fa-caret-down');
                        $("#fur-icon").addClass('fa-xmark');
                      }
                      })
                    })
                    
                    closeBtn3.addEventListener('click',function(){
                      if(($("#fur-icon").hasClass('fa-xmark'))){
                        $("input[name='furnishing']").val('')
                        sBtn_text3.innerText = 'Cari';
                        // console.log($("input[name='fur']").val())
                        $("#fur-icon").addClass('fa-caret-down');
                        $("#fur-icon").removeClass('fa-xmark');
                        $(".dropdown-menu").removeClass("show");
                      }
                    });
              </script>
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
