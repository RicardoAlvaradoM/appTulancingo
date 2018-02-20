<?php 
 function connectDB(){


 	$server = "localhost";
 	$user =  "root";
 	$pass = "root";
 	$bd = "tramites";


 	$con = mysqli_connect($server,$user, $pass,$bd) or die("ha sucedido un error");

 		return $con;
 }
 ?>