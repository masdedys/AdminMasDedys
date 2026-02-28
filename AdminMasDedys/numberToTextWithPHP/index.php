<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Change number into text (Indonesia) | masdedys.github.io</title>
    <link rel="shortcut icon" href="../../assets/img/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .copyright {
            background-color: #fff;
        }
        .copyright-item small {
            display: flex;
            height: 60px;
            padding: 0;
            margin: 0;
            justify-content: center;
            align-items: center;
            color: #000;
        }
        .copyright-item small a {
            text-decoration: none;
            color: #000;
        }
        .copyright-item small a:hover {
            color: #434343;
        }
        .copyright small{
            font-size: 16px;
        }
        /* Hidding sections under 960px width */
        @media screen and (max-width: 600px) {
            .copyright small{
                font-size: 14px;
            }
        }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center" style="height: 85vh;">
        <div class="col-md-6">
          <h2>Ubah Angka menjadi Huruf</h2>
          <form action="" method="get">
            <label for="text" class="mb-3">Masukan angka:</label><br>
            <input type="number" class="form-control mb-3" id="text" placeholder="Masukkan Angka" name="angka">
            <button type="submit" name="send" class="btn btn-primary mb-3">Proses</button>
          </form>
          <?php
            if (isset($_GET['send'])) {
                include "cetakhurufdariangka.php";
                $angka = $_GET['angka'];
                $formatangka = number_format($angka, 0, ",", ",");
                $tertulisangka = ucwords(tertulis($angka));
                echo "<label for=\"text\" class=\"mb-3\"><b>Angka: $formatangka</b></label><br>";
                echo "<label for=\"text\" class=\"mb-3\"><b>Terbilang: $tertulisangka</b></label><br>";
            }
          ?>
        </div>
      </div>
    </div>
    <!-- copyright start -->
      <div class="copyright container-fluid">
            <div class="copyright-item container">
                <div class="row">
                    <div class="col-md text-dark">
                        <small>&copy;2026&nbsp;<a href="https://masdedys.github.io/">masdedys.github.io</a>, All Rights Reserved</small>
                    </div>
                </div>
            </div>
      </div>
    <!-- copyright end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="script.js"></script>
</body>
</html>