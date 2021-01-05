<?php
include 'connection.php';
$name=$_POST['username'];
$password=$_POST['newpassword'];
echo $name;
echo ' ';
echo $password;
$sql="insert into user values(null,'$name','$password')";
if($con->query($sql))
{
    ?>
    <script>alert('Registration Success!!');location.href='../index.html';</script>
<?php
}else{
    ?>
<script>alert('Error in User Table!');location.href='../registration.html';</script>
    <?php
}
$con->close();
?>
