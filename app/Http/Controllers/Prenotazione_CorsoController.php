<?php

use Illuminate\Routing\Controller;
use App\Models\palestra;
use App\Models\preferiti;
use App\Models\azioni_news;
use App\Models\nuove_affiliazioni;
use App\Models\prenotazione_corso;
use App\Models\utente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Prenotazione_CorsoController extends Controller{

    public function index()
    {
        if(session('username') !== null) {
            return view("prenotazione_corso")->with('errore', 0)->with('csrf_token', csrf_token());;
        }
        else {
        return view('reindirizzamento');
        }    
    }

public function prenota_corso(){
    $request=request();
    
    $session_username=Session::get('username');
if( isset($request["cognome"]) || isset($request["corso"]) || isset($request["palestra"]) ){

    $palestra=palestra::where('nome',$request["palestra"])->first();
    $var=prenotazione_corso::where('palestra_id',$palestra["id"])->where( 'username',$session_username)->where( 'corso',$request["corso"])->exists();
    if(!$var){
    $prenotazione = prenotazione_corso::create([

        'palestra_id'=>$palestra["id"],
        'username'=>$session_username,
        'corso'=>$request["corso"],
        'cognome'=>$request["cognome"]

    ]);

    if($prenotazione){
        return view('reindirizzamento2');
    }else{
    return view('prenotazione_corso')->with('errore', 1)->with('csrf_token', csrf_token());

}}else{
    return view('prenotazione_corso')->with('errore', 2)->with('csrf_token', csrf_token());
}

}else{
    return view('prenotazione_corso')->with('errore', 1)->with('csrf_token', csrf_token());
}

}

}

?>

