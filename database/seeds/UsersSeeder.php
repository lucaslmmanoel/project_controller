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
            'id_perfil' => '1',
            'password'  => bcrypt(123123),
        ]);

        User::create([
            'name'      => 'Worldpsych',
            'email'     => 'l@l.com',
            'id_perfil' => '1',
            'password'  => bcrypt(123123),
        ]);

        User::create([
            'name'      => 'Teste Gerente',
            'email'     => 't@t.com',
            'id_perfil' => '2',
            'password'  => bcrypt(123123),
        ]);

        User::create([
            'name'      => 'Teste Funcionário',
            'email'     => 'f@f.com',
            'id_perfil' => '3',
            'password'  => bcrypt(123123),
        ]);
    }
}
