<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class preferiti extends Model {

    protected $table = 'preferiti';

    public $timestamps=false;

    protected $fillable = [
        'utente_id','palestra_id','nome_palestra','immagine','descrizione'
    ];

public function utente(){
return $this->hasOne('App\Models\utente');
}

public function palestra(){
    return $this->hasOne('App\Models\palestra');
    }

}
?>
