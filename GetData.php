

<html>
<head>
<title>Receive Data From Website</title>
</head>
<body>

<button  id="btn" type="button" > Start </button>

<script>
document.getElementById("btn").onclick=function()
{
window.localStorage.setItem("index","0");
window.localStorage.setItem("rollNo","150431001");
window.open("demoform.php");

};
</script>
</body>
</html>
