@extends('template.index')

@section('content')
    <div class="card border-danger mx-auto mt-4" style="max-width: 18rem;">
        <h3 align="center" class="mt-4" style="color: red;">Kesalahan</h3>
        <h5 align="center" class="mb-2" style="color: red;">Nama Kategori telah tersedia, silahkan ubah nama kategori yang akan diinput!</h5>
        <div class="row mt-2">
            <div class="col ml-3">
                <p align="right"><a href="{{ route('kategori') }}" class="btn btn-secondary">Kembali ke Kategori</a></p>
            </div>
            <div class="col mr-3">
                <p><a href="{{ route('tambah-kategori') }}" class="btn btn-primary">Tambah Kategori</a></p>
            </div>
        </div>
    </div>
@endsection
