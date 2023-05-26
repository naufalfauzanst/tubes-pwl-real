@extends('template.index')
@section('content')


<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Postingan</h1>
    </div>

    <br><br>

    <a href="/admin/postingan" class="btn btn-primary">Kembali</a>

    <br><br>
    <div class="col-10">
        <form action="/admin/store_post" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="1" name="author_id">
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" required name="title" value="{{old('title')}}">

                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="excerpt" class="form-label">excerpt</label>
                <textarea type="text" class="form-control @error('excerpt') is-invalid @enderror" id="excerpt" required name="excerpt" value="{{old('excerpt')}}"></textarea>

                @error('excerpt')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="content" class="form-label">content</label>
                <textarea type="text" class="form-control @error('content') is-invalid @enderror" id="content" required name="content" value="{{old('content')}}"></textarea>

                @error('content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{old('image')}}">

                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>


</div>
@endsection