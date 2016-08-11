ob_start();
session_start();
include("dbconnect.php");
if($_SESSION["in"])
{
	$uid=$_SESSION["in"];
}
