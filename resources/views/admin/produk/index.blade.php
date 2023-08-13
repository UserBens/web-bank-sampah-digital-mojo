<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/custom.css" />
    <style>
        section {
            align-items: center;
            align-content: center;
            background: rgb(189, 186, 186);
        }

        section .paginator {
            margin-left: 550px;
            margin-top: 1100px;
            position: absolute;
            top: 0;
        }

        .card {
            transition: transform 0.3s;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            border: none;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            object-fit: cover;
            height: 200px;
            border-radius: 10px 10px 0 0;
        }

        .card-body {
            height: 400px;
        }

        .card-title {
            font-size: 40px;
            font-weight: bold;
        }

        .card-text {
            font-size: 14px;
            color: #777;
        }

        section .col .card .text-center {
            margin-bottom: 30px;
        }

        section .container .tambah {
            margin-left: 1100px;
            margin-bottom: 30px;
        }

        section .row .rent-price {
            position: absolute;
            align-content: center;
            align-items: center;
            margin-bottom: 300px;
        }
    </style>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">

            <a class="navbar-brand" href="./index.html"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-success py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h3 class="display-4 fw-bolder">Produk dari olahan Sampah</h3>
                <h1 class="lead fw-normal text-white-50 mb-0">
                    Jl.Konoha raya No.24
                </h1>
            </div>
        </div>
    </header>

    <!-- Section-->
    <section class="py-5 bg-dark">
        <div class="container px-4 px-lg-5 mt-5 bg-dark">
            <div class="bungkus">
                <h3 class="text-center mb-5">Daftar Produk</h3>
                <div class="tambah">
                    <a href="/add-produk" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>tambah</a>
                </div>
                <div class="row gx-7 row-cols-8 row-cols-xl-5 ">
                    @foreach ($data as $dat)
                        <div class="col mb-5 bg-dark text-light">
                            <div class="card border-warning h-75" ;>
                                <img class="card-img-top" src="{{ asset('img/' . $dat->gambar) }}" alt="..." />
                                <div class="card-body card-body-custom pt-4 bg-dark">
                                    <div class="text-center">
                                        <ul class="list-unstyled list-style-group">
                                            <li>
                                                <span>{{ $dat->nama_produk }}</span>
                                                <span style="font-weight: 600"></span>
                                            </li>
                                        </ul>
                                        <div class="rent-price mb-3">
                                            <span class="text-primary"><span>Rp. </span>{{ $dat->harga }}</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product actions-->

                                <div class="text-center bg-dark">
                                    <a href="/edit/{{ $dat->id }}" class="btn btn-primary text-light"><i
                                            class="fas fa-pencil-alt"></i> Edit</a>
                                </div>

                            </div>

                        </div>
                    @endforeach
                </div>
                <div class="paginator bg-dark">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">
                &copy; TIM PPK ORMAWA UNTAG SURABYA
            </p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="js/bootstrap.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>