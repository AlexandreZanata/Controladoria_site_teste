<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Principle;

class PrincipleSeeder extends Seeder
{
    public function run(): void
    {
        Principle::truncate(); // Limpa a tabela

        Principle::create([
            'title' => 'MISSÃO',
            'description' => 'Zelar pela qualidade e regularidade da aplicação dos recursos públicos, para satisfação do interesse social.',
            'icon_path' => 'img/icons8-missão-100.png'
        ]); //

        Principle::create([
            'title' => 'VISÃO',
            'description' => 'Ser reconhecido como um Órgão da Administração Municipal que prima pela probidade, ética, transparência, imparcialidade, eficiência e efetividade.',
            'icon_path' => 'img/icons8-visível-100.png'
        ]); //

        Principle::create([
            'title' => 'VALORES',
            'description' => 'Transparência, Ética, Imparcialidade, Eficiência, Foco do Cidadão e Probidade.',
            'icon_path' => 'img/icons8-diamante-100.png'
        ]); //
    }
}
