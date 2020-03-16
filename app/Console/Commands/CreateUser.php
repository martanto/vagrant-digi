<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user {email : Email user baru} {password=default : Masukkan Password baru}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Membuat User baru';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Menambahkan Data User....');

        User::firstOrCreate(
            [
                'email' =>  $this->argument('email')
            ],
            [
                'name' => 'Martanto',
                'phone' => '085236600055',
                'is_active' => 1,
                'password' => $this->argument('password')
            ]
        );

        return $this->info('User berhasil ditambahkan');

    }
}
