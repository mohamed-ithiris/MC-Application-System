<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
 <!--CSS FILE LINK-->
 <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
<div id="current_location">
        <ul>
            <li>
                <a href="logout.php" title="Login Page">
                    Logout/
                </a>
                <a href="home.php" style="color: grey;">Home Page</a>
            </li>

        </ul>
    </div>
<?php
session_start();
include 'connection.php';
$name=$_SESSION['USER'];
$sql1="select user_id from user where name='$name'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$Id=$row1[0];

// echo $Id;


$sql="select * from user_details where user_id='$Id'";
$result=mysqli_query($con,$sql);
?>

    <table border="1" cellspacing="0" cellpadding="10" id="display">
        <tr>
            <th rowspan="2">Name</th>
            <th colspan="2">Time Off</th>
            <th rowspan="2">Clinics</th>
            <th rowspan="2">Work_Pending</th>
            <th rowspan="2">Medical Certificate after visiting the doctor</th>
            <th rowspan="2">Medical Certificate after visiting the Clinic</th>
            <th rowspan="2">Approval</th>

        </tr>
        <tr>
            <th>from</th>
            <th>to</th>
        </tr>
<?php
        while ($row=mysqli_fetch_array($result))
  {?>
    <tr>
  <td>   <?php echo $name;?>     </td>
  <td>   <?php echo $row[2];?>     </td>
  <td>   <?php echo $row[3];?>     </td>
  <td>   <?php echo $row[4];?>     </td>
  <td>   <?php echo $row[5];?>     </td>
  <td>   <?php echo $row[6];?>     </td>
  <td>   <?php echo $row[7];?>     </td>
  <td>   <?php echo $row[8];?>     </td>

<br>
<?php
}
?>    
        <tr>
            <td colspan="8">
                <form action="ApplyTimeoff.php" method="POST">
                    <input type="submit" value="Request for Time Off">
                </form>
            </td>
        </tr>
    </table>

</body>

</html>

</html>