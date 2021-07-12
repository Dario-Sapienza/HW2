<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class azioni_news extends Model {

    protected $table = 'azioni_news';

    public $timestamps=false;

    protected $fillable = [
        'utente_id','titolo'
    ];

public function utente(){
return $this->belongTo('App\Models\utente');
}

}
?>
