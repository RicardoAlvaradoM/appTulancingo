<?php 
session_start();
include('connect.php');
$conn = connectDB();


$user = $_POST['UserName'];
$pwd  = $_POST['Password'];
$passwdd = md5($pwd);

//$sql = "SELECT * FROM  users WHERE user_name='".$user."' AND hash='".$passwdd."'";
$sql = mysqli_query($conn, "SELECT * FROM users WHERE user_name ='$user'");

if ($row = mysqli_fetch_assoc($sql)) {
	if ($passwdd == $row['hash']) {
		$_SESSION['iduser']=$row['iduser'];
		$_SESSION['full_name']=$row['full_name'];
		$_SESSION['user_name']=$row['user_name'];

		header("location: main.php");
	}else  {
		echo '<script>alert("usuario o contraseña incorrecta")</script>';
		echo "<script>location.href='index.php'</script>";
	}
}
 ?>