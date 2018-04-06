<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Les4Fantastiques</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="fight.css">
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
</head>

<body>
  <div class="container ">
  <img src="https://vignette.wikia.nocookie.net/nickiminaj/images/6/64/Vs.png/revision/latest?cb=20130504020423" width="10%" height="10%" class="vs">
  </div>

  <div class="player1vsplayer2">

    <section class="progressPlayer1">
      <img src="https://raw.githubusercontent.com/akabab/superhero-api/0.2.0/api/images/sm/1-a-bomb.jpg"   class="playerimg1">
      <h4> Player 1 </h4>
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
          60PV
        </div>
      </div>
    </section>

    <section class="progressPlayer2">
      <img src="https://raw.githubusercontent.com/akabab/superhero-api/0.2.0/api/images/sm/1-a-bomb.jpg"  class="playerimg2">
      <h4> Player 2 </h4>
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
          60PV
        </div>
      </div>
    </section>

  </div>




<div class="commandes">

  <FORM method="post">
    <input  type="image"  src="https://png.icons8.com/office/1600/circled-chevron-left.png" width="4%" height="4%" VALUE=gauche class="commande1" onClick="bouge(-10,0)">
    <input  type="image"  src="https://png.icons8.com/office/1600/circled-chevron-right.png" width="4%" height="4%" VALUE=droite class="commande1" onClick="bouge(10,0)">
    <input  type="image"  src="https://png.icons8.com/office/1600/circled-chevron-up.png" width="4%" height="4%" VALUE=haut class="commande1" onClick="bouge(0,-10)">
    <input  type="image"  src="https://png.icons8.com/office/1600/circled-chevron-down.png" width="4%" height="4%" VALUE=bas class="commande1" onClick="bouge(0,10)">
  </FORM>

  <FORM method="post">
    <input  type="image"  src="https://png.icons8.com/office/1600/circled-chevron-down.png" width="4%" height="4%" VALUE=bas class="commande2" onClick="bouge(-10,0)">
    <input  type="image"  src="https://png.icons8.com/office/1600/circled-chevron-up.png" width="4%" height="4%" VALUE=haut class="commande2" onClick="bouge(10,0)">
    <input  type="image"  src="https://png.icons8.com/office/1600/circled-chevron-right.png" width="4%" height="4%" VALUE=droite class="commande2" onClick="bouge(0,-10)">
    <input  type="image"  src="https://png.icons8.com/office/1600/circled-chevron-left.png" width="4%" height="4%" VALUE=gauche class="commande2" onClick="bouge(0,10)">
  </FORM>

</div>


</body>
