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
        window.location.href="../edit_stu_per_info_menu.php";
        </script>';
}
else{
    echo'<script type="text/javascript">
        alert("Semester Not Updated Retry.");
        window.location.href="../edit_stu_per_info_menu.php";
        </script>';
}
?>