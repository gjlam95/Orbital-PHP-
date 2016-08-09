<?php
ob_start();
session_start();
include("dbconnect.php");
?>
<div style="height:200px; width:350px; padding:20px 10px;">
    <form action="login.php" method="post">
        <table width="100%">
        <tr>
        <td colspan="3"><h1>Login</h1></td>
        </tr>
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
        <td align="right" colspan="3"><a href="forgotps.php">Forgot Password ?</a> <input name="btnlogin" type="submit" value="Login"></td>
        </tr>
        </table>
	</form>
</div>