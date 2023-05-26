@extends('template.index')

@section('content')
    <form action="{{ route('store-kategori') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="kategori">Nama Kategori</label>
            <input type="text" name="kategori" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Kategori</button>
    </form>
@endsection
