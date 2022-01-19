<?php
session_start()
?>
<?php
if(!isset($_SESSION['enroll'])){
    echo'<script type="text/javascript">
        alert("Session Expired");
        window.location.href="edit_stu_perInfo_en_interface.php";
        </script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/edit_stu_per_info_menu.css">
    <title>Edit Student Information</title>
</head>
<body>
<div id="heading">
<h1 id="h">Edit Student Information</h1>
</div>
<br><br><br><br>
<center>
<button type="submit" style="margin:1%" type="button" class="myButton" name="mail" onclick="location.href='../HTML/Edit student Personal info/edit_mail.html';">Edit Personal Email</button><br>
<button type="submit" style="margin:1%" type="button" class="myButton" name="add" onclick="location.href='../HTML/Edit student Personal info/edit_address.html';">Edit Address</button><br>
<button type="submit" style="margin:1%" type="button" class="myButton" name="phn" onclick="location.href='../HTML/Edit student Personal info/edit_phone.html';">Edit Phone No</button><br>
<button type="submit" style="margin:1%" type="button" class="myButton" name="sm" onclick="location.href='../HTML/Edit student Personal info/edit_semester.html';">Edit Semester</button><br>
<button type="submit" style="margin:1%" type="button" class="myButton" name="exit" onclick="location.href='../PHP/exit.php';">Exit</button><br>
</center>
</body>
</html>