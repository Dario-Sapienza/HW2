<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class palestra extends Model {

    protected $table = 'palestra';

    public $timestamps=false;

    protected $fillable = [
        'nome','immagine','descrizione'
    ];


    public function preferiti(){
        return $this->hasOne('App\Models\preferiti');
        }

    public function prenotazione_corso(){
        return $this->belongTo('App\Models\prenotazione_corso');
        }    

}
?>
