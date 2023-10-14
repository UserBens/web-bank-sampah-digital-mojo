@extends('admin.dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/beranda" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="nama_file" class="form-label">File Name</label>
                <input type="text" class="form-control @error('nama_file') is-invalid @enderror" id="nama_file"
                    name="nama_file" value="{{ old('nama_file') }}">
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

            <button type="submit" class="btn btn-primary mb-5">Create Post</button>
        </form>
    </div>
@endsection
