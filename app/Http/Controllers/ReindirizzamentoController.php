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

class ReindirizzamentoController extends Controller{

    public function reindirizzamento(){
        return view('reindirizzamento');
    }

    public function reindirizzamento2(){
        return view('reindirizzamento2');
    }

    public function reindirizzamento3(){
            return view('reindirizzamento3');
        }
    
}

?>

