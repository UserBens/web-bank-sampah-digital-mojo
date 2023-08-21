@extends('admin.dashboard.layouts.main')

@section('container')
<div class="row justify-content-center my-3">
    <div class="col-lg-8">
        <h2 class="mb-3">{{ $post->title }}</h2>

        @if ($post->image)
        <div class="mb-3">
            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->title }}">
        </div>
        @endif

        <article class="my-3 fs-6 text-break">
            {!! $post->body !!}
        </article>

        <div class="d-flex justify-content-between align-items-center mt-3">
            <a href="/dashboard/postingan" class="btn btn-success">
                <span data-feather="arrow-left"></span> Kembali ke Semua Postingan Saya
            </a>
        </div>
        
    </div>
</div>
@endsection
