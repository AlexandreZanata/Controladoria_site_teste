<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Responsible;

class ResponsibleSeeder extends Seeder
{
    public function run(): void
    {
        Responsible::truncate();

        Responsible::create([
            'name' => 'Laércio Costa Garcia',
            'role' => 'Controlador',
            'about' => 'Formado em Direito na Universidade Federal de Mato Grosso no ano de 2005. Servidor público efetivo desde o ano de 2010, com vasta experiência em controle interno e gestão pública.'
        ]);
    }
}
