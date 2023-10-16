<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    {{-- <script src="../assets/js/color-modes.js"></script> --}}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bank Sampah Digital Mojo | Postingan</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <header class="border-bottom lh-1 py-3">

        </header>

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

    <main>

        <div class="album py-5 bg-body-tertiary">
            <div class="container">
                <h3 class="fst-italic mt-4 mb-4 text-center" style="text-decoration: underline;">Postingan Terkini</h3>

                {{-- <div class="input-group mb-4">
                    <input type="text" class="form-control" placeholder="Search.." name="search" id="searchInput" value="{{ request('search') }}">
                    <button class="btn btn-dark" type="button" id="searchButton">Search</button>
                </div>
                
                <div id="searchResults" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <!-- Hasil pencarian akan ditampilkan di sini -->
                </div> --}}
                

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($post as $item)
                        <div class="col">
                            <div class="card shadow-sm">

                                <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                                <div class="card-body">
                                    <p class="card-text">{{ $item->title }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><a
                                                    class="nav-item nav-link link-body-emphasis"
                                                    href="/detail-postingan/{{ $item->id }}">View</a></button>
                                        </div>
                                        {{-- <small class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small> --}}
                                        <small
                                            class="text-body-secondary">{{ $item->created_at->diffForHumans() }}</small>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="d-flex justify-content-center mt-4">
                    {{ $post->links('pagination::bootstrap-4') }}
                </div>

            </div>
        </div>

    </main>

    <footer class="text-body-secondary py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="/postingan">Back to top</a>
            </p>
            <p class="mb-1 text-center">Bank Sampah Digital Mojo 2023</p>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
