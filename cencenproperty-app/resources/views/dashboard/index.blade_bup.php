<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="/js/color-modes.js"></script>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Wepsait"
    />
    <meta name="generator" content="Hugo 0.115.4" />
    <title>{{ $title }}</title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.3/examples/dashboard/"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"
    />

    <link href="/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet" />
  </head>
  <body>

    <header
      class="navbar sticky-top bg-dark flex-md-nowrap px-0 py-0 shadow"
      data-bs-theme="dark"
    >
      <a
        class="navbar-brand col-md-3 col-lg-2 me-0 px-3 py-2 fs-6 text-white d-flex"
        href="/"
        ><img src="./img/logo_white.png" alt="logo putih" class="img-fluid mx-auto object-fit-fill"></a
      >
        <ul class="navbar-nav d-flex text-white mx-3">
            <li class="nav-item text-nowrap">
                <h5 class="p-0 m-0">Welcome, {{ auth()->user()->name }}</h5>
            </li>
        </ul>
        <ul class="navbar-nav flex-row">
            <li class="nav-item text-nowrap">
                <form action="/logout" method="post">
                    @csrf
                    <button class="btn btn-danger mx-3">Logout</button>
                </form>
            </li>
        </ul>
    </header>

    <div class="container-fluid">
      <div class="row">
        <div
          class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary"
        >
          <div
            class="offcanvas-md offcanvas-end bg-body-tertiary"
            tabindex="-1"
            id="sidebarMenu"
            aria-labelledby="sidebarMenuLabel"
          >
          
            <div
              class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto"
            >
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a
                    class="nav-link d-flex align-items-center gap-2 active"
                    aria-current="page"
                    href="#"
                  >
                    Dashboard
                  </a>
                </li>
              </ul>
              <hr class="my-3" />
              <ul class="nav flex-column">
                <li class="nav-item">
                    <a
                    class="nav-link d-flex align-items-center gap-2 active"
                    aria-current="page"
                    href="#"
                  >
                    Post
                  </a>
                </li>
                <li class="nav-item">
                    <a
                    class="nav-link d-flex align-items-center gap-2 active"
                    aria-current="page"
                    href="#"
                  >
                    Edit
                  </a>
                </li>
              </ul>

              <hr class="my-3" />
            </div>
          </div>
        </div>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
          >
            <h1 class="h2">Dashboard</h1>
          </div>
        </main>
      </div>
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/dashboard.js"></script>
  </body>
</html>
