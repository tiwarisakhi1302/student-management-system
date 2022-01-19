<?php
session_start()
?>

<?php
$en=$_SESSION["enroll"];
$phn=$_POST['phn'];
$connect = mysqli_connect("localhost", "root", "", "studentmanagementsystem");
$query = mysqli_query($connect, "update student set phone_no='$phn'where enroll='$en';");
if($query){
    echo'<script type="text/javascript">
        alert("Phone Number Updated");
        window.location.href="../edit_stu_per_info_menu.php";
        </script>';
}
else{
    echo'<script type="text/javascript">
        alert("Phone Number Not Updated Retry.");
        window.location.href="../edit_stu_per_info_menu.php";
        </script>';
}
?>