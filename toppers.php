<?php
include "sessions.php";
if(isset($_POST['logout'])){
		
	echo"<script>confirm('are you sure to logout');</script>";
	session_destroy();
	echo"<script>alert('you are logout successfully');</script>";
}
?>
<!doctype html>
<html>
<head>
<title>Toppers</title>
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
	<li><a href="toppers.php" class="active btn-primary btn" >College Toppers</a><li>
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
	<tr>
		<td>2002-2005</td>
		<td>02093-EC-105</td>
		<td>ANNAM UMAKANTH REDDY</td>
		<td>88.67</td>
	</tr>
	<tr>
		<td>2003-2006</td>
		<td>03093-EE-034</td>
		<td>JONNALAGADDA KODANDA RAM</td>
		<td>88.67</td>
	</tr>
	<tr>
		<td>2004-2007</td>
		<td>04093-CM-018</td>
		<td>GUTTALA HEMALATHA</td>
		<td>90.20</td>
	</tr>
	<tr>
		<td>2005-2008</td>
		<td>05093-EE-077</td>
		<td>VADRAVU SAI KAMESH</td>
		<td>88.67</td>
	</tr>
	<tr>
		<td>2006-2009</td>
		<td>06093-CM-082</td>
		<td>TADALA VEERANNA BABU</td>
		<td>91.97</td>
	</tr>
	<tr>
		<td>2007-2010</td>
		<td>07093-EC-029</td>
		<td>GANGISETTI SATYA KRISHNA</td>
		<td>96.03</td>
	</tr>
	<tr>
		<td>2008-2011</td>
		<td>08093-CM-098</td>
		<td>TADI RAMA KRISHNA</td>
		<td>94.23</td>
	</tr>
	<tr>
		<td>2009-2012</td>
		<td>09093-EC-319</td>
		<td>YARLAGADDA NARENDRA</td>
		<td>95.66</td>
	</tr>
	<tr>
		<td>2010-2013</td>
		<td>10093-EC-054</td>
		<td>KOPPOLU SOWMYA</td>
		<td>93.44</td>
	</tr>
	<tr>
		<td>2011-2014</td>
		<td>11093-CM-013</td>
		<td>CHAGANTI SAI AKHILA</td>
		<td>95.66</td>
	</tr>
	<tr>
		<td>2012-2015</td>
		<td>12093-EC-103</td>
		<td>REVURI LAKSHMI DURGA</td>
		<td>94.06</td>
	</tr>
	<tr>
		<td>2013-2016</td>
		<td>13093-EC-101</td>
		<td>SEERA HARI PRIYA</td>
		<td>96.00</td>
	</tr>
	<tr>
		<td>2014-2017</td>
		<td>14093-EE-090</td>
		<td>P.ADI VENKATA NARAYANA</td>
		<td>97.15</td>
	</tr>
	<tr>
		<td>2015-2018</td>
		<td>15093-CM-082</td>
		<td>PALA USHA KALYANI</td>
		<td>96.89</td>
	</tr>
	<tr>
		<td>2016-2019</td>
		<td>16093-EC-024</td>
		<td>DOMMETI KOMALEE CHANDRA</td>
		<td>96.40</td>
	</tr>
	<tr>
		<td>2017-2020</td>
		<td>17093-EC-105</td>
		<td>CHENNU HARI NAGA PALLAVI</td>
		<td>97.91</td>
	</tr>
	<tr>
		<td>2018-2021</td>
		<td>18093-EC-058</td>
		<td>KONDALLI JAYA LAKSHMI</td>
		<td>97.32</td>
	</tr>
	<tbody>
</table>
</div>

</div>
</body>
</html>