<?php
session_start();
$enrol=$_POST['enroll'];
$sems=$_POST['sem'];
$c_id=$_POST['course'];
$exam=$_POST['user'];
$mark=$_POST['mark'];
$tableName="exam_sem".$sems;
$connect=mysqli_connect("localhost", "root", "", "studentmanagementsystem");
$q1=mysqli_query($connect, "select enroll from $tableName where enroll='$enrol' and exam_id='$exam';");
$r1=mysqli_fetch_array($q1);
if($r1['enroll']!=$enrol){
    echo'<script type="text/javascript">
    alert("Invalid Enrollment Number");
    window.location.href="edit_stu_marks_interface.php";
    </script>';
}
$q2=mysqli_query($connect, "select * from sem_courses where sem='$sems';");
$r2=mysqli_fetch_array($q2);
if($r2['course1']==$c_id || $r2['course2']==$c_id || $r2['course3']==$c_id || $r2['course4']==$c_id || $r2['course5']==$c_id){
    $q3=mysqli_query($connect, "update $tableName set $c_id=$mark where enroll='$enrol' and exam_id='$exam';");
    echo'<script type="text/javascript">
    alert("Marks Updated Successfully");
    window.location.href="edit_stu_marks_interface.php";
    </script>';
}
else{
    echo'<script type="text/javascript">
    alert("Invalid Course ID");
    window.location.href="edit_stu_marks_interface.php";
    </script>';
}
?>