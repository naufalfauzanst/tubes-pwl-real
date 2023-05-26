

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Newszone.com</title>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/gambar.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/me.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/tes.css')}}">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="{{asset('assets/css/autocomplete.css')}}">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;400;500&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet"></link>
        <script type="text/javascript" src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
    </head>
    <body>
        @include('template.navbar')
<div class="container-fluid bg-white">
    <div class="row">
        <div class="col-lg-4 md-12 sm-12 mx-auto my-5">
            <img src="{{asset('assets/img/logo/c.png')}}" alt="logo">
        </div>
        <div class="col-lg-8 md-12 sm-12 my-5">
            <h1 class="display-4 text-center">Selamat datang di Portal Berita Newszone.com</h1>
            <p class="lead my-5 text-center">
                Newszone.com adalah portal berita yang memberikan anda informasi terbaru dan sesuai fakta.
            </p>
        </div>
    </div>
</div>
<div class="container-fluid ">
    <div class="row">
<div class="col-lg-8 md-12 sm-12 my-5">
    <h1 class="display-4 text-center">Efisien!</h1>
        <p class="lead my-5 mx-3">
               Kami memiliki visi dan misi agar para pengguna agar dapat membaca berita secara efisien
               demi kemudahan penggunaannya. Oleh, karena itu, kami berusaha agar berita 
               dapat tersampaikan dengan efisien untuk mencapai suatu tujuan dengan biaya dengan jumlah yang sama, 
               Namun tujuan atau hasil yang maksimal.
        </p>
    </div>
        <div class="col-lg-4 md-12 sm-12 mx-auto my-5">
            <img style="width: 25rem;" src="{{asset('assets/img/bg/undraw_product_teardown_re_m1pc.svg')}}" alt="logo">
        </div>
    </div>
</div>
<div class="container-fluid bg-white">
    <div class="row">
    <div class="col-lg-4 md-6 sm-12 mt-5 text-center">
            <img style="width: 40px;" src="{{asset('assets/img/bg/tren.jpg')}}" alt="logo">
            <h5 class="mt-2"> Terpopuler </h5>
            <p class="lead mb-5 mt-2 text-center">
                Mari baca berita yang sedang ramai diperbincangkan hanya dengan satu ketukan
            </p>
        </div>
        <div class="col-lg-4 md-6 sm-12 mt-5 text-center">
            <img style="width: 60px;" src="{{asset('assets/img/bg/baruu.png')}}" alt="logo">
            <h5 class="mt-2"> Terbaru </h5>
            <p class="lead mb-5 mt-2 text-center">
                Berita terbaru dan hangat dapat dengan mudah didapatkan di beranda.
            </p>
        </div>
        <div class="col-lg-4 md-6 sm-12 mt-5 text-center">
            <img style="width: 60px;" src="{{asset('assets/img/bg/wa.png')}}" alt="logo">
            <h5 class="mt-2"> 24 jam Service </h5>
            <p class="lead mb-5 mt-2 text-center">
            SAMPAIKAN KELUHAN ANDA TERKAIT WEBSITE KAMI.
            </p>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <footer>
        <div class="jumbotron footer mb-auto" style="color: sagegreen;">
            <div class="container">
                <div class="row mb-2">
                    <img src="{{asset('assets/img/logo/c.png')}}" alt="Logo" style="width: 150px;" class="mx-auto">
                </div>
                <div class="row mb-3">
                    <p class="mx-auto">Copyright © 2022 Kelompok 3 KOM C </p>
                </div>
                <div class="row">
                    <div class="col-4">
                        <h4 class="mb-2 text-center hitam ">Kategori</h4>
                        <a class="hitam text-center tambah" href="dunia"><h6 style="font-weight:400;">Dunia</h6></a>
                        <a class="hitam text-center tambah" href="olahraga"><h6 style="font-weight:400;">Olahraga</h6></a>
                        <a class="hitam text-center tambah" href="hiburan"><h6 style="font-weight:400;">Hiburan</h6></a>
                        <a class="hitam text-center tambah" href="bisnis"><h6 style="font-weight:400;">Bisnis</h6></a>
                        <a class="hitam text-center tambah" href="teknologi"><h6 style="font-weight:400;">Teknologi</h6></a>
                        <a class="hitam text-center tambah" href="politik"><h6 style="font-weight:400;">Politik</h6></a>
                        <a class="hitam text-center tambah" href="wisata"><h6 style="font-weight:400;">Wisata</h6></a>
                        <a class="hitam text-center tambah" href="kriminal"><h6 style="font-weight:400;">Kriminal</h6></a>
                    </div>
                    <div class="col-4">
                        <h4 class="mb-2 text-center hitam">Tentang</h4>
                        <a class="hitam" href="intro"><h6 class="mb-2 text-center tambah" style="font-weight: 400;">Tentang Website</h6></a>
                        <a class="hitam" href="cs"><h6 class="mb-2 text-center tambah" style="font-weight: 400;">Pengembang</h6></a>
                    </div>
                    <div class="col-4">
                        <h4 class="mb-2 text-center hitam " >Urutan</h4>
                        <!--
                        <a class="putih" href="terpopuler.php"><h6 class="mb-2 text-center" style="font-weight: 400;">Topik Populer</h6></a>
                                -->
                        <a class="putih" href="terkini"><h6 class="mb-2 text-center tambah" style="font-weight: 400;">Terkini</h6></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</html>