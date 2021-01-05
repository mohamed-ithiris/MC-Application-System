<?php
session_start();
include 'connection.php';

$name=$_SESSION['USER'];
$Tfrom=$_POST['fromtime'];
$Tto=$_POST['totime'];
$clinics=$_POST['Clinics'];
$mc_clinic=$_POST['MC_Clinic'];
$mc_doctor=$_POST['MC_Doctor'];
$work='Pending';
$approval='Not approved';

// echo $name;
// echo $Tfrom;
// echo $Tto;
// echo $clinics;
// echo $mc_clinic;
// echo $mc_doctor;

$sql1="select user_id from user where name='$name'";
$result1=mysqli_query($con,$sql1);
$row=mysqli_fetch_array($result1);
// echo $row[0];

$sql2="insert into user_details(id,user_id,Timingfrom,Timingto,clinic,work_pending,mc_doctor,mc_clinic,approval)values(null,'$row[0]','$Tfrom','$Tto','$clinics','$work','$mc_doctor','$mc_clinic','$approval')";
if($con->query($sql2))
{
    ?>
    <script>alert('Request Success!!');location.href='home.php';</script>
<?php
}else{
    ?>
<script>alert('Error occur Please try again later!');location.href='../ApplyTimeoff.html';</script>
    <?php
}
$con->close();
?>