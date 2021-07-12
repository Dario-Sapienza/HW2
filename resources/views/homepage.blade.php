
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fit Advisor</title>
    <link rel="stylesheet" href='{{url("./css/mhw1.css")}}'>
    <script src='{{url("./js/menu_mobile.js")}}' defer = "true"></script>
    <link rel = "preconnect" href = '{{url("https://fonts.gstatic.com")}}'>
    <link href = '{{url("https://fonts.googleapis.com/css2?family=PT+Sans+Caption&display=swap")}}' rel = "stylesheet">
    <link href='{{url("https://fonts.googleapis.com/css2?family=Russo+One&display=swap")}}' rel="stylesheet">
    <link href='{{url("https://fonts.googleapis.com/css2?family=Staatliches&display=swap")}}' rel="stylesheet">
    <link href='{{url("https://fonts.googleapis.com/css2?family=Rokkitt:wght@300&display=swap")}}' rel="stylesheet">
    <link href='{{url("https://fonts.googleapis.com/css2?family=Train+One&display=swap")}}' rel="stylesheet">
    <link href='{{url("https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap")}}' rel="stylesheet">
    <link href='{{url("https://fonts.googleapis.com/css2?family=Nova+Flat&display=swap")}}' rel="stylesheet">
    <link href='{{url("https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Rubik+Mono+One&display=swap")}}' rel="stylesheet">
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

          <a href='{{route("area_personale")}}'>Area personale</a>

        </div>

        <div>

        @if(session('username')===null)
          <a href='{{route("accesso")}}' class='button'>Accedi</a>
        @else
          <a href='{{route("uscita")}}' class='button'>Esci</a>
        @endif

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

          <a href='{{route("area_personale")}}'>Area personale</a>


@if(session('username')===null)
  <a href='{{route("accesso")}}' class='button1'>Accedi</a>
@else
  <a href='{{route("uscita")}}' class='button1'>Esci</a>
@endif

</div>
  
      <h1>
        <strong>FREQUENTA LE MIGLIORI PALESTRE DI CATANIA</strong></br>
        <a href = '{{route("piu_info")}}' id = "info-button">Più info</a>
      </h1>
     </header>
    <section>
      <div class = "mini-sezione1" >

          <a href='{{route("prenotazione_corso")}}'>CERCA IL CORSO CHE FA PIU' AL CASO TUO E PRENOTATI SUBITO</a>
    


        <img class = "immagine" src= '{{url("./img/img-corsi.jfif")}}'>
      </div>
      <div class = "mini-sezione2" >
        <img class = "immagine" src= '{{url("./img/img-affiliazioni.jfif")}}'>
        <img class = "immagine" src= '{{url("./img/palestra.jpg")}}'>
        <a href= '{{route("nuove_aperture")}}'>TANTE NUOVE AFFILIAZIONI PRESTO DISPONIBILI</a>
      </div>
      <div class = "mini-sezione3" >
        <a href= '{{route("atletinews")}}'>CONOSCI I NOSTRI ATLETI E RIMANI AGGIORNATO SULLE NEWS</a>
        <img class = "immagine" src= '{{url("./img/avvisi.jfif")}}'>
      </div>
    </section>
    <footer>
      <address>Fit Advisor - Catania</address>
      <img src= '{{url("./img/Logo.png")}}'>
      <p>Dario Sapienza O46001787</p>
    </footer>
  </body>
</html>
