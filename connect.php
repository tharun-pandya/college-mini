<?php
$server="localhost";
$user="root";
$password="";
$dbname="data";
$connect=mysqli_connect($server,$user,$password,$dbname);
if(!$connect){
	die("connection failed check your code".mysqli_connect_error());
}
/*else{
	echo"<script>alert('data base connected successfully');</script>";
}*/
?>