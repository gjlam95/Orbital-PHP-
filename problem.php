<?php
include('dbconnect.php');

if($_SESSION["in"])
{
	$uid=$_SESSION["in"];
}

$pname = mysql_query("select * from users where id = '$uid'");
$prow = mysql_fetch_assoc($pname);

if ($_GET['score']) {
$points = ($_GET['score']);
if($_SESSION["in"]) {
	mysql_query("insert into userscore(user_id,points) values('$uid','$points')");
}
}
?>

<HEAD>

  <SCRIPT LANGUAGE="JavaScript">

    <!-- Begin
    <!--START OF TIMER SCRIPT-->
//how much time they get
var time=45;
var timesup=0;
var started=0;
function CountDown() {
  if(time>0)
    {document.math.timer.value=time;
      time=time-1;
      var gameTimer=setTimeout("CountDown()", 1000)}
      else if (time==0)
        {document.math.timer.value="0";
      timesup=1;
      var next = confirm('Time\'s Up!');
      if (next==true) {
        var score = document.math.points.value;
        window.location.href="problem.php?score=" + score;
      }
      document.math.firstnum.value="";
      document.math.operator.value="";
      document.math.secondnum.value="";
      document.math.answer.value="";
    }
  }
  <!--END OF TIMER SCRIPT-->

  function startgame()
  {if (started!=0)
    {alert('You\'ve Already Started!');}
    else
    {
      started=1;
      CountDown();
      getProb();
    }
  }

  <!--START OF RANDOM NUMBER SCRIPT-->
  function randnum(min,max)
  {
    var num=Math.round(Math.random()*(max-min))+min;
    return num;
  }
  <!--END OF RANDOM NUMBER SCRIPT-->

  var choose, rightanswer
  function getProb()
  {
    choose=randnum(1,4);
    if (choose=="1")
      {document.math.operator.value="+";
    var choose1=randnum(0,50);
    var choose2=randnum(0,50);
    document.math.firstnum.value=choose1;
    document.math.secondnum.value=choose2;
    rightanswer=choose1 + choose2;
  }
  if (choose=="2")
    {document.math.operator.value="-";
  var choose2=randnum(0,50);
  var choose1=randnum(choose2,50);
  document.math.firstnum.value=choose1;
  document.math.secondnum.value=choose2;
  rightanswer=choose1 -  choose2;
}
if (choose=="3")
  {document.math.operator.value="x";
var choose1=randnum(0,10);
var choose2=randnum(0,10);
document.math.firstnum.value=choose1;
document.math.secondnum.value=choose2;
rightanswer=choose1 * choose2;
}
if (choose=="4")
  {document.math.operator.value="/";
var choose2=randnum(1,10);
var choose1=choose2 * randnum(0,10);
document.math.firstnum.value=choose1;
document.math.secondnum.value=choose2;
rightanswer=choose1 /  choose2;
}
}
function answerit()
{
  if (started==0)
    {alert('You Must Click The Button Labeled \'Start\'!');}
  else
  {
    if (timesup!=0)
      {alert('Time Ran Out!');}
    else
    {
      var theiranswer=eval(document.math.answer.value);
      var theirpoints=eval(document.math.points.value);
      if (theiranswer==null)
        {alert('Put Your Answer In The Box To The Left Of The Button Labeled \'Submit Answer\'!');
      document.math.answer.select();}
      else
      {
        if (theiranswer==rightanswer)
        {
          theirpoints++;
          document.math.points.value=theirpoints;
        }
        else
          {alert(theiranswer + " is Wrong!\n\n"+rightanswer + " is the correct answer!")}
        document.math.answer.select();
        getProb();
      }
    }
  }
}

function showHelp()
{
  var msg = "Type your answer in the textbox followed by the *Tab* & *Enter* button to save more time!";
  alert(msg);
}
function goBack()
{
  window.location.href="problem.php";
}
//  End -->
</script>

</HEAD>

<BODY>

  <table align="center">
    <tr>
      <td colspan="3" align="center"><input type="button" value="New Game" onClick="location.reload();"></td></tr><tr>
      <td colspan="3" align="center"><input type="button" value="Start" size="5" onClick="startgame()"></td>
    </tr>
    <tr>
      <form name="math">
        <td colspan="3" align="center"><font face="Arial, Helvetica, Sans Serif" size="3" color="#0000FF"><b>Time Remaining:</b> </font><input type="text" name="timer" size="5"></td>
      </tr>
      <tr>
        <td align="right"><font face="Arial, Helvetica, Sans Serif" size="3" color="#0000FF"><b>Solve:</b> </font><input type="text" name="firstnum" size="5"></td>
        <td align="center"><input type="text" name="operator" size="2"></td>
        <td align="left"><input type="text" name="secondnum" size="5"></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><hr><font face="Arial, Helvetica, Sans Serif" size="3" color="#0000FF"><b>Put Answer Here:</b></font> <input type="text" name="answer" size="5"> <input type="button" value="Submit Answer" onClick="answerit();"><hr></td>
      </tr>
      <tr>
        <td  colspan="3" align="center"><font face="Arial, Helvetica, Sans Serif" size="3" color="#0000FF"><b>Points:</font></b> <input type="text" name="points" size="5" value="0"></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><input id=HelpID onclick='showHelp()' type=button value='Help' name=HelpBtn size=16></td>
      </form>
    </tr>
  </table>
