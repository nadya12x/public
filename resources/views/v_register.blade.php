<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan | Registration Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/') }}/dist/css/adminlte.min.css">
</head>


<body class="hold-transition login-page"
    style="background-image: url('https://img.freepik.com/free-vector/cartoon-bookstore-interior-with-books-shelves_107791-20532.jpg?w=1380&t=st=1715273974~exp=1715274574~hmac=6130f8ea83b609c6e25756fc5398b82e2ffa1d0cc8c9e5812c7046f05a8a0d42'); background-repeat:no-repeat; background-size:cover;">
    <div class="container">



        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card card-outline card-primary mt-5">
                    <div class="card-header text-center">
                        <h1>PERPUSTAKAAN SD 01 MINAS TIMUR</h1>

                        @if(session()->has('success'))

                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                        @elseif(session()->has('error'))
                         <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                        @endif
                    </div>
                    <div class="card-body">


                        <form action="{{ url('/Login/Register') }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Full name" name="name">
                                <div class="input-group-append">
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="Email" name="email">
                                <div class="input-group-append">
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                                <div class="input-group-append">
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Retype password"
                                    name="passwordRetype">
                                <div class="input-group-append">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary  btn-block">Register</button>
                        </form>
                        <p class="mt-3 mb-0 text-center">
                            <a href="/Login" class="text-center">I already have a Account</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
