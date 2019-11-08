<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{

    public function planos() {
        return $this->hasMany('App\PlanoEvento', 'idEvento', 'id');
    }

    public function banner() {
        return $this->hasOne('App\Midia', 'id', 'idBanner');
    }

    public function destaque() {
        return $this->hasOne('App\Midia', 'id', 'idImagemDestaque');
    }

    public function palestrantes() {
        return $this->hasMany('App\EventoPalestrante', 'idEvento', 'id')->with('palestrante');
    }

    public function programacao() {
        return $this->hasMany('App\DetalheEvento', 'idEvento', 'id')->with('banner');
    }

}
