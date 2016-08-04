<html>
<head>
  <META name=VI60_DTCScriptingPlatform content="Client (IE 4.0 DHTML)">
    <title>Simple Math Game</title>
  </head>
  
  <body onclick="MouseClick()" bgColor=Aqua  text=black background="" >
   
    <div id='TableDiv' class=Section1>
      <p class=MsoNormal style="BACKGROUND-IMAGE: url(file://C:\My Documents\NZBliss.jpg)">
        <TABLE cellSpacing=1 cellPadding=1 width="100%" height="5%" id=ResultsTable style="LEFT: 5px; WIDTH: 100%; FONT-FAMILY: sans-serif; POSITION: absolute; TOP: 486px" bgColor=cornflowerblue>
         
          <TR>
            <TD><INPUT id=HelpID onclick='ShowHelp()' type=button value='?' name=HelpBtn size=16 ></TD>
            <TD><SELECT id=OperationID> <OPTION value=1 
              selected>Addition</OPTION><OPTION value=2>Subtraction</OPTION><OPTION 
              value=3>Multiplication</OPTION><OPTION value=0>All</OPTION></SELECT> 
              <SELECT id=LevelID  name=select1> <OPTION value=0 
                selected>Easy</OPTION><OPTION value=1>Medium</OPTION><OPTION 
                value=2>Hard</OPTION></SELECT>
                <INPUT id=ResetID onclick='RestartGame()'  type=button value=Restart name=ResetBtn size=16 style="WIDTH: 67px; HEIGHT: 25px"></TD>
                  <TD align=right>Question</TD>
                  <TD id=Question align=left></TD>    
                  <TD align=right>Missed</TD>
                  <TD id=MissID align=left>0</TD>
                  <TD align=right>Score</TD>
                  <TD id=ScoreID align=left>0</TD>
                  <TD align=right>Time</TD>
                  <TD id=TimeID align=left>00:00</TD>    
                </TR>
              </TABLE><SPAN></SPAN>
            </p>
            
          </div>
          <script language="JavaScript">

 font='Ravie';
 
 answerSize=30;  
 ymouse      = 0;
 xmouse      = 0;
 
 MaxNum      = 15; 
 var OperatorMax;
 OperatorMax = new Array;
 OperatorMax[0] = 3;
 OperatorMax[1] = 8;
 OperatorMax[2] = 12;
 
 numberBackgroundColor = 'silver';
 
 var Questions, Answers, Score,  Missed;
 var RemainingQuestions, QuestionAnswered;
 var startTime;
 
 Ny = new Array();
 NDy = new Array();
 
 for (i=0; i <MaxNum; i++)
  document.write('<div id= "NumberID"style="position:absolute;top:0px;left:0;height:'+ answerSize +';width:'+ answerSize +';text-align:center;background-color=' + numberBackgroundColor + '"> </B></font></div>');

document.write('<div id= "MouseQuestionID"style="position:absolute;top:0px;left:0;text-align:center;background-color=cornflowerblue"> </B></font></div>');  

document.onmousemove=Mouse;
window.onload=Startup;
document.onmouseclick=MouseClick;

var incorrectElement;
var incorrectCountdown = 0;

ResultsTable.style.top = document.body.clientHeight-100;

var restartStr = "Click Restart";
restartShowing = false;
RestartDiameter=40;
speed       = 0.5;                  // 0 < speed < 1 
R           = restartStr.split(''); 
Angle       = 220/R.length;         // Angle increment between letters
step        = 0.2;                  // Angle increment per delay period
currStep    = 0;                    // Initial Anglehel

// Current center of rotation for each letter
Dy = new Array();   Dx = new Array();
DY = new Array();   DX = new Array();

for (i=0; i < R.length; i++)
{
  Dy[i] = 0;  Dx[i] = 0;  DY[i] = 0;  DX[i] = 0;
}

restartSize = 10;

for (i=0; i < R.length; i++)
  document.write('<div id="RestartMsg" style="position:absolute;top:0px;left:0;height:' + restartSize + ';width:' + restartSize + ';text-align:center; font-family: sans-serif;">'+R[i]+'</div>');

function ShowHelp()
{
 
  var prev = LoadPreviousResults( );
  var msg = 'Click on the number on that is the answer to the\n' +
  'displayed maths question.\n' +
  '\n';
  
  if ( prev != null )
    msg += "Previous results : \n" + prev + "\n\n";
  
  var sessions = SessionsCompleted( );
  if ( sessions > 0 )
    msg += "Sessions Completed : " + sessions + "\n\n";
  
  var wasShowing = restartShowing;
  ShowRestartMsg( false );
  alert( msg );
  ShowRestartMsg( wasShowing );
}

function Mouse( evnt )
{
  ymouse = event.y;
  xmouse = event.x;
  MouseQuestionID.style.top = ymouse + 5;
  MouseQuestionID.style.left = xmouse + 10;
}

function ShowRestartMsg( showIt )
{
  restartShowing = showIt;
  var visibility;
  
  if ( showIt )
    visibility = 'visible';
  else
    visibility = 'hidden';
  
  for (i=0; i < R.length; i++)
    RestartMsg[ i ].style.visibility = visibility;
}

function MouseClick( evnt )
{
  element = event.srcElement; 
  if ( element.id == "NumberID" )
  {
    if ( element.innerText == Answers[CurrentQuestionIndex] )
    {
      QuestionAnswered[ CurrentQuestionIndex ] = true;
      element.style.visibility = 'hidden';
      Score += 1;
      ScoreID.innerText = Score;
      NextQuestion( );        
    }    
    else
    {
      Missed += 1;
      MissID.innerText = Missed;
      HighlightIncorrectAnswer( element );
    }       
  }
}

function NextQuestion( )
{
  if ( RemainingQuestions == 0 )
  {   
    MouseQuestionID.innerText = '';
    ShowCompletionMsg();
    ShowRestartMsg( true );
  }
  else
  {
    var index = RandomInteger(1,RemainingQuestions);
    var i = 0;
    while ( index > 0 )
    {
      if ( !QuestionAnswered[i] )
        index = index - 1;
      i = i + 1;
    }       
    CurrentQuestionIndex = i - 1;
    Question.innerText = Questions[CurrentQuestionIndex];
    MouseQuestionID.innerText = Questions[CurrentQuestionIndex];
    RemainingQuestions = RemainingQuestions - 1;
  }
}


function MoveAnswers(){
 
 
  var maxY = document.body.clientHeight  - ResultsTable.offsetHeight;
  var dx = document.body.clientWidth / ( MaxNum + 2 );
  ResultsTable.style.top = maxY;
  
  if ( restartShowing )
    return;
  
//  PointerID.style.top = maxY - 2 * NumberID[0].style.pixelHeight;
//  PointerID.style.left = xmouse;

maxY = maxY - ResultsTable.offsetHeight;

for (i=0; i<MaxNum;i++)
{
  Ny[ i ] = Ny[ i ] + NDy[ i ];
  if ( Ny[ i ] > maxY )
    Ny[ i ] = 0;
  NumberID[i].style.top = Ny[ i ];
  NumberID[i].style.left = (i+1)*dx;
}

}

function MaybeResetNumberBackground( force )
{
  if ( incorrectElement != undefined )
  {
    if ( !force & incorrectCountdown > 0 )
      incorrectCountdown = incorrectCountdown - 1;
    else
    {
      incorrectElement.style.backgroundColor = numberBackgroundColor;
      incorrectElement = undefined;
    }
  }
} 

function HighlightIncorrectAnswer( element )
{
  MaybeResetNumberBackground( true );
  element.style.backgroundColor = 'red';
  incorrectElement = element;
  incorrectCountdown = 10;
}

function MoveRestartMsg()
{
  if ( restartShowing )
  {
    Dy[0] = Math.round( DY[0] += ((ymouse)-DY[0])*speed );
    Dx[0] = Math.round( DX[0] += ((xmouse)-DX[0])*speed );
    for (i=1; i < R.length; i++){
      Dy[i] = Math.round( DY[i] += (Dy[i-1]-DY[i])*speed );
      Dx[i] = Math.round( DX[i] += (Dx[i-1]-DX[i])*speed );
    }
    for (i=0; i < R.length; i++){
      RestartMsg[ i ].style.top  = Dy[i] + RestartDiameter*1.5*Math.sin(currStep+i*Angle*Math.PI/180);
      RestartMsg[ i ].style.left = Dx[i] + RestartDiameter*1.5*Math.cos(currStep+i*Angle*Math.PI/180);
    }
    currStep-=step; 
  }
}

function Delay()
{
  MaybeResetNumberBackground( false );
  MoveRestartMsg();
  MoveAnswers();
  if ( RemainingQuestions > 0 )
  {
    var now = new Date();
    TimeID.innerText = SecondsAsString( 
      Math.floor( 
        (now.valueOf() - startTime.valueOf())/1000 ) );
  }             
  setTimeout('Delay()',100);
}

function SecondsAsString( seconds )
{
  var minutes = Math.floor( seconds/60 );
  var secRem = seconds - (minutes*60);
  var str = minutes + ':';
  if ( secRem < 10 )
    return str + '0' + secRem;
  return str + secRem;
}

function CreateQuestionsAndAnswers( Questions, Answers, MaxQuestions )
{
  var i;      
  for (i=0;i<MaxQuestions;i++)
  {
    operand = OperationID.value;
    if ( operand == 0 ) 
      operand = RandomInteger(1,3);
    var numberMax = OperatorMax[LevelID.value]; 
    
        // Increase range for addition & subtraction
        // unless we are on the easy level
        if ( operand != 3 & LevelID.value != 0 )
          numberMax = numberMax * 2;
        
        x = RandomInteger(1,numberMax);
        
        if ( operand == 2 )
          y = RandomInteger(1,x);
        else
          y = RandomInteger(1,numberMax);
        
        if ( operand == 1 )
        {
          z = x + y;
          operandStr = '+';
        }
        else
        {
          if ( operand == 2 )
          {
            z = x - y;
            operandStr = '-';
          }               
          else
          {
            z = x * y;              
            operandStr = '*';
          }
        }
        Questions[ i ] = x + operandStr + y + '=';
        Answers[ i ] = z;
      }
    }
    
    function RandomInteger( MinValue, MaxValue )
    {
      var i;
      range = MaxValue - MinValue + 1;
      i = Math.random( ) * range;
      i = Math.round( i - 0.5 )
      i = MinValue + i;
      return i;   
    }
    
    function RestartGame( )
    {
      Questions = new Array();
      Answers = new Array();
      Score = 0;
      Missed = 0;
      RemainingQuestions = MaxNum;
      MaybeResetNumberBackground( true );
      CreateQuestionsAndAnswers( Questions,Answers, MaxNum );
      QuestionAnswered = new Array( );
      for (i=0;i<MaxNum;i++)
      {
        QuestionAnswered[ i ] = false;  
        Ny[ i ] = 0;
        NDy[ i ] = (Math.random( )*0.5+0.5) * (LevelID.value/2 + 1);
        NumberID[ i ].innerText = Answers[i];
        NumberID[ i ].style.visibility = 'visible';
      }
      ScoreID.innerText = Score;
      MissID.innerText = Missed;  
      startTime = new Date();
      NextQuestion( );
      ShowRestartMsg( false );
    }
    
    function Startup( )
    {
      ShowRestartMsg( true );
      Delay();
    }
    
    function GetLevelDescription( )
    {
      switch ( parseInt( LevelID.value ) )
      {
        case 0: return "Easy";
        case 1: return "Medium";
        case 2: return "Hard";
      }
      return "Unknown";
    }
    
    function GetOperationDescription( )
    {
      switch ( parseInt( OperationID.value ) )
      {
        case 0: return "All";
        case 1: return "Addition";
        case 2: return "Subtraction";
        case 3: return "Multiplication";
      }
      return "Unknown";
    }
    
    function ShowCompletionMsg()
    {
      var msg = "Congratulations";
      if ( name != undefined )
        msg += " " + name;
      msg += "!\nAll questions answered in " + TimeID.innerText;
      if ( Missed == 0 )
        msg += " with no incorrect selections!";
      else
      {
        msg = msg + " with only " + Missed + " incorrect selection";
        if ( Missed == 1 )
          msg += "!";
        else
          msg += "s!";
      }
      
      UpdateSessionsCompleted( );
      
      var prev = LoadPreviousResults( );
      
      if ( prev != null ) 
        msg += "\n\nPrevious Results : \n" + prev;
      
      var sessions = SessionsCompleted( );
      if ( sessions > 0 )
        msg += "\n\nSessions Completed : " + sessions;
      
      SaveResult( );
      alert(msg);
    }
    
    function SessionsCompleted( )
    {
      var completed = GetCookie("SessionsCompleted");
      if ( completed == null )
        return 0;
      completed = parseInt( completed );
    // See if completed == Nan (NB : Nan != Nan == true )
    if ( completed != completed )
      return 0;
    return completed;
  }
  
  function GetExpiry( ) 
  {   
    return new Date(2040,1,1); 
  }
  
  function UpdateSessionsCompleted( )
  {
    var completed = SessionsCompleted( ) + 1;           
    SetCookie( "SessionsCompleted", completed.toString( ),  GetExpiry( ) );
  }
  
  function LoadPreviousResults( )
  { 
    return GetCookie("PrevResults"); 
  }
  
  function SaveResult( )
  {
    var prev = LoadPreviousResults( );
    
    curResult = GetLevelDescription( ) + "-" + GetOperationDescription( ) + 
    " " + TimeID.innerText + " ";
    if ( Missed == 0 )
      curResult += "None incorrect\n";
    else
      curResult += Missed + " incorrect\n";
    
    if ( prev != null )
     prev = curResult + prev;
   else
     prev = curResult;
   
    // Strip off last result if result string is too long  
    if ( prev.length > 300 )
    {
      var last = prev.lastIndexOf("\n");
      if ( last > -1 )
        prev = prev.substring( 0, last );     
    }
    SetCookie( "PrevResults", prev, GetExpiry( ) );
  }
  
  function getCookieVal (offset)
  {
    var endstr = document.cookie.indexOf (";", offset);
    if (endstr == -1)
      endstr = document.cookie.length;
    return unescape(document.cookie.substring(offset, endstr));
  }
  function GetCookie (name)
  {
    var arg = name + "=";
    var alen = arg.length;
    var clen = document.cookie.length;
    var i = 0;
    while (i < clen) {
      var j = i + alen;
      if (document.cookie.substring(i, j) == arg)
        return getCookieVal (j);
      i = document.cookie.indexOf(" ", i) + 1;
      if (i == 0) break; 
    }
    return null;
  }
  function SetCookie (name, value)
  {
    var argv = SetCookie.arguments;
    var argc = SetCookie.arguments.length;
    var expires = (argc > 2) ? argv[2] : null;
    var path = (argc > 3) ? argv[3] : null;
    var domain = (argc > 4) ? argv[4] : null;
    var secure = (argc > 5) ? argv[5] : false;
    document.cookie = name + "=" + escape (value) +
    ((expires == null) ? "" : ("; expires=" + expires.toGMTString())) +
    ((path == null) ? "" : ("; path=" + path)) +
    ((domain == null) ? "" : ("; domain=" + domain)) +
    ((secure == true) ? "; secure" : "");
  }
  function setLastlastVisitCookie ()
  {
    var rightNow = new Date();
    var expdate = new Date();
  expdate.setTime (expdate.getTime() + 1 * (24 * 60 * 60 * 1000)); //+1 day
  SetCookie ("lastVisit", rightNow.getTime(), expdate, "/");
}
function ResetCookie()
{
  SetCookie("lastVisit", 0, null, "/");
}

</script>

</body>

</html>
