<?php
include_once("core.php");
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "aitreact";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    $sql = "INSERT INTO `user`(`fname`, `sname`, `dob`, `uname`, `pass`, `email`, `mob`, `pho`) VALUES ('".$_POST['fname']."','".$_POST['sname']."','".$_POST['dob']."','".$_POST['Username']."','".$_POST['pass']."','".$_POST['Email']."','".$_POST['mono']."', '".$_POST['pho']."')";
	//echo $_POST['mono'];
    if (mysqli_query($conn,$sql)) {
    $data = array("data" => "You Data added successfully");
        echo json_encode($data);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>