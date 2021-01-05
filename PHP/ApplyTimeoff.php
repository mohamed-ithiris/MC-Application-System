<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ApplyTimeoff Page</title>
     <!--CSS FILE LINK-->
 <link rel="stylesheet" href="../CSS/style.css">
    <style>
        .danger {
            color: red;
        }
        
        .opitonal {
            color: grey;
        }
    </style>
</head>

<body>
<div id="current_location">
        <ul>
            <li>
                <a href="logout.php" title="Logout Page">
                    Logout/
                </a>
                <a href="home.php" title="Home Page">
                    Home/
                </a>
                <a href="ApplyTimeoff.php" style="color: grey;">ApplyTimeoff Page</a>
            </li>

        </ul>
    </div>
<?php
session_start();?>
    <table border="1" cellspacing="0" cellpadding="10" id="apply">
        <form action="apply.php" method="POST" onsubmit="return tocheck()">
            <tr>
                <th colspan="2">
                    <h2> Apply Time Off </h2>
                    <span class="danger">Working hour 8 AM to 5 PM( 08:00 to 17:00 )</span>
                </th>
            </tr>
            <tr>
                <td>
                    <label for="select">Recommented Clinics<span class="danger">*</span> </label>

                </td>
                <td>
                    <select name="Clinics" id="Clinic-doctor " required>
                        <option value="Indra Clinic">Indra Clinic</option>
                        <option value="Meera Clinic">Meera Clinic</option>
                        <option value="Lashmi Clinic">Lashmi Clinic</option>
                        <option value="Sakti Clinic">Sakti Clinic</option>
                        <option value="Sriram Clinic">Sriram Clinic</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="time">Timing:<span class="danger">*</span></label>
                </td>

                <td>
                    <label for="time">From:</label> <input type="time" name="fromtime" id="fromTime" required>

                    <label for="time">to:</label> <input type="time" name="totime" id="toTime" onchange="return tocheck()" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="MC">Medical Certificate (MC) after Visiting the doctor:<span class="danger">*</span></label>
                </td>
                <td>
                    <input type="file" name="MC_Doctor" id="MC_Doctor" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="MC ">Medical Certificate (MC) after Visiting the Clinic:<span class="opitonal">(optional)</span></label>
                </td>
                <td>
                    <input type="file" name="MC_Clinic" id="MC_Clinic">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Apply">
                </td>
            </tr>
        </form>

    </table>
<script>
    
  

    function tocheck(){
        a=document.getElementById("fromTime").value;
        b=document.getElementById("toTime").value;
        hr1=a.substr(0,2);
        min1=a.substr(3,2);
        hr2=b.substr(0,2);
        min2=b.substr(3,2);
        if(hr1<8||hr2>17){
            alert("It is not working hour");
            return false;
        }else if(hr1==hr2&&min1==min2){
            alert("Enter valid time");
            return false;
        }
        else if(hr1>hr2){
            alert("From time is greater than to time");
            return false;
        }else if(hr1==hr2){
                if(min1>min2){
                        alert("From time is greater than to time");
                        return false;
                }
                else{
                        return true;
                }
        }
}

</script>
</body>

</html>