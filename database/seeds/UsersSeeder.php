<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Douglasx',
            'email'     => 'd@d.com',
            'password'  => bcrypt(123123),
        ]);

        User::create([
            'name'      => 'Worldpsych',
            'email'     => 'l@l.com',
            'password'  => bcrypt(123123),
        ]);
    }
}
