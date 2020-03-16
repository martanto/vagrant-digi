<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SdsIndex extends Model
{

    protected $casts = [
        'date' => 'datetime:Y-m-d',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'filename',
        'scnl_id',
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
}
