<?php 
session_start();
include 'connection.php';
$name=$_POST['username'];
$password=$_POST['password'];

$sql1="select * from admin where name='$name' && password='$password'";
$sql2="select * from user where name='$name' && password='$password'";
echo $sql1;
echo $sql2;
$result1=mysqli_query($con,$sql1);
if(mysqli_fetch_assoc($result1))
{
$_SESSION['ADMIN']=$name;
header('location:Admin.php');
}
else
{
    $result2 = mysqli_query($con,$sql2);
    if(mysqli_fetch_assoc($result2))
        {
            $_SESSION['USER']=$name;
             header("location:home.php");
        }
    else
        {
?>
<script>alert('Invalid username/password!');
location.href='../index.html';
</script>
    <?php
        }
}
?>
