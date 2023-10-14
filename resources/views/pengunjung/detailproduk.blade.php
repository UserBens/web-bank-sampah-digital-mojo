<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bank Sampah Digital Mojo | Beranda</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="/css/beranda.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    {{-- <link href="beranda.css" rel="stylesheet"> --}}
</head>

<body>
    <div class="container">
        <header class="border-bottom lh-1 py-3"></header>
        <div class="nav-scroller py-1 mb-3 border-bottom">
            <nav class="nav nav-underline justify-content-between">
                <a class="nav-item nav-link link-body-emphasis" href="/">Beranda</a>
                <a class="nav-item nav-link link-body-emphasis" href="/postingan">Postingan</a>
                <a class="nav-item nav-link link-body-emphasis" href="/produk">Produk</a>
                <a class="nav-item nav-link link-body-emphasis" href="/tentangkami">Tentang Kami</a>
                <a class="nav-item nav-link link-body-emphasis" href="/kontak">Kontak</a>
            </nav>
        </div>
    </div>

    <main class="container">


        <div class="row mb-2 mt-4">
            <h3 class="fst-italic mt-4 mb-4 text-center" style="text-decoration: underline;">Produk Terbaru</h3>
            @foreach ($produks as $item)
                <div class="col-md-4">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                src="{{ asset($item->image) }}" alt="{{ $item->nama_produk }}">
                            <div class="card-body">
                                <p class="card-text">{{ $item->nama_produk }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><a
                                                class="nav-item nav-link link-body-emphasis"
                                                href="/detail-produk/{{ $item->id }}">View</a></button>
                                    </div>
                                    <small class="text-body-secondary">{{ $item->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="fst-italic mt-4 mb-4 text-center" style="text-decoration: underline;">Detail Produk
                </h3>
                <img src="{{ asset($product->image) }}" alt="{{ $product->nama_produk }}"
                    class="bd-placeholder-img card-img-top" width="100%" height="500">
                <h5 class="mt-3"> {{ $product->nama_produk }}</h5>
                <div class="mb-4" style="text-align: justify;">
                    <p>{!! $product->deskripsi_produk !!}</p>
                </div>

            </div>

            <div class="col-md-4 mb-5">
                <div class="position-sticky" style="top: 2rem;">
                    <div>
                        <h4 class="fst-italic mt-4">Postingan Lainnya</h4>
                        <ul class="list-unstyled">
                            <li>
                                @foreach ($post as $item)
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                        href="/detail-postingan/{{ $item->id }}">
                                        <img src="{{ asset($item->image) }}" alt="{{ $item->title }}"
                                            class="bd-placeholder-img" width="100%" height="96" alt="...">

                                        <div class="col-lg-8">
                                            <h6 class="mb-0">{{ $item->title }}</h6>
                                            <small
                                                class="text-body-secondary">{{ $item->created_at->diffForHumans() }}</small>
                                        </div>
                                    </a>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="py-5 text-center text-body-secondary bg-body-tertiar">
        <p>Bank Sampah Digital Mojo 2023 </p>
        <p class="mb-0">
            <a href="#">Back to top</a>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</body>

</html>
