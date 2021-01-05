<?php
include 'connection.php';
$a=$_GET['a'];
echo $a;
$sql="update user_details set approval='Approved' where id='$a'";
if($con->query($sql))
{
    ?>
    <script>alert('Approved Success!!');location.href='Admin.php';</script>
<?php
}else{
    ?>
<script>alert('Error try again later!');location.href='Admin.php';</script>
    <?php
}
$con->close();
?>



?>