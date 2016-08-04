<!DOCTYPE html>
<html>
<title>The Gift</title>
<head>
<script language="javascript">
        function processPage() {
            
            var tempType;
            
            for (var i=0; i < document.ansForm.choice.length; i++) {
                if (document.ansForm.choice[i].checked) {
                    tempType = document.ansForm.choice[i].value;
                }
            }
            if (tempType == 'hall') {
                var next = confirm("Correct!\n\n" + "Doctor Melon wrapped the gift in the Mahjong Room. Then then walked to the Games Room, the Lounge, the Library, the Hall, the Living Room, and the Dining Room. Plum remembered still having the gift with him in the Library. So we can rule out the rooms he was in before the Library: the Mahjong Room, the Games Room, and the Lounge. Mrs Blank and General Lemon checked the Living Room and Library. And Doctor Melon came into the Dining Room empty-handed. That leaves only the Hall.");
                if (next == true) {
                   window.history.back();
               }
           }
           
           else {
            var next = confirm("Wrong!\n" + "\n" + "Hint?");
            if (next == true) {
               alert("Doctor Melon wrapped the gift in the Mahjong Room. Then he walked to the Games Room, the Lounge, the Library, the Hall, the Living Room, and the Dining Room. Plum remembered still having the gift with him in the Library. So we can rule out the rooms he was in before that.");
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
      <a href="1_bomb.html">The Gift</a>
      <a href="1_ghost.html">The Ghost of Mrs Basil</a>
      <a href="1_hide.html">Hide & Seek</a>
    </div>
    </li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Level 2</a>
    <div class="dropdown-content">
      <a href="2_murder.html">The Planned Murder</a>
      <a href="2_music.html">The Unfortunate Music Party</a>
      <a href="2_basil.html">Death of Mr Basil</a>
    </div>
  </li>
    <li class="dropdown">
    <a href="#" class="dropbtn">Level 3</a>
    <div class="dropdown-content">
      <a href="3_april.html">April Fools</a>
      <a href="3_fire.html">The Fire</a>
      <a href="3_film.html">Rolls of Film</a>
    </div>
  </li>
</ul>


  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Background</h1>
      <p>It's Mr Leaf's birthday, the other guests are throwing a party in the Dining Room and have all prepared a gift for Mr Leaf with the exception of Doctor Melon who happened to prepare two gifts for the birthday guy. The crazy thing is that one of the gifts was a time bomb, and absent-minded Doctor Melon has forgotten where he left the gift! If you are not able to deduce the room which Doctor Melon left the bomb in time, everyone in the mansion dies! </p>
    </div>
    <div class="w3-third w3-container">
      <img src="http://humanepursuits.com/wp-content/uploads/2013/11/christmaspresents.jpg" style="width:90%; height:80%">
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">In the Dining Room</h1>
      <p>General Lemon: "Ah Professor - we've all given Mr Leaf our gifts. Maybe now would be a good time for you to give him your present."
        <p>Doctor Melon: "My present? Mmm, now where did I leave it?"</p>
        <p>Mr Leaf: "Oh great! First you forget my party, then you forget my present. What's next?"</p>
        <p>Doctor Melon: "I forget. Uh-oh. I just remembered something else. I got you two presents. And the second present is a time bomb that's going to go off in about... Oh I'd say ninety seconds."</p>
        <p>General Lemon: "A time bomb?!? Why would anyone do anything so stupid?"</p>
        <p>Doctor Melon: "I thought it would liven up the party. Believe me, I didn't plan on things working out this way, I was going to turn the thing off right after you opened it!"</p>
        <p>Mrs Rainbow: "What room did you leave the bomb in?"</p>
        <p>Doctor Melon: "I don't know. All I know is that I came in here empty-handed. I remember wrapping the gift in the Mahjong Room... went for a stroll while thinking about my latest research project through the Games Room and then to the Lounge. Then I went to the Library, then to the Hall, then to the Living Room, and finally to the party in the Dining Room."</p>
        <p>Mrs Blank: "I've searched the Living Room and there is nothing there!"</p>
        <p>Doctor Melon: "Wait! I remember having the gift in the Library!"</p>
        <p>General Lemon: "I've already searched the Library. It's not there!"</p>
    </div>
    <div class="w3-third w3-container">
     <img src="http://nymag.com/images/2/daily/entertainment/07/10/12_bomb_lgl.jpg" style="width:90%;height:80%">
      <p class="w3-border w3-padding-medium w3-padding-64 w3-center">AD</p>
    </div>
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Where is the bomb?</h1>
      <form name="ansForm">
            <p>Answer:</p>
            <input type="radio" name="choice" value="dining room">Dining Room<br>
            <input type="radio" name="choice" value="hall">Hall<br>
            <input type="radio" name="choice" value="study">Study<br>
            <input type="radio" name="choice" value="library">Library<br>
            <input type="radio" name="choice" value="Mahjong Room">Mahjong Room<br>
            <input type="radio" name="choice" value="Games Room">Games Room<br>
            <input type="radio" name="choice" value="Living Room">Living Room<br>
            <input type="radio" name="choice" value="lounge">Lounge<br>
            <input type="radio" name="choice" value="kitchen">Kitchen<br>
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

