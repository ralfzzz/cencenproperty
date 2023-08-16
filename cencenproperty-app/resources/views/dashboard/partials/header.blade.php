{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg bg-dark shadow sticky-top pe-3">
    <div class="container-fluid px-0">
      <div class="col-md-2 d-flex justify-content-center">
        <a class="navbar-brand mx-auto" href="#"><img src="/img/live_logo_white.png" alt="white logo" style="max-height: 60px"></a>
      </div>
      <button class="navbar-toggler navbar-light bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-3">
          <li class="nav-item">
            <h5 class="text-white mb-0">Welcome, {{ auth()->user()->name }}</h5>
          </li>
        </ul>
          <h5 class="mx-3 my-1"><a href="/dashboard" class="text-white text-decoration-none {{ Request::is('dashboard') ? 'active' : '' }}">Upload</a></h5>
          <h5 class="mx-3 my-1"><a href="/dashboard2" class="text-white text-decoration-none {{ Request::is('dashboard2') ? 'active' : '' }} {{ Request::is('dashboard/posts*') ? 'active' : '' }}">Edit</a></h5>
        <span class="navbar-text">
          <form action="/logout" method="post">
            @csrf
            <button class="btn btn-danger mx-3 my-1">Logout</button>
          </form>
        </span>
      </div>
    </div>
  </nav>