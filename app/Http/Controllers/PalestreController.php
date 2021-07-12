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

//--------------------------------------------------------------------------------------------------


class PalestreController extends Controller{

    public function index(){
        return view('palestre');
    }

//--------------------------------------------------------------------------------------------------

    public function rimuovi_preferiti($id)
    {

        $session_id = Session::get('id');

        if($session_id)
        {
            $p=preferiti::where('utente_id',$session_id)->where('palestra_id',$id)->delete();

            if($p)
             {
             return json_encode(['type'=>'si','response'=>'preferito rimosso']);
             }
        }
    }  

//-------------------------------------------------------------------------------------------------


    public function carica_preferiti(){

        //carico preferiti
        
        $session_id = Session::get('id');
        
        if($session_id)
        {
        $preferiti=preferiti::where('utente_id',$session_id)->get();
        return response()->json($preferiti);
        }

        return json_encode(1);
        
        }

//-------------------------------------------------------------------------------------------------------


        public function aggiungi_preferiti($id){

            $session_id = Session::get('id');
    
            if($session_id)
            {
                $p=palestra::where('id',$id)->first();

                $nuovoPreferito=preferiti::create([
                'utente_id' => $session_id,
                'palestra_id'=>$id,
                'nome_palestra'=>$p['nome'],
                'immagine'=>$p['immagine'],
                'descrizione'=>$p['descrizione']
                ]);
    
                if($nuovoPreferito){
    
                return json_encode(['type'=>'si','response'=>"elemento aggiunto a preferiti."]);
    
                }
    
            }
    
        }  

 //-------------------------------------------------------------------------------------------------------

        public function carica_contenuti(){

            //carico i contenuti            
            
            $p = palestra::all();
            return $p;
            }
 
            


}


?>
