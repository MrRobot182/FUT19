<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/cards.css">
    <link rel="stylesheet" href="css/pitch.css">
    <title>FIFA 19</title>
  </head>
  <body>
    <div class="container">
      <label for="card-type">Carta: </label>
      <select class="" id="card-type" name="card-type">
        <optgroup>
          <option value="gold-rare">Oro raro</option>
          <option value="silver-rare">Plata raro</option>
          <option value="bronze-rare">Bronce raro</option>
        </optgroup>
        <optgroup>
          <option value="gold-common">Oro comun</option>
          <option value="silver-common">Plata comun</option>
          <option value="bronze-common">Bronce comun</option>
        </optgroup>
        <optgroup>
          <option value="gold-if">Oro IF</option>
          <option value="silver-if">Plata IF</option>
          <option value="bronze-if">Bronce IF</option>
        </optgroup>
        <optgroup>
          <option value="gold-fut-champions">Oro IF (FUT Champions)</option>
          <option value="silver-fut-champions">Plata IF (FUT Champions)</option>
          <option value="bronze-fut-champions">Bronce IF (FUT Champions)</option>
        </optgroup>
        <optgroup>
          <option value="ucl-rare">UCL raro</option>
          <option value="ucl-common">UCL comun</option>
          <option value="ucl-live">UCL live</option>
          <option value="ucl-motm">UCL MOTM</option>
          <option value="ucl-sbc">UCL SBC</option>
          <option value="ucl-tott">UCL TOTT</option>
        </optgroup>
        <optgroup>
          <option value="uel">UEL</option>
          <option value="uel-live">UEL live</option>
          <option value="uel-motm">UEL MOTM</option>
          <option value="uel-sbc">UEL SBC</option>
          <option value="uel-tott">UEL TOTT</option>
        </optgroup>
        <optgroup>
          <option value="flashback">Flashback SBC</option>
          <option value="futtie">Futtie</option>
          <option value="futmas">FUTMAS</option>
          <option value="hero">Hero</option>
          <option value="icon">Icon</option>
          <option value="motm">MOTM</option>
          <option value="otw">Ones To Watch</option>
          <option value="pro">Pro Player</option>
          <option value="premium-sbc">Premium SBC</option>
          <option value="record-breaker">Record Breaker</option>
          <option value="sbc">SBC</option>
          <option value="ultimate-scream">Ultimate Scream</option>
        </optgroup>
        <optgroup>
          <option value="premier-league-potm">Premier League POTM</option>
          <option value="bundesliga-potm">Bundesliga POTM</option>
          <option value="award-winner">Award Winner</option>
        </optgroup>
        <optgroup>
          <option value="swap-deals-1">Swap Deals 1</option>
          <option value="swap-deals-2">Swap Deals 2</option>
          <option value="swap-deals-3">Swap Deals 3</option>
          <option value="swap-deals-4">Swap Deals 4</option>
          <option value="swap-deals-5">Swap Deals 5</option>
          <option value="swap-deals-6">Swap Deals 6</option>
          <option value="swap-deals-7">Swap Deals 7</option>
          <option value="swap-deals-8">Swap Deals 8</option>
          <option value="swap-deals-9">Swap Deals 9</option>
          <option value="swap-deals-10">Swap Deals 10</option>
          <option value="swap-deals-11">Swap Deals 11</option>
          <option value="swap-deals-reward">Swap Deals Reward</option>
        </optgroup>
      </select>
      <label for="size" style="padding-left:15px">Tamaño: </label>
      <select id="size" name="size">
        <option value="card-sm">Chico</option>
        <option value="card-md">Mediano</option>
        <option value="card-lg" selected>Grande</option>
      </select>
      <br>

      <div id="card1" class="card card-lg toty" style="margin-top:10px">
        <div class="divider-special"></div>
        <img class="player" src="assets/players/158023.png">
        <img class="nation" src="assets/nations/83.png">
        <img class="badge" src="assets/badges/1878.png">
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

    <div class="pitch f-442">
      <canvas id="chem-lines" class="f-442" width="1200" height="675"></canvas>
      <div class="position-1">
        <div class="card-base">
          <div class="base-pos wrong-pos">
            gk
          </div>
        </div>
        <div class="card card-mini toty">
          <div class="divider-special"></div>
          <img class="player" src="assets/players/158023.png">
          <img class="nation" src="assets/nations/83.png">
          <img class="badge" src="assets/badges/1878.png">
          <div class="rating">
            94
          </div>
          <div class="position">
            cam
          </div>
        </div>
      </div>

      <div class="position-2">
        <div class="card-base">
          <div class="base-pos">
            rb
          </div>
        </div>
        <div class="card card-mini empty">
        </div>
      </div>

      <div class="position-3">
        <div class="card-base">
          <div class="base-pos">
            cb
          </div>
        </div>
        <div class="card card-mini empty">
        </div>
      </div>

      <div class="position-4">
        <div class="card-base">
          <div class="base-pos">
            cb
          </div>
        </div>
        <div class="card card-mini empty">
        </div>
      </div>

      <div class="position-5">
        <div class="card-base">
          <div class="base-pos">
            lb
          </div>
        </div>
        <div class="card card-mini empty">
        </div>
      </div>

      <div class="position-6">
        <div class="card-base">
          <div class="base-pos">
            rm
          </div>
        </div>
        <div class="card card-mini empty">
        </div>
      </div>

      <div class="position-7">
        <div class="card-base">
          <div class="base-pos">
            cm
          </div>
        </div>
        <div class="card card-mini empty">
        </div>
      </div>

      <div class="position-8">
        <div class="card-base">
          <div class="base-pos">
            cm
          </div>
        </div>
        <div class="card card-mini empty">
        </div>
      </div>

      <div class="position-9">
        <div class="card-base">
          <div class="base-pos">
            lm
          </div>
        </div>
        <div class="card card-mini empty">
        </div>
      </div>

      <div class="position-10">
        <div class="card-base">
          <div class="base-pos">
            st
          </div>
        </div>
        <div class="card card-mini empty">
        </div>
      </div>

      <div class="position-11">
        <div class="card-base">
          <div class="base-pos">
            st
          </div>
        </div>
        <div class="card card-mini empty">
        </div>
      </div>

    </div>


    <script type="text/javascript">
      console.log("...");
      var size = document.getElementById("size");
      var cardType = document.getElementById("card-type");

      size.onchange = function() { asignaCarta() };
      cardType.onchange = function() { asignaCarta() };

      function asignaCarta(){
        document.getElementById("card1").className = "card " + size.value + " " + cardType.value;
      }
    </script>

    <script type="text/javascript" src="js/pitch-chem-lines.js">

    </script>

  </body>
</html>
