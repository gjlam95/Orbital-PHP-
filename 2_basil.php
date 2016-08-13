<!DOCTYPE html>
<html>
<title>Death of Mr Basil</title>
<head>
<script language="javascript">
      function processPage() {
      
      var tempType;
      
      for (var i=0; i < document.ansForm.choice.length; i++) {
        if (document.ansForm.choice[i].checked) {
          tempType = document.ansForm.choice[i].value;
        }
      }
      if (tempType == 'green') {
        var next = confirm("Correct!\n\n" + "Miss Rose, Mrs Blank, and Doctor Melon all came before Mrs Rainbow. And Mrs Rainbow and General Lemon both came before Mr Leaf. Mr Leaf was last and committed the dastardly deed.\n");
        if (next == true) {
          window.history.back();
        }
      }
      
      else {
        var next = confirm("Wrong!\n\n" + "Hint?");
        if (next == true) {
          alert("Find out who was the last person in the Library.")
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
<p>Mr Basil had just told his six favourite guests that he has left a will for all of them. As there is no living heir to the Basil fortune worth millions of dollars, after Mr Basil dies, the money will be divided evenly among the six guests. However, to the guests dismay, Mr Basil exclaimed that he does not have any intent of dying so soon and plans to live a long long life. The next morning, Mr Basil was found dead in the Library. Follow the series of conversation to determine who is the murderer.
</p>
    </div>
    <div class="w3-third w3-container">
      <img src="http://johannapickel.com/wp-content/uploads/2014/01/last-will-and-testament-1.jpg" style="width:90%;height:80%"> 
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">The Mansion</h1>
      <p>Mrs Blank: "This is so horrible, one of you is a murderer!"</p>
<p>Mr Leaf: "I see, and you're innocent?"</p>
<p>Miss Rose: "We all loved him, but we all love money too."</p>
<p>Doctor Melon: "It's true. Any one of us could have done it. We all have the same motive."</p>
<p>Mrs Rainbow: "Were you in the Library last night, Doctor?"</p>
<p>Doctor Melon: "Yes. But only to borrow a book on butterfly collecting. Mr Basil was alive and well at the time. I might add, I was there before you, Mrs Rainbow."</p>
<p>Mrs Rainbow: "Well! Mr Leaf was in the Library after me."</p>
<p>Mrs Blank: "And Doctor Melon was in the Library after me."</p>
<p>Miss Rose: "I was in the Library before Mrs Blank."</p>
<p>General Lemon: "I was in the Library before Mr Leaf."</p>
    </div>
    <div class="w3-third w3-container">
      <img src="http://cdn.londonandpartners.com/visit/generic/objects/76659-640x360-british-money-coins-640.jpg" style="width:90%;height:80%"> 
      <img src="http://www.abebooks.com/images/books/collectible-butterfly-moth-lepidoptera/butterfly-moth-collecting-simms.jpg" style="width:50%; height:40%">
    </div>
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Who killed Mr Basil?</h1>
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
