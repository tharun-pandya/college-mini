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
<title>About</title>
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
.first{
	padding-top:50px;
}
.text{
	text-align:justified;
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
						<a class="nav-link active" href="about.php">About</a>
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
<div class="row first text" >
	<p class="text">
		Smt B. Seetha Polytechnic College was established by Shri Vishnu Educational Society in 1997 at Bishnupur, Bhimavaram, West Godavari District, Andhra Pradesh with a vision to provide quality Technical Education to the Rural Students. The Institute provides Diploma Courses in 4 Disciplines across 1 stream.
	</p>
	<p class="text">
		Industrial Giants like Hyundai, Redmi, L & T Technologies, HCL, etc conduct their campus drives in the college with the Help of the Training and Placement cell to Recruit Students. Admissions are offered to Diploma Courses on the basis of rank obtained by the candidate in the state level AP POLYCET exam which is conducted by the Andhra Pradesh Government.
	</p>
</div>
<div class="row table-responsive first">
	<h3>Smt B. Seetha Polytechnic Highlights</h3>
	<table class="table table-hover table-info table-bordered">
		<tr>
			<td>Established/ Institute Type	</td>
			<td>1997/ Private</td>
		</tr>
		<tr>
			<td>Approved by</td>
			<td>AICTE</td>
		</tr>
		<tr>
			<td>Affiliated to</td>
			<td>State Board of Technical Education and Training, Andhra Pradesh</td>
		</tr>
		<tr>
			<td>Entrance Exam</td>
			<td>Andhra Pradesh POLYCET</td>
		</tr>
		<tr>
			<td>Courses Offered</td>
			<td>Diploma courses</td>
		</tr>
		<tr>
			<td>Total courses offered</td>
			<td>4</td>
		</tr>
		<tr>
			<td>Application Mode</td>
			<td>Online</td>
		</tr>
		<tr>
			<td>Campus Area</td>
			<td>50,000 square feet</td>
		</tr>
		<tr>
			<td>Top Recruiters</td>
			<td>Hyundai, Redmi, L & T Technologies, HCL, Eureka Forbes, etc</td>
		</tr>
		<tr>
			<td>Hostel availability</td>
			<td>yes</td>
		</tr>
		<tr>
			<td>Official Website</td>
			<td>http://seethapoly.edu.in/</td>
		</tr>
	</table>
</div>
<div class="row first text">
	<h3>Smt B. Seetha Polytechnic Courses</h3>
	<p class="text">
		Smt B. Seetha Polytechnic College offers various diploma courses in various fields of engineering like automobile, electrical, electronics, mechanical and civil engineering. No female candidate is eligible to apply for Mining and Mining Surveying or related courses. Aspirants must have an MP domicile at the time of admission. Tabulated below is the details of the same:
	</p>
</div>
<div class="row table-responsive">
	<table class="table table-hover table-info table-bordered">
		<thead class="table-dark">
			<tr>
				<td>Course</td>
				<td>Details</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					Diploma in Applied Electronics and Instrumentation Engineering
				</td>
				<td>
					Subjects: -Physics, Maths, Chemistry, Electrical Machines, Electronic Devices, and Circuit, etc.<br>
					Course Type: -Full Time<br>
					Duration of Course: - 3 years<br>
					Yearly Intake: - 60<br>
					Eligibility: 10th passed with 35% aggregate
				</td>
			</tr>
			<tr>
				<td>
					Diploma in Computer Science & Engineering
				</td>
				<td>
					Subjects: - Computer Science & O.S, Software Tools, MS Office, Photoshop, Corel Draw, etc.<br>
					Course Type: -Full Time<br>
					Duration of Course: - 3 years<br>
					Yearly Intake: - 50<br>
					Eligibility: 10th passed with 35% aggregate.
				</td>
			</tr>
			<tr>
				<td>
					Diploma in Electrical and Electronics Engineering
				</td>
				<td>
					Subjects: - Applied Science, Maths I & II, Elements of Electrical Engineering, Electrical Wiring Lab, Electrical Circuits, Communication and Computer networks, etc.<br>
					Course Type: -Full Time<br>
					Duration of Course: - 3 years<br>
					Yearly Intake: - 240 Students<br>
					Eligibility: 10th passed with 35% aggregate.
				</td>
			</tr>
			<tr>
				<td>
					Diploma in Electronics and Communication Engineering
				</td>
				<td>
					Subjects: -Applied Science, Maths I & II, Technical Drawing, Industrial Electronics & 57-60 Transducers, Electronic Devices and Circuits, etc.<br>
					Course Type: -Full Time<br>
					Duration of Course: - 3 years<br>
					Yearly Intake: - 240 Students<br>
					Eligibility Criteria: 10th passed with 35% aggregate.
				</td>
			</tr>
		</tbody>
	</table>
</DIV>
<div CLASS="ROW first text">
	<h3>Smt B. Seetha Polytechnic Admissions</h3>
	<p class="text">
		1.Admissions for Diploma Courses in Smt B. Seetha Polytechnic college is through a state-level exam AP POLYCET and based on the rank obtained in the same exam.</p><p>Candidate can choose from the 4 Diploma courses on the basis of interest and rank obtained in the exam. The counseling procedure of AP POLYCET is as follows: -</p><p>1.Certificate Verification of Candidate: The candidate is expected to get verified all the required certificates/documents at the Help Line Centres (HLC). This process is compulsory for all the students to proceed further in the admissions.
	</p>
	<p class="text">
		2.Choice Filling: After the verification of documents, the candidate is given a list of polytechnic colleges with their names with course codes that they are providing. They can choose whichever course they like from the Sri Jyothi polytechnic college. It is an online procedure. After the choice filling, the candidate is supposed to take a print out of the final choice list for further procedure.
	</p>
	<p class="text">
		3.Seat-Allotment: The seat allotment procedure to the candidate is purely based on the choice filling and the merit-rank obtained in the AP POLYCET. The candidate has to download and take a print out of the seat allotment result.
	</p>
	<p class="text">
	4.Reporting at College and Fee Payment: The candidate who is allotted the college seat is supposed to physically report at the allotted college with the printout of the allotment letter.
	</p>
</div>
<div class="row first text">
	<h3>Document Required for Verification and Admission procedure:</h3>
</div>
<div class="row text">	
	•SSC or equivalent mark sheet
</div>
<div class="row text">
	•Aadhaar Card
</div>
<div class="row text">
	•4th to 10th Study Certificate or Residence Certificate/ Domicile
</div>
<div class="row text">
	•Income certificate
</div>
<div class="row text">
	•Caste Certificate (In case of SC/ST/OBC)
</div>
<div class="row text">	
	•PH/Sports/NCC/CAP/Minority/Anglo-Indian Certificate
</div>
<div class="row first ">
	<h3>Smt B. Seetha Polytechnic Placements</h3>
</div>
<div class="row text">	
	<p class="text">
		Just like any other engineering college Smt B. Seetha Polytechnic college also has a dedicated Training and Placement Cell which helps in the training/ internship and placement related activities for the students.
	</p>
	<p class="text">
		The Training and Placement cell in coordination with the Hiring Representative of companies conducts pre-placement drives, campus drives, industrial visits for the students. For Diploma courses, the salary package given to the students is around 1.8 to 2.8 L.P.A.
	</p>
</div>
<div class="row text">
	<h4>Smt B. Seetha Polytechnic Facilities</h4>
</div>
<div class="row text">
	•Hostel: - Hostel facility is provided for both the deserving students of Andhra Pradesh and outside. The rooms are designed in such a way that the students are provided with all the basic amenities and needs for them.
</div>
<div class="row text">
	•Higginbotham Book Store/Library: - The Book store facility is provided to the students of the college, in which all the books required for the courses are present for the students
</div>
<div class="row text">
	•Canteen: - Canteen facility is available for all the students in which the students are served with a variety of good quality food both north Indian and south Indian.
</div>
<div class="row text">
	•Computer Lab/Internet: - Computer Lab is accessible for all the students so that they can upgrade their skill-set and get their hands on the latest technologies. The students get free Wi-Fi Access.
</div>
<div class="row text">
	•Fitness Centre: -The institute also provides a fitness center facility for students with a variety of recreational and intramural programs, and a student health clinic and counseling sessions too.
</div>
<div class="row text">
	•Vishnu FM (90.4) Radio and TV: - The radio station broadcasts the content prepared/made by the students on issues relevant to education, Environment, and community, Discipline, etc at a specific time.
</div>
<div class="row text">
	Food Court: - All the food items are available at the food court at a reasonable rate for the students and the rates are fixed by the college administration. The store also provides light snacking options, juices, etc. for the students.
</div>
</div>
</body>
</html>