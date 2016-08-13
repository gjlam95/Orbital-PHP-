<?php
include("dbconnect.php");

if($_SESSION["in"])
{
	$uid=$_SESSION["in"];
}

$pname = mysql_query("select * from users where id = '$uid'");
$prow = mysql_fetch_assoc($pname);
?>

<!DOCTYPE html>
<html>
<title>The Planned Murder</title>
<head>
<script language="javascript">
      function processPage() {
            
            var tempType = [];
            var ans = ["knife","Steel Rod","candlestick","Pistol","Spanner"];
            
            for (var i=0; i < document.plum.choice.length; i++) {
                if (document.plum.choice[i].checked) {
                    tempType[0] = document.plum.choice[i].value;
                }
            }
            
            for (var i=0; i < document.green.choice.length; i++) {
                if (document.green.choice[i].checked) {
                    tempType[1] = document.green.choice[i].value;
                }
            }
            
            for (var i=0; i < document.mustard.choice.length; i++) {
                if (document.mustard.choice[i].checked) {
                    tempType[2] = document.mustard.choice[i].value;
                }
            }
            
            for (var i=0; i < document.scarlet.choice.length; i++) {
                if (document.scarlet.choice[i].checked) {
                    tempType[3] = document.scarlet.choice[i].value;
                }
            }
            
            for (var i=0; i < document.white.choice.length; i++) {
                if (document.white.choice[i].checked) {
                    tempType[4] = document.white.choice[i].value;
                }
            }
            
            for (var i=0; i < ans.length; i++) {
                if (tempType[i] != ans[i]) {
                   var next = confirm("Wrong!\n" + "\n" + "Hint?");
                   if (next == true) {
                      alert("Trace the identities of the masked attackers from the start of the conversation. Using the process of elimination, determine the masked attackers whose identities are not obvious from the conversation.");
                  }
                  break;
              }
              
              else if (i === 4 && tempType[i] === ans[i]) {
               var next = confirm("Correct!\n\n" + "Doctor Melon - Knife\n" + "Mr Leaf - Steel Rod\n" + "General Lemon - Candlestick\n" + "Miss Rose - Pistol\n" + "Mrs Blank - Spanner\n");
               if (next == true) {
                  window.history.back();
              }
          }
      }
  }
</script>
<!-- CSS for horizontal dropdown menu -->
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;

  }

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
.w3-sidenav a,.w3-sidenav h4{padding:12px;}
.w3-navbar a{padding-top:12px !important;padding-bottom:12px !important;}
</style>

<body>
      <!-- Horizontal dropdown menu -->
<ul>
  <li>
    <a class="active" href="index.php">Home</a>
  </li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Level 1</a>
    <div class="dropdown-content">
      <a href="1_bomb.php">The Gift</a>
      <a href="1_ghost.php">The Ghost of Mrs Basil</a>
      <a href="1_hide.php">Hide & Seek</a>
    </div>
    </li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Level 2</a>
    <div class="dropdown-content">
      <a href="2_murder.php">The Planned Murder</a>
      <a href="2_music.php">The Unfortunate Music Party</a>
      <a href="2_basil.php">Death of Mr Basil</a>
    </div>
  </li>
    <li class="dropdown">
    <a href="#" class="dropbtn">Level 3</a>
    <div class="dropdown-content">
      <a href="3_april.php">April Fools</a>
      <a href="3_fire.php">The Fire</a>
      <a href="3_film.php">Rolls of Film</a>
    </div>
  </li>
</ul>
  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Background</h1>
<p>Five other guests had come up with a ploy to exterminate Mrs Rainbow due to her blamishing column in the daily papers about the rest of the guests. They are gatherd in Mr Leaf's room one night in an attempt to carry out the murder. All of them had masks on and there are five weapons on the table: a Knife, a Spanner, a Pistol, a Steel Rod, and a Candlestick. Follow the conversation and determine who had which weapon.
</p>
    </div>
    <div class="w3-third w3-container">
      <img src="http://www.honduras.com/wp-content/uploads/2012/05/newspaper.jpg" style="width:90%;height:80%"> 
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">In the Kitchen</h1>
      <p>Mr Leaf: "All right, let's get started. Mrs Blank, you take the Pistol."</p>
    <p>Mrs Blank: "Oh, but I don't know how to use it."</p>
    <p>Mr Leaf: "Fine, I'll give you another one."</p>
    <p>--All weapons were handed out--</p>
    <p>--The five guests crept into Mrs Rainbow's room, but the door suddenly opened and all five attackers fell screaming into the dark room. They crashed against the wall. Then the door closed and locked--</p>
    <p>Mrs Rainbow: "Good evening, how nice of you all to drop in."</p>
    <p>--One of the masked figures was back on his feet. He was waving a Steel Rod--</p>
    <p>Attacker with Candlestick: "That's the trick, Mr Leaf! Get her!"</p>
    <p>--Two attackers rushed at Mrs Rainbow from either side. Mrs Rainbow ducked. The attackers crashed into each other and fell to the floor--</p>
    <p>Attacker #1: "Where did she go?"</p>
    <p>Attacker #2: "I don't see her, Miss Rose..."</p>
    <p>Attacker #3: "Where's the light switch, anyway?"</p>
    <p>These three attackers were holding the Spanner, the Pistol, and the Candlestick.</p>
    <p>--Two more attackers charged forward at the same time at Mrs Rainbow, but she knew one of them was General Lemon, so he must be carrying either the Knife, or the Candlestick--
        <p>--In the darkness, the attackers all crashed into one another head-first and fell in a perfect circle, out cold--</p>
        <p>--Mrs Rainbow crawled out from hiding and flicked on the lights--</p>
        <p>--She bent over the first attacker. The unconscious figure was clutching the Knife. She pulled up the mask--</p>
        <p>Mrs Rainbow: "Doctor Melon. Tsk, tsk. What a bad boy you are!"</p>
    </div>
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Who has which weapon?</h1>
         <form name="plum">
            <p>Doctor Melon:</p>
            
            <input type="radio" name="choice" value="Pistol">Pistol<br>
            <input type="radio" name="choice" value="Steel Rod">Steel Rod<br>
            <input type="radio" name="choice" value="Spanner">Spanner<br>
            <input type="radio" name="choice" value="candlestick">Candlestick<br>
            <input type="radio" name="choice" value="knife">Knife<br>
            <br>
        </form>
        <form name="green">
            <p>Mr Leaf:</p>
            
            <input type="radio" name="choice" value="Pistol">Pistol<br>
            <input type="radio" name="choice" value="Steel Rod">Steel Rod<br>
            <input type="radio" name="choice" value="Spanner">Spanner<br>
            <input type="radio" name="choice" value="candlestick">Candlestick<br>
            <input type="radio" name="choice" value="knife">Knife<br>
            <br>
        </form>
        <form name="mustard">
            <p>General Lemon:</p>
            
            <input type="radio" name="choice" value="Pistol">Pistol<br>
            <input type="radio" name="choice" value="Steel Rod">Steel Rod<br>
            <input type="radio" name="choice" value="Spanner">Spanner<br>
            <input type="radio" name="choice" value="candlestick">Candlestick<br>
            <input type="radio" name="choice" value="knife">Knife<br>
            <br>
        </form>
        <form name="scarlet">
            <p>Miss Rose:</p>
            
            <input type="radio" name="choice" value="Pistol">Pistol<br>
            <input type="radio" name="choice" value="Steel Rod">Steel Rod<br>
            <input type="radio" name="choice" value="Spanner">Spanner<br>
            <input type="radio" name="choice" value="candlestick">Candlestick<br>
            <input type="radio" name="choice" value="knife">Knife<br>
            <br>
        </form>
        <form name="white">
            <p>Mrs Blank:</p>
            
            <input type="radio" name="choice" value="Pistol">Pistol<br>
            <input type="radio" name="choice" value="Steel Rod">Steel Rod<br>
            <input type="radio" name="choice" value="Spanner">Spanner<br>
            <input type="radio" name="choice" value="candlestick">Candlestick<br>
            <input type="radio" name="choice" value="knife">Knife<br>
            <br>
            <input type="button" value="Check" onclick="processPage()">
        </form>
    </div>
  </div>

<!-- END MAIN -->
</div>

</body>
</html>