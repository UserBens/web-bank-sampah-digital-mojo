@extends('admin.dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Post</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/postingan/{{ $post->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Menggunakan method PUT untuk update -->

            <div class="mb-3">
                <label for="id" class="form-label">File Name</label>
                <input type="text" class="form-control @error('id') is-invalid @enderror" id="id"
                    name="id" value="{{ old('id', $post->id) }}">
                @error('nama_file')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Post File</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-5">Update Post</button>
        </form>
    </div>
@endsection
