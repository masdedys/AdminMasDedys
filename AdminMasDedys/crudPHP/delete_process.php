<?php
    include "connection.php";
    $id=$_GET['id'];
    $delete="delete from guestbook where id='$id'";
    $query=mysqli_query($conn,$delete);

    if($query){
        header('location:index.php');
    }else{
        echo"hapus data gagal";
    }

?>