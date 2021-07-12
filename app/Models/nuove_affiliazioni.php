<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nuove_affiliazioni extends Model {

    protected $table = 'nuove_affiliazioni';

    public $timestamps=false;

    protected $fillable = [
        'indirizzo','nome'
    ];

}
?>
