<?php
session_start()
?>
<?php
unset($_SESSION['enroll']);
echo'<script type="text/javascript">
        alert("Enroll Session Over.");
        window.location.href="../PHP/edit_stu_perinfo_en_interface.php";
        </script>';
?>