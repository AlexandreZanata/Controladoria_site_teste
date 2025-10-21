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
            'about' => '<p class="about-text">
                            Formado em <span class="accent">X coisa</span> na Universidade <span
                                class="accent">Y</span> no ano de <span class="accent">DD/MM/YYYY</span>.
                            Servidor público efetivo desde o ano de <span class="accent">YYYY</span>.
                        </p>'
        ]); //
    }
}
