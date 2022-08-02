<?php
include_once("core.php");
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "aitreact";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM product Where pname='".$_POST['brand']."'";
$rs= mysqli_query($conn,$sql);
//echo"$sql";
$json_array= array();
while($rw = mysqli_fetch_assoc($rs)){
//echo $rw['tbname'];
$sql1="SELECT * FROM $rw[tbname]";
$rs1= mysqli_query($conn,$sql1);
while($rw1 = mysqli_fetch_assoc($rs1)){
$json_array[]=$rw1;
}
}
echo $rw['tbname'];
//echo"$sql1";
echo json_encode($json_array);
?>