

<html>
    <head>
        <link rel="stylesheet" href='{{url("./css/iscrizione.css")}}'>
        <link rel = "preconnect" href = '{{url("https://fonts.gstatic.com")}}'>
        <link href='{{url("https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap")}}' rel="stylesheet">
        <link href='{{url("https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap")}}' rel="stylesheet">
        <script src = '{{url("./js/iscrizione.js")}}' defer></script>


        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">

        <title>Fit Advisor - Iscriviti</title>
    </head>
    <body>
         <section class = "iscrizione">
         <h1>Fit-Advisor</h1>
         
         @if($errore===1)
            <span class='error'>RIEMPI I CAMPI CORRETTAMENTE</span>
            @endif

               <form name='iscrizione' method='post' enctype="multipart/form-data" autocomplete="off">
               <input type='hidden' name='_token' value='{{ $csrf_token}}'> 

                    <div class="nome">
                        <input type='text' name='nome' placeholder="nome" >
                        <span></span>
                    </div>
                    <div class="cognome">
                        <input type='text' name='cognome' placeholder="cognome"  >
                        <span></span>
                    </div>
                <div class="username">
                    <input type='text' name='username' placeholder="username"  >
                   <span></span>
                </div>
                <div class="mail">
                    <input type='text' name='mail' placeholder="e-mail">
                    <span></span>
                </div>
                <div class="password">
                    <input type='password' name='password' placeholder="password" >
                    <span></span>
                </div>
                <div class="conferma_password">
                    <input type='password' name='conferma_password' placeholder="conferma password">
                    <span></span>
                </div>
                <div class="eta">
                    <input type='number' name='eta' min = '1' placeholder="eta'">
                </div>

                <div class="submit">
                    <input type='submit' value="Registrati" id="submit">
                </div>
            </form>
            <div class="account">Hai gia' un account? </br><a class='accesso'  href = '{{route("accesso")}}'>Accedi</a></div>
            <div> <a class='home_page'  href = '{{route("homepage")}}'>Home page</a></div>
            </section>

    </body>
</html>
