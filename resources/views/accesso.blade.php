
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href = '{{url("./css/accesso.css")}}'>
        <link rel = "preconnect" href = '{{url("https://fonts.gstatic.com")}}'>
        <link href ='{{url("https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap")}}' rel="stylesheet">
        <link href='{{url("https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap")}}' rel="stylesheet">


        <title>Fit-Advisor - Accedi</title>
    </head>
    <body>
        <section class="accesso">
            <h1>Fit-Advisor</h1>
           
            @if($errore===1)
            <span class='error'>CREDENZIALI NON VALIDE</span>
            @endif

            <form name='login' method='post'>
            <input type='hidden' name='_token' value='{{ $csrf_token}}'> 
                <div class="username">
                    <input type='text' name='username' placeholder="username o e-mail"  >
                </div>
                <div class="password">
                    <input type='password' name='password' placeholder="password" >
                </div>
                <div>
                    <input type='submit' value="Accedi">
                </div>
            </form>
            <div class="account">Non hai un account? <a class="iscrizione" href = '{{route("iscrizione")}}'>Iscriviti</a></div>
            <div> <a class='home_page' href = '{{route("homepage")}}'>Home page</a></div>
        </section>
    </body>
</html>
