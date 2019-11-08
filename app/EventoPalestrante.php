<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventoPalestrante extends Model
{
    public function palestrante() {
        return $this->hasOne('App\Palestrante', 'id', 'idPalestrante');
    }
}
