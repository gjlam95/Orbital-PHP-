<?php

$conn = mysql_connect("mysql.1freehosting.com","u705835408_user","900112");

if($conn)
{
	mysql_select_db("u705835408_data");
}
else
{
	die("<p>could not connect :".mysql_error());
}

?>