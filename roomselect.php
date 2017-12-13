<?php

$room1=$_POST['room1'];
$roll_no=(int)$_POST['Roll_No'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collegedata";


$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$percentilesql="select * from `requiredtable` where `Roll_No`=\"$roll_no\"";
$percentileresult=mysqli_query($conn,$percentilesql);

while($row = mysqli_fetch_assoc($percentileresult))
{
$Roll_Percentile=$row["Percentile"];
$Roll_Marks=$row["Marks"];
}


$sql = "insert into roomtable(Roll_No,Room1,Room2,Room3,Room4,Room5,Room6,Room7,Room8,Room9,Room10,Room11,Room12,Room13,Room14,Room15,Room16,Room17,Room18,Room19,Room20) values('$roll_no','$room1[0]','$room1[1]','$room1[2]','$room1[3]','$room1[4]','$room1[5]','$room1[6]','$room1[7]','$room1[8]','$room1[9]','$room1[10]','$room1[11]','$room1[12]','$room1[13]','$room1[14]','$room1[15]','$room1[16]','$room1[17]','$room1[18]','$room1[19]')";
mysqli_query($conn, $sql);














$i=0;


while($i!=500)
{

$roomsql = "select * from `roomtable` where `Roll_No`=\"$roll_no\"";
$roomresult=mysqli_query($conn,$roomsql);



        while($row = mysqli_fetch_assoc($roomresult))
        {
            for($i=0;$i<20;$i++)
            {
            $j=$i+1;
            $room1[$i]=$row["Room$j"];
            }

        }


$i=0;

while($i<20)
{

$sql2 = "SELECT * FROM `requiredtable` WHERE `Room`=\"$room1[$i]\"";
$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0 && $room1[$i]!="")
{
    while($row = mysqli_fetch_assoc($result2))
    {

           if(((float)$row["Percentile"]<(float)$Roll_Percentile) ||(((float)$row["Percentile"]==(float)$Roll_Percentile)  && ((float)$row["Marks"]<(float)Roll_Marks)))
           {
            $Roll_Percentile=$row["Percentile"];
            $Roll_Marks=$row["Marks"];
            $name=$row["Roll_No"];
            $newsql = "update `requiredtable` set `Room`=\"$room1[$i]\" where `Roll_No`=\"$roll_no\"";
            mysqli_query($conn, $newsql);
            $roll_no=$row["Roll_No"];
            $newsqll = "update `requiredtable` set `Room`=\"\" where `Roll_No`=\"$roll_no\"";
            mysqli_query($conn, $newsqll);
            $i=100;
           }
           else
           {
            $i++;
           }
    }
}
else
{
    $newsql2 = "update `requiredtable` set `Room`=\"$room1[$i]\" where `Roll_No`=\"$roll_no\"";
    mysqli_query($conn,$newsql2);
    $i=500;
    break;
}


}

}



?>