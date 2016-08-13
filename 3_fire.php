<!DOCTYPE html>
<html>
<title>The Fire</title>
<head>
<script language="javascript">
      function processPage() {
      
      var tempType;
      
      for (var i=0; i < document.ansForm.choice.length; i++) {
        if (document.ansForm.choice[i].checked) {
          tempType = document.ansForm.choice[i].value;
        }
      }
      if (tempType == 'rose') {
        var next = confirm("Correct!\n\n" + "If Doctor Melon or Mrs Blank started the fire, there would be only two lies among the five statements. If it's Miss Rose, her alibi is a lie. So is the statement that Mrs Blank is a liar. And so is the statement that Doctor Melon is a liar. There is then a total of three lies.\n");
        if (next == true) {
          window.history.back();
        }
      }
      
      else {
        var next = confirm("Wrong!\n" + "\n" + "Hint?");
        if (next == true) {
         alert("The culprit's personal statement would definitely be a lie. From there, determine if statements #4 and #5 would be a lie to find the culprit's identity.");
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
<p>Mr Basil's mansion was on fire again. One of the three guests, Doctor Melon, Miss Rose and Mrs Rainbow, is the culprit. To solve this mystery, you'll need to determine which statements are true and which statements are false. Mark all of the statements T for True or F for False. The culprit will be the only person who said three lies (i.e three F out of the five statements).</p>
    </div>
    <div class="w3-third w3-container">
      <img src="http://vignette2.wikia.nocookie.net/creepypasta/images/4/40/Fire_interior.jpg/revision/latest?cb=20140411030239" style="width:90%;height:80%"> 
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Outside the Mansion</h1>
  <p>#1 "I put the candle out before I went to sleep," said Doctor Melon.</p>
  <p>#2 "The fire was out before I went to be bed," said Miss Rose.</p>
  <p>#3 "I turned the stove off before the fire started," said Mrs Blank.</p>
  <p>#4 "Mrs Blank, your statement is a lie," Doctor Melon accused.</p>
  <p>#5 "No, Doctor, your first statement is a lie," said Miss Rose.</p>
    </div>
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Who started the fire?</h1>
  <form name="ansForm">
    <p>Answer:</p>
    <input type="radio" name="choice" value="plum">Doctor Melon<br>
    <input type="radio" name="choice" value="white">Mrs Blank<br>
    <input type="radio" name="choice" value="rose">Miss Rose<br>
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
