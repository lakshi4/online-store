<?php

$hostname = "localhost:8111"; 
$username = "root";
$password = "";
$databaseName = "sliit_db"; 

$connect = mysqli_connect($hostname, $username, $password, $databaseName);


if (isset($_POST['submit'])) {

    if(!empty($_POST['developerid'])){

        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $developerid = $_POST["developerid"];
        $dposition = $_POST["dposition"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $phonenumber = $_POST["phonenumber"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        $image = $_POST["image"];


        if (empty($firstname)) {
            echo ("Please enter your First Name!");
        } else if (strlen($firstname) > 50) {
            echo ("Policy Number must have LESS THAN 50 characters!");
        }else if (empty($lastname)) {
            echo ("Please enter your Last Name!");
        } else if(empty($developerid)){
            echo("Please enter your developerid!");
        }else if(empty($email)){
            echo("Please enter your Email address!");
        }else if(empty($dposition)){
            echo("Please enter your Address!");
        }else if(strlen($email)>100){
            echo ("Email must have LESS THAN 100 characters!");
        }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo ("Invalid Email address!");
        }else if(empty($phonenumber)){
            echo ("Please enter your Mobile Number!");
        }else if(strlen($phonenumber) != 10){
            echo ("Mobile Number must contain 10 characters");
        }else if(!preg_match("/07[0,1,2,4,5,6,7,8][0-9]/",$phonenumber)){
            echo ("Invalid Mobile Number!");
        }else{

        $query = "INSERT INTO `dev`(`firstname`, `lastname`, `email`, `password`, `developerid`, `dposition`, `gender`, `confirmpassword`, `image`, `phonenumber`) VALUES 
        ('$firstname','$lastname','$email','$password','$developerid','$dposition','$gender','$confirmpassword','$image','$phonenumber')";
        $run = mysqli_query($connect,$query);

        if($run){
            echo "Register Successfully";
        }else{
            echo "Register Unsuccessfull";
        }
    }
    }else{
        echo "Fill all details";
    }

}
