<?php
include "sessions.php";
if(isset($_POST['logout'])){
		echo"<script>alert('you are logout successfully');</script>";
	echo"<script>confirm('are you sure to logout');</script>";
	session_destroy();
	echo"<script>alert('you are logout successfully');</script>";
}
?>
<!doctype html>
<html>
<head dir="ltr">
<title>Seetha Polytechnic</title>
<link rel="icon" type="image/png" href="images/vishnulogo.png">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="menu.css" rel="stylesheet" />
<style>
body{
	background-color:;
}
.li{
	padding-left:20px;
}
label,input{
	margin-top:10px;
}
.side{
	width:0px;
	display:none;
}
.end{
	text-align:right;
}
b{
	font-size:15px;
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
  <form method="post" action="" >
   <ul>
    <li><a href="attendence.php" class="btn" name="attendence" >Attendence</a><li>
    <li><a href="feedback.php" class="btn" name="feedback" >Feedback</a></li>
    <li><a href="news.php" class="btn" name="news" >College NEWS</a></li>
    <li><a href="backlogs.php" class="btn" name="backlogs" >Backlogs</a></li>
	<li><a href="toppers.php" class="btn" name="toppers" >College Toppers</a><li>
	<li><a href="papers.php" class="btn" name="papers" >Previews Quetion Papers</a><li>
	<li><a href="pdfs.php" class="btn" name="pdfs" >Study Material</a><li>
   </ul>
     <form method="post">
  <button class="under btn btn-danger" name="logout" id="logout">logout</button>
  </form>
   </form>
  </div>
</div>
<div class="container">
<div class="row">
<div class="col">
	<div class="row">
		<div class="col">
			<a href="home.php"><img src="images/sbsplogo.png" alt="Logo" class="img-fluid"></a>
		</div>
		<div class="col text-end">
		<a href="https://mail.google.com/mail/u/0/?ogbl#sent?compose=GTvVlcSHwCsCKMgZvsfJmJjZxRRxBrvjhSTxdtmZHqTWNGzsMDFLPvGNhWgcBKpzWzzGCGgbcWQKj" class="text-end text-primary img-fluid"><img src="images/email.svg" alt="mail" /> seethapolytechnic093@gmail.com</a><br>
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
						<a class="nav-link active" name="home" href="home.php">Home</a>
					</li>
					<li class="nav-item li">
						<a class="nav-link" name="about" href="about.php">About</a>
					</li>
					<li class="nav-item li">
						<a class="nav-link" name="contact" href="contact.php">Contact</a>
					</li>
				</ul>
				<ul class="nav nav-pills ms-auto mb-2 mb-lg-0">
					<li class="nav-item li">
						<a class="nav-link" href="logo.php">Login</a>
					</li>
					<li class="nav-item li">
						<a class="nav-link" href="sign.php">Sign-up</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div>
</div>
<div class="row">
		<img src="images/clg3.jpg" alt="college" height="30px" class="img-fluid">
</div>
<div class="row">
<h1>Sem Toppers</h1>
	<?php
	echo '<div class="col">
		<img src="images/clg2.jpg" alt="college" width="100%" class="img-fluid" />
		<b>Sem Topper1</b>
		</div>
		<div class="col">
		<img src="images/clg2.jpg" alt="college" class="img-fluid" />
		<b>Sem Topper2</b>
		</div>
		<div class="col">
		<img src="images/clg2.jpg" alt="college" class="img-fluid" />
		<b>Sem Topper3</b>
		</div>';
	?>
</div>
<div class="row">
<h1>Smt.B.Seetha Polytechnic</h1>
<p> Established in 1997, Smt. B. Seetha Polytechnic College is a premier Institute located in Andhra Pradesh. Smt. B. Seetha Polytechnic College has diverse programs which can be chosen by the students. It offers Diploma courses including . Additionally, it also has After 10th Diploma courses. These programs are offerred in Full Time mode. Smt. B. Seetha Polytechnic College is a well-known institution for After 1th Diploma courses. These programs are delivered by highly experienced faculty. Institute enjoys a good reputation for courses like After 1th Diploma in the streams of Engineering Students can opt courses from these. Over the period, Smt. B. Seetha Polytechnic College has gained expertize through its trained and experienced faculty in the fields of Electronics Engineering, Electronics & Communication Engineering, Computer Science Engineering, Electrical Engineering. Smt. B. Seetha Polytechnic College offered courses that are recognized by approving bodies like AICTE. Smt. B. Seetha Polytechnic College offered courses for 660 seats. Smt. B. Seetha Polytechnic College provide good facilities all around the campus like Auditorium, Boys Hostel, Cafeteria, Girls Hostel, Gym, Hospital / Medical Facilities, Hostel, Labs, Library, Sports Complex, Wi-Fi Campus.<br>
<b>Campus Location </b>: Bhimavaram, Andhra Pradesh<br>
<b>Courses </b>: ECE, CME, EEE, AEI<br>
<b>Number of seats </b>: 660
 </p>
</div>
<div class="row table-responsive">
<h2>College Toppers</h2>
<table class="table table-hover table-success table-bordered">
	<thead class="table-dark">
	<tr>
		<td>Batch</td>
		<td>PIN</td>
		<td>Name of the Student</td>
		<td>Percentage</td>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>1997-2000</td>
		<td>97093-CM-001</td>
		<td>BOMMAREDDY SATYAVANI</td>
		<td>83.63</td>
	</tr>
	<tr>
		<td>1998-2001</td>
		<td>98093-CM-015</td>
		<td>KARUTURI PRASANTHI</td>
		<td>89.50</td>
	</tr>
	<tr>
		<td>1998-2002</td>
		<td>99093-CM-001</td>
		<td>ANITHA SONY KAKARA</td>
		<td>89.45</td>
	</tr>
	<tr>
		<td>2000-2003</td>
		<td>00093-EC-016</td>
		<td>G KRISHNA CHAITANYA</td>
		<td>87.28</td>
	</tr>
	<tr>
		<td>2001-2004</td>
		<td>01093-EC-014</td>
		<td>DEEVI SATYA CHAITANYA</td>
		<td>86.38</td>
	</tr>
	<tbody>
</table>
<div class="col-9"></div>
<a href="toppers.php " class="text-end  col-3" >Read more</a>
</div>
<?php 
echo '<div class="row">
<h2>Reviews</h2>
<dl>
	<dt>reviewer name</dt>
	<dd>review</dd>
</dl>
<dl>
	<dt>reviewer name</dt>
	<dd>review</dd>
</dl>
<form method="post" action="">
<textarea class="form-control">
</textarea><br>
<input class="btn btn-primary end" name="review" type="submit" />
</form>
</div>';
?>
</div>
</body>
</html>