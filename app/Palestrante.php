<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palestrante extends Model
{
    public function foto() {
        return $this->hasOne('App\Midia', 'id', 'idFoto');
    }
}
