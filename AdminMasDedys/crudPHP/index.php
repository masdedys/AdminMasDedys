<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP | masdedys.github.io</title>
    <link rel="shortcut icon" href="../../assets/img/logo.png" />
</head>

<body>
    <h1>Buku Tamu</h1>
    <button value="Tambah"><a href="add.php">Tambah</a></button><br><br>
    <?php
    include "connection.php";
    $display = "select*from guestbook order by id";
    $query = mysqli_query($conn, $display);
    $total = mysqli_num_rows($query);
    $no = 1;
    echo "
        <table border='1'>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Email</td>
                <td>Pesan</td>
                <td>Proses</td>
            </tr>";
    while ($data = mysqli_fetch_array($query)) {
        echo "
                <tr>
                    <td>$no</td>
                    <td>$data[name]</td>
                    <td>$data[email]</td>
                    <td>$data[message]</td>
                    <td><a href=\"edit.php?id=$data[id]\">Edit</a> | <a href=\"delete_process.php?id=$data[id]\">Delete</a></td>
                </tr>";
        $no++;
    }

    echo "</table><br><br>";

    echo "Jumlah data buku tamu: <b>$total</b>";
    ?>

</body>

</html>