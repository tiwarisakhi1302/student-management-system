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
    <title>Add Student</title>
    <link rel="stylesheet" type="text/css" href="../CSS/addStudent.css">
    <script>
        function validate(){
            var enroll=document.e_form.enroll;
            var f_name=document.e_form.fname;
            var l_name=document.e_form.lname;
            var u_dob=document.getElementById("dob").value;
            var sem=document.e_form.sem;
            var add=document.e_form.address;
            var mail=document.e_form.mail;
            var phn=document.e_form.phone;
            var batch=document.e_form.batch;

            if(enroll.value.length==0){
                alert("Enroll Required");
                return false;
                enroll.focus();
            }
            if(enroll.value.length>8 || enroll.value.length<8){
                alert("Invalid Enroll. Enroll is a 8 digit number.")
                return false;
                enroll.focus()
            }
            if(f_name.value.length==0){
                alert("First Name Required");
                return false;
                f_name.focus();
            } 
            if(l_name.value.length==0){
                alert("Last Name Required");
                return false;
                l_name.focus();
            }
            if(!u_dob){  
                alert("Date Required");    
                return false;
                dob.focus();   
            } 
            if(mail.value.length==0){
                alert("Email Required");
                return false;
                mail.focus();
            } 
            if(sem.value.length==0){
                alert("Semester Required");
                return false;
                sem.focus();
            }
            if(sem.value>8 || sem.value<=0){
                alert("Invalid Semester.")
                return false;
                sem.focus()
            }
            if(add.value.length==0){
                alert("Address Required");
                return false;
                add.focus();
            }
            if(phn.value.length==0){
                alert("Phone Number Required");
                return false;
                phn.focus();
            }
            if(phn.value.length>10 || phn.value.length<10){
                alert("Invalid Phone Number");
                return false;
                phn.focus();
            }
            if(batch.value.length==0){
                alert("Batch Required");
                return false;
                batch.focus();
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
<h1 id="h">Add New Student</h1>
</div>
<form method="POST" name="e_form" action="add_student.php" onsubmit='return validate()'>
    <ul class="form-style-1">
        <li>
            <label>Enter Enroll<span class="required">*</span></label>
            <input type="text" name="enroll" value="" style="width: 100%">
        </li>
        <li>
            <label>Enter First Name<span class="required">*</span></label>
            <input type="text" name="fname" value="" style="width: 100%">
        </li>
        <li>
            <label>Enter Last Name<span class="required">*</span></label>
            <input type="text" name="lname" value="" style="width: 100%">
        </li>
        <li>
            <label>Enter DOB<span class="required" required>*</span></label>
            <input type="date" id="dob" name="dob" value="" style="width: 100%">
        </li>
        <li>
            <label>Enter Email ID<span class="required">*</span></label>
            <input type="email" name="mail" value="" style="width: 100%">
        </li>
        <li>
            <label>Enter Semester<span class="required">*</span></label>
            <input type="number" name="sem" value="" style="width: 100%">
        </li>
        <li>
            <label>Enter Address<span class="required">*</span></label>
            <textarea name="address" id="field5" class="field-long field-textarea"></textarea>
        </li>
        <li>
            <label>Enter Phone Number<span class="required">*</span></label>
            <input type="number" name="phone" value="" style="width: 100%">
        </li>
        <li>
            <label>Enter Batch<span class="required">*</span></label>
            <input type="text" name="batch" value="" style="width: 100%">
        </li>
        <li>
            <input type="submit" value="Submit"/>
        </li>
    </ul>
    </form>
</body>
</html>