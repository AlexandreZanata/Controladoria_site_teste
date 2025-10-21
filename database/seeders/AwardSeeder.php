<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Award;

class AwardSeeder extends Seeder
{
    public function run(): void
    {
        Award::truncate();

        Award::create([
            'title' => 'Selo Diamante',
            'image_path' => 'img/SeloDiamante_PNTP-SemFundo.png',
            'modal_title' => 'Selo Diamante',
            'modal_subtitle' => '98,01%<br><p class="modal-p">de eficiência</p>',
            'modal_description' => 'Sorriso recebeu o Selo Diamante de transparência pública, a premiação representa o mais alto nível de transparência pública, demonstrando o compromisso com a prestação de contas e o investimento dos recursos públicos.'
        ]); //
    }
}
