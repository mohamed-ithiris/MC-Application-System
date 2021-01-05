<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users and Id Page</title>
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
                <a href="Admin.php" title="Home Page">
                    Admin/
                </a>
                <a href="users_id.php" style="color: grey;">Users ID Page</a>
            </li>

        </ul>
    </div>
<?php
session_start();
include 'connection.php';

$sql="select * from user";
$result=mysqli_query($con,$sql);
?> <table border="1" cellspacing="0" cellpadding="10" id="display">
<tr>
    <th >Name</th>
    <th >ID</th>

</tr>
<?php
while ($row=mysqli_fetch_array($result))
{?>
<tr>
<td>   <?php echo $row[1];?>     </td>
<td>   <?php echo $row[0];?>     </td>
<br>
<?php
}
?>    
      
        
    </table>
</body>
</html>