@extends('template.index')
@section('content')

<div class="jumbotron dashboard">
        <div class="row">
            <div class="col-8">
                <h5 class="welcome">Selamat datang,</h5>
              
            </div>
                <div class="card ml-2 col" style="width: 4rem;" >
                    <div class="card-title">
                      <h1 class="mt-3 num" style="text-align: center;" data-val=""> 0 </h1>
                      <p style="text-align: center;"> Pengguna </p>
                    </div>
                </div>
                <div class="card ml-2 col" style="width: 4rem;" >
                    <div class="card-title">
                      <h1 class="mt-3 num" style="text-align: center;" data-val=""> 0 </h1>
                      <p style="text-align: center;"> Admin </p>
                    </div>
                </div>
                <div class="card ml-2 mr-5 col" style="width: 4rem;" >
                    <div class="card-title">
                      <h1 class="mt-3 num" style="text-align: center;" data-val=""> 0 </h1>
                      <p style="text-align: center;"> Berita </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <h3 class="text-dark mx-auto my-4">Tools</h3>
        </div>
        <div class="row my-4">
            <div class="opsi col mb-4">
                <h2 class="mt-4" style="text-align: center;">Pengelola Berita</h2>
                <img class="sub-logo my-3" src="../img/bg/news.png" alt="logo">
                <a href="/admin/pengelola_berita"><button class="tombol mt-3"> Lihat </button></a>
            </div>
            <div class="opsi col mb-4">
                <h2 class="mt-4" style="text-align: center;">Moderasi komentar</h2>
                <img class="sub-logo my-3" src="../img/bg/moderasi.png" alt="logo">
                <a href="/admin/komentar"><button class="tombol mt-2"> Lihat </button></a>
            </div>
            <div class="opsi col mb-4">
                <h2 class="mt-4" style="text-align: center;">Kategori </h2>
                <img class="sub-logo my-3" src="../img/bg/kategora.png" alt="logo">
                <a href="/admin/kategori"><button class="tombol mt-2"> Lihat </button></a>
            </div>
            <div class="opsi col mb-4">
                <h2 class="mt-4" style="text-align: center;">Pengguna</h2>
                <img class="sub-logo my-3" src="../img/bg/pengguna.png" alt="logo">
                <a href="/admin/pengguna"><button class="tombol mt-2"> Lihat </button></a>
            </div>
            <div class="opsi col mb-4">
                <h2 class="mt-4" style="text-align: center;">Edit Profil</h2>
                <img class="sub-logo my-3" src="../img/bg/profila.png" alt="logo">
                <a href="/admin/edit_profil"><button class="tombol mt-2"> Lihat </button></a>
            </div>
            <div class="opsi col mb-4">
                <h2 class="mt-4" style="text-align: center;">Beranda</h2>
                <img class="sub-logo2 my-2" style="margin-left: 65px;" src="../img/bg/beranda.png" alt="logo">
                <a href="../index.php"><button class="tombol mt-2"> Lihat </button></a>
            </div>
        </div>
        </div>
    </div>

   

    <script type="text/javascript">
        let valueDisplays = document.querySelectorAll(".num");
        let interval = 1000;

        valueDisplays.forEach((valueDisplay) => {
            let startValue = 0;
            let endValue = parseInt(valueDisplay.getAttribute
            ("data-val"));
            let duration = Math.floor(interval/endValue);
            let counter = setInterval(function(){
                startValue += 1;
                valueDisplay.textContent = startValue;
                if(startValue == endValue){
                    clearInterval(counter);
                }
            }, duration);
        });
    </script>

    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    </body>
@endsection