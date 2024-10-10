<?php
include './connect.php';
if(isset($_GET['deleteid'])){
    $pname=$_GET['deleteid'];
    
    $sql = "DELETE FROM user WHERE id = $pname";

    $result=mysqli_query($con,$sql);
    if($result){
        //echo"Deleted successfull";
        header('location:home.php');
    }else{
        die(mysqli_error($con));
    }
}