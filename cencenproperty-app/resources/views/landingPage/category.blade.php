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
    <link rel="stylesheet" href="/css/index.css">
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
  </head>
  <body>
    <!--Navbar-->
    <div class="container-fluid">
      <nav class="navbar navbar-expand-xxxl navbar-light overflow-hidden">
        <div class="container-fluid justify-content-space-around">
          <a class="navbar-brand" href="#">
            <!-- Brand Logo -->
            <div id="crop">
              <img src="/img/live_logo.png" alt="Live@" id="logo" />
            </div>
          </a>
          <button class="btn btn-primary ms-auto buttongold" id="btn-titip">
            Titip&Jual
          </button>
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
          <div
            class="collapse navbar-collapse flex-grow-0"
            id="toggleMobileMenu"
          >
            <ul class="navbar-nav ms-auto text-left">
              <li>
                <a href="#" class="nav-link"> Home </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!--Navbar-->
    <div class="container">
      <!--Seacrh bar-->
      <nav class="navbar my-4">
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
    <!--Footer-->
    <footer
      class="text-white text-center text-lg-start"
      style="background-image: url(https://source.unsplash.com/800x800?home)"
    >
      <div class="container p-4">
        <div class="row">
          <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
            <h5 class="text-uppercase">Footer Content</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste
              atque ea quis molestias. Fugiat pariatur maxime quis culpa
              corporis vitae repudiandae aliquam voluptatem veniam, est atque
              cumque eum delectus sint!
            </p>
          </div>

          <div class="col-lg-3 col-md-6 mb-4 mb-md-0 ps-5">
            <h5 class="text-uppercase mb-0">Links</h5>
            <ul class="list-unstyled">
              <li>
                <a href="#!" class="text-white">Link 1</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 2</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 3</a>
              </li>
              <li>
                <a href="#!" class="text-white">Link 4</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/"
          >MDBootstrap.com</a
        >
      </div>
      <!-- Copyright -->
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