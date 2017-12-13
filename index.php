


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collegedata";
session_start() ;
$rollnum =$_SESSION['varname'];

$room=array();
$owner=array();

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
	        if($row["Room"]!="")
	        {
	          array_push($room,$row["Room"]);
	          array_push($owner,$row["Student_Name"]);
	        }

	   }

	   else
	   {
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
    <button class="button buttonG" id="G31">G31</button>
    <button class="button buttonG" id="G32">G32</button>
    <button class="button buttonG" id="G33">G33</button>
    <button class="button buttonG" id="G34">G34</button>
    <button class="button buttonG" id="G35">G35</button>
    <button class="button buttonG" id="G36">G36</button>
    <button class="button buttonG" id="G37">G37</button>
    <button class="button buttonG" id="G38">G38</button>
    <button class="button buttonG" id="G39">G39</button>
    <button class="button buttonG" id="G40">G40</button>
    <button class="button buttonG" id="G41">G41</button>
        <br>
        <br>
        <br>
        <H2>First Floor</H2>
    <button class="button buttonF">F1</button>
    <button class="button buttonF">F2</button>
    <button class="button buttonF">F3</button>
    <button class="button buttonF">F4</button>
    <button class="button buttonF">F5</button>
    <br>
    <button id="btn">Submit</button>

    <script src="js/vendor/jsscript.js"></script>
    <script>
    var arr = <?php echo '["' . implode('", "', $room) . '"]' ?>;
    var arrowner = <?php echo '["' . implode('", "', $owner) . '"]' ?>;
    console.log(arr.length);

     for(var i=0;i<arr.length;i++)
     {
                      document.getElementById(arr[i]).style.backgroundColor="Red";
                      document.getElementById(arr[i]).setAttribute("disabled",true);
                      document.getElementById(arr[i]).innerHTML=arrowner[i]+" "+arr[i];

     }

    </script>
    </body>
</html>
