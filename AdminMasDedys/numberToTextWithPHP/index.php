<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ubah Angka menjadi Huruf | by mas_dedys</title>
    <link rel="shortcut icon" href="img/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
  <body>
    <section class="content container position-absolute top-50 start-50 translate-middle">
        <div class="row text-center">
            <div class="col-md">
                <h2>Ubah Angka menjadi Huruf</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md">
                <form action="" method="get">
                    <label for="text" class="mb-3">Masukan angka:</label><br>
                    <input type="number" class="form-control mb-3" id="text" placeholder="Masukkan Angka" name="angka">
                    <button type="submit" name="send" class="btn btn-primary mb-3"><i class="bi bi-justify-left"></i> Proses</button>
                </form>
            </div>
        </div>
        <?php
        if (isset($_GET['send'])) {
            include "cetakhurufdariangka.php";
            $angka = $_GET['angka'];
            $formatangka = number_format($angka, 0, ",", ",");
            $tertulisangka = ucwords(tertulis($angka));
            echo "<label for=\"text\" class=\"mb-3\"><b>Angka Anda: $formatangka</b></label><br>";
            echo "<label for=\"text\" class=\"mb-3\"><b>Tertulis: $tertulisangka</b></label><br>";
        }
        ?>
    </section>
    <section class="credit">
      <div class="container-fluid fixed-bottom p-4" style="background-color: #e2edff;">
        <div class="row">
          <div class="col-md">
            <p class="text-center">Created with <i class="bi bi-cup-hot-fill"></i> and <i class="bi bi-heart-fill"></i> <a href="https://masdedys.github.io/"> by mas_dedys</a>. | &copy; 2023</p>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="script.js"></script>
</body>
</html>