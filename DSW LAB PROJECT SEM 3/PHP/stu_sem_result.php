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
$sem="";
$sem_no=0;
if(isset($_POST['sem1'])){
    $sem="exam_sem1";
    $sem_no=1;
}
else if(isset($_POST['sem2'])){
    $sem="exam_sem2";
    $sem_no=2;
}
else if(isset($_POST['sem3'])){
    $sem="exam_sem3";
    $sem_no=3;
}
else if(isset($_POST['sem4'])){
    $sem="exam_sem4";
    $sem_no=4;
}
else if(isset($_POST['sem5'])){
    $sem="exam_sem5";
    $sem_no=5;
}
else if(isset($_POST['sem6'])){
    $sem="exam_sem6";
    $sem_no=6;
}
else if(isset($_POST['sem7'])){
    $sem="exam_sem7";
    $sem_no=7;
}
else if(isset($_POST['sem8'])){
    $sem="exam_sem8";
    $sem_no=8;
}
$connect=mysqli_connect("localhost", "root", "", "studentmanagementsystem");
$q=mysqli_query($connect, "select * from sem_courses where sem=$sem_no;");
$r=mysqli_fetch_array($q);
$q1=mysqli_query($connect, "select * from $sem where enroll=$en and exam_id='t1';");
$r1=mysqli_fetch_array($q1);
$q2=mysqli_query($connect, "select * from $sem where enroll=$en and exam_id='t2';");
$r2=mysqli_fetch_array($q2);
$q3=mysqli_query($connect, "select * from $sem where enroll=$en and exam_id='t3';");
$r3=mysqli_fetch_array($q3);
$sub1=$r['course1'];
$sub2=$r['course2'];
$sub3=$r['course3'];
$sub4=$r['course4'];
$sub5=$r['course5'];

$query1=mysqli_query($connect, "select course_name from courses where course_id='$sub1';");
$row1=mysqli_fetch_array($query1);
$query2=mysqli_query($connect, "select course_name from courses where course_id='$sub2';");
$row2=mysqli_fetch_array($query2);
$query3=mysqli_query($connect, "select course_name from courses where course_id='$sub3';");
$row3=mysqli_fetch_array($query3);
$query4=mysqli_query($connect, "select course_name from courses where course_id='$sub4';");
$row4=mysqli_fetch_array($query4);
$query5=mysqli_query($connect, "select course_name from courses where course_id='$sub5';");
$row5=mysqli_fetch_array($query5);

$sub1_name=$row1['course_name'];
$sub2_name=$row2['course_name'];
$sub3_name=$row3['course_name'];
$sub4_name=$row4['course_name'];
$sub5_name=$row5['course_name'];

$var1=$r1[$r['course1']];
$var2=$r2[$r['course1']];
$var3=$r3[$r['course1']];

$var4=$r1[$r['course2']];
$var5=$r2[$r['course2']];
$var6=$r3[$r['course2']];

$var7=$r1[$r['course3']];
$var8=$r2[$r['course3']];
$var9=$r3[$r['course3']];

$var10=$r1[$r['course4']];
$var11=$r2[$r['course4']];
$var12=$r3[$r['course4']];

$var13=$r1[$r['course5']];
$var14=$r2[$r['course5']];
$var15=$r3[$r['course5']];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="..\CSS\Student_Sem_result.css">
    <title>Marks</title>
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
  <li><a href="StudentDashboard.php">Dashboard</a></li>
  <li><a href="stu_personalInfo.php">Personal Info</a></li>
    <li><a href="stu_feeDetails.php">Fee Details</a></li>
    <li><a href="stu_courses.php">Courses</a></li>
    <li><a href="stu_result.php">Result</a></li>
    <li><a href="ContactUsinterface.php">Contact us</a></li>
    <li><a href="stu_logout.php">Logout</a></li>
  </ul>
</div>
    <div id="heading">
        <h1 id="h">Semester<?php echo " ".$sem_no; ?></h1>
    </div>
    <table class="container">
        <tbody>
            <tr>
                <th>Course Name</th>
                <th>T1</th>
                <th>T2</th>
                <th>T3</th>
            </tr>
            <tr>
                <td class="data"><?php echo $sub1_name; ?></td>
                <td class="data"><?php echo $var1; ?></td>
                <td class="data"><?php echo $var2; ?></td>
                <td class="data"><?php echo $var3; ?></td>
            </tr>
            <tr>
                <td class="data"><?php echo $sub2_name; ?></td>
                <td class="data"><?php echo $var4; ?></td>
                <td class="data"><?php echo $var5; ?></td>
                <td class="data"><?php echo $var6; ?></td>
            </tr>
            <tr>
                <td class="data"><?php echo $sub3_name; ?></td>
                <td class="data"><?php echo $var7; ?></td>
                <td class="data"><?php echo $var8; ?></td>
                <td class="data"><?php echo $var9; ?></td>
            </tr>
            <tr>
                <td class="data"><?php echo $sub4_name; ?></td>
                <td class="data"><?php echo $var10; ?></td>
                <td class="data"><?php echo $var11; ?></td>
                <td class="data"><?php echo $var12; ?></td>
            </tr>
            <tr>
                <td class="data"><?php echo $sub5_name; ?></td>
                <td class="data"><?php echo $var13; ?></td>
                <td class="data"><?php echo $var14; ?></td>
                <td class="data"><?php echo $var15; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>