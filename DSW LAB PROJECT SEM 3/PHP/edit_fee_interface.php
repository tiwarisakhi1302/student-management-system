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
    <link rel="stylesheet" type="text/css" href="..\CSS\edit_Fee.css">
    <title>Edit Fee</title>
    <script type="text/javascript">
        function validate(){
            var enroll=document.e_form.enroll;
            var sem=document.e_form.sem;
            var stat=document.e_form.status;
            if(enroll.value.length<=0){
                alert("Enroll required");
                enroll.focus();
                return false;
            }
            if(sem.value.length<=0){
                alert("Semester required");
                sem.focus();
                return false;
            }
            if(stat.value.length<=0){
                alert("Fee Status Required");
                stat.focus();
                return false;
            }
            if(sem.value>8 || sem.value<1){
                alert("Semester should be 1 to 8");
                sem.focus();
                return false;
            }
            if(stat.value!=0 && stat.value!=1){
                alert("Please enter valid fee status");
                stat.focus();
                return false;
            }
            confirm("Press Ok to confirm");
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
        <h1 id="h">Edit Fee</h1>
    </div>
    <form method="POST" action="edit_stu_feeDetails.php" name="e_form" onsubmit='return validate()'>
        <ul class="form-style-1">
            <li>
                <label>Enter Enroll<span class="required">*</span></label>
                <input type="text" name="enroll" value="" style="width: 100%">
            </li>
            <li>
                <label>Enter Semester<span class="required">*</span></label>
                <input type="number" name="sem" value="" style="width: 100%">
            </li>
            <li>
                <label>Status(0 or 1)<span class="required">*</span></label>
                <input type="number" name="status" value="" id="s" style="width: 100%">
            </li>
            <li>
                <input type="submit" value="Submit"/>
            </li>
        </ul>
        </form>
    </body>
    </html>