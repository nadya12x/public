<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan | {{$judul}}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset ('AdminLTE/')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset ('AdminLTE/')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset ('AdminLTE/')}}/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page" style="background-image: url('https://img.freepik.com/free-vector/cartoon-bookstore-interior-with-books-shelves_107791-20532.jpg?w=1380&t=st=1715273974~exp=1715274574~hmac=6130f8ea83b609c6e25756fc5398b82e2ffa1d0cc8c9e5812c7046f05a8a0d42'); background-repeat:no-repeat; background-size:cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card card-outline card-primary mt-5"  >
                    <div class="card-header text-center">
                        <h1>PERPUSTAKAAN SD 01 MINAS BARAT</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{url('Login/auth')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Username" name="name" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
                        </form>
                        <p class="mt-3 mb-0 text-center">
                            <a href="/Login/Register" class="text-primary">Register a new membership</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
