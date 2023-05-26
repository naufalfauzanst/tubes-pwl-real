@extends('template.index')
@section('content')




    <!-- Begin Page Content -->


    <div class="container-fluid">

        

        <br><br>

        <a href="/admin/create_post" class="btn btn-primary">Tambah berita</a>

        <br><br>

        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil</strong> {{session('status')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <br><br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">excerpt</th>
                    <th scope="col">content</th>
                    <th scope="col">image</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1; @endphp
                @foreach ($berita as $post)
                    <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->excerpt }}</td>
                        <td>{{ $post->content }}</td>
                        <td><img height="200px" width="200px" src="../asset/img/{{ $post->image }}" alt=""></td>
                        <td>
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-warning">Edit</button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-danger">Hapus</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @php $i++; @endphp
                @endforeach
            </tbody>
        </table>

    </div>


    </div>


@endsection