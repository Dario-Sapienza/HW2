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

class Area_PersonaleController extends Controller{

    public function index(){
        if(session('id') !== null) {
            return view("area_personale");
        }
        else {
        return view('reindirizzamento3');
        }
    }

    public function carica_corsi(){
        $username=Session::get('username');

        $corsi=prenotazione_corso::join("palestra","palestra.id","=","prenotazione_corso.palestra_id")->where('username',$username)->get();
        return response()->json($corsi);
    }



}





?>

