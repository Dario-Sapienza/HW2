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

class AtletiNewsController extends Controller{

    public function index(){
        return view('atletinews');
    }

    public function news() {
        $json =Http::get('http://api.mediastack.com/v1/news', [
        'access_key' => env("OPEN_APIKEY_NEWS"),
        'keywords' => 'palestra-palestre-Catania-Covid',
        'languages' => 'it',
        'limit' => '21',
        ]);
    
        if(!$json->successful()) return null;
    
        return $json;
    }

    public function atleti() {
        $json =Http::get('https://pixabay.com/api/', [
        'key' => env("OPEN_APIKEY_ATLETI"),
        'q' => 'workout',
        'per_page' => '100',
        ]);
    
        if(!$json->successful()) return null;
    
        return $json;
    }

    public function click_news($titolo){
        $id=Session::get('id');
        
            $click = azioni_news::create([
        
                'utente_id'=>$id,
                'titolo'=>$titolo,
        
            ]);  
            if($click){
    
                return json_encode(['type'=>'si','response'=>"elemento aggiunto "]);
    
                }else
                return json_encode(['type'=>'no','response'=>"elemento non aggiunto "]);

    }
}

?>



