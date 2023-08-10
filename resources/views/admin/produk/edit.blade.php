<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/custom.css" />

    <style>
      

   
    </style>
  </head>
  <body>
    <!-- Navigation-->
    <div class="container bg-dark display-flex lg-200px">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="./index.html"></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        </div>
      </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
      <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
          <h3 class="display-4 fw-bolder">BANK SAMPAH DIGITAL</h3>
          <h1 class="lead fw-normal text-white-50 mb-0">
          Jl.Konoha raya No.24
          </h1>
        </div>
      </div>
    </header>
    <!-- Section-->
    <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="form-wrapper">
              <form action="/edit-produk" method="post" enctype="multipart/form-data">
                @csrf
                <!-- form text field -->
               <input type="hidden" class="form-control" id="id" name="id" value =" {{$data->id }}">
                <div class="mb-3">
                  <label for="exampleInputText" class="form-label">Gambar</label>
                  <input type="file" class="form-control"  id="gambar" name="gambar" aria-describedby="emailHelp" value="{{$data->gambar }}"
				  aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">Ex: Masukan Gambar</div>
                </div>
                <!-- end form text field -->
                
                <!-- form text field -->
                <div class="mb-3">
                  <label for="exampleInputText" class="form-label">Detail Produk</label>
                  <input type="text" class="form-control" id="nama_produk" name="nama_produk" aria-describedby="emailHelp" value="{{$data->nama_produk}}">
                </div>
                  <!-- form text field -->
                  <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" aria-describedby="emailHelp" value="{{$data->harga}}">
                  </div>
                <!-- end form text field -->
                <div class="text-center">
                  <a href="http://127.0.0.1:8000/indexpro" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>SUBMIT</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark pt-5">
      <div class="container">
        <p class="m-0 text-center text-white">
       &copy; TIM PPK ORMAWA UNTAG SURABYA 
        </p>
      </div>
    </footer>
    </div>
   
    <!-- Bootstrap core JS-->
    <script src="js/bootstrap.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  </body>
</html>
