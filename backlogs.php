<?php
include "sessions.php";
include "connect.php";
if(isset($_POST['cm-1'])){
				echo'<script>alert("its working");</script>';
				$pin=$_POST['pinno'];
				$cm101=$_POST['cm-101'];
				$cm102=$_POST['cm-102'];
				$cm103=$_POST['cm-103'];
				$cm104=$_POST['cm-104'];
				$cm105=$_POST['cm-105'];
				$cm106=$_POST['cm-106'];
				$cm107=$_POST['cm-107'];
				$select="SELECT * FROM `cme1` WHERE pin='".$pin."' ";
				$check_query=mysqli_query($connect,$select);
				$count=mysqli_num_rows($check_query);
				if($count>=1){
					$cm1_up="UPDATE `cme1` SET `ENGLISH`='".$cm101."',`MATHS1`='".$cm102."',`PHYSICS`='".$cm103."',`CHEMISTRY`='".$cm104."',`BASIC_COMPUTERS`='".$cm105."',`C_LANGUAGE`='".$cm106."',`ENG_DRAWING`='".$cm107."' WHERE pin='".$pin."'";
					if(mysqli_query($connect,$cm1_up)){
						echo'<script>alert("update successfully");</script>';
					}
					else{
					echo'<script>alert("something went wrong");</script>';
					}
				}
				else{
				$cm1_in="INSERT INTO `cme1`(`pin`,`ENGLISH`, `MATHS1`, `PHYSICS`, `CHEMISTRY`, `BASIC_COMPUTERS`, `C_LANGUAGE`, `ENG_DRAWING` ) VALUES ('".$pin."','".$cm101."','".$cm102."','".$cm103."','".$cm104."','".$cm105."','".$cm106."','".$cm107."')";
					if(mysqli_query($connect,$cm1_in)){
						echo'<script>alert("insert successfully");</script>';
					}
					else{
						echo'<script>alert("something went wrong");</script>';
					}
				}
}
elseif(isset($_POST['cm-3'])){
				$pin=$_POST['pinno'];
				$cm301=$_POST['cm-301'];
				$cm302=$_POST['cm-302'];
				$cm303=$_POST['cm-303'];
				$cm304=$_POST['cm-304'];
				$cm305=$_POST['cm-305'];
				$select="SELECT * FROM `cme3` WHERE pin='".$pin."' ";
				$check_query=mysqli_query($connect,$select);
				$count=mysqli_num_rows($check_query);
				if($count>=1){
					$cm3_up="UPDATE `cme3` SET `PIN`='".$pin."',`MATHS_2`='".$cm301."',`DE`='".$cm302."',`OS`='".$cm303."',`DS`='".$cm304."',`DBMS`='".$cm305."' WHERE `PIN`='".$pin."'";
					if(mysqli_query($connect,$cm3_up)){
						echo'<script>alert("update successfully");</script>';
					}
					else{
						echo'<script>alert("something went wrong");</script>';
					}
				}
				else{
				$cm3_in="INSERT INTO `cme3`( `PIN`, `MATHS_2`, `DE`, `OS`, `DS`, `DBMS`) VALUES ('".$pin."','".$cm301."','".$cm302."','".$cm303."','".$cm304."','".$cm305."')";
					if(mysqli_query($connect,$cm3_in)){
						echo'<script>alert("insert successfully");</script>';
					}
					else{
						echo'<script>alert("something went wrong");</script>';
					}
				}
}
elseif(isset($_POST['cm-4'])){
				$pin=$_POST['pinno'];
				$cm401=$_POST['cm-401'];
				$cm402=$_POST['cm-402'];
				$cm403=$_POST['cm-403'];
				$cm404=$_POST['cm-404'];
				$cm405=$_POST['cm-405'];
				$select="SELECT * FROM `cme4` WHERE `PIN`='".$pin."'";
				$query=mysqli_query($connect,$select);
				$count=mysqli_num_rows($query);
				if($count>=1){
					$cm4_up="UPDATE `cme4` SET `PIN`='".$pin."',`MATHS_3`='".$cm401."',`WT`='".$cm402."',`MP`='".$cm403."',`C++`='".$cm404."',`CN`='".$cm405."' WHERE `PIN`='".$pin."'";
					if(mysqli_query($connect,$cm4_up)){
						echo'<script>alert("update successfully");</script>';
					}
					else{
						echo'<script>alert("something went wrong");</script>';
					}
				}
				else{
					$cm4_in="INSERT INTO `cme4`( `PIN`, `MATHS_3`, `WT`, `MP`, `C++`, `CN`) VALUES ('".$pin."','".$cm401."','".$cm402."','".$cm403."','".$cm404."','".$cm405."')";
					if(mysqli_query($connect,$cm4_in)){
						echo'<script>alert("insert successfully");</script>';
					}
					else{
						echo'<script>alert("something went wrong");</script>';
					}
				}
}
elseif(isset($_POST['cm-5'])){
				$pin=$_POST['pinno'];
				$cm501=$_POST['cm-501'];
				$cm502=$_POST['cm-502'];
				$cm503=$_POST['cm-503'];
				$cm504=$_POST['cm-504'];
				$cm505=$_POST['cm-505'];
				$select="SELECT * FROM `cme5` WHERE pin='".$pin."' ";
				$check_query=mysqli_query($connect,$select);
				$count=mysqli_num_rows($check_query);
				if($count>=1){
					$cm5_up="UPDATE `cme5` SET `PIN`='".$pin."',`IME`='".$cm501."',`JAVA`='".$cm502."',`SE`='".$cm503."',`IOT`='".$cm504."',`PYTHON`='".$cm505."' WHERE `PIN`='".$pin."'";
					if(mysqli_query($connect,$cm5_up)){
						echo'<script>alert("update successfully");</script>';
					}
					else{
					echo'<script>alert("something went wrong");</script>';
					}
				}
				else{
				$cm5_in="INSERT INTO `cme5`(`PIN`, `IME`, `JAVA`, `SE`, `IOT`, `PYTHON`) VALUES   ('".$pin."','".$cm501."','".$cm502."','".$cm503."','".$cm504."','".$cm505."')";
					if(mysqli_query($connect,$cm5_in)){
						echo'<script>alert("insert successfully");</script>';
					}
					else{
						echo'<script>alert("something went wrong");</script>';
					}
				}
}
elseif(isset($_POST['ec-1'])){
				$pin=$_POST['pinno'];
				$ec101=$_POST['ec-101'];
				$ec102=$_POST['ec-102'];
				$ec103=$_POST['ec-103'];
				$ec104=$_POST['ec-104'];
				$ec105=$_POST['ec-105'];
				$ec106=$_POST['ec-106'];
				$ec107=$_POST['ec-107'];
				$select="SELECT * FROM `ece1` WHERE pin='".$pin."' ";
				$check_query=mysqli_query($connect,$select);
				$count=mysqli_num_rows($check_query);
				if($count>=1){
					$ec1_up="UPDATE `ece1` SET`PIN`='".$pin."',`ENGLISH`='".$ec101."',`MATHS_1`='".$ec102."',`PHYSICS`='".$ec103."',`CHEMISTRY`='".$ec104."',`EC&PS`='".$ec105."',`EEE`='".$ec106."',`ENG_DRAWING`='".$ec107."' WHERE `PIN`='".$pin."'";
					if(mysqli_query($connect,$ec1_up)){
						echo'<script>alert("update successfully");</script>';
					}
					else{
					echo'<script>alert("something went wrong");</script>';
					}
				}
				else{
				$ec1_in="INSERT INTO `ece1`(`PIN`, `ENGLISH`, `MATHS_1`, `PHYSICS`, `CHEMISTRY`, `EC&PS`, `EEE`, `ENG_DRAWING`) VALUES ('".$pin."','".$ec101."','".$ec102."','".$ec103."','".$ec104."','".$ec105."','".$ec106."','".$ec107."')";
					if(mysqli_query($connect,$ec1_in)){
						echo'<script>alert("insert successfully");</script>';
					}
					else{
						echo'<script>alert("something went wrong");</script>';
					}
				}
}
elseif(isset($_POST['ec-3'])){
				$pin=$_POST['pinno'];
				$ec301=$_POST['ec-301'];
				$ec302=$_POST['ec-302'];
				$ec303=$_POST['ec-303'];
				$ec304=$_POST['ec-304'];
				$ec305=$_POST['ec-305'];
				$ec306=$_POST['ec-306'];
				$select="SELECT * FROM `ece3` WHERE pin='".$pin."' ";
				$check_query=mysqli_query($connect,$select);
				$count=mysqli_num_rows($check_query);
				if($count>=1){
					$ec3_up="UPDATE `ece3` SET `PIN`='".$pin."',`MATHS_2`='".$ec301."',`EC_1`='".$ec302."',`DE`='".$ec303."',`A&DCS`='".$ec304."',`NA`='".$ec305."',`EM&CG`='".$ec306."'WHERE `PIN`='".$pin."'";
					if(mysqli_query($connect,$ec3_up)){
						echo'<script>alert("update successfully");</script>';
					}
					else{
					echo'<script>alert("something went wrong");</script>';
					}
				}
				else{
				$ec3_in="INSERT INTO `ece3`(`PIN`, `MATHS_2`, `EC_1`, `DE`, `A&DCS`, `NA`, `EM&CG`) VALUES  ('".$pin."','".$ec301."','".$ec302."','".$ec303."','".$ec304."','".$ec305."','".$ec306."')";
					if(mysqli_query($connect,$ec3_in)){
						echo'<script>alert("insert successfully");</script>';
					}
					else{
						echo'<script>alert("something went wrong");</script>';
					}
				}
}
elseif(isset($_POST['ec-4'])){
				$pin=$_POST['pinno'];
				$ec401=$_POST['ec-401'];
				$ec402=$_POST['ec-402'];
				$ec403=$_POST['ec-403'];
				$ec404=$_POST['ec-404'];
				$ec405=$_POST['ec-405'];
				$select="SELECT * FROM `ece4` WHERE pin='".$pin."' ";
				$check_query=mysqli_query($connect,$select);
				$count=mysqli_num_rows($check_query);
				if($count>=1){
					$ec4_up="UPDATE `ece4` SET`PIN`='".$pin."',`MATHS_3`='".$ec401."',`EC_2`='".$ec402."',`MP`='".$ec403."',`M&SCS`='".$ec404."',`C&MAT_LAB`='".$ec405."' WHERE `PIN`='".$pin."'";
					if(mysqli_query($connect,$ec4_up)){
						echo'<script>alert("update successfully");</script>';
					}
					else{
					echo'<script>alert("something went wrong");</script>';
					}
				}
				else{
				$ec4_in="INSERT INTO `ece4`(`PIN`, `MATHS_3`, `EC_2`, `MP`, `M&SCS`, `C&MAT_LAB`) VALUES ('".$pin."','".$ec401."','".$ec402."','".$ec403."','".$ec404."','".$ec405."')";
					if(mysqli_query($connect,$ec4_in)){
						echo'<script>alert("insert successfully");</script>';
					}
					else{
						echo'<script>alert("something went wrong");</script>';
					}
				}
}
elseif(isset($_POST['ec-5'])){
				$pin=$_POST['pinno'];
				$ec501=$_POST['ec-501'];
				$ec502=$_POST['ec-502'];
				$ec503=$_POST['ec-503'];
				$ec504=$_POST['ec-504'];
				$ec505=$_POST['ec-505'];
				$select="SELECT * FROM `ece5` WHERE PIN='".$pin."' ";
				$check_query=mysqli_query($connect,$select);
				$count=mysqli_num_rows($check_query);
				if($count>=1){
					$ec5_up="UPDATE `ece5` SET `PIN`='".$pin."',`IME`='".$ec501."',`MC&APP`='".$ec502."',`O&MC`='".$ec503."',`IE`='".$ec504."',`CH&N`='".$ec505."' WHERE `PIN`='".$pin."'";
					if(mysqli_query($connect,$ec5_up)){
						echo'<script>alert("update successfully");</script>';
					}
					else{
					echo'<script>alert("something went wrong");</script>';
					}
				}
				else{
				$ec5_in="INSERT INTO `ece5`(`PIN`, `IME`, `MC&APP`, `O&MC`, `IE`, `CH&N`) VALUES ('".$pin."','".$ec501."','".$ec502."','".$ec503."','".$ec504."','".$ec505."')";
					if(mysqli_query($connect,$ec5_in)){
						echo'<script>alert("insert successfully");</script>';
					}
					else{
						echo'<script>alert("something went wrong");</script>';
					}
				}
}
elseif(isset($_POST['ee-1'])){
				$pin=$_POST['pinno'];
				$ee101=$_POST['ee-101'];
				$ee102=$_POST['ee-102'];
				$ee103=$_POST['ee-103'];
				$ee104=$_POST['ee-104'];
				$ee105=$_POST['ee-105'];
				$ee106=$_POST['ee-106'];
				$ee107=$_POST['ee-107'];
				$select="SELECT * FROM `eee1` WHERE pin='".$pin."' ";
				$check_query=mysqli_query($connect,$select);
				$count=mysqli_num_rows($check_query);
				if($count>=1){
					$ee1_up="UPDATE `eee1` SET`PIN`='".$pin."',`ENGLISH`='".$ee101."',`MATHS_1`='".$ee102."',`PHYSICS`='".$ee103."',`CHEMISTRY`='".$ee104."',`EEM`='".$ee105."',`BASICEE`='".$ee106."',`ENG_DRAWING`='".$ee107."' WHERE `PIN`='".$pin."'" ;
					if(mysqli_query($connect,$ee1_up)){
						echo'<script>alert("update successfully");</script>';
					}
					else{
					echo'<script>alert("something went wrong");</script>';
					}
				}
				else{
				$ee1_in="INSERT INTO `eee1`(`PIN`, `ENGLISH`, `MATHS_1`, `PHYSICS`, `CHEMISTRY`, `EEM`, `BASICEE`, `ENG_DRAWING`) VALUES('".$pin."','".$ee101."','".$ee102."','".$ee103."','".$ee104."','".$ee105."','".$ee106."','".$ee107."')";
					if(mysqli_query($connect,$ee1_in)){
						echo'<script>alert("insert successfully");</script>';
					}
					else{
						echo'<script>alert("something went wrong");</script>';
					}
				}
}
elseif(isset($_POST['ee-3'])){
				$pin=$_POST['pinno'];
				$ee301=$_POST['ee-301'];
				$ee302=$_POST['ee-302'];
				$ee303=$_POST['ee-303'];
				$ee304=$_POST['ee-304'];
				$ee305=$_POST['ee-305'];
				$ee306=$_POST['ee-306'];
				$select="SELECT * FROM `eee3` WHERE pin='".$pin."' ";
				$check_query=mysqli_query($connect,$select);
				$count=mysqli_num_rows($check_query);
				if($count>=1){
					$ee3_up="UPDATE `eee3` SET`PIN`='".$pin."',`MATHS_2`='".$ee301."',`EM_1`='".$ee302."',`PS_1`='".$ee303."',`E&EMI`='".$ee304."',`EC`='".$ee305."',`PROGRAMMING_C`='".$ee306."' WHERE `PIN`='".$pin."'" ;
					if(mysqli_query($connect,$ee3_up)){
						echo'<script>alert("update successfully");</script>';
					}
					else{
					echo'<script>alert("something went wrong");</script>';
					}
				}
				else{
				$ee3_in="INSERT INTO `eee3`(`PIN`, `MATHS_2`, `EM_1`, `PS_1`, `E&EMI`, `EC`, `PROGRAMMING_C`) VALUES('".$pin."','".$ee301."','".$ee302."','".$ee303."','".$ee304."','".$ee305."','".$ee306."')";
					if(mysqli_query($connect,$ee3_in)){
						echo'<script>alert("insert successfully");</script>';
					}
					else{
						echo'<script>alert("something went wrong");</script>';
					}
				}
}
elseif(isset($_POST['ee-4'])){
				$pin=$_POST['pinno'];
				$ee401=$_POST['ee-401'];
				$ee402=$_POST['ee-402'];
				$ee403=$_POST['ee-403'];
				$ee404=$_POST['ee-404'];
				$ee405=$_POST['ee-405'];
				$ee406=$_POST['ee-406'];
				$select="SELECT * FROM `eee4` WHERE pin='".$pin."' ";
				$check_query=mysqli_query($connect,$select);
				$count=mysqli_num_rows($check_query);
				if($count>=1){
					$ee4_up="UPDATE `eee4` SET`PIN`='".$pin."',`MATHS_3`='".$ee401."',`EM_2`='".$ee402."',`PS_2`='".$ee403."',`EI&E`='".$ee404."',`EE`='".$ee405."',`GME`='".$ee406."' WHERE `PIN`='".$pin."'" ;
					if(mysqli_query($connect,$ee4_up)){
						echo'<script>alert("update successfully");</script>';
					}
					else{
					echo'<script>alert("something went wrong");</script>';
					}
				}
				else{
				$ee4_in="INSERT INTO `eee4`(`PIN`, `MATHS_3`, `EM_2`, `PS_2`, `EI&E`, `EE`, `GME`) VALUES('".$pin."','".$ee401."','".$ee402."','".$ee403."','".$ee404."','".$ee405."','".$ee406."')";
					if(mysqli_query($connect,$ee4_in)){
						echo'<script>alert("insert successfully");</script>';
					}
					else{
						echo'<script>alert("something went wrong");</script>';
					}
				}
}
elseif(isset($_POST['ee-5'])){
				$pin=$_POST['pinno'];
				$ee501=$_POST['ee-501'];
				$ee502=$_POST['ee-502'];
				$ee503=$_POST['ee-503'];
				$ee504=$_POST['ee-504'];
				$ee505=$_POST['ee-505'];
				$ee506=$_POST['ee-506'];
				$select="SELECT * FROM `eee5` WHERE pin='".$pin."' ";
				$check_query=mysqli_query($connect,$select);
				$count=mysqli_num_rows($check_query);
				if($count>=1){
					$ee5_up="UPDATE `eee5` SET`PIN`='".$pin."',`IME&ST`='".$ee501."',`EM_3`='".$ee502."',`PS_3`='".$ee503."',`PE,PLC&SCADA`='".$ee504."',`DE&MC`='".$ee505."',`EU&T`='".$ee506."' WHERE `PIN`='".$pin."'" ;
					if(mysqli_query($connect,$ee5_up)){
						echo'<script>alert("update successfully");</script>';
					}
					else{
					echo'<script>alert("something went wrong");</script>';
					}
				}
				else{
				$ee5_in="INSERT INTO `eee5`(`PIN`, `IME&ST`, `EM_3`, `PS_3`, `PE,PLC&SCADA`, `DE&MC`, `EU&T`)VALUES('".$pin."','".$ee501."','".$ee502."','".$ee503."','".$ee504."','".$ee505."','".$ee506."')";
					if(mysqli_query($connect,$ee5_in)){
						echo'<script>alert("insert successfully");</script>';
					}
					else{
						echo'<script>alert("something went wrong");</script>';
					}
				}
}
?>
<!doctype html>
<html>
<head>
<title>Backlogs</title>
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
#matter{
	width: 100%;
	position: fixed;
	overflow-x: hidden;
	text-align:center;
}
.form{
	margin-top:20px;
}
.access{
	margin-top:150px;
	width: 100%;
	position:fixed;
	overflow-x: hidden;
}
.backbtn{
	font-size:50px;
	position: absolute;
	right:100px;
	top:150px;
}
footer{
	position:absolute;
	bottom:0px;
	width:100%;
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
<body>
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn text-end" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
   <ul>
    <li><a href="attendence.php" class="btn" >Attendence</a><li>
    <li><a href="Feedback.php" class="btn" >Feedback</a></li>
    <li><a href="news.php" class="btn" >College NEWS</a></li>
    <li><a href="Backlogs.php" class="active btn-primary btn" >Backlogs</a></li>
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
<form method="post" class="form" action="" >
	<div class="row" id="matter">
		<div><button class="btn text-primary" name="details" id="details" ><u>Enter New student details</u></button></div>
		<div><button class="btn text-primary" name="updation" id="updation" ><u>Enter  Student Marks</u></button></div>
		<div><button class="btn text-primary" name="view1" id="view1"onclick="return view()" ><u>Student Marks</u></button></div>
	</div>
</form>
<!--access pin display-->
<div class="row access" id="accessdiv">
		<?php
			if(isset($_POST['details'])){
				?><form method="post" action="">
				<div class="row">
				<div class='col-1'></div>
				<div class="col-2 text-end">
					<label for="access" class="text-black"><u>Access Pin:</u></label>
				</div>
				<div class="col-6">
					<input class="form-control" type="password" placeholder="Enter Access Pin" id="access" name="access" />
					<div id="accesserr" class="text-danger"></div>
				</div>
				<div class="col-2">
				<input class="btn btn-primary text-start" type="submit" onclick="return newdetails()" name="accessbtn" id="accessbtn" />
				</div>
			</div>
			</form>
			<?php
			}
			elseif(isset($_POST['updation'])){
				?>
			<form method="post" action="">
			<div class="row">
				<div class='col-1'></div>
				<div class="col-2 text-end">
					<label for="access" class="text-black"><u>Access Pin:</u></label>
				</div>
				<div class="col-6">
					<input class="form-control" type="password" placeholder="Enter Access Pin" id="upaccess" name="upaccess" />
					<div id="accesserr" class="text-danger"></div>
				</div>
				<div class="col-2">
				<input class="btn btn-primary text-start" type="submit" onclick="return updation()" name="accessbtn" id="accessbtn" />
				</div>
			</div>
			</form>
				<?php
			}
		?>
</div>
<!-- wrong mark display -->
<div href="javascript:void(0)" class="btn backbtn row text-end text-danger" id="backdetails" onclick="return backdetails()">
</div>
<div class="row" id="newdetails">
</div>
<div href="javascript:void(0)" class="btn backbtn row text-end text-danger" id="backupdate" onclick="return backupdate()">
</div>
<div class="row" id="marksupdate">
</div>
<div href="javascript:void(0)" class="btn backbtn row text-end text-danger" id="backview1" onclick="return  backview()">
</div>
<div class="row" id="marksview">
</div>
<!--Enter student marks display -->
<div class="row" id="marks">
<?php


if(isset($_POST['newbtn'])){
	
	$student=$_POST['name'];
	$father=$_POST['fname'];
	$pin=$_POST['pin'];
	$pic=$_FILES['pdf']['name'];
	$tmppic=$_FILES['pdf']['tmp_name'];

	$sql="SELECT * FROM `new_student` WHERE pin='".$pin."'";
	$query=mysqli_query($connect,$sql);
		$count=mysqli_num_rows($query);
		if($count==0){
			$location="images/";
			$location=$location.basename($pic);
			echo"<script>alert('its working');</script>";
			if(move_uploaded_file($tmppic,$location))
			{
				echo"<script>alert('its working');</script>";
				$sqlquery="INSERT INTO `new_student`(`pin`, `father`, `student`, `pic`) VALUES ('".$pin."','".$father."','".$student."','".$pic."')";
				$execution=mysqli_query($connect,$sqlquery);
				echo"<script>alert('student data inserted successfully');</script>";
			}
		}
		else{
			echo'<script>alert("Student already Exists With Same Pin");</script>';
		}
}













if(isset($_POST['updatebtn'])){
	$sem1=$_POST['sem1'];
	$pin=$_POST['upin'];
	$pincm='/093-cm-/i';
	$pinec="/093-ec-/i";
	$pinee="/093-ee-/i";
	if(preg_match($pincm,$pin)){
		if($sem1=="Select Semester"){
			echo"<script>alert('Enter Semester')</script>";
		}
		elseif($sem1=='1st Semester'){
			echo"<script>document.getElementById('matter').style.width = '0%';
			document.getElementById('backdetails').innerHTML='&times;';</script>
			<form method='post' action=''>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='pinno' >Pin:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' id='pinno' value='$pin' name='pinno' Readonly/>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-101' >English-101:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter English Marks' id='cm-101' name='cm-101' />
					<div class='text-danger' id='cm-101err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-102' >Maths-102:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter Maths Marks' id='cm-102' name='cm-102' />
					<div class='text-danger' id='cm-102err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-103' >Physics-103:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter Physics Marks' id='cm-103' name='cm-103' />
					<div class='text-danger' id='cm-103err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-104' >Chemistry-104:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter Chemistry Marks' id='cm-104' name='cm-104' />
					<div class='text-danger' id='cm-104err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-105' >Basic of Computer-105:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter Basic of Computer Marks' id='cm-105' name='cm-105' />
					<div class='text-danger' id='cm-105err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-106' >Programming in C-106:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter Programming in C Marks' id='cm-106' name='cm-106' />
					<div class='text-danger' id='cm-106err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-107' >Drawing-107:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter Drawing Marks' id='cm-107' name='cm-107' />
					<div class='text-danger' id='cm-107err'></div>
				</div>
			</div>
			<div class='row'>
				<div class='col-4'></div>
				<div class='col-4'>
				<button class='btn btn-primary' name='cm-1' onclick='return cm1()' id='cm-1' >Submit</button>
				</div>
			</div>
			</form>";

			echo"<script>
				function cm1(){
					var cm_101=document.getElementById('cm-101').value;
					var cm_102=document.getElementById('cm-102').value;
					var cm_103=document.getElementById('cm-103').value;
					var cm_104=document.getElementById('cm-104').value;
					var cm_105=document.getElementById('cm-105').value;
					var cm_106=document.getElementById('cm-106').value;
					var cm_107=document.getElementById('cm-107').value;
					if(cm_101==null||cm_101==''){
						document.getElementById('cm-101err').innerHTML='Required Field';
						return false;
					}
					else if(cm_102==null||cm_102==''){
						document.getElementById('cm-102err').innerHTML='Required Field';
						return false;
					}
					else if(cm_103==null||cm_103==''){
						document.getElementById('cm-103err').innerHTML='Required Field';
						return false;
					}
					else if(cm_104==null||cm_104==''){
						document.getElementById('cm-104err').innerHTML='Required Field';
						return false;
					}
					else if(cm_105==null||cm_105==''){
						document.getElementById('cm-105err').innerHTML='Required Field';
						return false;
					}
					else if(cm_106==null||cm_106==''){
						document.getElementById('cm-106err').innerHTML='Required Field';
						return false;
					}
					else if(cm_107==null||cm_107==''){
						document.getElementById('cm-107err').innerHTML='Required Field';
						return false;
					}
				}
			</script>";
		}
		elseif($sem1=='3rd Semester'){
			echo"<script>document.getElementById('matter').style.width = '0%';
			document.getElementById('backdetails').innerHTML='&times;';</script>
			<form method='post' id='cm-marks-3' >
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='pinno' >Pin:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' id='pinno' value='$pin' name='pinno' Readonly/>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-301' >Maths-301:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter Maths Marks' id='cm-301' name='cm-301' />
					<div class='text-danger' id='cm-301err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-302' >Digital Electronics-102:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter Digital Electronics Marks' id='cm-302' name='cm-302' />
					<div class='text-danger' id='cm-302err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-303' >Operating Systems-303:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter Operating Systems Marks' id='cm-303' name='cm-303' />
					<div class='text-danger' id='cm-303err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-304' >Data Structures Through C-304:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter Data Structures Through C Marks' id='cm-304' name='cm-304' />
					<div class='text-danger' id='cm-304err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-305' >DBMS-305:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter DBMS Marks' id='cm-305' name='cm-305' />
					<div class='text-danger' id='cm-305err'></div>
				</div>
			</div>
			<div class='row'>
				<div class='col-4'></div>
				<div class='col-4'>
				<button class='btn btn-primary' onclick='return cm3()' name='cm-3' id='cm-3'>Submit</button>
				</div>
			</div>
			</form>";
			
			echo"<script>
				function cm3(){
					var cm_301=document.getElementById('cm-301').value;
					var cm_302=document.getElementById('cm-302').value;
					var cm_303=document.getElementById('cm-303').value;
					var cm_304=document.getElementById('cm-304').value;
					var cm_305=document.getElementById('cm-305').value;
					
			
				    if(cm_301==null||cm_301==''){
						document.getElementById('cm-301err').innerHTML='Required Field';
						return false;
					}
					else if(cm_302==null||cm_302==''){
						document.getElementById('cm-302err').innerHTML='Required Field';
						return false;
					}
					else if(cm_303==null||cm_303==''){
						document.getElementById('cm-303err').innerHTML='Required Field';
						return false;
					}
					else if(cm_304==null||cm_304==''){
						document.getElementById('cm-304err').innerHTML='Required Field';
						return false;
					}
					else if(cm_305==null||cm_305==''){
						document.getElementById('cm-305err').innerHTML='Required Field';
						return false;
					}	
				}
			</script>";
			
		}
		elseif($sem1=='4th Semester'){
			echo"<script>document.getElementById('matter').style.width = '0%';
			document.getElementById('backdetails').innerHTML='&times;';</script>
			<form method='post' id='cm-marks-4' >
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='pinno' >Pin:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' id='pinno' value='$pin' name='pinno' Readonly/>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-401' >Maths-401:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter Maths Marks' id='cm-401' name='cm-401' />
					<div class='text-danger' id='cm-401err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-402' >Web Technologies-402:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter Digital Electronics Marks' id='cm-402' name='cm-402' />
					<div class='text-danger' id='cm-402err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-403' >Micro processor-403:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter Micro processor Marks' id='cm-403' name='cm-403' />
					<div class='text-danger' id='cm-403err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-404' >OOP through c++-404:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='OOP through c++ Marks' id='cm-404' name='cm-404' />
					<div class='text-danger' id='cm-404err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-405' >Computer network-405:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter Computer network Marks' id='cm-405' name='cm-405' />
					<div class='text-danger' id='cm-405err'></div>
				</div>
			</div>
			<div class='row'>
				<div class='col-4'></div>
				<div class='col-4'>
				<button class='btn btn-primary' name='cm-4' onclick='return cm4()' id='cm-4'>Submit</button>
				</div>
			</div>
			</form>";
			echo"<script>
				function cm4(){
					var cm_401=document.getElementById('cm-401').value;
					var cm_402=document.getElementById('cm-402').value;
					var cm_403=document.getElementById('cm-403').value;
					var cm_404=document.getElementById('cm-404').value;
					var cm_405=document.getElementById('cm-405').value;
					if(cm_401==null||cm_401==''){
						document.getElementById('cm-401err').innerHTML='Required Field';
						return false;
					}
					else if(cm_402==null||cm_402==''){
						document.getElementById('cm-402err').innerHTML='Required Field';
						return false;
					}
					else if(cm_403==null||cm_403==''){
						document.getElementById('cm-403err').innerHTML='Required Field';
						return false;
					}
					else if(cm_404==null||cm_404==''){
						document.getElementById('cm-404err').innerHTML='Required Field';
						return false;
					}
					else if(cm_405==null||cm_405==''){
						document.getElementById('cm-405err').innerHTML='Required Field';
						return false;
					}
					
				}
			</script>";
			
		}
		elseif($sem1=='5th Semester'){
			echo"<script>document.getElementById('matter').style.width = '0%';
			document.getElementById('backdetails').innerHTML='&times;';</script>
			<form method='post' id='cm-marks-5' >
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='pinno' >Pin:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' id='pinno' value='$pin' name='pinno' Readonly/>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-501' >Industrial Mangengement and enterpreneurship-501:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter Industrial Mangengement and enterpreneurship Marks' id='cm-501' name='cm-501' />
					<div class='text-danger' id='cm-501err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-502' >java-502:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter java Marks' id='cm-502' name='cm-502' />
					<div class='text-danger' id='cm-502err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-503' >software engineering-503:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter software engineering Marks' id='cm-503' name='cm-503' />
					<div class='text-danger' id='cm-503err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-504' >internet of things-504:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter internet of things Marks' id='cm-504' name='cm-504' />
					<div class='text-danger' id='cm-504err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='cm-505' >python-505:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter pythan Marks' id='cm-505' name='cm-505' />
					<div class='text-danger' id='cm-505err'></div>
					
				</div>
			</div>
			<div class='row'>
				<div class='col-4'></div>
				<div class='col-4'>
				<button class='btn btn-primary' name='cm-5' onclick='return cm5()' id='cm-5'>Submit</button>
				</div>
			</div>
			</form>";
			echo"<script>
				function cm5(){
					var cm_501=document.getElementById('cm-501').value;
					var cm_502=document.getElementById('cm-502').value;
					var cm_503=document.getElementById('cm-503').value;
					var cm_504=document.getElementById('cm-504').value;
					var cm_505=document.getElementById('cm-505').value;
					if(cm_501==null||cm_501==''){
						document.getElementById('cm-501err').innerHTML='Required Field';
						return false;
					}
					else if(cm_502==null||cm_502==''){
						document.getElementById('cm-502err').innerHTML='Required Field';
						return false;
					}
					else if(cm_503==null||cm_503==''){
						document.getElementById('cm-503err').innerHTML='Required Field';
						return false;
					}
					else if(cm_504==null||cm_504==''){
						document.getElementById('cm-504err').innerHTML='Required Field';
						return false;
					}
					else if(cm_505==null||cm_505==''){
						document.getElementById('cm-505err').innerHTML='Required Field';
						return false;
					}
				}	
				</script>";
			
		}
	}
	elseif(preg_match($pinec,$pin)){
		if($sem1=="Select Semester"){
			echo"<script>alert('Enter Semester')</script>";
		}
	    elseif($sem1=='1st Semester'){
			echo"<script>document.getElementById('matter').style.width = '0%';
			document.getElementById('backdetails').innerHTML='&times;';</script>
			<form method='post' id='ec-marks-1' >
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='pinno' >Pin:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' id='pinno' value='$pin' name='pinno' Readonly/>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-101' >English-101:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter English Marks' id='ec-101' name='ec-101' />
					<div class='text-danger' id='ec-101err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-102' >maths-102:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter maths Marks' id='ec-102' name='ec-102' />
					<div class='text-danger' id='ec-102err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-103' >physics-103:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter physics Marks' id='ec-103' name='ec-103' />
					<div class='text-danger' id='ec-103err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-104' >chemistry-104:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='chemistry' id='ec-104' name='ec-104' />
					<div class='text-danger' id='ec-104err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-105' >electronic components and power supplies-105:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter electronic components and power supplies Marks' id='ec-105' name='ec-105' />
					<div class='text-danger' id='ec-105err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-106' >elements of electrical engineering-106:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter elements of electrical engineering Marks' id='ec-106' name='ec-106' />
					<div class='text-danger' id='ec-106err'></div>
				</div>
			</div><div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-107' >drawing-107:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter drawing Marks' id='ec-107' name='ec-107' />
					<div class='text-danger' id='ec-107err'></div>
				</div>
			</div>
			<div class='row'>
				<div class='col-4'></div>
				<div class='col-4'>
				<button class='btn btn-primary' name='ec-1' onclick='return ec1()' id='ec-1'>Submit</button>
				</div>
			</div>
			</form>";
			echo"<script>
				function ec1(){
					var ec_101=document.getElementById('ec-101').value;
					var ec_102=document.getElementById('ec-102').value;
					var ec_103=document.getElementById('ec-103').value;
					var ec_104=document.getElementById('ec-104').value;
					var ec_105=document.getElementById('ec-105').value;
					var ec_106=document.getElementById('ec-106').value;
					var ec_107=document.getElementById('ec-107').value;
					if(ec_101==null||ec_101==''){
						document.getElementById('ec-101err').innerHTML='Required Field';
						return false;
					}
					else if(ec_102==null||ec_102==''){
						document.getElementById('ec-102err').innerHTML='Required Field';
						return false;
					}
					else if(ec_103==null||ec_103==''){
						document.getElementById('ec-103err').innerHTML='Required Field';
						return false;
					}
					else if(ec_104==null||ec_104==''){
						document.getElementById('ec-104err').innerHTML='Required Field';
						return false;
					}
					else if(ec_105==null||ec_105==''){
						document.getElementById('ec-105err').innerHTML='Required Field';
						return false;
					}
					else if(ec_106==null||ec_106==''){
						document.getElementById('ec-106err').innerHTML='Required Field';
						return false;
					}
					else if(ec_107==null||ec_107==''){
						document.getElementById('ec-107err').innerHTML='Required Field';
						return false;
					}
				}
			</script>";
			
			
		}		
		elseif($sem1=='3rd Semester'){
			echo"<script>document.getElementById('matter').style.width = '0%';
			document.getElementById('backdetails').innerHTML='&times;';</script>
			<form method='post' id='ec-marks-5' >
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='pinno' >Pin:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' id='pinno' value='$pin' name='pinno' Readonly/>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-301' >maths 2-301:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter maths 2 Marks' id='ec-301' name='ec-301' />
					<div class='text-danger' id='ec_301err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-302' >electronic circuits-302:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter electronic circuits Marks' id='ec-302' name='ec-302' />
					<div class='text-danger' id='ec_302err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-303' >digital circuits-303:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter digital circuits Marks' id='ec-303' name='ec-303' />
					<div class='text-danger' id='ec_303err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-304' >analog and digital communicatian system-304:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter analog and digital communicatian system Marks' id='ec-304' name='ec-304' />
					<div class='text-danger' id='ec_304err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-305' >network analysis-305:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter network analysis Marks' id='ec-305' name='ec-305' />
					<div class='text-danger' id='ec_305err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-306' >electronic measurements&consumer gadgets-306:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter electronic measurements&consumer gadgets Marks' id='ec-306' name='ec-306' />
					<div class='text-danger' id='ec_306err'></div>
				</div>
			</div>
			<div class='row'>
				<div class='col-4'></div>
				<div class='col-4'>
				<button class='btn btn-primary' name='ec-3' onclick='return ec3()' id='ec-3'>Submit</button>
				</div>
			</div>
			</form>";
			echo"<script>
				function ec3(){
					var ec_301=document.getElementById('ec-301').value;
					var ec_302=document.getElementById('ec-302').value;
					var ec_303=document.getElementById('ec-303').value;
					var ec_304=document.getElementById('ec-304').value;
					var ec_305=document.getElementById('ec-305').value;
					var ec_306=document.getElementById('ec-306').value;
					if(ec_301==null||ec_301==''){
						document.getElementById('ec_301err').innerHTML='Required Field';
						return false;
					}
					else if(ec_302==null||ec_302==''){
						document.getElementById('ec_302err').innerHTML='Required Field';
						return false;
					}
					else if(ec_303==null||ec_303==''){
						document.getElementById('ec_303err').innerHTML='Required Field';
						return false;
					}
					else if(ec_304==null||ec_304==''){
						document.getElementById('ec_304err').innerHTML='Required Field';
						return false;
					}
					else if(ec_305==null||ec_305==''){
						document.getElementById('ec_305err').innerHTML='Required Field';
						return false;
					}
					else if(ec_306==null||ec_306==''){
						document.getElementById('ec_306err').innerHTML='Required Field';
						return false;
					}
				}
			</script>";
			
		}
		elseif($sem1=='4th Semester'){
			echo"<script>document.getElementById('matter').style.width = '0%';
			document.getElementById('backdetails').innerHTML='&times;';</script>
			<form method='post' id='ec-marks-5' >
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='pinno' >Pin:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' id='pinno' value='$pin' name='pinno' Readonly/>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-401' >maths-401:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter maths Marks' id='ec-401' name='ec-401' />
					<div class='text-danger' id='ec_401err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-402' >electronic circuit-402:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter electronic circuit Marks' id='ec-402' name='ec-402' />
					<div class='text-danger' id='ec_402err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-403' >microprocssor-403:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter microprocssor Marks' id='ec-403' name='ec-403' />
					<div class='text-danger' id='ec_403err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-404' >microwave&satellite communication system-404:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter microwave&satellite communication system Marks' id='ec-404' name='ec-404' />
					<div class='text-danger' id='ec_404err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-405' >programming in c-405:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter programming in c Marks' id='ec-405' name='ec-405' />
					<div class='text-danger' id='ec_405err'></div>
				</div>
			</div>
			<div class='row'>
				<div class='col-4'></div>
				<div class='col-4'>
				<button class='btn btn-primary' name='ec-4' onclick='return ec4()' id='ec-4'>Submit</button>
				</div>
			</div>
			</form>";
			echo"<script>
				function ec4(){
					var ec_401=document.getElementById('ec-401').value;
					var ec_402=document.getElementById('ec-402').value;
					var ec_403=document.getElementById('ec-403').value;
					var ec_404=document.getElementById('ec-404').value;
					var ec_405=document.getElementById('ec-405').value;
					var ec_406=document.getElementById('ec-406').value;
					if(ec_401==null||ec_401==''){
						document.getElementById('ec_401err').innerHTML='Required Field';
						return false;
					}
					else if(ec_402==null||ec_402==''){
						document.getElementById('ec_402err').innerHTML='Required Field';
						return false;
					}
					else if(ec_403==null||ec_403==''){
						document.getElementById('ec_403err').innerHTML='Required Field';
						return false;
					}
					else if(ec_404==null||ec_404==''){
						document.getElementById('ec_404err').innerHTML='Required Field';
						return false;
					}
					else if(ec_405==null||ec_405==''){
						document.getElementById('ec_405err').innerHTML='Required Field';
						return false;
					}
					else if(ec_406==null||ec_406==''){
						document.getElementById('ec_406err').innerHTML='Required Field';
						return false;
					}
				}
			</script>";
			
		}		
		elseif($sem1=='5th Semester'){
			echo"<script>document.getElementById('matter').style.width = '0%';
			document.getElementById('backdetails').innerHTML='&times;';</script>
			<form method='post' id='ec-marks-5' >
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='pinno' >Pin:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' id='pinno' value='$pin' name='pinno' Readonly/>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-501' >Industrial Mangengement and enterpreneurship-501:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter Industrial Mangengement and enterpreneurship Marks' id='ec-501' name='ec-501' />
					<div class='text-danger' id='ec_501err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-502' >micro controllers-502:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter micro controllers Marks' id='ec-502' name='ec-502' />
					<div class='text-danger' id='ec_502err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-503' >optical&mobile communication-503:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter optical&mobile communication Marks' id='ec-503' name='ec-503' />
					<div class='text-danger' id='ec_503err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-504' >industrial electronics-504:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter industrial electronics Marks' id='ec-504' name='ec-504' />
					<div class='text-danger' id='ec_504err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ec-505' >computer hardware-505:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter computer hardware Marks' id='ec-505' name='ec-505' />
					<div class='text-danger' id='ec_505err'></div>
				</div>
			</div>
			<div class='row'>
				<div class='col-4'></div>
				<div class='col-4'>
				<button class='btn btn-primary' name='ec-5' onclick='return ec5()' id='ec-5'>Submit</button>
				</div>
			</div>
			</form>";
			echo"<script>
				function ec5(){
					var ec_501=document.getElementById('ec-501').value;
					var ec_502=document.getElementById('ec-502').value;
					var ec_503=document.getElementById('ec-503').value;
					var ec_504=document.getElementById('ec-504').value;
					var ec_505=document.getElementById('ec-505').value;
					if(ec_501==null||ec_501==''){
						document.getElementById('ec_501err').innerHTML='Required Field';
						return false;
					}
					else if(ec_502==null||ec_502==''){
						document.getElementById('ec_502err').innerHTML='Required Field';
						return false;
					}
					else if(ec_503==null||ec_503==''){
						document.getElementById('ec_503err').innerHTML='Required Field';
						return false;
					}
					else if(ec_504==null||ec_504==''){
						document.getElementById('ec_504err').innerHTML='Required Field';
						return false;
					}
					else if(ec_505==null||ec_505==''){
						document.getElementById('ec_505err').innerHTML='Required Field';
						return false;
					}
				}
			</script>";
		
		}		
}
	elseif(preg_match($pinee,$pin)){
		if($sem1=="Select Semester"){
			echo"<script>alert('Enter Semester')</script>";
		}		
		elseif($sem1=='1st Semester'){
			echo"<script>document.getElementById('matter').style.width = '0%';
			document.getElementById('backdetails').innerHTML='&times;';</script>
			<form method='post' id='ee-marks-5' >
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='pinno' >Pin:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' id='pinno' value='$pin' name='pinno' Readonly/>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-101' >english-101:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter english Marks' id='ee-101' name='ee-101' />
					<div class='text-danger' id='ee_101err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-102' >maths-102:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter maths Marks' id='ee-102' name='ee-102' />
						<div class='text-danger' id='ee_102err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-103' >physics-103:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter physics Marks' id='ee-103' name='ee-103' />
						<div class='text-danger' id='ee_103err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-104' >chemistry-104:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter chemistry Marks' id='ee-104' name='ee-104' />
						<div class='text-danger' id='ee_104err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-105' >elctrical engineering materials-105:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter elctrical engineering materials Marks' id='ee-105' name='ee-105' />
						<div class='text-danger' id='ee_105err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-106' >basic eletrical engineering-106:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter basic eletrical engineering Marks' id='ee-106' name='ee-106' />
						<div class='text-danger' id='ee_106err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-107' >drawing-107:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter drawing Marks' id='ee-107' name='ee-107' />
						<div class='text-danger' id='ee_107err'></div>
				</div>
			</div>
			<div class='row'>
				<div class='col-4'></div>
				<div class='col-4'>
				<button class='btn btn-primary' name='ee-1' onclick='return ee1()' id='ee-1'>Submit</button>
				</div>
			</div>
			</form>";
			echo"<script>
				function ee1(){
					var ee_101=document.getElementById('ee-101').value;
					var ee_102=document.getElementById('ee-102').value;
					var ee_103=document.getElementById('ee-103').value;
					var ee_104=document.getElementById('ee-104').value;
					var ee_105=document.getElementById('ee-105').value;
					var ee_106=document.getElementById('ee-106').value;
					var ee_107=document.getElementById('ee-107').value;
					if(ee_101==null||ee_101==''){
						document.getElementById('ee_101err').innerHTML='Required Field';
						return false;
					}
					else if(ee_102==null||ee_102==''){
						document.getElementById('ee_102err').innerHTML='Required Field';
						return false;
					}
					else if(ee_103==null||ee_103==''){
						document.getElementById('ee_103err').innerHTML='Required Field';
						return false;
					}
					else if(ee_104==null||ee_104==''){
						document.getElementById('ee_104err').innerHTML='Required Field';
						return false;
					}
					else if(ee_105==null||ee_105==''){
						document.getElementById('ee_105err').innerHTML='Required Field';
						return false;
					}
					else if(ee_106==null||ee_106==''){
						document.getElementById('ee-106err').innerHTML='Required Field';
						return false;
					}
					else if(ee_107==null||ee_107==''){
						document.getElementById('ee_107err').innerHTML='Required Field';
						return false;
					}
				}
			</script>";

		}		
		elseif($sem1=='3rd Semester'){
			echo"<script>document.getElementById('matter').style.width = '0%';
			document.getElementById('backdetails').innerHTML='&times;';</script>
			<form method='post' id='ee-marks-5' >
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='pinno' >Pin:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' id='pinno' value='$pin' name='pinno' Readonly/>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-301' >maths-301:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter maths Marks' id='ee-301' name='ee-301' />
						<div class='text-danger' id='ee_301err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-302' >elctrical machines-302:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter elctrical machines Marks' id='ee-302' name='ee-302' />
					<div class='text-danger' id='ee_302err'></div>

				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-303' >power system-303:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter power system Marks' id='ee-303' name='ee-303' />
					<div class='text-danger' id='ee_303err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-304' >electrical electronic measuring instuments-304:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter electrical electronic measuring instuments Marks' id='ee-304' name='ee-304' />
					<div class='text-danger' id='ee_304err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-305' >electrical cicuits-305:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter electrical cicuits Marks' id='ee-305' name='ee-305' />
					<div class='text-danger' id='ee_305err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-306' >programming in c-306:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter programming in c Marks' id='ee-306' name='ee-306' />
					<div class='text-danger' id='ee_306err'></div>
				</div>
			</div>
			<div class='row'>
				<div class='col-4'></div>
				<div class='col-4'>
				<button class='btn btn-primary' name='ee-3' onclick='return ee3()' id='ee-3'>Submit</button>
				</div>
			</div>
			</form>";
			echo"<script>
				function ee3(){
					var ee_301=document.getElementById('ee-301').value;
					var ee_302=document.getElementById('ee-302').value;
					var ee_303=document.getElementById('ee-303').value;
					var ee_304=document.getElementById('ee-304').value;
					var ee_305=document.getElementById('ee-305').value;
					var ee_306=document.getElementById('ee-306').value;
					if(ee_301==null||ee_301==''){
						document.getElementById('ee_301err').innerHTML='Required Field';
						return false;
					}
					else if(ee_302==null||ee_302==''){
						document.getElementById('ee_302err').innerHTML='Required Field';
						return false;
					}
					else if(ee_303==null||ee_303==''){
						document.getElementById('ee_303err').innerHTML='Required Field';
						return false;
					}
					else if(ee_304==null||ee_304==''){
						document.getElementById('ee_304err').innerHTML='Required Field';
						return false;
					}
					else if(ee_305==null||ee_305==''){
						document.getElementById('ee_305err').innerHTML='Required Field';
						return false;
					}
					else if(ee_306==null||ee_306==''){
						document.getElementById('ee_306err').innerHTML='Required Field';
						return false;
					}
				}
			</script>";
			
		}		
		elseif($sem1=='4th Semester'){
			echo"<script>document.getElementById('matter').style.width = '0%';
			document.getElementById('backdetails').innerHTML='&times;';</script>
			<form method='post' id='ee-marks-5' >
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='pinno' >Pin:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' id='pinno' value='$pin' name='pinno' Readonly/>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-401' >maths-401:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter maths Marks' id='ee-401' name='ee-401' />
					<div class='text-danger' id='ee_401err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-402' >elctrical machines-402:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter elctrical machines Marks' id='ee-402' name='ee-402' />
					<div class='text-danger' id='ee_402err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-403' >power systems-403:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter power systems Marks' id='ee-403' name='ee-403' />
					<div class='text-danger' id='ee_403err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-404' >elctrical intallation and estimation-404:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter elctrical intallation and estimation Marks' id='ee-404' name='ee-404' />
					<div class='text-danger' id='ee_404err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-405' >electronics engineering-405:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter electronics engineering Marks' id='ee-405' name='ee-405' />
					<div class='text-danger' id='ee_405err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-406' >general mechanical engineering-406:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter general mechanical engineering Marks' id='ee-406' name='ee-406' />
					<div class='text-danger' id='ee_406err'></div>
				</div>
			</div>
			<div class='row'>
				<div class='col-4'></div>
				<div class='col-4'>
				<button class='btn btn-primary' name='ee-4' onclick='return ee4()' id='ee-4'>Submit</button>
				</div>
			</div>
			</form>";
			echo"<script>
				function ee4(){
					var ee_401=document.getElementById('ee-401').value;
					var ee_402=document.getElementById('ee-402').value;
					var ee_403=document.getElementById('ee-403').value;
					var ee_404=document.getElementById('ee-404').value;
					var ee_405=document.getElementById('ee-405').value;
					var ee_406=document.getElementById('ee-406').value;
					if(ee_401==null||ee_401==''){
						document.getElementById('ee_401err').innerHTML='Required Field';
						return false;
					}
					else if(ee_402==null||ee_402==''){
						document.getElementById('ee_402err').innerHTML='Required Field';
						return false;
					}
					else if(ee_403==null||ee_403==''){
						document.getElementById('ee_403err').innerHTML='Required Field';
						return false;
					}
					else if(ee_404==null||ee_404==''){
						document.getElementById('ee_404err').innerHTML='Required Field';
						return false;
					}
					else if(ee_405==null||ee_405==''){
						document.getElementById('ee_405err').innerHTML='Required Field';
						return false;
					}
					else if(ee_406==null||ee_406==''){
						document.getElementById('ee_406err').innerHTML='Required Field';
						return false;
					}
				}
			</script>";
			
			}
		}		
		elseif($sem1=='5th Semester'){
			echo"<script>document.getElementById('matter').style.width = '0%';
			document.getElementById('backdetails').innerHTML='&times;';</script>
			<form method='post' id='ee-marks-6' >
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='pinno' >Pin:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' id='pinno' value='$pin' name='pinno' Readonly/>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-501' >industrial mangement&smart technolgy-501:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter industrial mangement&smart technolgy Marks' id='ee-501' name='ee-501' />
					<div class='text-danger' id='ee_501err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-502' >elctrical machines-502:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter elctrical machines Marks' id='ee-502' name='ee-502' />
					<div class='text-danger' id='ee_502err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-503' >power system-503:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter power system Marks' id='ee-503' name='ee-503' />
					<div class='text-danger' id='ee_503err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-504' >power electronics,PLC&SCADA-504:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter power electronics,PLC&SCADA Marks' id='ee-504' name='ee-504' />
					<div class='text-danger' id='ee_504err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-505' >digital electronics&micro controller-505:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter digital electronics&micro controller Marks' id='ee-505' name='ee-505' />
					<div class='text-danger' id='ee_505err'></div>
				</div>
			</div>
			<div class='row' >
				<div class='col-3 text-end'>
					<label for='ee-506' >electrical utilization and traction-506:</label>
				</div>
				<div class='col-6'>
					<input class='form-control' type='text' placeholder='Enter electrical utilization and traction Marks' id='ee-506' name='ee-506' />
					<div class='text-danger' id='ee_506err'></div>
				</div>
			</div>
			<div class='row'>
				<div class='col-4'></div>
				<div class='col-4'>
				<button class='btn btn-primary' name='ee-5' onclick='retrun ee5()' id='ee-5'>Submit</button>
				</div>
			</div>
			</form>";
		}
	}
	
	
	
	
	
	
	
	
	
	
if(isset($_POST['viewbtn'])){
	echo"<script>document.getElementById('matter').style.width = '0%';
	document.getElementById('backdetails').innerHTML='&times;';</script>";
	$pin=$_POST['vpin'];
	$sem=$_POST['vsem1'];
	$pincm='/093-cm-/i';
	$pinec="/093-ec-/i";
	$pinee="/093-ee-/i";
	if(preg_match($pincm,$pin)){
		if($sem=='Select Semester'){
			echo'<script>alert("Enter Semester")</script>';
		}
		elseif($sem=='1st Semester'){
			echo"
					<div class='row table-responsive  form' >
						<table class='table table-hover table-primary table-bordered'>";
			$view="SELECT * FROM `new_student` WHERE `pin`='".$pin."'";
			if($query1=mysqli_query($connect,$view)){
				while($row1=mysqli_fetch_assoc($query1)){
					echo"
						<tr>
							<td class='text-center'colspan='2'><img src=images/".$row1['pic']." width='100px'/></td>
						</tr>
						<tr>
							<td>Student Name:</td>
							<td>".$row1['student']."</td>
						</tr>
						<tr>
							<td>Pin Number:</td>
							<td>".$row1['pin']."</td>
						</tr>
						<tr>
							<td>Father Name:</td>
							<td>".$row1['father']."</td>
						</tr>
					";
				}
			}
			$select="SELECT * FROM `cme1` WHERE `pin`='".$pin."'";
			$query=mysqli_query($connect,$select);
			while($row=mysqli_fetch_assoc($query)){
				echo"
						<tr>
							<td>English-101</td>
							<td>".$row['ENGLISH']."</td>
						</tr>
						<tr>
							<td>Maths-101</td>
							<td>".$row['MATHS1']."</td>
						</tr>
						<tr>
							<td>Physics-103</td>
							<td>".$row['PHYSICS']."</td>
						</tr>
						<tr>
							<td>Chemistry-104</td>
							<td>".$row['CHEMISTRY']."</td>
						</tr><tr>
							<td>Basic Computer-105</td>
							<td>".$row['BASIC_COMPUTERS']."</td>
						</tr><tr>
							<td>C Language-106</td>
							<td>".$row['C_LANGUAGE']."</td>
						</tr><tr>
							<td>Drawing</td>
							<td>".$row['ENG_DRAWING']."</td>
						</tr>
					</table>
					</div>
				";
			}
		}
		elseif($sem=='3rd Semester'){
			echo"
					<div class='row table-responsive form' >
						<table class='table table-hover table-primary table-bordered'>";
			$view="SELECT * FROM `new_student` WHERE `pin`='".$pin."'";
			if($query1=mysqli_query($connect,$view)){
				while($row1=mysqli_fetch_assoc($query1)){
					echo"
						<tr>
							<td class='text-center'colspan='2'><img src=images/".$row1['pic']." width='100px'/></td>
						</tr>
						<tr>
							<td>Student Name:</td>
							<td>".$row1['student']."</td>
						</tr>
						<tr>
							<td>Pin Number:</td>
							<td>".$row1['pin']."</td>
						</tr>
						<tr>
							<td>Father Name:</td>
							<td>".$row1['father']."</td>
						</tr>
					";
				}
			}
			$select="SELECT * FROM `cme3` WHERE `pin`='".$pin."'";
			$query=mysqli_query($connect,$select);
			while($row=mysqli_fetch_assoc($query)){
				echo"
						<tr>
							<td>Pin Number</td>
							<td>".$row['PIN']."</td>
						</tr>
						<tr>
							<td>Maths-301</td>
							<td>".$row['MATHS_2']."</td>
						</tr>
						<tr>
							<td>Digital Electrionic-302</td>
							<td>".$row['DE']."</td>
						</tr>
						<tr>
							<td>Operating system-303</td>
							<td>".$row['OS']."</td>
						</tr>
						<tr>
							<td>data structure-304</td>
							<td>".$row['DS']."</td>
						</tr>
						<tr>
							<td>Data base management system-305</td>
							<td>".$row['DBMS']."</td>
				        </tr>
					</table>
					</div>
				";
			}
		}
		elseif($sem=='5th Semester'){
			echo"
					<div class='row table-responsive form' >
						<table class='table table-hover table-primary table-bordered'>";
			$view="SELECT * FROM `new_student` WHERE `pin`='".$pin."'";
			if($query1=mysqli_query($connect,$view)){
				while($row1=mysqli_fetch_assoc($query1)){
					echo"
						<tr>
							<td class='text-center'colspan='2'><img src=images/".$row1['pic']." width='100px'/></td>
						</tr>
						<tr>
							<td>Student Name:</td>
							<td>".$row1['student']."</td>
						</tr>
						<tr>
							<td>Pin Number:</td>
							<td>".$row1['pin']."</td>
						</tr>
						<tr>
							<td>Father Name:</td>
							<td>".$row1['father']."</td>
						</tr>
					";
				}
			}
			$select="SELECT * FROM `cme5` WHERE `pin`='".$pin."'";
			$query=mysqli_query($connect,$select);
			while($row=mysqli_fetch_assoc($query)){
				echo"
						<tr>
							<td>Pin Number</td>
							<td>".$row['PIN']."</td>
						</tr>
						<tr>
							<td>IME-501</td>
							<td>".$row['IME']."</td>
						</tr>
						<tr>
							<td>java-502</td>
							<td>".$row['JAVA']."</td>
						</tr>
						<tr>
							<td>software engineering-503</td>
							<td>".$row['SE']."</td>
						</tr>
						<tr>
							<td>internet of things-504</td>
							<td>".$row['IOT']."</td>
						</tr>
						<tr>
							<td>python-505</td>
							<td>".$row['PYTHON']."</td>
				        </tr>
					</table>
					</div>
				";
			}
		}
		elseif($sem=='4th Semester'){
			echo"
					<div class='row table-responsive form' >
						<table class='table table-hover table-primary table-bordered'>";
			$view="SELECT * FROM `new_student` WHERE `pin`='".$pin."'";
			if($query1=mysqli_query($connect,$view)){
				while($row1=mysqli_fetch_assoc($query1)){
					echo"
						<tr>
							<td class='text-center'colspan='2'><img src=images/".$row1['pic']." width='100px'/></td>
						</tr>
						<tr>
							<td>Student Name:</td>
							<td>".$row1['student']."</td>
						</tr>
						<tr>
							<td>Pin Number:</td>
							<td>".$row1['pin']."</td>
						</tr>
						<tr>
							<td>Father Name:</td>
							<td>".$row1['father']."</td>
						</tr>
					";
				}
			}
			$select="SELECT * FROM `cme4` WHERE PIN='".$pin."'";
			$query=mysqli_query($connect,$select);
			while($row=mysqli_fetch_assoc($query)){
				echo"
						<tr>
							<td>Pin Number</td>
							<td>".$row['PIN']."</td>
						</tr>
						<tr>
							<td>MATHS-401</td>
							<td>".$row['MATHS_3']."</td>
						</tr>
						<tr>
							<td>Web Technologies-402</td>
							<td>".$row['WT']."</td>
						</tr>
						<tr>
							<td>Microprocssor-403</td>
							<td>".$row['MP']."</td>
						</tr>
						<tr>
							<td>C++-404</td>
							<td>".$row['C++']."</td>
						</tr>
						<tr>
							<td>Computer Network-505</td>
							<td>".$row['CN']."</td>
				        </tr>
						
						</table>
					</div>
				";
			}
		}
	}
	if(preg_match($pinec,$pin)){
		if($sem=='Select Semester'){
			echo'<script>alert("Enter Semester")</script>';
		}
		elseif($sem=='1st Semester'){
			echo"
					<div class='row table-responsive form' >
						<table class='table table-hover table-primary  table-bordered'>";
			$view="SELECT * FROM `new_student` WHERE `pin`='".$pin."'";
			if($query1=mysqli_query($connect,$view)){
				while($row1=mysqli_fetch_assoc($query1)){
					echo"
						<tr>
							<td class='text-center'colspan='2'><img src=images/".$row1['pic']." width='100px'/></td>
						</tr>
						<tr>
							<td>Student Name:</td>
							<td>".$row1['student']."</td>
						</tr>
						<tr>
							<td>Pin Number:</td>
							<td>".$row1['pin']."</td>
						</tr>
						<tr>
							<td>Father Name:</td>
							<td>".$row1['father']."</td>
						</tr>
					";
				}
			}
			$select="SELECT * FROM `ece1` WHERE `pin`='".$pin."'";
			$query=mysqli_query($connect,$select);
			while($row=mysqli_fetch_assoc($query)){
				echo"
						<tr>
							<td>Pin Number</td>
							<td>".$row['PIN']."</td>
						</tr>
						<tr>
							<td>English-101</td>
							<td>".$row['ENGLISH']."</td>
						</tr>
						<tr>
							<td>Maths-101</td>
							<td>".$row['MATHS_1']."</td>
						</tr>
						<tr>
							<td>Physics-103</td>
							<td>".$row['PHYSICS']."</td>
						</tr>
						<tr>
							<td>Chemistry-104</td>
							<td>".$row['CHEMISTRY']."</td>
						</tr><tr>
							<td>EC&PS-105</td>
							<td>".$row['EC&PS']."</td>
						</tr><tr>
							<td>EEE-106</td>
							<td>".$row['EEE']."</td>
						</tr><tr>
							<td>Drawing-107</td>
							<td>".$row['ENG_DRAWING']."</td>
						</tr>
					</table>
					</div>
				";
			}
		}
	    elseif($sem=='3rd Semester'){
			echo"
					<div class='row table-responsive form' >
						<table class='table table-hover table-primary table-bordered'>";
			$view="SELECT * FROM `new_student` WHERE `pin`='".$pin."'";
			if($query1=mysqli_query($connect,$view)){
				while($row1=mysqli_fetch_assoc($query1)){
					echo"
						<tr>
							<td class='text-center'colspan='2'><img src=images/".$row1['pic']." width='100px'/></td>
						</tr>
						<tr>
							<td>Student Name:</td>
							<td>".$row1['student']."</td>
						</tr>
						<tr>
							<td>Pin Number:</td>
							<td>".$row1['pin']."</td>
						</tr>
						<tr>
							<td>Father Name:</td>
							<td>".$row1['father']."</td>
						</tr>
					";
				}
			}
			$select="SELECT * FROM `ece3` WHERE `PIN`='".$pin."'";
			$query=mysqli_query($connect,$select);
			while($row=mysqli_fetch_assoc($query)){
				echo"
						<tr>
							<td>Pin Number</td>
							<td>".$row['PIN']."</td>
						</tr>
						<tr>
							<td>MATHS_2-301</td>
							<td>".$row['MATHS_2']."</td>
						</tr>
						<tr>
							<td>EC_1-302</td>
							<td>".$row['EC_1']."</td>
						</tr>
						<tr>
							<td>DE-303</td>
							<td>".$row['DE']."</td>
						</tr>
						<tr>
							<td>A&DCS-304</td>
							<td>".$row['A&DCS']."</td>
						</tr>
						<tr>
							<td>NA-305</td>
							<td>".$row['NA']."</td>
				        </tr>
						<tr>
							<td>EM&CG-306</td>
							<td>".$row['EM&CG']."</td>
						</tr>
					</table>
					</div>
				";
			}
		}
		elseif($sem=='4th Semester'){
			echo"
					<div class='row table-responsive form' >
						<table class='table table-hover table-primary table-bordered'>";
			$view="SELECT * FROM `new_student` WHERE `pin`='".$pin."'";
			if($query1=mysqli_query($connect,$view)){
				while($row1=mysqli_fetch_assoc($query1)){
					echo"
						<tr>
							<td class='text-center'colspan='2'><img src=images/".$row1['pic']." width='100px'/></td>
						</tr>
						<tr>
							<td>Student Name:</td>
							<td>".$row1['student']."</td>
						</tr>
						<tr>
							<td>Pin Number:</td>
							<td>".$row1['pin']."</td>
						</tr>
						<tr>
							<td>Father Name:</td>
							<td>".$row1['father']."</td>
						</tr>
					";
				}
			}
			$select="SELECT * FROM `ece4` WHERE `pin`='".$pin."'";
			$query=mysqli_query($connect,$select);
			while($row=mysqli_fetch_assoc($query)){
				echo"
						<tr>
							<td>Pin Number</td>
							<td>".$row['PIN']."</td>
						</tr>
						<tr>
							<td>MATHS_3-401</td>
							<td>".$row['MATHS_3']."</td>
						</tr>
						<tr>
							<td>EC_2-402</td>
							<td>".$row['EC_2']."</td>
						</tr>
						<tr>
							<td>MP-403</td>
							<td>".$row['MP']."</td>
						</tr>
						<tr>
							<td>M&SCS-404</td>
							<td>".$row['M&SCS']."</td>
						</tr>
						<tr>
							<td>C&MAT_LAB-405</td>
							<td>".$row['C&MAT_LAB']."</td>
				        </tr>
					</table>
					</div>
				";
			}
		}
		elseif($sem=='5th Semester'){
			echo"
					<div class='row table-responsive form' >
						<table class='table table-hover table-primary table-bordered'>";
			$view="SELECT * FROM `new_student` WHERE `pin`='".$pin."'";
			if($query1=mysqli_query($connect,$view)){
				while($row1=mysqli_fetch_assoc($query1)){
					echo"
						<tr>
							<td class='text-center'colspan='2'><img src=images/".$row1['pic']." width='100px'/></td>
						</tr>
						<tr>
							<td>Student Name:</td>
							<td>".$row1['student']."</td>
						</tr>
						<tr>
							<td>Pin Number:</td>
							<td>".$row1['pin']."</td>
						</tr>
						<tr>
							<td>Father Name:</td>
							<td>".$row1['father']."</td>
						</tr>
					";
				}
			}
			$select="SELECT * FROM `ece5` WHERE `pin`='".$pin."'";
			$query=mysqli_query($connect,$select);
			while($row=mysqli_fetch_assoc($query)){
				echo"
						<tr>
							<td>Pin Number</td>
							<td>".$row['PIN']."</td>
						</tr>
						<tr>
							<td>IME-501</td>
							<td>".$row['IME']."</td>
						</tr>
						<tr>
							<td>MC&APP-502</td>
							<td>".$row['MC&APP']."</td>
						</tr>
						<tr>
							<td>O&MC-503</td>
							<td>".$row['O&MC']."</td>
						</tr>
						<tr>
							<td>IE-504</td>
							<td>".$row['IE']."</td>
						</tr>
						<tr>
							<td>CH&N-505</td>
							<td>".$row['CH&N']."</td>
				        </tr>
					</table>
					</div>
				";
			}
		}
	}
		if(preg_match($pinee,$pin)){
		if($sem=='Select Semester'){
			echo'<script>alert("Enter Semester")</script>';
		}
		elseif($sem=='1st Semester'){
			echo"
					<div class='row table-responsive form' >
						<table class='table table-hover table-primary table-bordered'>";
			$view="SELECT * FROM `new_student` WHERE `pin`='".$pin."'";
			if($query1=mysqli_query($connect,$view)){
				while($row1=mysqli_fetch_assoc($query1)){
					echo"
						<tr>
							<td class='text-center'colspan='2'><img src=images/".$row1['pic']." width='100px'/></td>
						</tr>
						<tr>
							<td>Student Name:</td>
							<td>".$row1['student']."</td>
						</tr>
						<tr>
							<td>Pin Number:</td>
							<td>".$row1['pin']."</td>
						</tr>
						<tr>
							<td>Father Name:</td>
							<td>".$row1['father']."</td>
						</tr>
					";
				}
			}
			$select="SELECT * FROM `eee1` WHERE `pin`='".$pin."'";
			$query=mysqli_query($connect,$select);
			while($row=mysqli_fetch_assoc($query)){
				echo"
						<tr>
							<td>Pin Number</td>
							<td>".$row['PIN']."</td>
						</tr>
						<tr>
							<td>English-101</td>
							<td>".$row['ENGLISH']."</td>
						</tr>
						<tr>
							<td>Maths-101</td>
							<td>".$row['MATHS_1']."</td>
						</tr>
						<tr>
							<td>Physics-103</td>
							<td>".$row['PHYSICS']."</td>
						</tr>
						<tr>
							<td>Chemistry-104</td>
							<td>".$row['CHEMISTRY']."</td>
						</tr><tr>
							<td>EEMS-105</td>
							<td>".$row['EEM']."</td>
						</tr><tr>
							<td>BASICEE-106</td>
							<td>".$row['BASICEE']."</td>
						</tr><tr>
							<td>Drawing-107</td>
							<td>".$row['ENG_DRAWING']."</td>
						</tr>
					</table>
					</div>
				";
			}
		}
		elseif($sem=='3rd Semester'){
			echo"
					<div class='row table-responsive form' >
						<table class='table table-hover table-primary table-bordered'>";
			$view="SELECT * FROM `new_student` WHERE `pin`='".$pin."'";
			if($query1=mysqli_query($connect,$view)){
				while($row1=mysqli_fetch_assoc($query1)){
					echo"
						<tr>
							<td class='text-center'colspan='2'><img src=images/".$row1['pic']." width='100px'/></td>
						</tr>
						<tr>
							<td>Student Name:</td>
							<td>".$row1['student']."</td>
						</tr>
						<tr>
							<td>Pin Number:</td>
							<td>".$row1['pin']."</td>
						</tr>
						<tr>
							<td>Father Name:</td>
							<td>".$row1['father']."</td>
						</tr>
					";
				}
			}
			$select="SELECT * FROM `eee3` WHERE `pin`='".$pin."'";
			$query=mysqli_query($connect,$select);
			while($row=mysqli_fetch_assoc($query)){
				echo"
						<tr>
							<td>Pin Number</td>
							<td>".$row['PIN']."</td>
						</tr>
						<tr>
							<td>MATHS_2-301</td>
							<td>".$row['MATHS_2']."</td>
						</tr>
						<tr>
							<td>EM_1-302</td>
							<td>".$row['EM_1']."</td>
						</tr>
						<tr>
							<td>PS_1-303</td>
							<td>".$row['PS_1']."</td>
						</tr>
						<tr>
							<td>E&EMI-304</td>
							<td>".$row['E&EMI']."</td>
						</tr>
						<tr>
							<td>EC-305</td>
							<td>".$row['EC']."</td>
				        </tr>
						<tr>
							<td>PROGRAMMING_C-306</td>
							<td>".$row['PROGRAMMING_C']."</td>
				        </tr>
					</table>
					</div>
				";
			}
		}
		elseif($sem=='4th Semester'){
			echo"
					<div class='row table-responsive form' >
						<table class='table table-hover table-primary table-bordered'>";
			$view="SELECT * FROM `new_student` WHERE `pin`='".$pin."'";
			if($query1=mysqli_query($connect,$view)){
				while($row1=mysqli_fetch_assoc($query1)){
					echo"
						<tr>
							<td class='text-center'colspan='2'><img src=images/".$row1['pic']." width='100px'/></td>
						</tr>
						<tr>
							<td>Student Name:</td>
							<td>".$row1['student']."</td>
						</tr>
						<tr>
							<td>Pin Number:</td>
							<td>".$row1['pin']."</td>
						</tr>
						<tr>
							<td>Father Name:</td>
							<td>".$row1['father']."</td>
						</tr>
					";
				}
			}
			$select="SELECT * FROM `eee4` WHERE `pin`='".$pin."'";
			$query=mysqli_query($connect,$select);
			while($row=mysqli_fetch_assoc($query)){
				echo"
						<tr>
							<td>Pin Number</td>
							<td>".$row['PIN']."</td>
						</tr>
						<tr>
							<td>MATHS_3-401</td>
							<td>".$row['MATHS_3']."</td>
						</tr>
						<tr>
							<td>EM_2-402</td>
							<td>".$row['EM_2']."</td>
						</tr>
						<tr>
							<td>PS_2-403</td>
							<td>".$row['PS_2']."</td>
						</tr>
						<tr>
							<td>EI&E-404</td>
							<td>".$row['EI&E']."</td>
						</tr>
						<tr>
							<td>EE-405</td>
							<td>".$row['EE']."</td>
				        </tr>
						<tr>
							<td>GME-406</td>
							<td>".$row['GME']."</td>
				        </tr>
					</table>
					</div>
				";
			}
		}
		elseif($sem=='5th Semester'){
			echo"
					<div class='row table-responsive form' >
						<table class='table table-hover table-primary table-bordered'>";
			$view="SELECT * FROM `new_student` WHERE `pin`='".$pin."'";
			if($query1=mysqli_query($connect,$view)){
				while($row1=mysqli_fetch_assoc($query1)){
					echo"
						<tr>
							<td class='text-center'colspan='2'><img src=images/".$row1['pic']." width='100px'/></td>
						</tr>
						<tr>
							<td>Student Name:</td>
							<td>".$row1['student']."</td>
						</tr>
						<tr>
							<td>Pin Number:</td>
							<td>".$row1['pin']."</td>
						</tr>
						<tr>
							<td>Father Name:</td>
							<td>".$row1['father']."</td>
						</tr>
					";
				}
			}
			$select="SELECT * FROM `eee5` WHERE `pin`='".$pin."'";
			$query=mysqli_query($connect,$select);
			while($row=mysqli_fetch_assoc($query)){
				echo"
						<tr>
							<td>Pin Number</td>
							<td>".$row['PIN']."</td>
						</tr>
						<tr>
							<td>IME&ST-501</td>
							<td>".$row['IME&ST']."</td>
						</tr>
						<tr>
							<td>EM_3-502</td>
							<td>".$row['EM_3']."</td>
						</tr>
						<tr>
							<td>PS_3-503</td>
							<td>".$row['PS_3']."</td>
						</tr>
						<tr>
							<td>PE,PLC&SCADA-504</td>
							<td>".$row['PE,PLC&SCADA']."</td>
						</tr>
						<tr>
							<td>DE&MC-505</td>
							<td>".$row['DE&MC	']."</td>
				        </tr>
						<tr>
							<td>EU&T-506</td>
							<td>".$row['EU&T']."</td>
				        </tr>
					</table>
					</div>
				";
			}
		}
}
}

?>
</div>




<script>
function newdetails(){
	var access=document.getElementById('access').value;
	if (access === 'sbsp093'){
	document.getElementById("matter").style.width = "0%";
	document.getElementById('backdetails').innerHTML="&times;";
	document.getElementById('accessdiv').style.width='0%';
	document.getElementById('newdetails').innerHTML="<form method='post' enctype='multipart/form-data' class='form text-center'><div class='row'><div class='col-1'></div><div class='col-2 text-start'><label for='name' class='text-black'>Name:</label></div></div><div class='row'><div class='col-1'></div><div class='col-9'><input class='form-control' type='text' placeholder='Enter Name' id='name' name='name' /><div id='nameerr' class='text-danger'></div></div></div>					<div class='row'><div class='col-1'></div><div class='col-2 text-start'><label for='fname' class='text-black'>Father Name:</label></div></div><div class='row'><div class='col-1'></div><div class='col-9'><input class='form-control' type='text' placeholder='Enter Father Name' id='fname' name='fname' /><div id='fnameerr' class='text-danger'></div></div></div>					<div class='row'><div class='col-1'></div><div class='col-2 text-start'><label for='pin' class='text-black'>PIN:</label></div></div><div class='row'><div class='col-1'></div><div class='col-9'><input class='form-control' type='text' placeholder='Enter Pin number' id='pin' name='pin' /><div id='pinerr' class='text-danger'></div></div></div>					<div class='row'><div class='col-1'></div><div class='col-2 text-start'><label for='pic' class='text-black'>Photo:</label></div></div><div class='row'><div class='col-1'></div><div class='col-9'><input class='form-control' type='file'  name='pdf' id='pdf' /><div id='fileerr' class='text-danger'></div></div></div><div class='row'><div class='col-4'></div><div class='col-4'><button class='btn btn-primary' onclick='' type='submit' name='newbtn' id=newbtn'>Submit</button></div></div>					</form>";
	return false;
	}
	else{
		document.getElementById('accesserr').innerHTML="Invalid Access Pin";
		return false;
	}
}

function backdetails(){
		document.getElementById("matter").style.width = "100%";
		document.getElementById('newdetails').innerHTML=null;
		document.getElementById('backdetails').innerHTML=null;
		document.getElementById('accessdiv').innerHTML=null;
		document.getElementById('marks').innerHTML=null;
		return false;
}

function updation(){
	var upaccess=document.getElementById('upaccess').value;
	if (upaccess === 'sbsp093'){
	document.getElementById("matter").style.width = "0%";
	document.getElementById('backupdate').innerHTML="&times;";
	document.getElementById('accessdiv').style.width='0%';
	document.getElementById('marksupdate').innerHTML="<form class='form text-center' method='post' ><div class='row'><div class='col-1'></div><div class='col-2 text-start'><label for='uPin' class='text-black'>Pin:</label></div></div><div class='row'><div class='col-1'></div><div class='col-9'><input class='form-control' type='text' placeholder='Enter Pin Number' id='upin' name='upin' /><div id='pinerr' class='text-danger'></div></div></div>					<div class='row'><div class='col-1'></div><div class='col-2 text-start'><label for='sem1' class='text-black'>Semester:</label></div><div class='row'><div class='col-1'></div><div class='col-9'><select class='form-select' id='sem1' name='sem1' ><option>Select Semester</option><option>1st Semester</option><option>3rd Semester</option><option>4th Semester</option><option>5th Semester</option></select><div id='sem1err' class='text-danger'></div></div></div><div class='row'><div class='col-4'></div><div class='col-4'><button class='btn btn-primary' onclick='' type='submit' name='updatebtn' id='updatebtn'>Submit</button></div></div>					</form>";
	return false;
	}
}

function backupdate(){
		document.getElementById("matter").style.width = "100%";
		document.getElementById('marksupdate').innerHTML=null;
		document.getElementById('backupdate').innerHTML=null;
		document.getElementById('accessdiv').innerHTML=null;
		document.getElementById('marks').innerHTML=null;
		return false;
}
function view(){
	document.getElementById("matter").style.width = "0%";
	document.getElementById('backview1').innerHTML="&times;";
	document.getElementById('accessdiv').style.width='0%';
	document.getElementById('marksview').innerHTML="<form class='form text-center' method='post' ><div class='row'><div class='col-1'></div><div class='col-2 text-start'><label for='vPin' class='text-black'>Pin:</label></div></div><div class='row'><div class='col-1'></div><div class='col-9'><input class='form-control' type='text' placeholder='Enter Pin Number' id='vpin' name='vpin' /><div id='vpinerr' class='text-danger'></div></div></div>					<div class='row'><div class='col-1'></div><div class='col-2 text-start'><label for='vsem1' class='text-black'>Semester:</label></div><div class='row'><div class='col-1'></div><div class='col-9'><select class='form-select' id='vsem1' name='vsem1' ><option>Select Semester</option><option>1st Semester</option><option>3rd Semester</option><option>4th Semester</option><option>5th Semester</option></select><div id='vsem1err' class='text-danger'></div></div></div><div class='row'><div class='col-4'></div><div class='col-4'><button class='btn btn-primary' onclick='()' type='submit' name='viewbtn' id='viewbtn'>Submit</button></div></div>					</form>";
	return false;
}
function backview(){
		document.getElementById("matter").style.width = "100%";
		document.getElementById('marksview').innerHTML=null;
		document.getElementById('backview1').innerHTML=null;
		document.getElementById('accessdiv').innerHTML=null;
		document.getElementById('marks').innerHTML=null;
		document.getElementById('student').innerHTML=null;
		return false;
}
</script>

</div>
</body>
</html>