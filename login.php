<?php
ob_start();
session_start();
include("dbconnect.php");

if($_SESSION["in"])
{
	$cid=$_SESSION["in"];
	header("Location:myprofile.php");
}

$crst=mysql_query("select * from customer where c_id = '$cid'");
$crow=mysql_fetch_assoc($crst);

$result=mysql_query("select * from catprod order by cat_id");
?>
<html>
<head>
<link media="screen" rel="stylesheet" href="layout/colorbox.css" />
<script type="text/javascript" src="layout/jquery.js"></script>
<script type="text/javascript" src="layout/jquery.colorbox.js"></script>
<script type="text/javascript" src="java/control.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<table cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td valign="top" height="400" width="1000">
			<div id="toptop"><img src="picture/toptop.png"></div>
			
			<div><img id="toptoptitle" src="picture/game_title.png"></div>
			
			<div id="topdown"><img width="950" src="picture/game_banner1.png"></div>
			
			<div id="toptopdown"><img src="picture/topmid.png"></div>
			
			<div id="toptop"><img src="picture/topdown.png"></div>
			<table id="navtable" width="650" height="58" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					
					<div class="nav-container-outer">
					   <img src="picture/nav-bg-l.png" alt="" class="float-left" />
					   <img src="picture/nav-bg-r.png" alt="" class="float-right" />
					   <ul id="nav-container" class="nav-container">
						  <li><a class="item-primary" href="index.php" target="_self">Home</a>
						   </li>
						   <li><span class="divider divider-vert" ></span></li>
						  <li><a class="item-primary" href="aboutus.php" target="_self">About Us</a>
						   </li>
						   <li><span class="divider divider-vert" ></span></li>
						  <li><a class="item-primary" href="" target="_self">Games</a>
							 <ul style="width:150px;">
								<?php
								while($catrow=mysql_fetch_assoc($result))
								echo "<li><a href=catepage.php?categid=". $catrow['cat_id'] ." title=" . $catrow['cat_name'] . " target='_self' >" . $catrow['cat_name'] . "</a></li>";
								?>
							 </ul>
						   </li>
						   <li><span class="divider divider-vert" ></span></li>
						  <li><a class="item-primary" href="contactus.php" target="_self">Contact Us</a>
						   </li>
						   <li><span class="divider divider-vert" ></span></li>
						  <li><a class="item-primary" href="feedback.php" target="_self">Feedback</a>
						   </li>
						   <li><span class="divider divider-vert" ></span></li>
						  <li class="clear"></li>
					   </ul>
					</div>
					
				</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td>
			<div id="navlink">Welcome, <?php
			if($_SESSION["in"])
			{echo $crow['c_name'] . " <a href='logout.php'>Logout</a>";}
			else{echo "Guest! <a class='pop' href='poplogin.php' title=''>Login</a> <a class='pop' href='register.php' title=''>register</a>";}?></div>
			<div id="navlink2">
			<form action="search.php" method="post">
			Search : <input type="text" name="namesearch" size="20"><input type="submit" name="submit" value="Search">
			</form>
			</div>
			<div id="bodydesign"><img src="picture/midtop.png"></div>
			<div id="bodydesign2" style="height:200px;"><img src="picture/midmid.png"></div>
			<div id="bodydesign2" align="center"><img src="picture/middown.png"><br>
			Copyrighted &copy; 2011 By Pcgamer.no-ip.org</div>
			<table width="950" cellspacing="0" cellpadding="0" id="webcontant" style="margin-top:-480px;">
				<tr>
					<td>
					
					<form action="login.php" method="post">
					<table align="center" border="0" width="600">
					<tr><td height="100" valign="top" colspan="3"><h1>LOGIN PAGE</h1></td></tr>
					<?php
		if(isset($_REQUEST["btnlogin"]))
		{
			$uname=$_POST["uname"];
			$upass=$_POST["upass"];
			$result=mysql_query("select * from customer where c_user='$uname' and c_passwd='$upass'");
			if($row=mysql_fetch_assoc($result))
			{
				if($row["c_status"]=="Activated")
				{
					$_SESSION["in"]=$row["c_id"];
					header("Location:myprofile.php");
				}
				else
				{
					echo "<tr align='center'><td colspan='3'><font color='red'>Please check your email to activate your account first.......<br>Thank You</font></td></tr>";
				}
			}
			else
			{
			echo "<tr align='center'><td colspan='3'><font color='red'>INVALID USERNAME AND PASSWORD</font></td></tr>";
			}	
		}
		elseif(isset($_REQUEST["error"]))
		{
			echo "<tr align='center'><td colspan='3'><font color='red'>Please login before you see more detail.....<br>Thank You</font></td></tr>";
		}
		elseif(isset($_REQUEST["reglogin"]))
		{
			echo "<tr align='center'><td colspan='3'><font color='blue'>Register Successfully!!<br>Please check your email to activate your account first...</font></td></tr>";
		}
		elseif(isset($_REQUEST["activ"]))
		{
			echo "<tr align='center'><td colspan='3'><font color='blue'>Activation Successfully!!<br>Now you can signin with your account already...</font></td></tr>";
		}
		?>
        <tr align="center">
        <td>Username</td><td>:</td>
        <td><input name="uname" type="text" size="30"></td>
        </tr>
        <tr>
        <td colspan="3">&nbsp;</td>
        </tr>
        <tr align="center">
        <td>Password</td><td>:</td>
        <td><input name="upass" type="password" size="30"></td>
        </tr>
        <tr>
        <td align="right" colspan="3"><input name="btnlogin" type="submit" value="Login"></td>
        </tr>
        </table>
					</form>
					
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</table>
</body>
</html>
