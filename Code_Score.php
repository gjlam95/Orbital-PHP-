<?php
include("dbconnect.php");
if($_SESSION["in"])
{
	$uid=$_SESSION["in"];
}
$pname = mysql_query("select * from users where id = '$uid'");
$prow = mysql_fetch_assoc($pname);
?>

<!DOCTYPE html>
<html>
<title>MINYSTERY</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-sidenav a,.w3-sidenav h4 {font-weight:bold}

table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="http://airnativeextensions.com/images/extensions/icons/ane-gameservices-icon.png" style="width:45%;" class="w3-round"><br><br>
    <h4 class="w3-padding-0"><b>Minystery</b></h4>
    <p class="w3-text-grey">Series of mini-games</p>
  </div>
  <a href="index.php" class="w3-padding">Home</a>
  <a href="Code_Login.php" class="w3-padding">Log In</a>
  <a href="Code_Detective.php" class="w3-padding">Detective</a>
  <a href="Code_Mathematics.php" class="w3-padding">Mathematics</a>
  <a href="Code_Guessing.php" class="w3-padding">Guessing</a>
  <a href="Code_Miscellaneous.php" class="w3-padding">Miscellaneous</a>
  <a href="Code_Score.php" class="w3-padding w3-text-teal">Score</a>
  <p>Welcome <?php
  	if ($_SESSION["in"]) {
  	echo $prow['name'] . "!, " . "<a href='logout.php'>Logout</a>";
echo "<a href='Code_Delete.php'>Delete account</a>";
  	}
	
	else {
	echo "Guest!";
	}
  ?> </p>
   
</nav>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header class="w3-container">
    <a href="#"><img src="img_avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-opennav w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <h1><b>Score</b></h1>
  </header>
  
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <div class="w3-container w3-white">
<table>
	<tr>
		<td ><span style="font-weight:bold">Rank</span></td>
		<td ><span style="font-weight:bold">Name</span></td>
		<td ><span style="font-weight:bold">Score</span></td>
		<td ><span style="font-weight:bold">Date</span></td>
	</tr>
	<?php
	$strSQL = mysql_query("select users.id,users.name,userscore.user_id,userscore.points,userscore.datetime from userscore inner join users on users.id=userscore.user_id order by userscore.points DESC limit 0,9");
	$i=0;
	while ($Results = mysql_fetch_assoc($strSQL)) {
	?>
	<tr>
		<td><?php echo $i+1; ?></td>
		<td><?php echo $Results['name']; ?></td>
		<td><?php echo $Results['points']; ?></td>
		<td><?php echo $Results['datetime']; ?></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
      </div>
    </div>
  </div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>