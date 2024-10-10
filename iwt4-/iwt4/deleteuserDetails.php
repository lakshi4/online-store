<?php
include './connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid '];
    
    $sql = "DELETE FROM `user` WHERE `phonenumber` = $id";

    $result=mysqli_query($con,$sql);
    if($result){
        //echo"Deleted successfull";
        header('location:home.php');
    }else{
        die(mysqli_error($con));
    }
}