@extends('template.index')
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-dark mx-auto my-4">Daftar Komentar</h2>
            <hr style="border-top: 1px solid grey;">
                <p class="ml-2">
                    <a href="/admin">Home</a> / <a href="komentar.php">Moderasi Komentar</a>
                </p>
            <hr style="border-top: 1px solid grey;">
        </div>
    </div>
    <div class="card mx-3 my-3" style="width: 65rem;">
        <div class="card-header">
            Daftar Komentar
        </div>

        <ul class="list-group list-group-flush">
        <div class=" mx-3 my-3">

            <table class="table table-bordered">
                <thead>
                  <tr style="background-color: white;">
                    <th style="width: 2%;" scope="col">No</th>
                    <th style="width: 15%;" scope="col">Nama</th>
                    <th style="width: 15%;" scope="col">Email</th>
                    <th style="width: 15%;" scope="col">Judul Berita</th>
                    <th style="width: 15%;" scope="col">Isi Komentar</th>
                    <th style="width: 8%;" scope="col">Status</th>
                    <th style="width: 30%;" scope="col">Tindakan</th>
                  </tr>
                </thead>
                <tbody>






@endsection
