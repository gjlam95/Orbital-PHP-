ob_start();
session_start();
include("dbconnect.php");
if($_SESSION["in"])
{
	$uid=$_SESSION["in"];
}

$pname = mysql_query("select * from users where id = '$uid'");
$prow = mysql_fetch_assoc($pname);
