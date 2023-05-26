<nav class="navbar navbar-expand-md navbar-dark bg-custom sticky-top atas">
    <div class="navbar-toggler-right">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse flex-column " id="navbar">
        <div class=" row navbar-nav  w-100 justify-content-start px-3 mb-2">
            <div class="col">
              <a class="navbar-brand" href="#"><img class="logo" src="{{asset('assets/img/logo/c.png')}}" alt="logo"></a>
            </div>
                <div class="row">
                    
                    @guest
                    <a class="btn btn-outline-custom ml-auto my-3" href="pengguna/login" role="button">Log In</a>
                    <a class="btn btn-custom mx-3 my-3" href="pengguna/register" role="button">Register</a>
                    @endguest

                    @auth
                        <a class="btn btn-custom mx-3 my-3">{{ Auth::user()->username }}</a>
                        <form action="/pengguna/logout" method="post">
                            @csrf
                            <button class="btn btn-outline-custom mx-3 my-3" type="submit">Logout</button>
                        </form>
                    @endauth
                </div>
                            
    </div>
    <div class="navbar-nav justify-content-start w-100 bg-custom px-3 row">
        <div class="navbar-nav mt-2 col">
            <a class="nav-item nav-link" href="index.php"><h6>BERITA UTAMA</h6></a>
           <!-- <a class="nav-item nav-link" href="halaman.php?id_kategori=1"><h6>DUNIA</h6></a>
            <a class="nav-item nav-link" href="halaman.php?id_kategori=4"><h6>BISNIS</h6></a>
            <a class="nav-item nav-link" href="halaman.php?id_kategori=5"><h6>TEKNOLOGI</h6></a>
            <a class="nav-item nav-link" href="halaman.php?id_kategori=2"><h6>OLAHRAGA</h6></a>
            <a class="nav-item nav-link" href="halaman.php?id_kategori=6"><h6>POLITIK</h6></a>
            <a class="nav-item nav-link" href="halaman.php?id_kategori=7"><h6>WISATA</h6></a>-->
            <a class="nav-item nav-link" href="dunia"><h6>Dunia</h6></a>
            <a class="nav-item nav-link" href="olahraga"><h6>Olahraga</h6></a>                        
            <a class="nav-item nav-link" href="hiburan"><h6>Hiburan</h6></a>                        
            <a class="nav-item nav-link" href="bisnis"><h6>Bisnis</h6></a>                        
            <a class="nav-item nav-link" href="teknologi"><h6>Teknologi</h6></a>                        
            <a class="nav-item nav-link" href="politik"><h6>Politik</h6></a>                        
            <a class="nav-item nav-link" href="wisata"><h6>Wisata</h6></a>                        
            <a class="nav-item nav-link" href="kriminal"><h6>Kriminal</h6></a>  
        </div>    
        <div>
            <a class="nav-item nav-link mt-2 mx-auto" href="cari.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </a>
        </div>
    </div>
</nav>