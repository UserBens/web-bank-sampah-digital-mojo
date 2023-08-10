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
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/custom.css" />

    <style>
      
    .form-wrapper {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      width: 570px;
      margin: 0 auto;
      margin-top: -15px;
    }

    .form-wrapper h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-wrapper label {
      font-weight: bold;
    }

    .form-wrapper .form-control {
      margin-bottom: 10px;
    }

    .form-wrapper .btn-primary {
      width: 100%;
    }
   
    </style>
  </head>
  <body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
          <h3 class="display-4 fw-bolder">KAGE'S VAPE STORE</h3>
          <h1 class="lead fw-normal text-white-50 mb-0">
          Jl.Konoha raya No.24
          </h1>
        </div>
      </div>
    </header>
    <!-- Section-->
    < <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="form-wrapper">
              <form action="/add" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- form text field -->
                <div class="mb-3">
                  <label for="exampleInputText" class="form-label">Gambar</label>
                  <input type="file" class="form-control"  id="gambar" name="gambar" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">Ex: Msukan Gambar</div>
                </div>
                <!-- end form text field -->
                
                <!-- form text field -->
                <div class="mb-3">
                  <label for="exampleInputText" class="form-label">Detail Produk</label>
                  <input type="text" class="form-control" id="nama_produk" name="nama_produk" aria-describedby="emailHelp">
                </div>
                  <!-- form text field -->
                  <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" aria-describedby="emailHelp">
                  </div>
                <!-- end form text field -->
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">
        1462100150 &copy; Pandunata Syakurta Gansa
        </p>
      </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="js/bootstrap.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  </body>
</html>
