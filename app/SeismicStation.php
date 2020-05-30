<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeismicStation extends Model
{
    protected $fillable = [
        'station',
        'channel',
        'network',
        'location',
        'latitude',
        'longitude',
        'elevasi',
        'status',
        'scnl',
    ];

    public function data()
    {
        return $this->hasMany('App\SdsIndex','scnl_id','scnl');
    }

}
