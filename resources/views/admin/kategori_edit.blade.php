@extends('template.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-dark mx-auto my-4">Edit Kategori</h2>
            <hr style="border-top: 1px solid grey;">
            <p class="ml-2">
                <a href="admin.php">Home</a> / <a href="pengguna.php">Pengguna</a> / <a href="pengguna.php">Edit Pengguna</a>
            </p>
            <hr style="border-top: 1px solid grey;">
        </div>
    </div>

    <div class="row">
        <div class="card mx-3 my-3" style="width: 65rem;">
            <div class="card-header">
                Edit Kategori
            </div>
            <div class=" mx-2 my-2 row">
                <form action="{{route('edit_katt', ['id' => $kategori->id])}}" method="POST" class="my-login-validation mt-3 ml-3" novalidate="">
                    @csrf
                    @method('PUT')    
                    <div class="form-group">
                        <label for="kategori">Nama Kategori</label>
                        <input id="kategori" type="text" class="form-control" name="nama_kategori" value="{{$kategori->nama_kategori}}" required>
                        <div class="invalid-feedback">
                            Silahkan isi username anda
                        </div>
                    </div>

                    <div class="form-group m-0">
                        <button type="submit" class="btn btn-primary btn-block">
                            Ubah Nama
                        </button>
                    </div>
                </form>
            </div>			
        </div>
    </div>
</div>
@endsection
