<?php

use Illuminate\Database\Seeder;
use App\PerfilModel as Perfil;

class PerfisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perfil::create([
            'nome'    => 'Administrador',
            'desc'    => 'Realizar auditoria no sistema e administrar os gerentes e funcionários.',
            'status'  => 'A',
        ]);

        Perfil::create([
            'nome'    => 'Gerente',
            'desc'    => 'Gerenciar projetos e os funcionários do sistema.',
            'status'  => 'A',
        ]);

        Perfil::create([
            'nome'    => 'Funcionário',
            'desc'    => '-',
            'status'  => 'A',
        ]);
    }
}
