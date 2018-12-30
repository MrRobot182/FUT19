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
        <option value="gold-rare">Oro raro</option>
        <option value="silver-rare">Plata raro</option>
        <option value="bronze-rare">Bronce raro</option>
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
          cf
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
      }
    </script>

  </body>
</html>
