<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
  <title>Page title</title>
  <script language="JavaScript" type="text/javascript">
    var randmessage=new Array("You Have To Know When To Hold Them and Know When To Fold Them","Read Them And Weep","Zero To Sixty in Seven Seconds","Let It Ride","Have Faith In Provedince But Always Cut The Cards","Texas Hold Em","Seven Card Stud","Five Card Draw","Suicide King","One Eyed Jack","You Won The Pot","High Stakes","The Color Of Money","Beat The Odds","Break a Leg","Five Card Draw");
    var counter=6;
    var cntr=0;
    window.onload=main;
    var message=randmessage[Math.floor(Math.random()*randmessage.length)];
    var buffer=new Array();
    
    function main()
    {
     message=message.toUpperCase();
     h1=document.createElement('h1');
     h1.innerHTML="<u>Guess That Phrase</u>";
     h1.style.textAlign="center";
     document.body.appendChild(h1);
     createbr();
     for(var y=0;y<message.length;y++)
     {
      count=y+1;
      buffer[y]=message.substring(count,count-1);
      
      spans=document.createElement("span");
      buffer[y]==" "?spans.className="wsholders":spans.className="pholders";
      spans.innerHTML="_";
      document.body.appendChild(spans);
    }
    createchoices();
  }
  function createchoices()
  {
   for(var y=0;y<2;y++)
    createbr();
  
  divs=document.createElement('div');
  divs.innerHTML="<b>Number of Try/s Remaining: "+counter+"</b>";
  document.body.appendChild(divs);
  
  for(var y=0;y<2;y++)
    createbr();
  
  var letter;
  for(var x=65;x<=90;x++)
  {
    a=document.createElement("a");
    letter=String.fromCharCode(x);
    a.id="aid"+(x-65);
    a.className="letter";
    a.innerHTML=letter;
    count=x-65;
    a.href="javascript:check('"+letter+"','"+count+"');deloption('"+count+"')";
    document.body.appendChild(a);
  }
  
  for(var temp=0;temp<2;temp++)
   createbr();
 B=document.createElement("b");
 B.innerHTML="^ Click A Letter Above ^";
 document.body.appendChild(B);
 
 for(var temp=0;temp<2;temp++)
   createbr();
 
 inputs=document.createElement("input");
 inputs.type="button";
 inputs.value="Play Again";
 inputs.className="bclass";
 inputs.onclick=refresh;
 document.body.appendChild(inputs);
}
var indexnum=new Array();
function check(value,identify)
{
 for(var i=0;i<message.length;i++)
 {
   if(i==0)
     indexnum[i]=message.lastIndexOf(value,message.length);
   else
     indexnum[i]=message.lastIndexOf(value,indexnum[i-1]-1);
 }
 
 spans=document.getElementsByTagName('span');
 divs=document.getElementsByTagName("div");
 for(var x=0;x<indexnum.length;x++)
 {
   if(indexnum[x]==-1)
   {
     cntr++;
   }
   else
   {
     spans[indexnum[x]].innerHTML=buffer[indexnum[x]];
   }
 }
 
 if(cntr==message.length)
 {
  counter-=1;
  if(counter==0)
  {
   document.write("<b><h1>Game Over</h1></b><br/>Answer: "+message+"<br /><br /><a href='javascript:history.go(-1)'>&lt&lt Back</a>");
 }
 alert("Sorry No Matches You Have "+(counter)+" Try/s Left");
}
divs[0].innerHTML="<b>Number of Try/s Remaining: "+counter+"</b>";
cntr=0;
}
function createbr()
{
  br=document.createElement("br");
  document.body.appendChild(br);
}
function refresh()
{
 window.location.href="javascript:history.go(0)";
}
function deloption(elem)
{
  a=document.getElementsByTagName('a');
  a[elem].style.display="none";
}
</script>
<style type="text/css">
  <!--
  a.letter {
   font-weight:bold;
   background-color:white;
   border-color:black;
   letter-spacing:18;
   text-decoration:none;
 }
 span.pholders {
   letter-spacing:16;
   background-color:lightyellow;
 }
 span.wsholders {
  width:50;
  visibility:hidden;
}
input.bclass {
 color:black;
 background-color:white;
 border:2 outset black;
}
body {
  font-weight:bold;
}
-->
</style>

</head>
<body>
</body>
</html>
