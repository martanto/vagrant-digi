<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SdsIndex;
use App\SeismicStation;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$scnls = SeismicStation::all()->pluck('scnl')->toArray();

$factory->define(SdsIndex::class, function (Faker $faker) use ($scnls) {

    $scnl = $faker->randomElement($scnls);
    $sps = array(50,100);

    return [
        'filename' => Str::random(10),
        'scnl' => $scnl,
        'date' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now')->format('Y-m-d'),
        'sampling_rate' => $sps[array_rand($sps)],
        'min_amplitude' => rand(-100,-1),
        'max_amplitude' => rand(1,100),
        'availability' => rand(10,100),
        'filesize' => rand(100,1000),
    ];
});
