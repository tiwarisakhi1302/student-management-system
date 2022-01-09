<?php
session_start();
$en=$_SESSION['enroll'];
if($en==NULL){
    echo'<script type="text/javascript">
    alert("You have been logged Out");
    window.location.href="../HTML/login.html";
</script>';
}
$connect = mysqli_connect("localhost","root","","StudentManagementSystem");
$q1=mysqli_query($connect, "select sem from student where enroll='$en';");
$r=mysqli_fetch_array($q1);
$curr_sem=$r['sem'];
$query=mysqli_query($connect, "select * from sem_courses where sem=$curr_sem;");
$r1=mysqli_fetch_array($query);
$c1=$r1['course1'];
$c2=$r1['course2'];
$c3=$r1['course3'];
$c4=$r1['course4'];
$c5=$r1['course5'];

$q6=mysqli_query($connect, "select course_name, course_credit from courses where course_id='$c1';");
$q7=mysqli_query($connect, "select course_name, course_credit from courses where course_id='$c2';");
$q8=mysqli_query($connect, "select course_name, course_credit from courses where course_id='$c3';");
$q9=mysqli_query($connect, "select course_name, course_credit from courses where course_id='$c4';");
$q10=mysqli_query($connect, "select course_name, course_credit from courses where course_id='$c5';");

$r6=mysqli_fetch_array($q6);
$cn1=$r6['course_name'];
$cc1=$r6['course_credit'];
$r7=mysqli_fetch_array($q7);
$cn2=$r7['course_name'];
$cc2=$r7['course_credit'];
$r8=mysqli_fetch_array($q8);
$cn3=$r8['course_name'];
$cc3=$r8['course_credit'];
$r9=mysqli_fetch_array($q9);
$cn4=$r9['course_name'];
$cc4=$r9['course_credit'];
$r10=mysqli_fetch_array($q10);
$cn5=$r10['course_name'];
$cc5=$r10['course_credit'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COURSE</title>
    <link rel="stylesheet" href="../CSS/stu_courses.css">
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
        <h1 id="h">COURSE ENROLLED</h1>
    </div>
    <table class="container">
        <tbody>
            <tr>
                <th>Course Code</th>
                <th>Course Name</th>
                <th>Course Credits</th>
            </tr>
            <tr>
                <td class="data"><?php echo $c1; ?></td>
                <td class="data"><?php echo $cn1; ?></td>
                <td class="data"><?php echo $cc1; ?></td>
            </tr>
            <tr>
                <td class="data"><?php echo $c2; ?></td>
                <td class="data"><?php echo $cn2; ?> </td>
                <td class="data"><?php echo $cc2; ?></td>
            </tr>
            <tr>
                <td class="data"><?php echo $c3; ?></td>
                <td class="data"><?php echo $cn3; ?></td>
                <td class="data"><?php echo $cc3; ?></td>
            </tr>
            <tr>
                <td class="data"><?php echo $c4; ?></td>
                <td class="data"><?php echo $cn4; ?></td>
                <td class="data"><?php echo $cc4; ?></td>
            </tr>
            <tr>
                <td class="data"><?php echo $c5; ?></td>
                <td class="data"><?php echo $cn5; ?></td>
                <td class="data"><?php echo $cc5;?></td>
            </tr>
        </tbody>
    </table>

</body>

</html>