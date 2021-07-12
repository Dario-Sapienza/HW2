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

class Nuove_ApertureController extends Controller{

    public function index(){
        return view('nuove_aperture');
    }

    public function nuove_aff()
    {
        $affiliazioni=nuove_affiliazioni::all();
        return $affiliazioni;
    }
}

?>
