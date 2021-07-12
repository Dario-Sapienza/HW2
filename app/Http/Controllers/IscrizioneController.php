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

class IscrizioneController extends Controller{

    public function index(){
        if(session('username')!== null)
            return redirect('homepage');
        
        else
    return view('iscrizione')->with('errore',0)->with("csrf_token",csrf_token());
    }

//-----------------------------------------------------------------------------------------

    public function registrazione(){

        $request=request();
        $errors=$this->errors($request);
        if($errors === 0){

            $password = $request["password"];
            $password = password_hash($password,PASSWORD_BCRYPT);
            
            $nuovoUtente = Utente::create([
                'nome' => $request['nome'],
                'cognome'=> $request['cognome'],
                'password'=> $password,
                'username' => $request['username'],
                'mail'=> $request['mail'],
                'eta'=> $request['eta']
            ]);

            if($nuovoUtente){
                Session::put('username',$nuovoUtente->username);
                Session::put('id',$nuovoUtente->id);

                return view('homepage');
            }
            else{
                return view('iscrizione')->with('errore',1)->with("csrf_token",csrf_token()); //non sono riuscito a creare nuovo utente
            }
        }
            else{
                return view('iscrizione')->with('errore',1)->with("csrf_token",csrf_token());
            }
        
    }

//-----------------------------------------------------------------------------------------


    public function errors($data){

        $error= 0;

        if (!filter_var($data['mail'], FILTER_VALIDATE_EMAIL)) {
            $error= 1;
        } else {
            $mail = utente::where('mail', $data['mail'])->exists();
            if ($mail) {
                $error= 1;
            }
        }
        if (strlen($data["password"]) < 8 || strlen($data["password"])> 20) {
            $error= 1;
        }
        if (strcmp($data["password"], $data["conferma_password"]) !== 0) {
            $error= 1;
        }

        $username = utente::where('username', $data['username'])->exists();
        if ($username) {
            $error= 1;
        }
        return $error;
    }


    public function controllaMail($q) {
        $utente=utente::where('email',$q)->exists();
        return response()->json(array('exists'=>$utente));
     }
     public function controllaUsername($q) {
         $utente=utente::where('username',$q)->exists();
         return response()->json(array('exists'=>$utente));
     }


}

?>

