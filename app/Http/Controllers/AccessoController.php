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

class AccessoController extends Controller{

    public function index(){

        if(session('username')) {
            return redirect("homepage");
        }
        else {
            return view('accesso')->with('errore', 0)->with('csrf_token', csrf_token());
        }

    }

    public function checkLogin() {
        $request= request();

        $user= filter_var($request["username"], FILTER_VALIDATE_EMAIL) ? "email" : "username";

        $utente = utente::where($user,$request["username"])->first();
        if($utente !== null) {
            if(password_verify($request["password"], $utente["password"])){
            Session::put('id', $utente->id);
            Session::put('username', $utente->username);
            return redirect("homepage");}
            else {
                return view('accesso')->with('errore', 1)->with('csrf_token', csrf_token());
            }
        }else {
            return view('accesso')->with('errore', 1)->with('csrf_token', csrf_token());
        }
    }


    public function logout() {
        Session::flush();
        return redirect('accesso');
    }



}



?>

