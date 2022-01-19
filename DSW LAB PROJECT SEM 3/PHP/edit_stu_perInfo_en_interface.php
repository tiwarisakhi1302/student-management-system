<?php
    session_start();
    error_reporting(0);
    unset($_SESSION['enroll']);
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
    <link rel="stylesheet" type="text/css" href="../CSS/edit_stu_per_info.css">
    <title>Edit Student Information</title>
    <script>
      function validate(){
        var enroll= document.frm.enroll;
        if(enroll.value.length==0){
          alert("Enroll Required");
          return false;
          enroll.focus();
        }
        if(enroll.value.length<8 || enroll.value.length>8){
          alert("Enter Valid Enroll");
          return false;
          enroll.focus();
        }
      }
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
    <li><a href="admin_dashboard.php">Dashboard</a></li>
  <li><a href="add_student_interface.php">Add New Student</a></li>
  <li><a href="edit_stu_perInfo_en_interface.php">Edit Student Info</a></li>
  <li><a href="edit_fee_interface.php">Edit Fee Details</a></li>
  <li><a href="edit_stu_marks_interface.php">Edit Marks</a></li>
  <li><a href="stu_logout.php">Logout</a></li>
    </ul>
  </div>
<div id="heading">
<h1 id="h">Edit Student Information</h1>
</div>
<br><br>
<center>
    <div="sm">
    <form name="frm" action="edit_stu_perinfo_en.php" method="POST" onsubmit='return validate()'>
      <ul class="form-style-1">
        <li>
            <label>Enter Enroll:<span class="required">*</span></label>
            <input type="text" name="enroll" value="" style="width: 100%">
        </li>
        <li>
            <center><input type="submit" value="Search"/></center>
        </li>
    </ul>
    </form>
    </div>
</center>
<div id="lower">
    <h3 id="h">CGPA : </h3>
</div>
</body>
</html>