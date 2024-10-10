<?php
$con=new mysqli('localhost:8111','root','','sliit_db');

if(!$con){
	die(mysqli_error($con));
}
?>