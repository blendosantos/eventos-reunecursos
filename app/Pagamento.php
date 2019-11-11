<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{

    public function participante() {
        return $this->hasOne('App\Participante', 'id', 'idParticipante');
    }

}
