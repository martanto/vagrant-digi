<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory('App\User', 100)->make();

        foreach ($users as $user) {
            repeat:
            try {
                $user->save();
            } catch (\Illuminate\Database\QueryException $e) {
                $user = factory('App\User')->make();
                goto repeat;
            }
        }
    }
}
