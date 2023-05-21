<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health_helpers";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
$user=$_REQUEST['mail'];
$pass=$_REQUEST['pass'];

$sql = "UPDATE health_helpers.registration SET pass= '$pass' WHERE mail='$user'";

if(mysqli_query($conn,$sql)){
    header('location:Login.php');
}
else{
    echo "Error updating record: ".mysqli_error($conn);
}

mysqli_close($conn);
?>