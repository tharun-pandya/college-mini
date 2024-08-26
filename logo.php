<?php
include "connect.php";
session_start();
if(isset($_POST['logout'])){
		echo"<script>alert('you are logout successfully');</script>";
	echo"<script>confirm('are you sure to logout');</script>";
	session_destroy();
	echo"<script>alert('you are logout successfully');</script>";
}
?>
<!doctype html>
<html lang="en" >
<head>
<title>Login</title>
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
    <form method="post">
  <button class="under btn btn-danger" name="logout" id="logout">logout</button>
  </form>
  </div>
</div>
<div class="container">
	<div class="row">
		<div class="col">
			<a href="home.php"><img src="images/sbsplogo.png" alt="Logo" class="img-fluid"></a>
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
						<a class="nav-link active" href="logo.php">Login</a>
					</li>
					<li class="nav-item li">
						<a class="nav-link" href="sign.php">Sign-up</a>
					</li>
			</div>
		</nav>
	</div>
	<div class="row">
		<div class="col text-center">
			<form class="" method="post">
				<div class="row">
					<div class="col-2"></div>
					<div class="col-1">
						<label for="userid" class="text-black">Pin NO :</label>
					</div>
					<div class="row">
					<div class="col-2"></div>
					<div class="col-9">
					<input class="form-control" type="text" placeholder="Pin Number/ Email address/ phone no." name="user" id="userid"></input>
					<div id="usererr" class="text-danger"></div>
					</div>
					</div>
				</div>
				<div class="row">
				<div class="col-2"></div>
					<div class="col-1">
					<label for="pwd" class="text-black">Password :</label>
					</div>
					<div class="row">
					<div class="col-2"></div>
					<div class="col-9">
					<input class="form-control" name="password" autocomplete="on" type="password" placeholder="********" id="pwd" ></input>
					<div id="pwderr" class="text-danger"></div>
					</div>
				</div>
				<div class="row">
				<div class="col-2"></div>
				<div class="col-9 text-start">
					<a href="#" class="text-black">Forgot Password</a>
				</div>
				</div>
				<div class="row">
				<div class="col-4"></div>
				<div class="col-4">
				<button class="btn btn-primary img-fluid" onclick="return log()" name="login" type="submit" id="button"><img  src="images/login.svg" alt="login" />  Login</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
if(isset($_POST['login'])){
	$user=$_POST["user"];
	$password=$_POST["password"];
	$select="select*from signup where email='".$user."' or pin='".$user."'";
	
	$query=mysqli_query($connect,$select);
	$count=mysqli_num_rows($query);
	$check=mysqli_fetch_assoc($query);
	if($count==0){
		echo "<script>alert('User Not Founded');</script>";
	
	}
	else{
		while($row = $check){
			
			
			if($password!=$row['password']){
				echo "<script>alert('Incorrect Password ');</script>";
			}
			else{
				$_SESSION['name']=$row['name'];
				$_SESSION['email']=$row['email'];
				$_SESSION['mobile']=$row['mobile'];
				$_SESSION['pin']=$row['pin'];
				$_SESSION['password']=$row['password'];
				echo"<script>window.location.assign('home.php');</script>";
			}
			break;
			
		}
	}
}
?>
<script>
function log(){
var user=document.getElementById('userid').value;
var password=document.getElementById('pwd').value;
if(user==""||user==null){
	document.getElementById('usererr').innerHTML="required feild";
	return false;
}
else if(password==""||password==null){
	document.getElementById('pwderr').innerHTML="required feild";
	return false;
}
}
</script>
</body>
</html>