<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tamu</title>
</head>
<body>
    <h1>Tambah Tamu</h1>
    <form action="add_process.php" method="post">
        <table>
            <tr>
                <td><label for="">Nama:</label></td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td><label for="">Email:</label></td>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <td><label for="">Message:</label></td>
                <td><textarea name="message" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="kirim" value="Kirim"></td>
            </tr>
        </table>
    </form>
</body>
</html>