<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku Tamu</title>
</head>
<body>
    <h1>Edit Tamu</h1>
    <?php
        include "connection.php";
        $id=$_GET['id'];
        $display_by_id="select * from guestbook where id='$id'";
        $query=mysqli_query($conn,$display_by_id);
        $data=mysqli_fetch_array($query);

        echo"
        <form action=\"edit_process.php\" method=\"post\">
        <table>
        <td><input type=\"hidden\" name=\"id\" id=\"\" value=\"$data[id]\"></td>
            <tr>
                <td><label for=\"\">Nama:</label></td>
                <td><input type=\"text\" name=\"name\" id=\"\" value=\"$data[name]\"></td>
            </tr>
            <tr>
                <td><label for=\"\">Email:</label></td>
                <td><input type=\"email\" name=\"email\" id=\"\" value=\"$data[email]\"></td>
            </tr>
            <tr>
                <td><label for=\"\">Message:</label></td>
                <td><textarea name=\"message\" id=\"\" cols=\"30\" rows=\"10\">$data[message]</textarea></td>
            </tr>
            <tr>
                <td><input type=\"submit\" name=\"update\" value=\"Update\"></td>
            </tr>
        </table>
    </form>
        ";
    ?>
</body>
</html>