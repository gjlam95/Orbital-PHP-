<?php
ob_start();
session_start();

$conn = mysql_connect("mysql.1freehosting.com","u280490006_orbit","s9500795c");

if($conn)
{
	mysql_select_db("u280490006_orbit");
}
else
{
	die("<p>could not connect :".mysql_error());
}

?>