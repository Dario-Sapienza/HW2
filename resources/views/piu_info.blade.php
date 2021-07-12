

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fit Advisor</title>
    <link rel="stylesheet" href='{{url("./css/piu_info.css")}}'>
      <link rel = "preconnect" href = '{{url("https://fonts.gstatic.com")}}'>
      <link href ='{{url("https://fonts.googleapis.com/css2?family=PT+Sans+Caption&display=swap")}}' rel = "stylesheet">
      <link href='{{url("https://fonts.googleapis.com/css2?family=Russo+One&display=swap")}}' rel="stylesheet">
      <link href='{{url("https://fonts.googleapis.com/css2?family=Staatliches&display=swap")}}' rel="stylesheet">
      <link href='{{url("https://fonts.googleapis.com/css2?family=Rokkitt:wght@300&display=swap")}}' rel="stylesheet">
      <link href='{{url("https://fonts.googleapis.com/css2?family=Train+One&display=swap")}}' rel="stylesheet">
      <link href='{{url("https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap")}}' rel="stylesheet">
      <link href='{{url("https://fonts.googleapis.com/css2?family=Nova+Flat&display=swap")}}' rel="stylesheet">
      <link href='{{url("https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap")}}' rel="stylesheet">
    <link href='{{url("https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@800&display=swap")}}' rel="stylesheet">   </head>
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
        <strong>FINALMENTE CI SIAMO</strong></br>
      </h1>
     </header>
    <section>
     <h1>Il tanto atteso momento è finalmente arrivato – le nostre palestre riaprono il 24 maggio!</h1>
     <p>
       Quanto ci sei mancato! È giunto il momento di dirti GRAZIE.
       Grazie per la tua fedeltà, il tuo supporto e la tua pazienza.
       Solo insieme abbiamo potuto superare questo momento difficile.</br></br>

      Ti aspettiamo da Lunedì 24/5 nelle nostre palestre</br>  </br>

     La tua salute è la nostra massima priorità, per questo ci assicureremo che tu possa ricominciare ad allenarti
      in totale sicurezza e ai soliti, elevati standard di qualità. Ti chiediamo quindi di osservare le usuali norme igieniche durante l’allenamento,
      le puoi trovare <a href='{{url("https://www.mcfit.com/fileadmin/user_upload/PDF-Files/Rechtliche_Hinweise/IT/Protocollo_Sicurezza_Maggio2021.pdf")}}'>qui.</a></br>

     <h1 id ="c">NON VEDIAMO L’ORA DI RIAVERTI CON NOI ! </h1>

      <p> Il Tuo #TeamFit-Advisor</p>
</p>
    </section>
    <footer>
      <address>Fit Advisor - Catania</address>
      <img src= '{{url("./img/Logo.png")}}'>
      <p>Dario Sapienza O46001787</p>
    </footer>
  </body>
</html>
