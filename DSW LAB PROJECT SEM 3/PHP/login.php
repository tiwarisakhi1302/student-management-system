<?php
session_start();
?>

<?php
error_reporting(0);
if(!isset($_POST['login']))
{
  header("Location:login.html");
}

$connect=mysqli_connect("localhost","root","","StudentManagementSystem");
if(mysqli_connect_errno())
{
    die;
    header("Location: ../HTML/login.html");
}
$user=$_POST['user'];
if($user=="stu"){
    $enroll=$_POST['username'];
    $password=$_POST['pass'];
    $query=mysqli_query($connect,"select Enroll,Password From login_student where enroll='$enroll';");
    $row=mysqli_fetch_array($query);
    if($row['Enroll']==$enroll && $row['Password']==$password)
    {
        $_SESSION["enroll"]=$row['Enroll'];
        header("Location:StudentDashboard.php");
    }
    else{
        echo'<script type="text/javascript">
        alert("User Not Found");
        window.location.href="../HTML/login.html";
        </script>';
    }
}
else if($user=="admin"){
    $enroll=$_POST['username'];
    $password=$_POST['pass'];
    $query=mysqli_query($connect,"select * From admin_login where admin_id='$enroll';");
    $row=mysqli_fetch_array($query);
    if($row['admin_id']==$enroll && $row['password']==$password)
    {
        $_SESSION['counter']=1;
        header("Location:../PHP/admin_dashboard.php");
    }
    else{
        echo'<script type="text/javascript">
        alert("User Not Found");
        window.location.href="../HTML/login.html";
        </script>';
    }
}
    mysqli_close($connect);
?>