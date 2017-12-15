<?php
session_start();
$username=$_POST['username'];
//echo $email;
$password=$_POST['password'];
//echo $password;
mysql_connect('localhost','root','');
mysql_select_db("collegedata");
$query="select * from logindetail where Username='$username' and Password='$password'";

$res=mysql_query($query);

if($row=mysql_fetch_array($res,MYSQL_BOTH))
{

$_SESSION['varname'] = $username;
header("Location:redroom.php");
}
else
{
$_SESSION['correctPassword'] = 0;
header("Location:index.php");
}

?>
