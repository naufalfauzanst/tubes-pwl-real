
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Newszone.com</title>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/me.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;400;500&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
            <div class="col-sm">
                <img class="mt-6" src="{{asset('assets/img/bg/undraw_add_user_re_5oib.svg')}}" width="100%" alt="Register">
            </div>
            <div class="col-sm">
                <div class="row">
                <div class="col tengah my-3">
                    <a class="navbar-brand" href="/index.php"><img class="logo" src="{{asset('assets/img/logo/c.png')}}" alt="logo"></a>
                </div>
                </div>
                <div class="row-sm">
                <div class="card mx-3 my-3">
                    <div class="card-body">
                        <div class="card-title">
                            <form action="/user/register" method="POST" class="my-login-validation" novalidate="">
                                @csrf
                                <div class="form-group">
                                    {{-- <input id="user_role" type="hidden" class="form-control" name="user_role" value="user"> --}}
                                    <h3 class="text-center">Registrasi</h3>
                                    <label class="mt-5" for="username">Username</label>
                                    <input id="username" type="text" class="form-control" name="username" required autofocus>
                                    <div class="invalid-feedback">
                                        Silahkan isi username anda
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input id="name" type="text" class="form-control" name="nama" required autofocus>
                                    <div class="invalid-feedback">
                                        Ketik nama anda
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" required>
                                    <div class="invalid-feedback">
                                        Email invalid
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required data-eye>
                                    <div class="invalid-feedback">
                                        Password dibutuhkan
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Register
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row-sm">
                    <div class="card mx-3 my-3">
                    <div class="card-body">
                        <div class="card-title">
                        <button type="button" class="btn btn-block btn-link mt-1"><a href="/pengguna/login">Sudah memiliki akun? Login sekarang!</a></button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="../js/login.js"></script>

    </body>
    </html>