<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prenotazione_corso extends Model {

    protected $table = 'prenotazione_corso';

    public $timestamps=false;

    protected $fillable = [
       'palestra_id','corso','cognome','username'
    ];

public function palestra(){
    return $this->belongTo('App\Models\palestra');
    }

}
?>
