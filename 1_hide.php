<!DOCTYPE html>
<html>
<title>Hide & Seek</title>
<head>
<script language="javascript">
      function processPage() {
      
      var tempType;
      
      for (var i=0; i < document.ansForm.choice.length; i++) {
        if (document.ansForm.choice[i].checked) {
          tempType = document.ansForm.choice[i].value;
        }
      }
      if (tempType == 'Living Room') {
        var next = confirm("Correct!\n\n" + "By process of elimination, Doctor Melon checked the Study as no two rooms were checked twice. The Kitchen was home base which left the Living Room unchecked..\n");
        if (next == true) {
          window.history.back();
        }
      }
      
      else {
        var next = confirm("Wrong!\n\n" + "Hint?");
        if (next == true) {
          alert("Determine which room Doctor Melon checked by process of elimination.")
        }
      }
    }
</script>
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
  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Background</h1>
<p>The guests are playing a game of Hide-And-Seek in the mansion. The Kitchen was their home base and no one was allowed to hide in there, leaving all other rooms as possible hiding spots. In the midst of their game, a fire broke out and the guests scrambled about to flee the mansion quickly. Mrs Blank was nowhere to be found and the guests only have time to go to ONE of the rooms to find her. They started telling one another the rooms they've checked before leaving the mansion. Which room is Mrs Blank in?
</p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-medium w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-medium w3-padding-64 w3-center">AD</p>
    </div>
  </div>

  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">The Mansion</h1>
      <p>Mr Leaf: "I checked the Library. I didn't see Mrs Blank in there!"</p>
<p>Miss Rose: "I checked the Mahjong Room and the Games Room. Neither was she in those two rooms."</p>
<p>Mrs Rainbow: "I checked the Hall and the Lounge. She's nowhere to be seen there!"</p>
<p>Doctor Melon: "Uh, I checked either the Dining Room, the Study. or the Games Room. I can't remember which."</p>
<p>General Lemon: "Seriously Plum! As I was dashing out, I managed to check the Dining Room and she wasn't in there."</p>
<p>As luck would have it, no two rooms were checked twice.</p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-medium w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-medium w3-padding-64 w3-center">AD</p>
    </div>
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Where is Mrs Blank?</h1>
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
