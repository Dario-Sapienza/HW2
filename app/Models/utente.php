<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class utente extends Model {

    protected $table = 'utente';

    public $timestamps=false;

    protected $fillable = [
        'username','mail','password','nome','cognome','eta'
    ];

    public function azioni_news(){
        return $this->hasMany('App\Models\azioni_news');
        }


    public function preferiti(){
        return $this->hasOne('App\Models\preferiti');
        }
    

}
?>
