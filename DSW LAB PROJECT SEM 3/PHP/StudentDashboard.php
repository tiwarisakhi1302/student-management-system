<?php
error_reporting(0);
session_start();
$en=$_SESSION['enroll'];
if($en==NULL){
  echo'<script type="text/javascript">
  alert("You have been logged Out");
  window.location.href="../HTML/login.html";
</script>';
}
$connect=mysqli_connect("localhost","root","","StudentManagementSystem");
if(mysqli_connect_errno())
{
    die;
    header("Location:student_login.html");
}
$query=mysqli_query($connect,"select name From student where enroll=$en;");
$row=mysqli_fetch_array($query);
$stu_name=$row['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student DashBoard</title>
    <link rel="stylesheet" href="../CSS/student_dashboard1.css">
</head>
<body>
    <input type="checkbox" id="ham-menu">
<label for="ham-menu">
  <div class="hide-des">
    <span class="menu-line"></span>
    <span class="menu-line"></span>
    <span class="menu-line"></span>
    <span class="menu-line"></span>
    <span class="menu-line"></span>
    <span class="menu-line"></span>
  </div>
</label>
<div class="full-page-green"></div>
<div class="ham-menu">
  <ul class="centre-text bold-text">
  <li><a href="StudentDashboard.php">Dashboard</a></li>
  <li><a href="stu_personalInfo.php">Personal Info</a></li>
    <li><a href="stu_feeDetails.php">Fee Details</a></li>
    <li><a href="stu_courses.php">Courses</a></li>
    <li><a href="stu_result.php">Result</a></li>
    <li><a href="ContactUsinterface.php">Contact us</a></li>
    <li><a href="stu_logout.php">Logout</a></li>
  </ul>
</div>
<div id="heading">
<h1 id="h">Student Dashboard</h1>
<marquee direction="left" width="88%"><h6>Welcome <?php echo $stu_name?></h6></marquee>
</div>
<input type="button" class="button" id="button1" value="Personal Information" onclick="window.location.href='stu_personalInfo.php';"/>
<input type="button" class="button" id="button2" value="Fee Details" onclick="window.location.href='stu_feeDetails.php';"/>
<input type="button" class="button" id="button3" value="Courses" onclick="window.location.href='stu_courses.php';"/>
<input type="button" class="button" id="button4" value="Result" onclick="window.location.href='stu_result.php';"/>
</body>

</html>