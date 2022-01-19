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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="..\CSS\contactUs.css">
    <title>Contact Us</title>
    <script>
        function validate(){
            var sub=document.frm.subject;
            var mess=document.frm.message;

            if(sub.value.length<=0){
                alert("Subject cannot be empty");
                sub.focus();
                return false;
            }
            if(mess.value.length<=0){
                alert("Message Cannot be empty");
                mess.focus();
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
  <li><a href="../PHP/StudentDashboard.php">Dashboard</a></li>
  <li><a href="../PHP/stu_personalInfo.php">Personal Info</a></li>
    <li><a href="../PHP/stu_feeDetails.php">Fee Details</a></li>
    <li><a href="../PHP/stu_courses.php">Courses</a></li>
    <li><a href="../PHP/stu_result.php">Result</a></li>
    <li><a href="../PHP/ContactUsinterface.php">Contact us</a></li>
    <li><a href="../PHP/stu_logout.php">Logout</a></li>
  </ul>
</div>
    <div id="heading">
        <h1 id="h">Contact Us</h1>
    </div>
    <form method="POST" action="../PHP/contact_us.php" name="frm" onsubmit='return validate()'>
        <ul class="form-style-1">
            <li>
                <label>Subject<span class="required">*</span></label>
                <input type="text" name="subject" value="" style="width: 100%">
            </li>
            <li>
                <label>Your Message <span class="required">*</span></label>
                <textarea name="message" id="field5" class="field-long field-textarea"></textarea>
            </li>
            <li>
                <input type="submit" value="Submit" />
            </li>
        </ul>
        </form>
<div id="lower">
    <p>Phone No : +91 9875671898</p>
    <p>Email : admin@mail.jiit.ac.in</p>
</div>
</body>
</html>