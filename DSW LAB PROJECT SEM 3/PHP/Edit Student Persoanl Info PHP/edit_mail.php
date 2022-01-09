<?php
session_start()
?>

<?php
$en=$_SESSION["enroll"];
$email=$_POST['mail'];
$connect = mysqli_connect("localhost", "root", "", "studentmanagementsystem");
$query = mysqli_query($connect, "update student set per_email='$email'where enroll='$en';");
if($query){
    echo'<script type="text/javascript">
        alert("Email Updated");
        window.location.href="../../HTML/edit_stu_per_info_menu.html";
        </script>';
}
else{
    echo'<script type="text/javascript">
        alert("Email Not Updated Retry.");
        window.location.href="../../HTML/edit_stu_per_info_menu.html";
        </script>';
}
?>