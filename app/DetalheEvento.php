<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalheEvento extends Model
{
    public function banner() {
        return $this->hasOne('App\Midia', 'id', 'idBanner');
    }
}
