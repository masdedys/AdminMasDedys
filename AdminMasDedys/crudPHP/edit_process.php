<?php
    include "connection.php";
    if(isset($_POST['update'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];
    }
    $update="update guestbook set 
            name='$name',
            email='$email',
            message='$message'
            where id=$id";
    $query=mysqli_query($conn,$update);
    if($query){
        header("location:index.php");
    }else{
        echo"update gagal";
    }
    
?>