<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SdsIndex extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'filename',
        'scnl',
        'date',
        'sampling_rate',
        'min_amplitude',
        'max_amplitude',
        'availability',
        'filesize'
    ];

    protected $guarded  = [
        'id'
    ];

    protected $dates = [
        'date',
    ];
}
