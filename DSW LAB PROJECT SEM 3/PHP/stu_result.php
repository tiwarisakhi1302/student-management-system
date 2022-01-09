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
	$connect = mysqli_connect("localhost","root","","StudentManagementSystem");
	$query = "Select * From student Where enroll = $en;";
	$row = mysqli_query($connect, $query);
  $record=mysqli_fetch_array($row);
  $sm=$record['sem'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks</title>
    <link rel="stylesheet" type="text/css" href="..\CSS\Stu_Result.css">
    <script>}
    </script>
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
<h1 id="h">Result</h1></div><br><br>
<center>
    <div="sm">
    <form action="stu_sem_result.php" method="POST">
      <button type="submit" style="margin:1%" type="button" class="myButton" name="sem1" value="sem1">Semester 1</button>
      <button type="submit" style="margin:1%" type="button" class="myButton" name="sem2" value="sem2">Semester 2</button><br>
      <button type="submit" style="margin:1%" type="button" class="myButton" name="sem3" value="sem3">Semester 3</button>
      <button type="submit" style="margin:1%" type="button" class="myButton" name="sem4" value="sem4">Semester 4</button><br>
      <button type="submit" style="margin:1%" type="button" class="myButton" name="sem5" value="sem5">Semester 5</button>
      <button type="submit" style="margin:1%" type="button" class="myButton" name="sem6" value="sem6">Semester 6</button><br>
      <button type="submit" style="margin:1%" type="button" class="myButton" name="sem7" value="sem7">Semester 7</button>
      <button type="submit" style="margin:1%" type="button" class="myButton" name="sem8" value="sem8">Semester 8</button><br>
      </form>
    </div>
</center>
<div id="lower">
    <h3 id="h">CGPA : </h3>
</div>
</body>
</html>