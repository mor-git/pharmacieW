<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacie extends Model
{
    public function communes()
    {
        return $this->belongsTo('App\Commune','commune_id');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
