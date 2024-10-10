<?php

$sname= "localhost:8111";

$unmae= "root";

$password = "";

$db_name = "sliit_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
 

session_start(); 

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['username']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: login.html?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: login.html?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM `user` WHERE `username`='$uname' AND `password`='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['firstname'] = $row['firstname'];

                header("Location: home.php");

                exit();

            }else{

                header("Location: login.html?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: login.html?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: login.html");

    exit();

}

