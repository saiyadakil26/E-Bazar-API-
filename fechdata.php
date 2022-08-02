<?php
include_once("core.php");
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "aitreact";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM `user` WHERE uname='".$_POST['Username']."' AND pass='".$_POST['pass']."'";
$rs= mysqli_query($conn,$sql);
//echo"$sql";
$json_array= array();
while($rw = mysqli_fetch_assoc($rs)){
$json_array=array("data"=>$rw);
}
echo json_encode($json_array);
?>