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
$connect=mysqli_connect("localhost", "root", "", "studentmanagementsystem");
$query=mysqli_query($connect,"select sem from student where enroll=$en;");
$row=mysqli_fetch_array($query);
$curr_sem=$row['sem'];
$semester="";
if($curr_sem==1){
    $semester="sem1";
}
else if($curr_sem==2){
    $semester="sem2";
}
else if($curr_sem==3){
    $semester="sem3";
}
else if($curr_sem==4){
    $semester="sem4";
}
else if($curr_sem==5){
    $semester="sem5";
}
else if($curr_sem==6){
    $semester="sem6";
}
else if($curr_sem==7){
    $semester="sem7";
}
else if($curr_sem==8){
    $semester="sem8";
}
$q1=mysqli_query($connect, "select $semester from fee_details where enroll=$en;");
$r1=mysqli_fetch_array($q1);
$v=$r1[$semester];
$status="";
if($v==1){
    $status="Paid";
}
else{
    $status="Due";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="..\CSS\stu_feedetails.css">
    <title>Fee Details</title>
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
        <h1 id="h">Fee Details</h1>
    </div>
    <table class="container">
        <p id="feeStruct">Fee Structure</p>
        <tbody>
            <tr>
                <th>Year</th>
                <th>semester 1</th>
                <th>semester 2</th>
            </tr>
            <tr>
                <td class="data">1st Year</td>
                <td class="data">75000</td>
                <td class="data">75000</td>
            </tr>
            <tr>
                <td class="data">2 nd Year</td>
                <td class="data">75000</td>
                <td class="data">75000</td>
            </tr>
            <tr>
                <td class="data">3 rd Year</td>
                <td class="data">75000</td>
                <td class="data">75000</td>
            </tr>
            <tr>
                <td class="data">4 th Year</td>
                <td class="data">75000</td>
                <td class="data">75000</td>
            </tr>
        </tbody>
    </table>
    <p id="feeSub">Fee of Current Semester<?php echo " ".$curr_sem; ?> : <u><?php echo $status; ?></u></p>
</body>
</html>