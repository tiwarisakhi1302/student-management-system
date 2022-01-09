<?php
session_start()
?>

<?php
$en=$_SESSION["enroll"];
$sm=$_POST['sem'];
$connect = mysqli_connect("localhost", "root", "", "studentmanagementsystem");
$query = mysqli_query($connect, "update student set sem=$sm where enroll='$en';");
if($query){
    echo'<script type="text/javascript">
        alert("Semester Updated");
        window.location.href="../../HTML/edit_stu_per_info_menu.html";
        </script>';
}
else{
    echo'<script type="text/javascript">
        alert("Semester Not Updated Retry.");
        window.location.href="../../HTML/edit_stu_per_info_menu.html";
        </script>';
}
?>