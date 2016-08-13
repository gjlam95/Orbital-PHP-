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
<title>The Ghost of Mrs Basil</title>
<head>
<script language="javascript">
      function processPage() {
      
      var tempType;
      
      for (var i=0; i < document.ansForm.choice.length; i++) {
        if (document.ansForm.choice[i].checked) {
          tempType = document.ansForm.choice[i].value;
        }
      }
      if (tempType == 'white') {
        var next = confirm("Correct!\n\n" + "Only Mrs Blank and Mrs Rainbow kept a hand under the table.\n" + "But Mrs Rainbow had the rope.\n" + "She couldn't have used the rope to make the crisp rapping noises the group heard.\n");
        if (next == true) {
          window.history.back();
        }
      }
      
      else {
        var next = confirm("Wrong!\n\n" + "Hint?");
        if (next == true) {
          alert("Doctor Melon was holding on to Mrs Blank and Miss Roses' hands.\n" +  "Mr Leaf was holding on to General Lemon and Mr Basils' hands.\n" + "Mrs Rainbow was holding on to General Lemon's hand.\n" + "Miss Rose was holding on to Doctor Melon and Mr Basils' hands.\n" + "Mrs Blank was holding on to Doctor Melon's hand.\n\n" + "Hmm,there are still two guests with one hand underneath the table, but one of them is holding an item which could not possibly make the crisp rapping noise...")
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
      <p>Mr Basil had gathered all of the guests in the Dining Room for a ritual to summon his late wife. 
  The ritual required everyone to hold hands together in order to communicate with Mrs Basil. 
  Mrs Basil would answer by making a rapping sound under the table. One rap for yes. two raps for no. 
  At the end, Mr Basil was pleased to have spoken to his late wife and finally found peace through the process.. or was it just a hoax? 
  Find out which of the suspects was the fake ghost. 
  (Hint: It has to be someone whose hand is free to use their weapons to making the rapping sound!).
</p>
    </div>
    <div class="w3-third w3-container">
    <img src="https://lh5.googleusercontent.com/-Fol0zEV5zI4/UB8VtY4w0nI/AAAAAAAAgdo/gyVYCNxEbtU/s640/DSC03760.JPG" style="width:90%;height:80%">
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">The Ritual</h1>
      <p>The guest were all carrying their weapons throughout the ritual</p>
<p>Doctor Melon: "I had the Knife with me as I had forgotten to leave it in my room before coming down. I was holding on to Mrs Blank's and Miss Rose's hands until I let go of the latter's for a brief moment to scratch my foot."</p>
<p>Mr Leaf: "I had the Steel Rod with me. I was holding on to General Lemon's hand and that fellow kept complaining that I was holding onto it so tightly that he challenged me to a duel. Pmft! Oh, and I was holding Mr Basil's hand too."</p>
<p>General Lemon: "Yeah, I had the Spanner. Stupid Mr Leaf and his grip!"</p>
<p>Mrs Rainbow: "I brought along the Rope just in case we needed it. And I was holding onto General Lemon's hand. Such a big hand he has."</p>
<p>Miss Rose: "Don't ask me why I had the Pistol. I am just cautious like that. But I felt safe having Mr Basil beside me and holding my hand."</p>
<p>Mrs Blank: "I brought the Candlestick as I was afraid the Dining Room's lights will blow again. Doctor Melon has really sweaty palms!"</p>
    </div>
    <div class="w3-third w3-container">
    <img src="https://t4.ftcdn.net/jpg/00/54/52/79/240_F_54527976_c6nbyODxFlmaDjDvmJ9AShJbT8hJ2QNU.jpg" style="width:90%;height:80%">
    <img src="https://img0.etsystatic.com/000/0/5314417/il_fullxfull.172516092.jpg" style="width:90%;height:80%">
    </div>
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Who was it?</h1>
      <form name="ansForm">
  <p>Answer:</p>
  <input type="radio" name="choice" value="plum">Doctor Melon<br>
  <input type="radio" name="choice" value="white">Mrs Blank<br>
  <input type="radio" name="choice" value="scarlett">Miss Rose<br>
  <input type="radio" name="choice" value="green">Mr Leaf<br>
  <input type="radio" name="choice" value="mustard">General Lemon<br>
  <input type="radio" name="choice" value="peacock">Mrs Rainbow<br>
  <br>
  <input type="button" value="Check" onclick="processPage()">
</form>
    </div>
  </div>

<!-- END MAIN -->
</div>

</body>
</html>