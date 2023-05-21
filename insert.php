<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health_helpers";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$fname=$_REQUEST['F_name'];
$phone=$_REQUEST['P_number'];
$mail=$_REQUEST['mail'];
$pass=$_REQUEST['pass'];
$button=$_REQUEST['button'];

$sql = "INSERT INTO registration (F_name,P_number,mail,pass,button )
VALUES ('$fname',' $phone','$mail','$pass','$button' )";

if (mysqli_query($conn, $sql)) {
  echo "Ragistration successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>