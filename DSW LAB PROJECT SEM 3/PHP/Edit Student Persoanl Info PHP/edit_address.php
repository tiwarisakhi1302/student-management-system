<?php
session_start()
?>

<?php
$en=$_SESSION["enroll"];
$add=$_POST['address'];
$connect = mysqli_connect("localhost", "root", "", "studentmanagementsystem");
$query = mysqli_query($connect, "update student set address='$add'where enroll='$en';");
if($query){
    echo'<script type="text/javascript">
        alert("Address Updated");
        window.location.href="../../HTML/edit_stu_per_info_menu.html";
        </script>';
}
else{
    echo'<script type="text/javascript">
        alert("Address Not Updated Retry.");
        window.location.href="../../HTML/edit_stu_per_info_menu.html";
        </script>';
}
?>