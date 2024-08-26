<?php
include "connect.php";
session_start();
if(isset($_POST["signup"])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$pin=$_POST['pin'];
	$password=$_POST['password'];
	$select="SELECT * FROM `signup` WHERE pin='".$pin."' ";
	$check_query=mysqli_query($connect,$select);
	$count=mysqli_num_rows($check_query);
	//$check=mysqli_fetch_assoc($check_query);
	if($count==1){
		echo "<script>alert('User Already Sign-up with same Details');</script>";
	}
	else{
		$query="INSERT INTO `signup`(`pin`, `name`, `email`, `mobile`, `password`) VALUES ('".$pin."','".$name."','".$email."','".$mobile."','".$password."')";
		if(mysqli_query($connect,$query)){
			$_SESSION['name']=$name;
			$_SESSION['email']=$email;
			$_SESSION['mobile']=$mobile;
			$_SESSION['pin']=$pin;
			$_SESSION['password']=$password;
			header('location:home.php');
			}
		else{
			echo "Something went worng.Please check your Details ";
		}
	}
}
?>
<!doctype html>
<html>
<head>
<title>Sign-Up</title>
<link rel="icon" type="image/png" href="images/vishnulogo.png">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="menu.css" rel="stylesheet" />
<style>
.li{
	padding-left:20px;
}
body.img-fluid{
background:url('images/clg2.jpg')no-repeat;
background-size:cover;
max-width: 100%;
height: auto;

}
label,input{
	margin-top:10px;
}

</style>
<script>
function openNav() {
  document.getElementById("myNav").style.width = "250px";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
</head>
<body class="img-fluid">
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn text-end" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
   <ul>
    <li><a href="attendence.php" class="btn" >Attendence</a><li>
    <li><a href="Feedback.php" class="btn" >Feedback</a></li>
    <li><a href="news.php" class="btn" >College NEWS</a></li>
    <li><a href="Backlogs.php" class="btn" >Backlogs</a></li>
	<li><a href="toppers.php" class="btn" >College Toppers</a><li>
	<li><a href="papers.php" class="btn" >Previews Quetion Papers</a><li>
	<li><a href="pdfs.php" class="btn" >Study Material</a><li>
  </ul>
  </div>
</div>
<div class="container">
<div class="row">

<div class="col">
	<div class="row">
		<div class="col ">
			<img src="images/sbsplogo.png" alt="Logo" class="img-fluid">
		</div>
		<div class="col text-end">
		<a href="https://mail.google.com/mail/u/0/?ogbl#sent?compose=CllgCKCHTwTqfTZhHDdjddnBcqXjCnSfjDQPFvxCDjcQJFWlcHzhVsKrNDsrsczHtwVwWLjvqdq" class="text-end text-primary img-fluid"><img src="images/email.svg" alt="mail" /> seethapolytechnic093@gmail.com</a><br>
		<a href="#" class="text-end text-primary img-fluid"><img src="images/phone.svg" alt="phone" /> +918816250815</a>
		</div>
	</div>
	<div class="row">
		<nav class="navbar navbar-expand-sm bg-light">
			<div class="container">
				<ul class="nav nav-pills nav-justified">
					<li class="nav-item">
						<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
					
					</li>
					<li class="nav-item li">
						<a class="nav-link" href="home.php">Home</a>
					</li>
					<li class="nav-item li">
						<a class="nav-link" href="about.php">About</a>
					</li>
					<li class="nav-item li">
						<a class="nav-link" href="contact.php">Contact</a>
					</li>
				</ul>
				<ul class="nav nav-pills ms-auto mb-2 mb-lg-0">
					<li class="nav-item li">
						<a class="nav-link" href="logo.php">Login</a>
					</li>
					<li class="nav-item li">
						<a class="nav-link active" href="sign.php">Sign-up</a>
					</li>
				</ul>
			</div>
		</nav>
	<div class="row">
			<form method="post" action="">
			<div class="row">
				<div class="col-2"></div>
				<div class="col-2 text-start">
					<label for="pin" class="text-black">Pin Number:</label>
				</div>
			</div>
			<div class="row">
				<div class="col-2"></div>
				<div class="col-9">
					<input class="form-control" type="text" placeholder="Enter Pin Number." id="pin" name="pin" />
					<div id="pinerr" class="text-danger"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-2"></div>
				<div class="col-2 text-start">
					<label for="name" class="text-black">Name:</label>
				</div>
			</div>
			<div class="row">
				<div class="col-2"></div>
				<div class="col-9">
					<input class="form-control" type="text" placeholder="Enter Name" id="name" name="name" />
					<div id="nameerr" class="text-danger"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-2"></div>
				<div class="col-2 text-start">
					<label  for="email" class="text-black">Email:</label>
				</div>
			</div>
			<div class="row">
				<div class="col-2"></div>
				<div class="col-9">
					<input class="form-control" type="text" placeholder="Enter Email Address" id="email" name="email" />
					<div id="emailerr" class="text-danger"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-2"></div>
				<div class="col-2 text-start">
					<label for="mobile" class="text-black">Mobile Number:</label>
				</div>
			</div>
			<div class="row">
				<div class="col-2"></div>
				<div class="col-9">
				<input class="form-control" type="text" placeholder="Enter Mobile Number" id="mobile" name="mobile" />
					<div id="mobileerr" class="text-danger"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-2"></div>
				<div class="col-2 text-start">
					<label for="password" class="text-black">Password:</label>
				</div>
			</div>
			<div class="row">
				<div class="col-2"></div>
				<div class="col-9">
					<input class="form-control" type="password" placeholder="******" id="password" name="password" />
					<div id="passworderr" class="text-danger"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-2"></div>
				<div class="col-2 text-start">
					<label for="password" class="text-black">Conform Password:</label>
				</div>
				</div>
			<div class="row">
				<div class="col-2"></div>
				<div class="col-9">
					<input class="form-control" type="password" placeholder="******" id="cpassword" />
					<div id="cpassworderr" class="text-danger"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-2"></div>
				<div class="col-9 text-start">
					<a href="#" class="text-black">Forgot	Password</a>
				</div>
			</div>
			<div class="row">
				<div class="col-4"></div>
				<div class="col-4">
				<button class="btn btn-primary img-fluid" onclick="return sign()" type="submit" name="signup" id="button"><img  src="images/login.svg" alt="login" />  Sign-Up</button>
				</div>
			</div>
			</form>
	</div>
</div>
</div>
</div>
<script>
function sign(){
//alert("its worrking");
var pin=document.getElementById('pin').value;
var email=document.getElementById('email').value;
var name=document.getElementById('name').value;
var mobile=document.getElementById('mobile').value;
var password=document.getElementById('password').value;
var cpassword=document.getElementById('cpassword').value;
var regemail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(pin==""||pin==null){
	document.getElementById('pinerr').innerHTML="required feild";
	return false;
}
if(name==""||name==null){
	document.getElementById('nameerr').innerHTML="required feild";
	return false;
}
else if(email==""||email==null){
	document.getElementById('emailerr').innerHTML="required feild";
	return false;
}
else if(!regemail.test(email)){
	document.getElementById('emailerr').innerHTML="Please Enter Valid Email Address";
	return false;
}
if(mobile==""||mobile==null){
	document.getElementById('mobileerr').innerHTML="required feild";
	return false;
}
else if(password==""||password==null){
	document.getElementById('passworderr').innerHTML="required feild";
	return false;
}
else if(cpassword!=password){
	document.getElementById('cpassworderr').innerHTML="password not matched";
	return false;
}
}
</script>
</body>
</html>