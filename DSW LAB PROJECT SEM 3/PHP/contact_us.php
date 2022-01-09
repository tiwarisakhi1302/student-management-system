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
$subject=$_POST['subject'];
$message=$_POST['message'];
$q=mysqli_query($connect, "Insert into contact values ('$en', '$subject', '$message');");

echo'<script type="text/javascript">
    alert("Response Submitted");
    window.location.href="../HTML/ContactUs.html";
</script>';
?>