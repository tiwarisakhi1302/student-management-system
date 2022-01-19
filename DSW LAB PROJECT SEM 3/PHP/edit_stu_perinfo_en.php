<?php
session_start()
?>
<?php
$connect=mysqli_connect("localhost","root","","StudentManagementSystem");
$enr=$_POST['enroll'];
$query=mysqli_query($connect, "Select * from student where enroll='$enr';");
$r1=mysqli_fetch_array($query);
if($r1==NULL){
    echo'<script type="text/javascript">
        alert("Enroll does not Exist.");
        window.location.href="../PHP/edit_stu_perinfo_en_interface.php";
        </script>';
}
else{
    $_SESSION['enroll']=$enr;
    echo'<script type="text/javascript">
    alert("Enroll Authenticated");
    window.location.href="../PHP/edit_stu_per_info_menu.php";
    </script>';
}
?>