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
	$connect = mysqli_connect("localhost","root","","StudentManagementSystem");
	$query = "Select * From student Where enroll = $en;";
	$row = mysqli_query($connect, $query);
    $record=mysqli_fetch_array($row);
    $name=$record['name'];
    $enroll=$record['enroll'];
    $DOB=$record['dob'];
    $sm=$record['sem'];
    $bth=$record['batch'];
    $pe=$record['per_email'];
    $adds=$record['address'];
    $phn=$record['phone_no'];
	mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <link rel="stylesheet" href="../CSS/stu_perInfo.css">
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
    <h1 id="h">Personal Information</h1>
</div>
<table class="container">
    <tbody>
      <tr>
        <td style="color : lightsalmon">Name</td>
        <td class="data"> <?php print $name; ?> </td>
      </tr>
      <tr>
        <td style="color : lightsalmon">Enrollment</td>
        <td class="data"> <?php print $enroll; ?>    </td>
      </tr>
      <tr>
        <td style="color : lightsalmon">Semester</td>
        <td class="data">  <?php print $sm;?>   </td>
      </tr>
      <tr>
        <td style="color : lightsalmon">Email</td>
        <td class="data">  <?php print $pe;?>  </td>
      </tr>
      <tr>
        <td style="color : lightsalmon">Batch</td>
        <td class="data">  <?php print $bth; ?>  </td>
      </tr>
      <tr>
        <td style="color : lightsalmon">D.O.B</td>
        <td class="data">  <?php print $DOB; ?>   </td>
      </tr>
      <tr>
        <td style="color : lightsalmon">Address</td>
        <td class="data">  <?php print $adds; ?>   </td>
      </tr>
      <tr>
        <td style="color : lightsalmon">Contact No</td>
        <td class="data">  <?php print $phn; ?>   </td>
      </tr>
    </tbody>
  </table>

</body>
</html>