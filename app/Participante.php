<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{

    public function evento() {
        return $this->hasOne('App\Evento', 'id', 'idEvento');
    }

    public function plano() {
        return $this->hasOne('App\PlanoEvento', 'id', 'idPlano');
    }

}
