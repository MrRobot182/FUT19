<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/cards.css">
    <title>FIFA 19</title>
  </head>
  <body>
    <div class="container">
      <label for="card-type">Carta: </label>
      <select class="" id="card-type" name="card-type">
        <optgroup label="-------------">
          <option value="gold-rare">Oro raro</option>
          <option value="silver-rare">Plata raro</option>
          <option value="bronze-rare">Bronce raro</option>
        </optgroup>
        <optgroup label="-------------">
          <option value="gold-common">Oro comun</option>
          <option value="silver-common">Plata comun</option>
          <option value="bronze-common">Bronce comun</option>
        </optgroup>
        <optgroup label="-------------">
          <option value="gold-if">Oro IF</option>
          <option value="silver-if">Plata IF</option>
          <option value="bronze-if">Bronce IF</option>
        </optgroup>
        <optgroup label="-------------">
          <option value="ucl-rare">UCL raro</option>
          <option value="ucl-common">UCL comun</option>
          <option value="ucl-live">UCL live</option>
          <option value="ucl-motm">UCL MOTM</option>
          <option value="ucl-sbc">UCL SBC</option>
          <option value="ucl-tott">UCL TOTT</option>
        </optgroup>
        <optgroup label="-------------">
          <option value="uel">UEL</option>
          <option value="uel-live">UEL live</option>
          <option value="uel-motm">UEL MOTM</option>
          <option value="uel-sbc">UEL SBC</option>
          <option value="uel-tott">UEL TOTT</option>
        </optgroup>
      </select>
      <label for="size" style="padding-left:15px">Tamaño: </label>
      <select id="size" name="size">
        <option value="card-sm">Chico</option>
        <option value="card-md">Mediano</option>
        <option value="card-lg" selected>Grande</option>
      </select>
      <br>

      <div id="card1" class="card card-lg gold-rare" style="margin-top:10px">
        <!--<div class="divider-special"></div>-->
        <img class="player" src="assets/players/158023.png">
        <img class="nation" src="assets/nations/52.png">
        <img class="badge" src="assets/badges/241.png">
        <div class="rating">
          94
        </div>
        <div class="position">
          cam
        </div>
        <div class="divider-nat"></div>
        <div class="divider-bad"></div>
        <div class="name">
          messi
        </div>
        <div class="divider-nam"></div>
        <div class="divider-att"></div>
        <div class="pace">
          88
        </div>
        <div class="shooting">
          91
        </div>
        <div class="passing">
          88
        </div>
        <div class="dribbling">
          96
        </div>
        <div class="defending">
          32
        </div>
        <div class="physical">
          61
        </div>
        <div class="divider-che"></div>
      </div>
    </div>

    <script type="text/javascript">
      console.log("works!");
      document.getElementById("card-type").onchange = function() { asignaCarta() };
      document.getElementById("size").onchange = function() { asignaCarta() };

      function asignaCarta(){
        var size = document.getElementById("size").value;
        var cardType = document.getElementById("card-type").value;
        document.getElementById("card1").className = "card " + size + " " + cardType;
        if (cardType == "ucl-live"){
          var divSpecial = document.createElement("div");
          var card = document.getElementById("card1");
          document.body.insertBefore(divSpecial, card);
        }
      }
    </script>

  </body>
</html>
