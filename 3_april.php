<!DOCTYPE html>
<html>
<title>April Fools</title>
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
        var next = confirm("Correct!\n\n" + "Gags:\n" + "Mr Leaf helping Mrs Blank put her head on the tray. Green 1, Blank 1\n" + "Doctor Melon putting the Knife in his head. Melon 1\n" + "General Lemon and Miss Rose faking her murder. Lemon 1, Rose 1\n" + "Mr Leaf and General Lemon faking a duel to the death, with Mrs Rainbow's help. Leaf 2, Lemon 2, Rainbow 1\n" + "Doctor Melon and Miss Rose staging a fake shooting. Melon 2 Rose 2\n" + "Only Mrs Rainbow and Mrs Blank performed one gag before the final incident occured.\n");
        if (next == true) {
          window.history.back();
        }
      }
      
      else {
        var next = confirm("Wrong!\n" + "\n" + "Hint?");
        if (next == true) {
         alert("Write down the names of all guests on a piece of paper. For those who have performed a gag, note it down and trace the conversation until the end. Only one of the guests other than Mrs Rainbow had only performed one gag thus far.");
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
 <p>It was April Fools' Day, and Mr Basil had invited his regular six guests over to spend the weekend. As usual, weird things are bound to happen when these people are gathered together in one place. Follow the conversations to see the various gags the guests are up to.</p>
    </div>
    <div class="w3-third w3-container">
    <img src="http://marketingland.com/wp-content/ml-loads/2015/04/april-fools-day1-ss-1920-800x450.jpg" style="width:90%;height:80%">
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">In the Dining Room</h1>
<p>Mr Basil: "This is the dessert I have prepared for you this evening... baked Alaska! Now where is it?"</p>
  <p>Mr Leaf: "You don't mean that silver dish, do you?"</p>
  <p>Mr Basil: "Yes! This is our baked Alaska dessert, Mrs Blank must have brought it out when I wasn't looking. If I could have everyone's attention. Drumroll please..."</p>
  <p>--Mr Leaf drummed on the table with his hands. Then Mr Basil pulled off the lid with a flourish. Revealing... Mrs Blank's head! The head sat on a bed of lettuce. The mouth was wide open, and stuffed with an apple--</p>
  <p>--Mr Basil gasped. General Lemon choked. Doctor Melon screamed. Miss Rose fainted into Doctor Melon's arms. So did Mrs Rainbow. The two banged into each other and fell to the floor--</p>
  <p>--Mr Leaf laughed. He reached over and plucked out the apple--</p>
  <p>Mr Leaf & Mrs Blank: "April Fools!"</p>
  <p>--Then, the lights went off. There were screams, and when the lights came back on, Miss Rose and Mrs Rainbow both fainted again. Doctor Melon lay slumped in his chair. He had a knife stuck in his head. He was dead--</p>
  <p>--Then he sat straight again--</p>
  <p>Doctor Melon: "April Fools!"</p>
  <p>Mr Basil: "Oh my, you people are just too good at this. Wow!"</p>
  <p>General Lemon: "Don't forget, you eat the dessert with the little spoon."</p>
  <p>Miss Rose: "The large spoon, you big brute!"</p>
  <p>General Lemon: "The little spoon!"</p>
  <p>Miss Rose: "The big spoon!"</p>
  <p>--Soon, they were shouting at each other at the top of their lungs. Then, Miss Rose slapped General Lemon with all her might. The Colonel looked stunned. Then he grabbed the Steel Rod and chased Miss Rose around the table in a circle. Miss Rose slipped and slid into a corner. General Lemon stood over her with the pipe. His arm came up. It went down fast. There was a dull, horrible thud. Miss Rose lay dead at the Colonel's feet. Around her limp body, a pool of dark red blood was slowly spreading--</p>
  <p>--Everyone stood in their spot, frozen--</p>
  <p>Mr Leaf: "You're under arrest, General Lemon!"</p>
  <p>General Lemon: "What? You dare to touch me? I challenge you to a duel!"</p>
  <p>--General Lemon armed with the Steel Rod, started fighting with Mr Leaf, who was armed with the Candlestick. Everyone around begged the two men to stop. General Lemon swung the Steel Rod again and again. Mr Leaf held the Candlestick with two hands, blocking the blows. Then General Lemon swung one more time, and as he went flying by, Mr Leaf clonked him on the head with the Candlestick. General Lemon dropped to the floor, motionless--</p>
  <p>--Mrs Rainbow ran to General Lemon's side. She knelt down and lifted his wrist. She felt for his pulse. When she looked up, she had tears in her eyes--</p>
  <p>Mrs Rainbow: "He's dead"</p>
  <p>--The other guests were shocked at the sight before them--</p>
  <p>General Lemon, Mr Leaf, Mrs Rainbow & Miss Rose: "Surprise! Happy April Fools!"</p>
  <p>--Doctor Melon pulled our a Pistol and pointed it to Miss Rose--</p>
  <p>Doctor Melon: "That was some joke. Why would you want to make saps out of us? Don't you know I've killed people for less?"</p>
  <p>--Miss Rose began to shake--</p>
  <p>Doctor Melon: "Scared you, didn't I, Miss Rose? Now you know what it feels like. April Fools!"</p>
  <p>--BANG! The Pistol went off accidentally. Miss Rose crumpled to the floor. Around her limp body, a pool of dark red blood was slowly spreading--</p>
  <p>--Mr Basil ran to Miss Rose and carried her in his arms. He put his ear right up to Miss Rose's red lips, in an attempt to hear her dying words"</p>
  <p>Miss Rose: "April Fools!"</p>
  <p>--Doctor Melon and Miss Rose were chortling happily--</p>
  <p>--Just then, a scream was heard from the Living Room--</p>
  <p>--Mrs Blank stood frozen in fright--</p>
  <p>--Across the room layed Mrs Rainbow's motionless body. Her limbs lay at lifeless angles, blood covered her face and clotted her hair. And next to her was the spanner--</p>
  <p>Miss Rose: "This is what comes from too much April Fooling. Someone went overboard here"</p>
    </div>
    <div class="w3-third w3-container">
    <img src="https://thumbs.dreamstime.com/t/old-american-gun-hand-drawing-antique-revolver-41527229.jpg" style="width:90%;height:80%">
    </div>
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Except for the real victim and the real killer, each guest was involved in two gags. Who killed Mrs Rainbow?</h1>
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
    <img src="http://www.jamaicaobserver.com/assets/10771017/crime--2-.jpg" style="width:90%;height:80%">
    </div>
  </div>

<!-- END MAIN -->
</div>

</body>
</html>
