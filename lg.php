<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health_helpers";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_SESSION['login_user']))
{
    echo'<script>alert("Registration Successful")</script>';
}

$user=$_REQUEST['mail'];
$pass=$_REQUEST['pass'];

$sql = "SELECT ID FROM registration WHERE mail='$user' and pass='$pass'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);

if($count==1){
    $_SESSION['login_user']=$user;

    header('location:medical.php');
}
else{
    echo '<script>alert("Invalid User Name Or Password")</script>';
}

?>