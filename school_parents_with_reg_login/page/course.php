<?php
	include_once('../check/header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>View courses</title>
</head>

<body>
<center>
	<img src="img.JPG" width="10%">
</center>


<table border="1" width="100%">
				<tr>
					<td colspan="3"><br><h2><center>Assigned Courses</center></h2><br></td>
					
				</tr>
				<tr>
					<td rowspan="2" width="30%">
					<li><a href="home.php"><button><b>Home</b></button></a><br><br></li> 
					<li><a href="profile.php"><button><b>Profile</b></button></a><br><br></li> 
					<li><a href="payment.php"><button><b>Payment Information</b></button></a><br><br></li> 
					<li><a href="result.php"><button><b>Result</b></button></a><br><br></li> 
					<li><a href="attendance.php"><button><b>Attendance</b></button></a><br><br></li> 
					<li><a href="notice.php"><button><b>Notice</b></button></a><br><br></li> 
					<li><a href="course.php"><button><b>Assigned Course</b></button></a><br><br></li> 
					<li><a href="syllabus.php"><button><b>Download syllabus</b></button></a><br><br></li> 
					<li><a href="contact.php"><button><b>Contact</b></button></a><br><br></li> 
					<li><a href="feedback.php"><button><b>Give Feedback</b></button></a><br><br></li> 
					<li><a href="delete.php"><button><b>Request for delete account</b></button></a><br><br></li> 
					<li><a href="AboutUs.php"><button><b>About Us</b></button></a><br><br></li> 
				</td>
				</tr>


				
				<td>
					<table border="1" height=500 width=100%>
						<td>
							
						<div style="width:100%; max-height:300px; overflow:auto">
							<h2>Available courses : <br></h2>
							<li>Bangla </li>
							<li>English </li>
							<li>Mathematics </li>
							<li>Science </li>
							<li>Social science </li>
							<li>Religion </li>
							<li>Biology </li>
							<li>Physics </li>
							<li>Chemistry </li>
							<li>History </li>
							<li>Physical Education </li>
							<li>Business Studies </li>
							<li>Economics </li>
							<li>Accounting </li>
							
						 </div>
							
						</td>
						<td width="50%">
							<div id="d1" style="width:100%; max-height:300px; overflow:auto">
							
						 </div>
						 <tr>
						 	<br><br>
						 	Insert your child's Id :  <input type="text" name="sid" id="sid">
							<input type="button" name="" value="load" onclick="loadData()"/>
							<br><br>
						 </tr>
						</td>
					</table>
				</td>
</table>

<br><br><br>

<script type="text/javascript" src="../page/crs_ajax.js"></script>

<a href="../check/logout.php"><button>Logout</button></a>

</body>
</html>
