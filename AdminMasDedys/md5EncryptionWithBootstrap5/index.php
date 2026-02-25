<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="30">
    <title>md-5 encryption by mas_dedys</title>
    <link rel="shortcut icon" href="img/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
  <body>
    <section class="container content position-absolute top-50 start-50 translate-middle">
        <div class="row text-center">
            <div class="col-md">
                <h2>MD5 Encryption</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
