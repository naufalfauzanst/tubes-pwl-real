@extends('template.index')
@section('carousel')
<div class="row">
    <div class="col-lg-8 col-md-7">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
            <ul class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=" "></li>                            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=" "></li>                        </ul>
        <div class="carousel-inner">
        <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('assets/img/berita/wapres.jpeg')}}" alt="Mandalika">
                <div class="carousel-caption-modelku d-none d-md-block">
                <a href="konten.php?id_berita=78">
                <h4>Isu Reshuffle Kabinet, Wapres Ma’ruf: Kita Tunggu Saja </h4>
                </a>
                  <p><p><span style="font-size:11pt"><strong><span style="font-size:12.0pt">Politik</span></strong><span style="font-size:12.0pt"> - Politik- Presiden Joko Widodo atau Jokowi mengungkapkan kemungkinan adanya reshuffle atau perombakan kabinet. Terkait wacana itu, Wakil Presiden Ma’ruf Amin menyatakan ha... </p>
                </div>
            </div>
        <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/img/berita/kroasia.jpeg')}}" alt="Mandalika">
                <div class="carousel-caption-modelku d-none d-md-block">
                <a href="konten.php?id_berita=71">
                <h4>Momen Kroasia Cukur Argentina 3-0 di Piala Dunia</h4>
                </a>
                  <p><p><span style="font-size:11pt"><strong><span style="font-size:12.0pt">Medan</span></strong><span style="font-size:12.0pt"> - Laga Argentina vs Kroasia pada semifinal Piala Dunia 2022 merupakan pertemuan ketiga antara dua negara tersebut di ajang empat tahunan. Argentina dan Kroasia sudah pernah dua... </p>
                </div>
            </div>
        <div class="carousel-item  ">
                <img class="d-block w-100" src="{{asset('assets/img/berita/sambo.jpg')}}" alt="Mandalika">
                <div class="carousel-caption-modelku d-none d-md-block">
                <a href="konten.php?id_berita=62">
                <h4>Richard Eliezer Berikan Pistol HS Milik Brigadir Yosua Ke FS Sebelum Pembunuhan</h4>
                </a>
        <p><p><span style="font-size:11pt"><strong><span style="font-size:12.0pt"><span style="color:black">Ferdy Sambo</span></span></strong><span style="font-size:12.0pt"><span style="color:black"> - Richard Eliezer Pudihang Lumiu sempat memberikan pistol HS milik Nofriansyah Yosua Hutabarat alias Brigadir Y... </p>
        </div>
    </div>
</div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
@endsection
@section('kategori')
<div class="row">
    <div class="opsi col col-lg-11">
        <h2 class="mt-3" style="text-align: center;">Kategori</h2>
        <hr style="border-top: 1px solid grey;">
        <div class="row">
            <div class="col">
                <h5 class="ml-auto">
                    <a class="nav-item nav-link" href="dunia"><h6>Dunia</h6></a>
                    <a class="nav-item nav-link" href="olahraga"><h6>Olahraga</h6></a>                        
                    <a class="nav-item nav-link" href="hiburan"><h6>Hiburan</h6></a>                        
                    <a class="nav-item nav-link" href="bisnis"><h6>Bisnis</h6></a>                        
                    <a class="nav-item nav-link" href="teknologi"><h6>Teknologi</h6></a>                        
                    <a class="nav-item nav-link" href="politik"><h6>Politik</h6></a>                        
                    <a class="nav-item nav-link" href="wisata"><h6>Wisata</h6></a>                        
                    <a class="nav-item nav-link" href="kriminal"><h6>Kriminal</h6></a>
                </h5>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class=" bg-white my-5" style="border-radius: 20px;" >
    <div class="row ml-2">
        <h3 class="mt-5 ml-5">Berita Internasional<hr style="height:6px;border-width:0;  ;background-color: #5EA6E5"></h3>
    </div>
    <div class="row px-5 py-5">
                        <div class="col">
            <div class="card mr-2" style="width: 17.2rem; height: 30rem;">
                <img class="card-img-top" src="{{asset('assets/img/berita/kaesang.jpeg')}}" alt="Card image cap">
                <div class="card-body">
                <a class="nav-item" href="konten.php?id_berita=61"><h5 class="card-title">Megawati hingga SBY ikut Ramaikan Resepsi Pernikahan Kaesang-Erina</h5></a>
                    <p class="card-text"><p><span style="font-size:11pt"><strong><span style="font-size:12.0pt"><span style="color:black">Kaesang</span></span></strong><span style="font-size:12.0pt"><span style="color:black">&nbsp;- Tasyakuran pernikahan putra Presiden Jokowi, Kae</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mr-2" style="width: 17.2rem; height: 30rem;">
                <img class="card-img-top" src="{{asset('assets/img/berita/lesti.jpg')}}" alt="Card image cap">
                <div class="card-body">
                <a class="nav-item" href="konten.php?id_berita=60"><h5 class="card-title">Lesti Laporkan Risky Billar ke Polisi Dugaan KDRT</h5></a>
                    <p class="card-text"><p><span style="font-size:11pt"><strong><span style="font-size:12.0pt">Leslar</span></strong><span style="font-size:12.0pt"> - Pedangdut Lesti Kejora melaporkan suaminya, Rizky Billar atas dugaan KDRT. Dalam laporaannya, Lesti mengaku diban</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('berita_terkini')
<div class=" bg-white my-5" style="border-radius: 20px;" >
    <div class="row ml-2">
        <h3 class="mt-5 ml-5">Berita Terkini<hr style="height:6px;border-width:0;  ;background-color: #5EA6E5"></h3>
    </div>
    <div class="row px-5 py-5">
        <div class="col">
            <div class="card mr-2" style="width: 17.2rem; height: 30rem; ">
                <img class="card-img-top" src="{{asset('assets/img/berita/pemilu.jpeg')}}" alt="Card image cap">
                <div class="card-body">
                <a class="nav-item" href="konten.php?id_berita=88"><h5 class="card-title">KPU Tetap Pakai Kotak Suara Kardus di Pemilu 2024, tapi Versi Upgrade</h5></a>
                    <p class="card-text"><p><span style="font-size:11pt"><strong><span style="font-size:12.0pt">Politik</span></strong><span style="font-size:12.0pt"> - Komisi Pemilihan Umum (KPU) akan kembali menggunakan kotak suara kardus di Pemilu 2024. Komisioner KPU Yulianto </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mr-2" style="width: 17.2rem; height: 30rem; ">
                <img class="card-img-top" src="{{asset('assets/img/berita/bajak.jpeg')}}" alt="Card image cap">
                <div class="card-body">
                <a class="nav-item" href="konten.php?id_berita=87"><h5 class="card-title">Cara Baru Pulihkan Akun Instagram yang Dibajak</h5></a>
                    <p class="card-text"><p><span style="font-size:11pt"><strong><span style="font-size:12.0pt">Teknologi</span></strong><span style="font-size:12.0pt"> - Teknologi - Media sosial Instagram merilis fitur-fitur baru. Salah satunya website mengembalikan akun Instagra</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mr-2" style="width: 17.2rem; height: 30rem; ">
                <img class="card-img-top" src="{{asset('assets/img/berita/tekno.jpg')}}" alt="Card image cap">
                <div class="card-body">
                <a class="nav-item" href="konten.php?id_berita=79"><h5 class="card-title">IDC Perkirakan Pengapalan Perangkat Wearable Capai 539 juta Unit Pada 2023</h5></a>
                    <p class="card-text"><p><span style="font-size:11pt"><strong><span style="font-size:12.0pt">Teknologi</span></strong><span style="font-size:12.0pt"> - Teknologi- Pasar perangkat wearable bergerak maju dengan pertumbuhan secara tahunan (Year over Year, YoY) sebe</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('lainnya')
<div class="row mb-5">
    <div class="card" style="width: 100%;">
        <div class="card-body">
            <div class="col">
            <div class="row my-4 ml-4">
                <h3>Lainnya<hr style="height:6px;border-width:0;  ;background-color: #5EA6E5"></h3>
            </div>
        <div class="row">
                <div class="col-3 mt-2 mb-4 ml-2 zoom-effect">
                    <div class="kotak ml-3">
                        <img src="{{asset('assets/img/berita/324-gunung.jpg')}}" style="height: 150px;">
                    </div>
                </div>
                <div class="col-7 mt-2 ml-5">
                    <div class="row">
                        <p style="color:black; font-weight:bold;"> Wisata </p><p class="ml-2" style="color:black;"> 2022-12-13 </p>
                    </div>
                    <div class="row ">
                        <a class="nav-item" href="konten.php?id_berita=76"><h3 style="font-weight: bold;">Daftar 9 Tempat Wisata Salatiga, Cocok untuk Refreshing</h3></a>
                    </div>
                    <div class="row">
                        <p><p><span style="font-size:11pt"><strong><span style="font-size:12.0pt">Salatiga</span></strong><span style="font-size:12.0pt">&nbsp;-Salatiga merupakan wilayah yang cukup strategis karena terletak di antara Semarang, Ambarawa, Magelang, dan Surakarta. Letak geografis yang strategis dan pilihan wisata Salatiga yang bera</p>
                    </div>
                </div>
            </div>
            <div class="border-bottom mb-3"></div>            
                                        <div class="row">
                <div class="col-3 mt-2 mb-4 ml-2 zoom-effect">
                    <div class="kotak ml-3">
                        <img src="{{asset('assets/img/berita/tekno.jpg')}}" style="height: 150px;">
                    </div>
                </div>
                <div class="col-7 mt-2 ml-5">
                    <div class="row">
                        <p style="color:black; font-weight:bold;"> Teknologi </p><p class="ml-2" style="color:black;"> 2022-12-27 </p>
                    </div>
                    <div class="row ">
                        <a class="nav-item" href="konten.php?id_berita=79"><h3 style="font-weight: bold;">IDC Perkirakan Pengapalan Perangkat Wearable Capai 539 juta Unit Pada 2023</h3></a>
                    </div>
                    <div class="row">
                        <p><p><span style="font-size:11pt"><strong><span style="font-size:12.0pt">Teknologi</span></strong><span style="font-size:12.0pt"> - Teknologi- Pasar perangkat wearable bergerak maju dengan pertumbuhan secara tahunan (Year over Year, YoY) sebesar 1,7 persen pada kuartal ketiga 2022 (Q3 2022). Namun, pengapalan global untu</p>
                    </div>
                </div>
            </div>
            <div class="border-bottom mb-3"></div>            
                                        <div class="row">
                <div class="col-3 mt-2 mb-4 ml-2 zoom-effect">
                    <div class="kotak ml-3">
                        <img src="{{asset('assets/img/berita/bajak.jpeg')}}" style="height: 150px;">
                    </div>
                </div>
                <div class="col-7 mt-2 ml-5">
                    <div class="row">
                        <p style="color:black; font-weight:bold;"> Teknologi </p><p class="ml-2" style="color:black;"> 2022-12-20 </p>
                    </div>
                    <div class="row ">
                        <a class="nav-item" href="konten.php?id_berita=87"><h3 style="font-weight: bold;">Cara Baru Pulihkan Akun Instagram yang Dibajak</h3></a>
                    </div>
                    <div class="row">
                        <p><p><span style="font-size:11pt"><strong><span style="font-size:12.0pt">Teknologi</span></strong><span style="font-size:12.0pt"> - Teknologi - Media sosial Instagram merilis fitur-fitur baru. Salah satunya website mengembalikan akun Instagram yang dibajak!. Fitur baru yang diluncurkan oleh anak perusahaan Meta ini mengk</p>
                    </div>
                </div>
            </div>
            <div class="border-bottom mb-3"></div>            
                                        <div class="row">
                <div class="col-3 mt-2 mb-4 ml-2 zoom-effect">
                    <div class="kotak ml-3">
                        <img src="{{asset('assets/img/berita/pildun.jpg')}}" style="height: 150px;">
                    </div>
                </div>
                <div class="col-7 mt-2 ml-5">
                    <div class="row">
                        <p style="color:black; font-weight:bold;"> Politik </p><p class="ml-2" style="color:black;"> 2022-12-19 </p>
                    </div>
                    <div class="row ">
                        <a class="nav-item" href="konten.php?id_berita=77"><h3 style="font-weight: bold;">Selamat Argentina Juara Piala Dunia</h3></a>
                    </div>
                    <div class="row">
                        <p><p><span style="font-size:11pt"><strong><span style="font-size:12.0pt">Olahraga</span></strong><span style="font-size:12.0pt"> - Intenasional - Timnas Argentina resmi jadi juara Piala Dunia 2022 setelah di partai final mengalahkan Prancis . Duel Argentina vs Prancis ini berlangsung di Lusail Stadium, Minggu (18/12/2022</p>
                    </div>
                </div>
            </div>
            <div class="border-bottom mb-3"></div>            
                                        <div class="row">
                <div class="col-3 mt-2 mb-4 ml-2 zoom-effect">
                    <div class="kotak ml-3">
                        <img src="{{asset('assets/img/berita/wapres.jpeg')}}" style="height: 150px;">
                    </div>
                </div>
                <div class="col-7 mt-2 ml-5">
                    <div class="row">
                        <p style="color:black; font-weight:bold;"> Politik </p><p class="ml-2" style="color:black;"> 2022-12-27 </p>
                    </div>
                    <div class="row ">
                        <a class="nav-item" href="konten.php?id_berita=78"><h3 style="font-weight: bold;">Isu Reshuffle Kabinet, Wapres Ma’ruf: Kita Tunggu Saja </h3></a>
                    </div>
                    <div class="row">
                        <p><p><span style="font-size:11pt"><strong><span style="font-size:12.0pt">Politik</span></strong><span style="font-size:12.0pt"> - Politik- Presiden Joko Widodo atau Jokowi mengungkapkan kemungkinan adanya reshuffle atau perombakan kabinet. Terkait wacana itu, Wakil Presiden Ma’ruf Amin menyatakan hal tersebut sepenuhny</p>
                    </div>
                </div>
            </div>
            <div class="border-bottom mb-3"></div>            
                                        <div class="row">
                <div class="col-3 mt-2 mb-4 ml-2 zoom-effect">
                    <div class="kotak ml-3">
                        <img src="{{asset('assets/img/berita/pemilu.jpeg')}}" style="height: 150px;">
                    </div>
                </div>
                <div class="col-7 mt-2 ml-5">
                    <div class="row">
                        <p style="color:black; font-weight:bold;"> Politik </p><p class="ml-2" style="color:black;"> 2022-12-28 </p>
                    </div>
                    <div class="row ">
                        <a class="nav-item" href="konten.php?id_berita=88"><h3 style="font-weight: bold;">KPU Tetap Pakai Kotak Suara Kardus di Pemilu 2024, tapi Versi Upgrade</h3></a>
                    </div>
                    <div class="row">
                        <p><p><span style="font-size:11pt"><strong><span style="font-size:12.0pt">Politik</span></strong><span style="font-size:12.0pt"> - Komisi Pemilihan Umum (KPU) akan kembali menggunakan kotak suara kardus di Pemilu 2024. Komisioner KPU Yulianto Sudrajat berkata kotak suara kardus yang digunakan berbeda dengan versi Pemilu 2</p>
                    </div>
                </div>
            </div>
            <div class="border-bottom mb-3"></div>            
                                        <div class="row">
                <div class="col-3 mt-2 mb-4 ml-2 zoom-effect">
                    <div class="kotak ml-3">
                        <img src="{{asset('assets/img/berita/kroasia.jpeg')}}" style="height: 150px;">
                    </div>
                </div>
                <div class="col-7 mt-2 ml-5">
                    <div class="row">
                        <p style="color:black; font-weight:bold;"> Olahraga </p><p class="ml-2" style="color:black;"> 2022-12-13 </p>
                    </div>
                    <div class="row ">
                        <a class="nav-item" href="konten.php?id_berita=71"><h3 style="font-weight: bold;">Momen Kroasia Cukur Argentina 3-0 di Piala Dunia</h3></a>
                    </div>
                    <div class="row">
                        <p><p><span style="font-size:11pt"><strong><span style="font-size:12.0pt">Medan</span></strong><span style="font-size:12.0pt"> - Laga Argentina vs Kroasia pada semifinal Piala Dunia 2022 merupakan pertemuan ketiga antara dua negara tersebut di ajang empat tahunan. Argentina dan Kroasia sudah pernah dua kali bertemu di Pia</p>
                    </div>
                </div>
            </div>
            <div class="border-bottom mb-3"></div>            
                                        <div class="row">
                <div class="col-3 mt-2 mb-4 ml-2 zoom-effect">
                    <div class="kotak ml-3">
                        <img src="{{asset('assets/img/berita/brasil_169.jpeg')}}" style="height: 150px;">
                    </div>
                </div>
                <div class="col-7 mt-2 ml-5">
                    <div class="row">
                        <p style="color:black; font-weight:bold;"> Olahraga </p><p class="ml-2" style="color:black;"> 2022-12-13 </p>
                    </div>
                    <div class="row ">
                        <a class="nav-item" href="konten.php?id_berita=73"><h3 style="font-weight: bold;">3 Percakapan Internal Brasil yang Dibongkar Neymar</h3></a>
                    </div>
                    <div class="row">
                        <p><p><span style="font-size:11pt"><strong><span style="font-size:12.0pt">Jakarta </span></strong><span style="font-size:12.0pt">- Neymar</span><span style="font-size:12.0pt">&nbsp;Stoner&nbsp;Bintang Brasil Neymar menghibur rekan-rekan setimnya usai Tim Samba gagal di Piala Dunia 2022 karena kalah adu penalti lawan Kroas</p>
                    </div>
                </div>
            </div>
            <div class="border-bottom mb-3"></div>            
                                        <div class="row">
                <div class="col-3 mt-2 mb-4 ml-2 zoom-effect">
                    <div class="kotak ml-3">
                        <img src="{{asset('assets/img/berita/diabetes.jpeg')}}" style="height: 150px;">
                    </div>
                </div>
                <div class="col-7 mt-2 ml-5">
                    <div class="row">
                        <p style="color:black; font-weight:bold;"> Olahraga </p><p class="ml-2" style="color:black;"> 2022-12-13 </p>
                    </div>
                    <div class="row ">
                        <a class="nav-item" href="konten.php?id_berita=74"><h3 style="font-weight: bold;">6 Olahraga untuk Diabetes</h3></a>
                    </div>
                    <div class="row">
                        <p><p><span style="font-size:11pt"><strong><span style="font-size:12.0pt">Jakarta - </span></strong><span style="font-size:12.0pt">Olahraga tak bisa dilakukan sembarangan. Ada macam-macam olahraga salah satunya adalah olahraga untuk diabetes.Jika Anda memiliki diabetes tipe 2, berolahraga secara teratur dapat membantu And</p>
                    </div>
                </div>
            </div>
            <div class="border-bottom mb-3"></div>            
            <div class="row">
                <div class="col-3 mt-2 mb-4 ml-2 zoom-effect">
                    <div class="kotak ml-3">
                        <img src="{{asset('assets/img/berita/sambo.jpg')}}" style="height: 150px;">
                    </div>
                </div>
                <div class="col-7 mt-2 ml-5">
                    <div class="row">
                        <p style="color:black; font-weight:bold;"> Kriminal </p><p class="ml-2" style="color:black;"> 2022-12-13 </p>
                    </div>
                    <div class="row ">
                        <a class="nav-item" href="konten.php?id_berita=62"><h3 style="font-weight: bold;">Richard Eliezer Berikan Pistol HS Milik Brigadir Yosua Ke FS Sebelum Pembunuhan</h3></a>
                    </div>
                    <div class="row">
                        <p><p><span style="font-size:11pt"><strong><span style="font-size:12.0pt"><span style="color:black">Ferdy Sambo</span></span></strong><span style="font-size:12.0pt"><span style="color:black"> - Richard Eliezer Pudihang Lumiu sempat memberikan pistol HS milik Nofriansyah Yosua Hutabarat alias Brigadir Yosua ke Ferdy Sambo </p>
                    </div>
                </div>
            </div>
            <div class="border-bottom mb-3"></div>            
                                        <div class="row">
                <div class="col-3 mt-2 mb-4 ml-2 zoom-effect">
                    <div class="kotak ml-3">
                        <img src="{{asset('assets/img/berita/ganja.jpeg')}}" style="height: 150px;">
                    </div>
                </div>
                <div class="col-7 mt-2 ml-5">
                    <div class="row">
                        <p style="color:black; font-weight:bold;"> Kriminal </p><p class="ml-2" style="color:black;"> 2022-12-13 </p>
                    </div>
                    <div class="row ">
                        <a class="nav-item" href="konten.php?id_berita=64"><h3 style="font-weight: bold;">Polisi Tangkap Kurir Bawa 1,3 Ton Ganja di Medan</h3></a>
                    </div>
                    <div class="row">
                        <p><p><span style="font-size:11pt"><strong><span style="font-size:12.0pt">Medan-</span></strong><span style="font-size:12.0pt"> Satuan Narkoba Polrestabes Medan menangkap seorang kurir narkotika inisial M (23) di dekat fly over, Jalan Jamin Ginting, Kota Medan, Sumatera Utara pada Senin (13/12).Total barang bukti narkotik</p>
                    </div>
                </div>
            </div>
            <div class="border-bottom mb-3"></div>            
                                        <div class="row">
                <div class="col-3 mt-2 mb-4 ml-2 zoom-effect">
                    <div class="kotak ml-3">
                        <img src="{{asset('assets/img/berita/meikarta.jpeg')}}" style="height: 150px;">
                    </div>
                </div>
                <div class="col-7 mt-2 ml-5">
                    <div class="row">
                        <p style="color:black; font-weight:bold;"> Bisnis </p><p class="ml-2" style="color:black;"> 2022-12-13 </p>
                    </div>
                    <div class="row ">
                        <a class="nav-item" href="konten.php?id_berita=63"><h3 style="font-weight: bold;">Apartemen Meikarta Masih Dijual Online, Segini Harganya</h3></a>
                    </div>
                    <div class="row">
                        <p><p><span style="font-size:11pt"><strong><span style="font-size:12.0pt">Jakarta -</span></strong><span style="font-size:12.0pt"> Di tengah gonjang ganjing apartemen Meikarta yang diamuk konsumen, ternyata masih ada yang menjual unit barunya di situs jual beli online. Salah satunya seperti di situs rumah.com.Melansir dar</p>
                    </div>
                </div>
            </div>
            <div class="border-bottom mb-3"></div>            
                                        <div class="row">
                <div class="col-3 mt-2 mb-4 ml-2 zoom-effect">
                    <div class="kotak ml-3">
                        <img src="{{asset('assets/img/berita/salon.jpg')}}" style="height: 150px;">
                    </div>
                </div>
                <div class="col-7 mt-2 ml-5">
                    <div class="row">
                        <p style="color:black; font-weight:bold;"> Bisnis </p><p class="ml-2" style="color:black;"> 2022-12-13 </p>
                    </div>
                    <div class="row ">
                        <a class="nav-item" href="konten.php?id_berita=66"><h3 style="font-weight: bold;">Natal Jadi Berkat Bagi Bisnis Salon, Pengunjung Meningkat Dua Kali Lipat</h3></a>
                    </div>
                    <div class="row">
                        <p><p><span style="font-size:11pt"><strong><span style="font-size:12.0pt"><span style="color:#333333">Medan -</span></span></strong><span style="font-size:12.0pt"><span style="color:#333333"> Menjelang perayaan hari Natal dan Tahun Baru 2023, pengunjung salon kecantikan di Kota Medan meningkat hingga dua kali lipat diband</p>
                    </div>
                </div>
            </div>
            <div class="border-bottom mb-3"></div>            
        </div>
        </div>  
    </div>
</div>
@endsection