<?php
    include "connection.php";

    if(isset($_POST['kirim'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];
    }

    $input="insert into guestbook (name,email,message) values('$name','$email','$message')";
    $query=mysqli_query($conn,$input);

    if($query){
        header("location:index.php");
    }else{
        echo"input gagal";
    }
?>