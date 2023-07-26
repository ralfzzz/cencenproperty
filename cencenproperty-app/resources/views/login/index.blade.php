<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>{{ $title }}</title>
</head>
<body>
    <div class="container">
        <div class="row" style="height: 100vh">
            <div class="col-md-6 m-auto d-flex justify-content-center">
                <form>
                    @csrf
                    <img src="./img/logo.png"  class="img-fluid" alt="Logo Cencenproperty">
                    <div class="mb-4">
                        <h3>DASHBOARD LOGIN</h3>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address">
                        </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="d-grid mx-auto">
                        <button type="submit" class="btn btn-primary d-grid">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>