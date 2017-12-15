<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collegedata";
session_start() ;
$rollnum =$_SESSION['varname'];

$room=array();
$owner=array();
$myroom=array();
$myroomowner=array();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `requiredtable` ORDER BY `requiredtable`.`Percentile` DESC, `requiredtable`.`Marks` DESC";
$result = mysqli_query($conn, $sql);
$max=0;
if (mysqli_num_rows($result) > 0) 
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

	if((int)$row["Roll_No"]!= $rollnum)
	   {
	        if($row["Room"]!="" && $row["Room"]!=" ")
	        {

	          array_push($room,$row["Room"]);
	          array_push($owner,$row["Student_Name"]);
	        }

	   }

	   else
	   {

        	          array_push($myroom,$row["Room"]);
        	          array_push($myroomowner,$row["Student_Name"]);


	      break;
	   }

    }
} else {
    echo "0 results";
}

$zero=0;

$room_json = json_encode($room);
?>





<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/css.css">
        <script src="js/jquery-3.2.1.js"></script>
    </head>
    <body>
    <p hidden id="Roll_No"><?php echo $rollnum; ?></p>

    <H2>Ground Floor</H2>
    <button class="button buttonG" id="G1">G1</button>
    <button class="button buttonG" id="G2">G2</button>
    <button class="button buttonG" id="G3">G3</button>
    <button class="button buttonG" id="G4">G4</button>
    <button class="button buttonG" id="G5">G5</button>
    <button class="button buttonG" id="G6">G6</button>
    <button class="button buttonG" id="G7">G7</button>
    <button class="button buttonG" id="G8">G8</button>
    <button class="button buttonG" id="G9">G9</button>
    <button class="button buttonG" id="G10">G10</button>
    <button class="button buttonG" id="G11">G11</button>
    <button class="button buttonG" id="G12">G12</button>
    <button class="button buttonG" id="G13">G13</button>
    <button class="button buttonG" id="G14">G14</button>
    <button class="button buttonG" id="G15">G15</button>
    <button class="button buttonG" id="G16">G16</button>
    <button class="button buttonG" id="G17">G17</button>
    <button class="button buttonG" id="G18">G18</button>
    <button class="button buttonG" id="G19">G19</button>
    <button class="button buttonG" id="G20">G20</button>
    <button class="button buttonG" id="G21">G21</button>
    <button class="button buttonG" id="G22">G22</button>
    <button class="button buttonG" id="G23">G23</button>
    <button class="button buttonG" id="G24">G24</button>
    <button class="button buttonG" id="G25">G25</button>
    <button class="button buttonG" id="G26">G26</button>
    <button class="button buttonG" id="G27">G27</button>
    <button class="button buttonG" id="G28">G28</button>
    <button class="button buttonG" id="G29">G29</button>
    <button class="button buttonG" id="G30">G30</button>
        <br>
        <br>
        <br>
        <H2>First Floor</H2>
        <button class="button buttonF" id="F1">F1</button>
        <button class="button buttonF" id="F2">F2</button>
        <button class="button buttonF" id="F3">F3</button>
        <button class="button buttonF" id="F4">F4</button>
        <button class="button buttonF" id="F5">F5</button>
        <button class="button buttonF" id="F6">F6</button>
        <button class="button buttonF" id="F7">F7</button>
        <button class="button buttonF" id="F8">F8</button>
        <button class="button buttonF" id="F9">F9</button>
        <button class="button buttonF" id="F10">F10</button>
        <button class="button buttonF" id="F11">F11</button>
        <button class="button buttonF" id="F12">F12</button>
        <button class="button buttonF" id="F13">F13</button>
        <button class="button buttonF" id="F14">F14</button>
        <button class="button buttonF" id="F15">F15</button>
        <button class="button buttonF" id="F16">F16</button>
        <button class="button buttonF" id="F17">F17</button>
        <button class="button buttonF" id="F18">F18</button>
        <button class="button buttonF" id="F19">F19</button>
        <button class="button buttonF" id="F20">F20</button>
        <button class="button buttonF" id="F21">F21</button>
        <button class="button buttonF" id="F22">F22</button>
        <button class="button buttonF" id="F23">F23</button>
        <button class="button buttonF" id="F24">F24</button>
        <button class="button buttonF" id="F25">F25</button>
        <button class="button buttonF" id="F26">F26</button>
        <button class="button buttonF" id="F27">F27</button>
        <button class="button buttonF" id="F28">F28</button>
        <button class="button buttonF" id="F29">F29</button>
        <button class="button buttonF" id="F30">F30</button>
            <br>
            <br>
            <br>
            <H2>Second Floor</H2>
                <button class="button buttonS" id="S1">S1</button>
                <button class="button buttonS" id="S2">S2</button>
                <button class="button buttonS" id="S3">S3</button>
                <button class="button buttonS" id="S4">S4</button>
                <button class="button buttonS" id="S5">S5</button>
                <button class="button buttonS" id="S6">S6</button>
                <button class="button buttonS" id="S7">S7</button>
                <button class="button buttonS" id="S8">S8</button>
                <button class="button buttonS" id="S9">S9</button>
                <button class="button buttonS" id="S10">S10</button>
                <button class="button buttonS" id="S11">S11</button>
                <button class="button buttonS" id="S12">S12</button>
                <button class="button buttonS" id="S13">S13</button>
                <button class="button buttonS" id="S14">S14</button>
                <button class="button buttonS" id="S15">S15</button>
                <button class="button buttonS" id="S16">S16</button>
                <button class="button buttonS" id="S17">S17</button>
                <button class="button buttonS" id="S18">S18</button>
                <button class="button buttonS" id="S19">S19</button>
                <button class="button buttonS" id="S20">S20</button>
                <button class="button buttonS" id="S21">S21</button>
                <button class="button buttonS" id="S22">S22</button>
                <button class="button buttonS" id="S23">S23</button>
                <button class="button buttonS" id="S24">S24</button>
                <button class="button buttonS" id="S25">S25</button>
                <button class="button buttonS" id="S26">S26</button>
                <button class="button buttonS" id="S27">S27</button>
                <button class="button buttonS" id="S28">S28</button>
                <button class="button buttonS" id="S29">S29</button>
                <button class="button buttonS" id="S30">S30</button>

                <br>
                <center> <br>  <center>
    <button id="btn">Submit</button>

    <script src="js/vendor/jsscript.js"></script>
    <script>
    var arr = <?php echo '["' . implode('", "', $room) . '"]' ?>;
    var arrowner = <?php echo '["' . implode('", "', $owner) . '"]' ?>;

     var myarr = <?php echo '["' . implode('", "', $myroom) . '"]' ?>;
     var myarrowner = <?php echo '["' . implode('", "', $myroomowner) . '"]' ?>;

    console.log(arr.length);

     for(var i=0;i<arr.length;i++)
     {

                if(arr[i]!="")
                      {

                                            document.getElementById(arr[i]).style.backgroundColor="Red";
                                            document.getElementById(arr[i]).setAttribute("disabled",true);
                                            document.getElementById(arr[i]).innerHTML=arrowner[i]+" "+arr[i];


                      }



     }

        for(var j=0;j<myarr.length;j++)
        {
          if(myarr[j]!="")
          {
                                                        document.getElementById(myarr[j]).style.backgroundColor="black";
                                                        document.getElementById(myarr[j]).innerHTML=myarrowner[j]+" "+myarr[j];
          }
        }


    </script>
    </body>
</html>
