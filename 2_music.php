<!DOCTYPE html>
<html>
<title>The Unfortunate Music Party</title>
<head>
<script language="javascript">
      function processPage() {
      
      var tempType;
      
      for (var i=0; i < document.ansForm.choice.length; i++) {
        if (document.ansForm.choice[i].checked) {
          tempType = document.ansForm.choice[i].value;
        }
      }
      if (tempType == 'mustard') {
        var next = confirm("Correct!\n\n" + "The possible guests listed for the first viola and second viola and first cello are all women. That means that the second cello player can't be a woman as well. Why? Because there are only three women on the list of six possible suspects. So it must be Doctor Melon.\n" + "The piano player is not Doctor Melon or General Lemon. It can't be a woman. So it must be Mr Leaf.\n" + "That means that General Lemon is the only missing guest.\n");
        if (next == true) {
          window.history.back();
        }
      }
      
      else {
        var next = confirm("Wrong!\n\n" + "Hint?");
        if (next == true) {
          alert("The culprit is definitely not a woman. This clue is revealed from the first 3 statements of the note.")
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
    <a class="active" href="Code_Home.html">Home</a>
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
<p>Mr Basil had organised an afternoon concert with the rest of the guests. After the concert, Mr Basil's million dollars violin, the Stradivarius was stolen by a mysterious old woman who was on the Second Violin. He did not invite the old woman at all and he noticed something amiss after thinking back about the concert. One of the regular guests was missing from the concert but he couldn't figure out who it was. Just as he was about to demystify the identity of the old woman, he found his invitation list for the day's party.
</p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-medium w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-medium w3-padding-64 w3-center">AD</p>
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">At the Party</h1>
      <p>NOTE ON WHOM I SHOULD INVITE TO MY MUSIC PARTY:</p>
<p>First Violin - Me.</p>
<p>Second Violin - Whom should I invite?</p>
<p>First Viola - Any of the three women.</p>
<p>Second Viola - Any of the three women.</p>
<p>First Cello - Any of the three women.</p>
<p>Second Cello - Miss Rose or Doctor Melon.</p>
<p>Piano - Not Doctor Melon or General Lemon.</p>
<br>
<p>Meanwhile, the other guests had cornered the old woman by the badminton net.</p>
<p>Mr Leaf: "Give us back Mr Basil's fiddle, you old crone!"</p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-medium w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-medium w3-padding-64 w3-center">AD</p>
    </div>
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Who was the old woman?</h1>
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
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-medium w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-medium w3-padding-64 w3-center">AD</p>
    </div>
  </div>

<!-- END MAIN -->
</div>

</body>
</html>
