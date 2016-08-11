<?php
include('dbconnect.php');
	if($_POST['action']=="login") {
        $email = mysql_real_escape_string($_POST['email']);
        $password = mysql_real_escape_string($_POST['password']);
        $strSQL = mysql_query("select name from users where email='".$email."' and password='".$password."'");
        $Results = mysql_fetch_array($strSQL);
        if(count($Results)>=1)
        {
            $_SESSION["in"]=$row["id"];
            header("Location:index.php");
        }
        else
        {
            $message = "Invalid email or password!!";
        }
}
?>

<!DOCTYPE html>
<html>
<title>MINYSTERY</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<script language="javascript">
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-sidenav a,.w3-sidenav h4 {font-weight:bold}

@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding" title="close menu">
      <i class="fa fa-remove"></i>l
    </a>
    <img src="http://airnativeextensions.com/images/extensions/icons/ane-gameservices-icon.png" style="width:45%;" class="w3-round"><br><br>
    <h4 class="w3-padding-0"><b>Minystery</b></h4>
    <p class="w3-text-grey">Series of mini-games</p>
  </div>
  <a href="index.php" class="w3-padding">Home</a>
  <a href="Code_Login.php" class="w3-padding w3-text-teal">Log In</a>
  <a href="Code_Detective.php" class="w3-padding">Detective</a>
  <a href="Code_Mathematics.php" class="w3-padding">Mathematics</a>
  <a href="Code_Guessing.php" class="w3-padding">Guessing</a>
  <a href="Code_Miscellaneous.php" class="w3-padding">Miscellaneous</a>
   
</nav>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header class="w3-container">
    <a href="#"><img src="img_avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-opennav w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <h1><b>Home</b></h1>
  </header>
 	<div>
    <div class="login-page">
  <div class="form">
    <form class="login-form" action="" method="post">
      <input name="email" type="text" placeholder="Email"/>
      <input name="password" type="password" placeholder="Password"/>
      <?php
      	if (!empty($message)) {
      		echo $message;
      	}
      ?>
      <input name="action" type="hidden" value="login" /></p>
      <input type="submit" value="Log In"/>
      <p class="message">Not registered? <a href="Code_Signup.php">Create an account</a></p>
    </form>
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
