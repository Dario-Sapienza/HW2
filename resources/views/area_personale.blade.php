
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fit Advisor</title>
    <link rel="stylesheet" href='{{url("./css/area_personale.css")}}'>
    <script src= '{{url("./js/area_personale.js")}}' defer = "true"></script>
    <script src= '{{url("./js/menu_mobile.js")}}' defer = "true"></script>
    <link rel = "preconnect" href = '{{url("https://fonts.gstatic.com")}}'>
    <link href = '{{url("https://fonts.googleapis.com/css2?family=PT+Sans+Caption&display=swap")}}' rel = "stylesheet">
    <link href='{{url("https://fonts.googleapis.com/css2?family=Russo+One&display=swap")}}' rel="stylesheet">
    <link href='{{url("https://fonts.googleapis.com/css2?family=Staatliches&display=swap")}}' rel="stylesheet">
    <link href='{{url("https://fonts.googleapis.com/css2?family=Rokkitt:wght@300&display=swap")}}' rel="stylesheet">
    <link href='{{url("https://fonts.googleapis.com/css2?family=Train+One&display=swap")}}' rel="stylesheet">
    <link href='{{url("https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap")}}' rel="stylesheet">
    <link href='{{url("https://fonts.googleapis.com/css2?family=Nova+Flat&display=swap")}}' rel="stylesheet">
    <link href='{{url("https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Rubik+Mono+One&display=swap")}}' rel="stylesheet">
    <link href='{{url("https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@800&display=swap")}}' rel="stylesheet">
    <link href='{{url("https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap")}}' rel="stylesheet">
 </head>
  <body>
     <header>
      <nav>
       <div id="logo">
       <img id = "FitAd-logo" src = '{{url("./img/Logo.png")}}' />
       </div>
      <div class="links">
      <a href = '{{route("homepage")}}'>Home</a>
        <a href = '{{route("palestre")}}'>Palestre</a>
        <a target = "blank" href = '{{url("https://www.google.it/maps/@37.5378544,15.0477241,11.92z/data=!4m3!11m2!2sfncJ2psGmTCFdvktjOwFTSGXr2p66A!3e3")}}'>Mappa</a>

        </div>
        <div>

        <a href='{{route("uscita")}}' class='button'>Esci</a>

        </div>
       <div id="menu">
        <div></div>
        <div></div>
        <div></div>
      </div>
      </nav>
      <div id="links_menu" class="hidden">
      <a href = '{{route("homepage")}}'>Home</a>
        <a href = '{{route("palestre")}}'>Palestre</a>
        <a target = "blank" href = '{{url("https://www.google.it/maps/@37.5378544,15.0477241,11.92z/data=!4m3!11m2!2sfncJ2psGmTCFdvktjOwFTSGXr2p66A!3e3")}}'>Mappa</a>

        <a href='{{route("uscita")}}' class='button1'>Esci</a>

    </div>
      <h1>
        Ciao  

      </h1>


        </header>

<div id = "a">
        <h2 id = "frase" class = "hidden" >- CORSI PRENOTATI -</h2>
        <h2 id = "errore" class = "hidden">- NESSUN CORSO PRENOTATO -</h2>
</div>

    <section id = "corsi_prenotati">

    </section>

</section>

    <footer>
      <address>Fit Advisor - Catania</address>
      <img src= '{{url("./img/Logo.png")}}'>
      <p>Dario Sapienza O46001787</p>
    </footer>
  </body>
</html>
