@extends('template.index')

@section('content')
    <h3 class="mt-4">Berhasil</h3>
    <h4 >Kategori baru berhasil dibuat</h4>
    <p><a href="{{ route('kategori') }}" class="btn btn-primary">Kembali ke Kategori</a></p>
@endsection
