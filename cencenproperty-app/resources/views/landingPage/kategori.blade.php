<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sub Kategori Pilihan</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <style>
      /* Dijual-Emas */
      .dijual {
        background-color: #bc9c22;
      }
      .dijual .badge {
        color: #bc9c22;
      }
      .dijual p {
        color: black;
      }
      /* Dijual-Emas */

      /* Disewa-Biru */
      .disewa {
        background-color: #366ace;
      }
      .disewa .badge {
        color: #366ace;
      }
      .disewa p {
        color: black;
      }
      body {
        font-family: Arial, Helvetica, sans-serif;
      }
      /* Disewa-Biru */
    </style>
    <link rel="stylesheet" href="/css/index.css">
  </head>
  <body>
    <!-- NavBar -->
    <div class="shadow container-fluid">
      <nav class="navbar navbar-expand-xxxl navbar-light overflow-hidden" >
          <div class="container-fluid" style="justify-content: flex-end;">
              <a class="navbar-brand" href="/LandingPage">
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
                          <a href="/LandingPage" class="nav-link">
                              Home
                          </a>
                      </li>
                  </ul>
              </div>  
          </div>
         
      </nav>
      </div>
    <!--Navbar-->
    <div class="container">
      <!--Seacrh bar-->
      <nav class="navbar my-5">
        <div class="container-fluid p-0">
          <form class="d-flex" role="search">
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
          Apartemen
        </p>
      </div>
      <!--Kategori-->
      <!--Card-->
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3 mb-4">
        <!--Card Dijual-->
        <div class="col">
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
        <!--Card Dijual-->
        <!--Card Disewa-->
        <div class="col">
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
        <!--Card Disewa-->
        <!--Card Dijual-->
        <div class="col">
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
        <!--Card Dijual-->
        <!--Card Disewa-->
        <div class="col">
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
        <!--Card Disewa-->
        <!--Card Dijual-->
        <div class="col">
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
        <!--Card Dijual-->
        <!--Card Disewa-->
        <div class="col">
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
        <!--Card Disewa-->
        <!--Card Dijual-->
        <div class="col">
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
        <!--Card Dijual-->
        <!--Card Disewa-->
        <div class="col">
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
        <!--Card Disewa-->

        <!--Card-->
      </div>
      <!--Card-->
      <!--Pagination-->
      <nav aria-label="Page navigation example">
        <ul class="pagination mb-4 justify-content-center">
          <li class="page-item" style="color: #bc9c22">
            <a
              class="page-link"
              href="#"
              aria-label="Previous"
              style="color: #bc9c22"
            >
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#" style="color: #bc9c22">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#" style="color: #bc9c22">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#" style="color: #bc9c22">3</a>
          </li>
          <li class="page-item">
            <a
              class="page-link"
              href="#"
              aria-label="Next"
              style="color: #bc9c22"
            >
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
      <!--Pagination-->
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
    <!--Footer-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/ef9fe87b9c.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
