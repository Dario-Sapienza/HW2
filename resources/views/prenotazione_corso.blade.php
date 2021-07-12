

<html>
    <head>
        <link rel = "preconnect" href = '{{url("https://fonts.gstatic.com")}}'>
        <link href='{{url("https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap")}}' rel="stylesheet">
        <link href='{{url("https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap")}}' rel="stylesheet">
        <link rel="stylesheet" href='{{url("./css/prenotazione_corso.css")}}'>


        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">

        <title>Fit Advisor - Iscriviti</title>
    </head>
    <body>
         <section class = "prenotazione">
         <h1>Fit-Advisor</h1>
         
         @if($errore===1)
            <span class='error'>RIEMPI TUTTI I CAMPI</span>
            @elseif($errore===2)
            <span class='error'>PRENOTAZIONE ESISTENTE</span>
            @endif


            <form name='prenotazione' method='post' enctype="multipart/form-data" autocomplete="off">
            <input type='hidden' name='_token' value='{{ $csrf_token}}'> 

                    <div class="cognome">
                        <input type='text' name='cognome' placeholder="cognome">
                    </div>
                <div class="palestra">
                    <select name='palestra' placeholder="palestra">
                    <option disabled selected>- - -</option>
                    <option value = 'CUS CATANIA'>CUS CATANIA</option>
                    <option value = 'MC-FIT' >MC-FIT</option>
                    <option value = 'TORRE DEL GRIFO VILLAGE'>TORRE DEL GRIFO</option>
                    <option value = 'ONE-FIT' >ONE-FIT</option>
                    <option value = 'STONE PERSONAL'>STONE PERSONAL</option>
                    <option value = 'VIRGIN ACTIVE'>VIRGIN ACTIVE</option>
                    <option value = 'SPORTING CENTER'>SPORTING CENTER</option>
                    <option value = 'ATHLETIC CLUB'>ATHLETIC CLUB</option>
                    <option value = 'ALTAIR CLUB'>ALTAIR</option>
                    </select>
                </div>
                <div class="corso">
                    <select name='corso' placeholder="corso">
                    <option disabled selected>- - -</option>
                    <option value = 'CARDIO'>CARDIO</option>
                    <option value = 'BODY BUILDING'>BODY-BUILDING</option>
                    <option value = 'CALISTHENICS'>CALISTHENICS</option>
                    <option value = 'SPINNING'>SPINNING</option>
                    <option value = 'FIT-BOXE'>FIT-BOXE</option>
                    <option value = 'YOGA'>YOGA</option>
                    <option value = 'PILATES'>PILATES</option>
                    <option value = 'AERO-TONE'>AERO-TONE</option>
                    <option value = 'CROSSFIT'>CROSSFIT</option>
                    <option value = 'POSTURALE'>POSTURALE</option>
                    <option value = 'ACQUA-GYM'>ACQUA-GYM</option>
                    <option value = 'TOTAL-BODY'>TOTAL BODY</option>
                    <option value = 'ZUMBA'>ZUMBA</option>
                    </select>
                </div>
                <div class="submit">
                    <input type='submit' value="Prenota" id="submit">
                </div>
            </form>
            <div><a class='home_page'  href = '{{route("homepage")}}'>Home page</a></div>
            </section>

    </body>
</html>
