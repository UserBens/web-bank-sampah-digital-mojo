@extends('admin.dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/produk" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama-produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk"
                    value="{{ old('nama_produk') }}">
                @error('nama_produk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image">
                @error('iamge')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="deskripsi-produk" class="form-label">Body</label>
                <input id="deskripsi_produk" type="hidden" name="deskripsi_produk" value="{{ old('deskripsi_produk') }}">
                <trix-editor input="deskripsi_produk"></trix-editor>
                @error('deskripsi_produk')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-5">Create Post</button>
        </form>
    </div>
    <script>
        const title = document.querySelector('#title');
        // const slugs = document.querySelector('#slug');

        // title.addEventListener('change', function() {
        //     fetch('/dasboard/posts/checkSlug?title=' + title.value + '')
        //         .then(response => response.json())
        //         .then(data => slugs.value = data.slug)
        //     console.log(data.slug);
        // });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventdefault();
        })
    </script>
@endsection
