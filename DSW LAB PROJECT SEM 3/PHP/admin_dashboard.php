<?php
    session_start();
    error_reporting(0);
    if(!$_SESSION['counter'])
    {
        echo'<script type="text/javascript">
        alert("YOU HAVE BEEN LOGGED OUT.");
        window.location.href="../HTML/login.html";
        </script>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/admindashboard.css">
    <title>Admin Dashboard</title>
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
  <li><a href="admin_dashboard.php">Dashboard</a></li>
  <li><a href="add_student_interface.php">Add New Student</a></li>
  <li><a href="edit_stu_perInfo_en_interface.php">Edit Student Info</a></li>
  <li><a href="edit_fee_interface.php">Edit Fee Details</a></li>
  <li><a href="edit_stu_marks_interface.php">Edit Marks</a></li>
  <li><a href="stu_logout.php">Logout</a></li>
  </ul>
</div>
<div id="heading">
<h1 id="h">Admin Dashboard</h1>
</div>
<input type="button" class="button" id="button4" value="Add New Student" onclick="window.location.href='add_student_interface.php';"/>
<input type="button" class="button" id="button1" value="Edit Student info" onclick="window.location.href='edit_stu_perInfo_en_interface.php';"/>
<input type="button" class="button" id="button2" value="Edit Fee Details" onclick="window.location.href='edit_fee_interface.php';"/>
<input type="button" class="button" id="button3" value="Edit Marks" onclick="window.location.href='edit_stu_marks_interface.php';"/>
</body>
</html>