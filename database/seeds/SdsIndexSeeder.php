<?php

use Illuminate\Database\Seeder;

class SdsIndexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sdses = factory('App\SdsIndex', 1000)->make();

        foreach ($sdses as $sds) {
            repeat:
            try {
                $sds->save();
            } catch (\Illuminate\Database\QueryException $e) {
                $sds = factory('App\SdsIndex')->make();
                goto repeat;
            }
        }
    }
}
