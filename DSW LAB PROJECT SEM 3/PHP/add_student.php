<?php
    $enroll=$_POST['enroll'];
    $con=mysqli_connect("localhost","root","","studentmanagementsystem");
    $query=mysqli_query($con,"select * from student where enroll='$enroll';");
    $r1=mysqli_fetch_array($query);
    if($r1!=NULL)
    {
        echo'<script type="text/javascript">
        alert("Enroll Already Exist.");
        window.location.href="add_student_interface.php";
        </script>';
    }
?>

<?php 
    session_start();
    $conn=mysqli_connect("localhost","root","","studentmanagementsystem"); 
    $fname=$_POST['fname'];  
    $lname=$_POST['lname']; 
    $name=$fname.' '.$lname;   
    $dob=$_POST['dob'];    
    $mail=$_POST['mail'];    
    $address=$_POST['address'];
    $fee=1; 
    $phone=$_POST['phone'];     
    $batch=$_POST['batch']; 
    $curr_sem=$_POST['sem']; 
    $semester="";
if($curr_sem==1){
    $semester="sem1";
}
else if($curr_sem==2){
    $semester="sem2";
}
else if($curr_sem==3){
    $semester="sem3";
}
else if($curr_sem==4){
    $semester="sem4";
}
else if($curr_sem==5){
    $semester="sem5";
}
else if($curr_sem==6){
    $semester="sem6";
}
else if($curr_sem==7){
    $semester="sem7";
}
else if($curr_sem==8){
    $semester="sem8";
}
    $query1=mysqli_query($conn, "Insert into student values('$enroll','$name','$dob','$mail','$address','$phone','$curr_sem','$batch');");
    $query2=mysqli_query($conn, "Insert into login_student values('$enroll', '$fname', '$name');");
    $query3=mysqli_query($conn, "Insert into fee_details(enroll , $semester)values('$enroll', '$fee');");
    
    $query4=mysqli_query($conn, "Insert into exam_sem1(enroll , exam_id) values ('$enroll', 't1');");
    $query5=mysqli_query($conn, "Insert into exam_sem1(enroll , exam_id) values ('$enroll', 't2');");
    $query6=mysqli_query($conn, "Insert into exam_sem1(enroll , exam_id) values ('$enroll', 't3');");

    $query7=mysqli_query($conn, "Insert into exam_sem2(enroll , exam_id) values ('$enroll', 't1');");
    $query8=mysqli_query($conn, "Insert into exam_sem2(enroll , exam_id) values ('$enroll', 't2');");
    $query9=mysqli_query($conn, "Insert into exam_sem2(enroll , exam_id) values ('$enroll', 't3');");

    $query10=mysqli_query($conn, "Insert into exam_sem3(enroll , exam_id) values ('$enroll', 't1');");
    $query11=mysqli_query($conn, "Insert into exam_sem3(enroll , exam_id) values ('$enroll', 't2');");
    $query12=mysqli_query($conn, "Insert into exam_sem3(enroll , exam_id) values ('$enroll', 't3');");

    $query13=mysqli_query($conn, "Insert into exam_sem4(enroll , exam_id) values ('$enroll', 't1');");
    $query14=mysqli_query($conn, "Insert into exam_sem4(enroll , exam_id) values ('$enroll', 't2');");
    $query15=mysqli_query($conn, "Insert into exam_sem4(enroll , exam_id) values ('$enroll', 't3');");

    $query16=mysqli_query($conn, "Insert into exam_sem5(enroll , exam_id) values ('$enroll', 't1');");
    $query17=mysqli_query($conn, "Insert into exam_sem5(enroll , exam_id) values ('$enroll', 't2');");
    $query18=mysqli_query($conn, "Insert into exam_sem5(enroll , exam_id) values ('$enroll', 't3');");

    $query19=mysqli_query($conn, "Insert into exam_sem6(enroll , exam_id) values ('$enroll', 't1');");
    $query20=mysqli_query($conn, "Insert into exam_sem6(enroll , exam_id) values ('$enroll', 't2');");
    $query21=mysqli_query($conn, "Insert into exam_sem6(enroll , exam_id) values ('$enroll', 't3');");

    $query22=mysqli_query($conn, "Insert into exam_sem7(enroll , exam_id) values ('$enroll', 't1');");
    $query23=mysqli_query($conn, "Insert into exam_sem7(enroll , exam_id) values ('$enroll', 't2');");
    $query24=mysqli_query($conn, "Insert into exam_sem7(enroll , exam_id) values ('$enroll', 't3');");

    $query25=mysqli_query($conn, "Insert into exam_sem8(enroll , exam_id) values ('$enroll', 't1');");
    $query26=mysqli_query($conn, "Insert into exam_sem8(enroll , exam_id) values ('$enroll', 't2');");
    $query27=mysqli_query($conn, "Insert into exam_sem8(enroll , exam_id) values ('$enroll', 't3');");
    echo'<script type="text/javascript">
    alert("Response Submitted");
    window.location.href="add_student_interface.php";
    </script>';
?>