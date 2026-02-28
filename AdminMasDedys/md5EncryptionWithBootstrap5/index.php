<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="30">
    <title>md5 encryption | masdedys.github.io</title>
    <link rel="shortcut icon" href="../../assets/img/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
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
        <div class="col-md-6 text-center">
          <h2>MD5 Encryption</h2>
          <form action="" method="post">
            <label for="text" class="mb-3">Tulis text yang akan disandikan:</label><br>
            <input type="text" class="form-control mb-3" id="text" placeholder="Masukkan Text" name="text_asli">
            <button type="submit" name="send" class="btn btn-primary mb-3"><i class="bi bi-key-fill"></i> Sandikan</button>
                    
              <?php
                if (isset($_POST['send'])) {
                  $text_asli = $_POST['text_asli'];
                  $text_eknripsi = md5($_POST['text_asli']);
                  echo "
                    <div class=\"mb-3\">
                      <label class=\"form-label\">Text asli anda:</label>
                      <input type=\"text\" class=\"form-control\" value=\"$text_asli\" disabled>
                    </div>
                    <div class=\"mb-3\">
                      <label class=\"form-label\">Tersandi sebagai:</label>
                      <input type=\"text\" class=\"form-control\" value=\"$text_eknripsi\" disabled>
                    </div>";
                  }
                ?>
          </form>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
