<!DOCTYPE html>
<html>
<title>Roll of Film</title>
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
        var next = confirm("Correct!\n\n" + "If Doctor Melon has his own roll of film back, it would mean that the film had changed hands three times. First to Mr Leaf, then to the Colonel, then back to Doctor Melon. If Mrs Blank has the film, it's changed hands only twice. First to Mr Leaf, then to Mrs Blank.\n");
        if (next == true) {
          window.history.back();
        }
      }
      
      else {
        var next = confirm("Wrong!\n" + "\n" + "Hint?");
        if (next == true) {
         alert("Draft out the 3 possible scenarios and determine how many times the film has changed hands.");
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
<p>Doctor Melon has been spying on Mr Basil. Mr Basil was a consultant for a local gumdrop company. These documents detailed Boddy's discovery: a way to make gumdrops that lasted in your mouth for hours! A rival gumdrop company had hired Plum to find out the secret. Doctor Melon broke into the Mr Basil's bedroom drawer and photographed his secret documents. He snapped a whole roll of film. He quickly removed the roll from the camera and slipped it into the right pocket of his purple cardigan sweater. He then went back to the Library to join the rest of the guests.</p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-medium w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-medium w3-padding-64 w3-center">AD</p>
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">In the Library</h1>
<p>Mr Leaf was performing magic tricks to entertain everyone.</p>
  <p>He leaned over and pulled an egg from behind Doctor Melon's ear.</p>
  <p>Everyone laughed and applauded.</p>
  <p>Doctor Melon was feeling uncomfortable but Mr Leaf continued to pat him up and down, searching for a chicken.</p>
  <p>And now he was patting the right pocket of Plum's purple cardigan.</p>
  <p>Mr Leaf felt the roll of film. The roll of spy film</p>
  <p>Mr Leaf pulled a chicken out of Doctor Melon's right pocket to mask the fact that he had stole the roll of film from Doctor Melon.</p>
  <p>General Lemon clapped Mr Leaf on the back, to commend him of his magic trick.</p>
  <p>However, he wasn't just patting Mr Leaf to be nice.</p>
  <p>He had seen Mr Leaf steal the Professor's roll of film and had figured out it must be valuable.</p>
  <p>o now, he slipped his hand into Mr Leaf's pocket and stole one of the two rolls (One was the secret roll which Plum stole and the other was Mr Leaf's magic tricks prop).</p>
  <p>He added the roll to his own roll of personal film already in his pocket.</p>
  <p>Doctor Melon went up to General Lemon to offer a lighter for his cigarette.</p>
  <p>At the same time, he slapped the Colonel's pockets and secretly took both rools of film from it.</p>
  <p>But General Lemon wasn't the only one who had seen Mr Leaf steal the film.</p>
  <p>So had Mrs Blank.</p>
  <p>She removed the other roll of film from Mr Leaf's pocket while she leaned over him to clear his plate of food.</p>
  <p>Given that Doctor Melon's original roll of film has now changed hands exactly twice.</p>
  <p>Does Doctor Melon have his own roll of secret film back?</p>
  <p>And if he doesn't, who does?</p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-medium w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-medium w3-padding-64 w3-center">AD</p>
    </div>
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Who has the roll of film?</h1>
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
