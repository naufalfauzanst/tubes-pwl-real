
   
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
                <img class="mt-6" src="{{asset('assets/img/bg/undraw_login_re_4vu2.svg')}}" width="100%" alt="Login">
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
                            <form action="/pengguna/login" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                    

                            <div class="form-group">
                            <label for="password"> Password </label>
                            <input id="password" type="password" class="form-control" name="password" required data-eye>
                                <div class="invalid-feedback">
                                    Password tidak valid
                                </div>
                            </div>

                            <button type="submit" class="btn btn-block btn-primary mt-3" name="btnlogin"> Login </button>
                            <hr style="border-top: 1px solid grey;">
                            <a type="button" href="lupa_pass.php" class="btn btn-block btn-link mt-2">Lupa Sandi?</a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row-sm">
                    <div class="card mx-3 my-3">
                    <div class="card-body">
                        <div class="card-title">
                        <button type="button" class="btn btn-block btn-link mt-1"><a href="/pengguna/register">Belum memiliki akun? Daftar sekarang!</a></button>
                        </div>
                    </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
    </body>
    </html>