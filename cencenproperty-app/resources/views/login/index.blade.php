<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>{{ $title }}</title>
    <style>
        body{
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0.6) 0 100%), url('https://source.unsplash.com/1920x1080?home');
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row" style="height: 100vh">
            <div class="col-md-5 m-auto d-flex justify-content-center flex-column">
                <img src="/img/live_logo.png"  class="img-fluid mx-auto" alt="Logo Cencenproperty">
                <form action="/login" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror"  placeholder="Email address" value="{{ old('email') }}" autofocus required>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                    <div class="mb-3">
                        <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                    </div>
                    <div class="d-grid mx-auto mb-3">
                        <button type="submit" class="btn btn-secondary d-grid"><strong class="text-white">Login</strong></button>
                    </div>
                </form>
                {{-- @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('loginError') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>                    
                @endif --}}
            </div>
        </div>
    </div>
</body>

    @if(session()->has('loginError'))
        <script>
        alert("{{ session('loginError') }}");
        </script>
    @endif
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>