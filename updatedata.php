<?php

	include_once("core.php");
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "shopuser";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	$a="SELECT username FROM `usdetail` WHERE email='".$_POST['myEmail']."'";
	$b=mysqli_query($conn,$a);
	$rw = mysqli_fetch_assoc($b);
	$b=$rw['username'];
//echo"$b";
//$a=$_POST['myEmail'];
    $sql = "UPDATE usdetail SET email='".$_POST['myEmail']."',`username`='".$_POST['myUsername']."' WHERE username='".$b."'";
//echo"hello";
    if (mysqli_query($conn,$sql)) {
    $data = array("data" => "You Data UPDATED successfully");
        echo json_encode($data);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>