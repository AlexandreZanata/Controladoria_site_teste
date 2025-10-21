<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Action;

class ActionSeeder extends Seeder
{
    public function run(): void
    {
        Action::truncate();

        Action::create(['title' => 'Ouvidoria', 'description' => 'Denúncias, reclamações e elogios podem ser feitos diretamente através do nosso canal de ouvidoria.']); //
        Action::create(['title' => 'Auditoria', 'description' => 'Realizamos auditorias internas para avaliar a qualidade dos serviços públicos, a legalidade dos contratos e a eficiência dos programas de governo.']); //
        Action::create(['title' => 'Transparência', 'description' => 'Garantimos o acesso à informação e promovemos a transparência das ações governamentais.']); //
        Action::create(['title' => 'Controle e Fiscalização', 'description' => 'Verificamos se os atos administrativos estão de acordo com a lei, a moralidade e a eficiência.']); //
        Action::create(['title' => 'SigaDoc', 'description' => 'Sistema Integrado de Gestão Arquivística Documental para gestão segura e eficiente de documentos.']); //
    }
}
