<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
     <!--CSS FILE LINK-->
 <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
<div id="current_location">
        <ul>
            <li>
                <a href="logout.php" title="Logout Page">
                    Logout/
                </a>
                <a href="Admin.php" style="color: grey;">Admin Page</a>
            </li>

        </ul>
    </div>
<?php
session_start();
include 'connection.php';

$sql="select * from user_details";
$result=mysqli_query($con,$sql);
?> 

<table border="1" cellspacing="0" cellpadding="10" id="display">
<tr>
    <th rowspan="2">User_ID</th>
    <th colspan="2">Time Off</th>
    <th rowspan="2">Clinics</th>
    <th rowspan="2">Work_Pending</th>
    <th rowspan="2">Medical Certificate after visiting the doctor</th>
    <th rowspan="2">Medical Certificate after visiting the Clinic</th>
    <th rowspan="2">Approval</th>
    <th rowspan="2">Approve</th>

</tr>
<tr>
    <th>from</th>
    <th>to</th>
</tr>
<?php
while ($row=mysqli_fetch_array($result))
{?>
<tr>
<td>   <?php echo $row[1];?>     </td>
<td>   <?php echo $row[2];?>     </td>
<td>   <?php echo $row[3];?>     </td>
<td>   <?php echo $row[4];?>     </td>
<td>   <?php echo $row[5];?>     </td>
<td>   <?php echo $row[6];?>     </td>
<td>   <?php echo $row[7];?>     </td>
<td>   <?php echo $row[8];?>     </td>
<td>
<a href="approve.php?a=<?php echo $row[0]; ?>" > Approve</a></td>    
<br>
<?php
}
?>    
            <tr>
               <td colspan="9">
                    <a href="users_id.php">Users and Id</a>
                    </td>
            </tr>
        
    </table>
    <script>
        function display1(){
            a=document.getElementById("approve");
        }
    </script>
</body>

</html>