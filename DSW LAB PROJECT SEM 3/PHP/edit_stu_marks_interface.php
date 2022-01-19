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
    <link rel="stylesheet" type="text/css" href="../CSS/edit_stu_Marks.css">
    <title>Edit Student Marks</title>
    <script type="text/javascript">
        function validate(){
            var enroll = document.e_form.enroll;
            var sem = document.e_form.sem;
            var c_id = document.e_form.course;
            var marks = document.e_form.mark;
            var exam=document.e_form.user;
            if(enroll.value.length<=0){
                alert("Enrollment Number is Required");
                enroll.focus();
                return false;
            }
            if(sem.value.length<=0){
                alert("Semester is Required");
                sem.focus();
                return false;
            }
            if(sem.value>8 || sem.value<=0){
                alert("Semester should be 1 to 8");
                sem.focus();
                return false;
            }
            if(c_id.value.length<=0){
                alert("Couse Id is Required");
                c_id.focus();
                return false;
            }
            if(marks.value.length<=0){
                alert("Marks is Required");
                marks.focus();
                return false;
            }
            if(exam.value=='t1' || exam.value=='t2'){
                if(marks.value>20 || marks.value<0){
                    alert("Invalid Marks ie. Marks should to between 0 to 20");
                    marks.focus();
                    return false;
                }
            }
            if(exam.value=='t3'){
                if(marks.value>60 || marks.value<0){
                    alert("Invalid Marks ie. Marks should to between 0 to 60");
                    marks.focus();
                    return false;
                }
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
<h1 id="h">Edit Marks</h1>
</div>
<form method="POST" name="e_form" action="edit_stu_marks.php" onsubmit='return validate()'>
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
            <label>Enter Course Id<span class="required">*</span></label>
            <input type="text" name="course" value="" style="width: 100%">
        </li>
        <li>
            <label>Enter Exam<span class="required">*</span></label>
            <select name="user"id="user">
                <option name="t1" value="t1">T1</option>
                <option name="t2" value="t2">T2</option>
                <option name="t3" value="t3">T3</option>
          </select>
        </li>
        <li>
            <label>Enter Marks<span class="required">*</span></label>
            <input type="number" name="mark" value="" style="width: 100%">
        </li>
        <li>
            <input type="submit" value="Submit"/>
        </li>
    </ul>
    </form>
</body>
</html>