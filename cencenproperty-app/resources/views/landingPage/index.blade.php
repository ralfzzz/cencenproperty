<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live@</title>
       <!--Owl carousel-->
       <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!--Owl carousel-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>
    <!-- NavBar -->
    <div class="shadow container-fluid">
    <nav class="navbar navbar-expand-xxxl navbar-light overflow-hidden" >
        <div class="container-fluid" style="justify-content: flex-end;">
            <a class="navbar-brand" href="#">
                <!-- Brand Logo -->
                <div id="crop">
                    <img src="/img/live_logo.png" alt="Live@" id="logo">
                </div>
            </a>
            <button class="btn btn-primary ms-auto buttongold" id="btn-titip">Titip Jual</button>
    
    <style type="text/css">
      a img {
        width: 46%;
        margin: 2px;
        margin-right: 0px;
        align-items: center;
      }
        </style>
    </head>
    <body>
        <!-- Button trigger modal -->
        <button
            type="button"
            class="btn p-2 "
            data-bs-toggle="modal"
            data-bs-target="#staticBackdrop"
            style="background-color: transparent"
            ;
        >
            <i
                class="fa-brands fa-instagram fa-2xl"
                style="color: #bc9c22"
            ></i>
        </button>

        <!-- Modal -->
        <div
            class="modal fade"
            id="staticBackdrop"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="staticBackdropLabel"
            aria-hidden="true"
        >
            <div
                class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
            >
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">
                            <i
                                class="fa-brands fa-instagram fa-bounce fa-lg"
                            ></i>
                            Cencen Property
                        </h1>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body" id="instafeed-container"></div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn"
                            data-bs-dismiss="modal"
                            style="background-color: #bc9c22; color: white"
                        >
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
        <script type="text/javascript">
            var userFeed = new Instafeed({
                get: "user",
                target: "instafeed-container",
                resolution: "low_resolution",
                accessToken:
                    "IGQWRPTk8xNUJXSjdQa3oxQmlXRjJLMnBqNDFkSDd0WFdlNVRNVUswQWNhOFJjUFdIdWFRTG1EOHNTSW15VTg5R2N4aXg5WHZAKMVFLRVNmNTh0Yl9sb3JMcFZADOUVLVC1IUzIybDZA6ZATVyaEVXOW84OE9GcDhFSmcZD",
            });
            userFeed.run();
        </script>

            <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse"
            data-bs-target="#toggleMobileMenu"
            aria-controls="toggleMobileMenu"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
            <span class="navbar-toggler-icon"> </span>
            </button>
            <div class="collapse navbar-collapse flex-grow-0" id="toggleMobileMenu">
                
                <ul class="navbar-nav ms-auto text-left">
                    <li>
                        <a href="#" class="nav-link">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">
                            Testimoni
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">
                            About
                        </a>
                    </li>
                </ul>
            </div>  
        </div>
       
    </nav>
    </div>

    <!-- Search Bar -->
    <div id="search-bar" class="container-fluid" style="font-family:Arial, Helvetica, sans-serif">
        <div id="search-box" class="container">
            <div class="container"  id="title-bar">
                <h1 style="font-family: Arial, Helvetica, sans-serif">Cari Properti Anda</h1>
            </div>
            <div class="text-center" id="search-content">
                <div class="col-wrapper" id="sewa-beli-container">
                  <button class="sewa-beli-btn sewa-beli-btn-active">Sewa</button>
                  <button class="sewa-beli-btn">Beli</button>
                  <script>
                      const stateBtn = document.querySelectorAll('.sewa-beli-btn');
                      stateBtn.forEach( state =>{
                          state.addEventListener('click',()=>{
                          document.querySelector('.sewa-beli-btn-active')?.classList.remove('sewa-beli-btn-active')
                          state.classList.add('sewa-beli-btn-active')
                          console.log("tes")
                          });
                      });
                  </script>
                </div>
                <div class="input-group col-wrapper">
                    <input type="text" class="form-control" id="search-input" placeholder="Search Anything" >
                </div>
                <span>
                    <hr>
                </span>
                <div class="row align-items-center col-wrapper" id="dropdown-filter-container" >
                    <div class="col dropdown" id="dropdown-filter" style="font-family: Arial, Helvetica, sans-serif;">
                        <label class="form-label">Lokasi</label>
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="filter-menu">
                        Cari
                        </button>
                        <ul class="dropdown-menu">
                            <li><h6 class="dropdown-header">Dropdown header</h6></li>
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <div class="col dropdown" id="dropdown-filter">
                        <label class="form-label">Tipe</label>
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="filter-menu">
                            Cari
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>                            
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <div class="col dropdown" id="dropdown-filter">
                        <label class="form-label">Furnishing</label>
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="filter-menu">
                            Cari
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-wrapper" id="btn-container">
                <button class="btn btn-primary buttongold" type="submit" id="search-button">Search</button>
            </div>
        </div>
    </div>

    <div class="container">
      <!-- Properti Terbaru -->
      <div
        class="container fw-bold px-0"
        style="font-family: Arial, Helvetica, sans-serif; font-size: 20px"
      >
        <p class="mt-4 mb-4" style="color: #bc9c22">Properti Terbaru</p>
      </div>
      <!--Carousel-->
      <div class="owl-carousel owl-theme">
        <!--Dijual-->
        <div class="item">
          <div class="card h-100">
            <img
              src="https://source.unsplash.com/1000x1000?home"
              class="img-fluid object-fit-cover"
            />
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
            <div class="dijual">
              <div class="card-body py-1 h-100">
                <div class="row d-flex">
                  <p
                    class="card-title mb-0"
                    style="font-weight: bold; color: white"
                  >
                    Cencen Property
                  </p>
                  <div class="d-flex">
                    <div class="flex-grow-1">
                      <p
                        class="card-text mb-0"
                        style="color: white; font-size: 13px"
                      >
                        Jakarta Pusat
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-0"
                        style="font-size: 8px"
                      >
                        Rumah
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-2"
                        style="font-size: 8px"
                      >
                        Furnished
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
                        Dijual
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="dijual">
              <div class="card-body py-1" style="background-color: white">
                <p
                  class="card-text pb-1"
                  style="margin-bottom: 0; margin-top: 0; font-size: 13px"
                >
                  Rp500.000.000,-
                </p>
                <div class="d-flex">
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bed"></i> 1+1
                    </p>
                  </div>
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bath"></i> 2
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Dijual-->
        <!--Disewa-->
        <div class="item">
          <div class="card h-100">
            <img
              src="https://source.unsplash.com/500x500?home"
              class="img-fluid object-fit-cover"
              alt="..."
            />
            <div class="disewa">
              <div class="card-body py-1 h-100">
                <div class="row d-flex">
                  <p
                    class="card-title mb-0"
                    style="font-weight: bold; color: white"
                  >
                    Cencen Property
                  </p>
                  <div class="d-flex">
                    <div class="flex-grow-1">
                      <p
                        class="card-text mb-0"
                        style="color: white; font-size: 13px"
                      >
                        Jakarta Pusat
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-0"
                        style="font-size: 8px"
                      >
                        Apartemen
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-2"
                        style="font-size: 8px"
                      >
                        Semi Furnished
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
                        Disewa
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="disewa">
              <div class="card-body py-1" style="background-color: white">
                <p
                  class="card-text pb-1"
                  style="margin-bottom: 0; margin-top: 0; font-size: 13px"
                >
                  Rp500.000.000,-
                </p>
                <div class="d-flex">
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bed"></i> 1+1
                    </p>
                  </div>
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bath"></i> 2
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Disewa-->
        <!--Dijual-->
        <div class="item">
          <div class="card h-100">
            <img
              src="https://source.unsplash.com/1000x1000?home"
              class="img-fluid object-fit-cover"
            />
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
            <div class="dijual">
              <div class="card-body py-1 h-100">
                <div class="row d-flex">
                  <p
                    class="card-title mb-0"
                    style="font-weight: bold; color: white"
                  >
                    Cencen Property
                  </p>
                  <div class="d-flex">
                    <div class="flex-grow-1">
                      <p
                        class="card-text mb-0"
                        style="color: white; font-size: 13px"
                      >
                        Jakarta Pusat
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-0"
                        style="font-size: 8px"
                      >
                        Rumah
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-2"
                        style="font-size: 8px"
                      >
                        Furnished
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
                        Dijual
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="dijual">
              <div class="card-body py-1" style="background-color: white">
                <p
                  class="card-text pb-1"
                  style="margin-bottom: 0; margin-top: 0; font-size: 13px"
                >
                  Rp500.000.000,-
                </p>
                <div class="d-flex">
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bed"></i> 1+1
                    </p>
                  </div>
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bath"></i> 2
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Dijual-->
        <!--Disewa-->
        <div class="item">
          <div class="card h-100">
            <img
              src="https://source.unsplash.com/500x500?home"
              class="img-fluid object-fit-cover"
              alt="..."
            />
            <div class="disewa">
              <div class="card-body py-1 h-100">
                <div class="row d-flex">
                  <p
                    class="card-title mb-0"
                    style="font-weight: bold; color: white"
                  >
                    Cencen Property
                  </p>
                  <div class="d-flex">
                    <div class="flex-grow-1">
                      <p
                        class="card-text mb-0"
                        style="color: white; font-size: 13px"
                      >
                        Jakarta Pusat
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-0"
                        style="font-size: 8px"
                      >
                        Apartemen
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-2"
                        style="font-size: 8px"
                      >
                        Semi Furnished
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
                        Disewa
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="disewa">
              <div class="card-body py-1" style="background-color: white">
                <p
                  class="card-text pb-1"
                  style="margin-bottom: 0; margin-top: 0; font-size: 13px"
                >
                  Rp500.000.000,-
                </p>
                <div class="d-flex">
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bed"></i> 1+1
                    </p>
                  </div>
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bath"></i> 2
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Disewa-->
        <!--Dijual-->
        <div class="item">
          <div class="card h-100">
            <img
              src="https://source.unsplash.com/1000x1000?home"
              class="img-fluid object-fit-cover"
            />
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
            <div class="dijual">
              <div class="card-body py-1 h-100">
                <div class="row d-flex">
                  <p
                    class="card-title mb-0"
                    style="font-weight: bold; color: white"
                  >
                    Cencen Property
                  </p>
                  <div class="d-flex">
                    <div class="flex-grow-1">
                      <p
                        class="card-text mb-0"
                        style="color: white; font-size: 13px"
                      >
                        Jakarta Pusat
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-0"
                        style="font-size: 8px"
                      >
                        Rumah
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-2"
                        style="font-size: 8px"
                      >
                        Furnished
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
                        Dijual
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="dijual">
              <div class="card-body py-1" style="background-color: white">
                <p
                  class="card-text pb-1"
                  style="margin-bottom: 0; margin-top: 0; font-size: 13px"
                >
                  Rp500.000.000,-
                </p>
                <div class="d-flex">
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bed"></i> 1+1
                    </p>
                  </div>
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bath"></i> 2
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Dijual-->
        <!--Disewa-->
        <div class="item">
          <div class="card h-100">
            <img
              src="https://source.unsplash.com/500x500?home"
              class="img-fluid object-fit-cover"
              alt="..."
            />
            <div class="disewa">
              <div class="card-body py-1 h-100">
                <div class="row d-flex">
                  <p
                    class="card-title mb-0"
                    style="font-weight: bold; color: white"
                  >
                    Cencen Property
                  </p>
                  <div class="d-flex">
                    <div class="flex-grow-1">
                      <p
                        class="card-text mb-0"
                        style="color: white; font-size: 13px"
                      >
                        Jakarta Pusat
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-0"
                        style="font-size: 8px"
                      >
                        Apartemen
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-2"
                        style="font-size: 8px"
                      >
                        Semi Furnished
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
                        Disewa
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="disewa">
              <div class="card-body py-1" style="background-color: white">
                <p
                  class="card-text pb-1"
                  style="margin-bottom: 0; margin-top: 0; font-size: 13px"
                >
                  Rp500.000.000,-
                </p>
                <div class="d-flex">
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bed"></i> 1+1
                    </p>
                  </div>
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bath"></i> 2
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Disewa-->
        <!--Dijual-->
        <div class="item">
          <div class="card h-100">
            <img
              src="https://source.unsplash.com/1000x1000?home"
              class="img-fluid object-fit-cover"
            />
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
            <div class="dijual">
              <div class="card-body py-1 h-100">
                <div class="row d-flex">
                  <p
                    class="card-title mb-0"
                    style="font-weight: bold; color: white"
                  >
                    Cencen Property
                  </p>
                  <div class="d-flex">
                    <div class="flex-grow-1">
                      <p
                        class="card-text mb-0"
                        style="color: white; font-size: 13px"
                      >
                        Jakarta Pusat
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-0"
                        style="font-size: 8px"
                      >
                        Rumah
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-2"
                        style="font-size: 8px"
                      >
                        Furnished
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
                        Dijual
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="dijual">
              <div class="card-body py-1" style="background-color: white">
                <p
                  class="card-text pb-1"
                  style="margin-bottom: 0; margin-top: 0; font-size: 13px"
                >
                  Rp500.000.000,-
                </p>
                <div class="d-flex">
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bed"></i> 1+1
                    </p>
                  </div>
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bath"></i> 2
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Dijual-->
        <!--Disewa-->
        <div class="item">
          <div class="card h-100">
            <img
              src="https://source.unsplash.com/500x500?home"
              class="img-fluid object-fit-cover"
              alt="..."
            />
            <div class="disewa">
              <div class="card-body py-1 h-100">
                <div class="row d-flex">
                  <p
                    class="card-title mb-0"
                    style="font-weight: bold; color: white"
                  >
                    Cencen Property
                  </p>
                  <div class="d-flex">
                    <div class="flex-grow-1">
                      <p
                        class="card-text mb-0"
                        style="color: white; font-size: 13px"
                      >
                        Jakarta Pusat
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-0"
                        style="font-size: 8px"
                      >
                        Apartemen
                      </p>
                      <p
                        class="badge bg-light text-wrap mb-2"
                        style="font-size: 8px"
                      >
                        Semi Furnished
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
                        Disewa
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="disewa">
              <div class="card-body py-1" style="background-color: white">
                <p
                  class="card-text pb-1"
                  style="margin-bottom: 0; margin-top: 0; font-size: 13px"
                >
                  Rp500.000.000,-
                </p>
                <div class="d-flex">
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bed"></i> 1+1
                    </p>
                  </div>
                  <div class="pe-2">
                    <p style="font-size: 12px">
                      <i class="fa-solid fa-bath"></i> 2
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Disewa-->
      </div>
      <!--Selengkapnya-->
      <div class="container mt-2 d-flex justify-content-end">
        <a href="#" class="link" style="color: #bc9c22"
          >Lihat Selengkapnya...</a
        >
      </div>
      <!--Selengkapnya-->
    </div>

    <!--Kategori-->
    <div class="container fw-bold px-2" style="font-family: Arial, Helvetica, sans-serif; font-size: 20px; ">
        <p class="mt-4 mb-4" style="color:#bc9c22">Kategori Pilihan Untukmu</p>
        <div class="container " style="max-width: 1261px;" id="Kategori">
          <div class="row text-white text-center px-0 " style=" justify-content:space-between;">
            <div class="row col-md-3 px-0 mt-2" style="padding:0px;margin:0;">
              <div class="col-md-12 rounded-2 mb-1" style=" padding:0px; background-image: url(https://source.unsplash.com/450x400?home);">
                <div class="mask text-white fw-bold px-0 rounded-2" style="background-color: rgba(0, 0, 0, 0.4); height:100%; width:100%; ">
                  <button type="Apartment" class="btn text-white fw-bold" style="background-color:#0000; font-size: 20px;border: #0000;">Apartment</button> 
                </div>
              </div>
              <div class="col-md-12 rounded-2" style="padding:0px; background-image: url(https://source.unsplash.com/500x400?home);">
                <div class="mask text-white fw-bold px-0 rounded-2" style="background-color: rgba(0, 0, 0, 0.4); height:100%; width:100%;">
                  <button type="Rumah" class="btn text-white fw-bold" style="background-color:#0000; font-size: 20px;border: #0000;">Rumah</button> 
                </div>
              </div>
            </div>
            
              <div class="col-md-2 mx-0 my-0 mt-2 px-0" style=" padding:0px;">
                <div class=" rounded-2" style="background-image: url(https://source.unsplash.com/600x400?home); max-height:333px;height:100%; width: auto;">
                  <div class="mask text-white fw-bold px-0 rounded-2" style="background-color: rgba(0, 0, 0, 0.4); height:100%; width:100%; padding-top: 140px;">
                    <button type="Ruko" class="btn text-white fw-bold" style="background-color:#0000; font-size: 20px; border: #0000;">Ruko</button> 
                  </div>
                </div> 
              </div>
              
              <div class="col-md-2 mx-0 my-0 mt-2 px-0" style=" padding:0px;">
                <div class="rounded-2" style="background-image: url(https://source.unsplash.com/400x400?home); max-height:333px; height:100%; width: auto;">
                  <div class="mask text-white fw-bold px-0 rounded-2" style="background-color: rgba(0, 0, 0, 0.4); height:100%; width:100%; padding-top: 140px;">
                    <button type="Kost" class="btn text-white fw-bold" style="background-color:#0000; font-size: 20px; border: #0000;">Kost</button> 
                  </div>
                </div> 
              </div>
            
  
            <div class="row col-md-4 mt-2 px-0 mx-0 my-0 ">
              <div class=" rounded-2 px-0" style="background-image: url(https://source.unsplash.com/1000x800?home); ">
                <div class="mask text-white fw-bold px-0 rounded-2" style="background-color: rgba(0, 0, 0, 0.4); height:100%; width:100%; padding-top: 32px;">
                  <button type="Kios" class="btn text-white fw-bold" style="background-color:#0000; font-size: 20px; border: #0000;">Kios</button> 
                </div>
              </div>
              <div class=" mt-3 rounded-2 px-0" style="background-image: url(https://source.unsplash.com/800x800?home);">
                <div class="mask text-white fw-bold px-0 rounded-2" style="background-color: rgba(0, 0, 0, 0.4); height:100%; width:100%; padding-top: 32px;">
                  <button type="Tanah" class="btn text-white fw-bold" style="background-color:#0000; font-size: 20px; border: #0000;">Tanah</button> 
                </div>
              </div>
              <div class=" mt-3 rounded-2 px-0" style="background-image: url(https://source.unsplash.com/900x800?home); ">
                <div class="mask text-white fw-bold px-0 rounded-2" style="background-color: rgba(0, 0, 0, 0.4); height:100%; width:100%; padding-top: 32px;">
                  <button type="Kantor" class="btn text-white fw-bold" style="background-color:#0000; font-size: 20px; border: #0000;">Kantor</button> 
                </div>
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
        <div class="container-fluid px-0" style="margin-top: 105px;">
          <div class="Testimoni" style="background-image: url(Asset/livroom.jpg); 
            background-size:100%; width: 100%">
            <div class="mask text-white fw-bold pt-5" style="font-size: 20px; font-family: Arial, Helvetica, sans-serif; 
              background-color: rgba(188, 157, 34, 0.70); height:100%; width:100%;"><p>Testimoni</p>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-3 p-0">
                        <div class="row-md-5 bg-primary">
                          <img class="img-" src="/img/Cencen Property Logo (Sosmed).png" alt="Testimoni 0" style="max-height: 270px;">
                        </div>
                        <div class="row-md-7 px-3 py-2" style="background-color: #BC9C22;"> 
                          <p class="my-0 text-white">M.Fadhil<br>CEO</p>
                        </div>
                      </div>
                      <div class="col-md-9 p-5 bg-white">
                        <p class="fs-6 text-align-justify my-auto mt-5" style="color: #BC9C22;"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                    </div>
                  </div>
                </div>
  
                <div class="carousel-item">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-3 p-0">
                        <div class="row-md-5 bg-primary">
                          <img class="img" src="/img/Cencen Property Logo (Sosmed).png" alt="Testimoni 1" style="max-height: 270px;">
                        </div>
                        <div class="row-md-7 px-3 py-2" style="background-color: #BC9C22;"> 
                          <p class="my-0 text-white">Nur<br>User 1</p>
                        </div>
                      </div>
                      <div class="col-md-9 p-5 bg-white">
                        <p class="fs-6 text-align-justify my-auto mt-5" style="color: #BC9C22;"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                    </div>
                  </div>
                </div>
  
                <div class="carousel-item">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-3 p-0">
                        <div class="row-md-5 bg-primary">
                          <img class="img" src="/img/Cencen Property Logo (Sosmed).png" alt="Testimoni 2" style="max-height: 270px;">
                        </div>
                        <div class="row-md-7 px-3 py-2" style="background-color: #BC9C22;"> 
                          <p class="my-0 text-white">Hidayat<br>User 2</p>
                        </div>
                      </div>
                      <div class="col-md-9 p-5 bg-white">
                        <p class="fs-6 text-align-justify my-auto mt-5" style="color: #BC9C22;"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
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
    <div class="container pt-5 mt-5 mb-5" style="font-family: Arial, Helvetica, sans-serif; color: #bc9c22; ">
      <h4 class="fw-bold text-center" style="font-size: 20px">Ajukan Pertanyaan</h4>
      <form action="/action_page.php">
        <div class="mb-3 mt-4">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3 mt-4">
          <label for="pertantyaan">Pertanyaan</label>
          <textarea class="form-control" rows="6 " id="pertanyaan" name="text"></textarea>
        </div>
        <div style="text-align-last:right">
          <button type="submit" class="btn text-white mb-5 " style="background-color: #bc9c22;">
            <a><span class="fa fa-paper-plane me-2"></span>Submit</a>
          </button>
        </div>
      </form>
    </div>
  
     <!-- Footer -->
     <footer class="container-fluid px-0" style="background-image:url(https://source.unsplash.com/900x800?home); height: 400px; width: 100%;">
        <div class="mask text-white" style="background-color: rgba(89, 89, 89, 0.6); height:100%; width:100%;">
          <div class="container">
            <div class="row">
              <div class="col-md-5 mb-3" style="padding-top: 60px; font-family: Arial, Helvetica, sans-serif">
                <ul class="text-white px-0 text-decoration-underline fw-bold" style="font-size: 20px;">
                  <img src="/img/logo_white.png" alt="" style="width: 150px;">
                </ul>
                <p> 
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                  when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                </p>
              </div>
              <div class="col-md-1">
                <div class="vr mt-4 bg-light" style="height: 350px; min-width: 2px; margin-left: 35px;"></div>
              </div>
              <div class="col-md-6 mb-3" style="padding-top: 60px; font-family: Arial, Helvetica, sans-serif">
                <ul class="text-white px-0 text-decoration-underline fw-bold" style="font-size: 20px;">Contact Us</ul>
                <a><span class="fa fa-whatsapp me-2"></span>+62812345679</a></br>
                <a><span class="fa fa-envelope me-2"></span>liveat@gmail.com</a>
              </div>
            </div>
          </div>
        </div>
      </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
      integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      type="text/javascript
    "
    >
      $(".owl-carousel").owlCarousel({
        loop: false,
        margin: 20,
        nav: false,
        dots: false,
        autoplay: false,
        autoplayTimeout: 2000,

        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 2,
          },
          1000: {
            items: 4,
          },
        },
      });
    </script>
<script src="https://kit.fontawesome.com/ef9fe87b9c.js" crossorigin="anonymous"></script>
</html>