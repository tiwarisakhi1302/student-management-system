<?php
session_start();
error_reporting(0);
$enrol=$_POST['enroll'];
$sems=$_POST['sem'];
$stat=$_POST['status'];
$sem="sem".$sems;
$connect = mysqli_connect("localhost", "root", "", "studentmanagementsystem");
$q1=mysqli_query($connect, "select enroll from fee_details where enroll='$enrol';");
$r1=mysqli_fetch_array($q1);
if($r1['enroll']!=$enrol){
    echo'<script type="text/javascript">
    alert("Invalid Enrollment Number");
    window.location.href="edit_fee_interface.php";
    </script>';
}
$query = mysqli_query($connect,"Update fee_details Set $sem = '$stat' Where enroll = '$enrol';");
mysqli_close($connect);
echo'<script type="text/javascript">
    alert("Fee Updated Successfully");
    window.location.href="edit_fee_interface.php";
</script>';
?>