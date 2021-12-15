<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    public function regions()
    {
        return $this->belongsTo('App\Region','region_id');
        // return $this->belongsTo(Region::class);
    }

    public function pharmacies()
    {
        return $this->hasMany('App\Pharmacie');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'region_id',
    ];
}
