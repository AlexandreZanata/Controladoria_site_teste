<?php

namespace Database\Seeders;

use App\Models\Action;
use App\Models\Award;
use App\Models\NavigationLink;
use App\Models\Principle;
use App\Models\Responsible;
use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteDataSeeder extends Seeder
{
    public function run(): void
    {
        // Princípios
        Principle::create([
            'title' => 'MISSÃO',
            'description' => 'Zelar pela qualidade e regularidade da aplicação dos recursos públicos, para satisfação do interesse social.',
            'icon_path' => 'img/icons8-missão-100.png'
        ]);

        Principle::create([
            'title' => 'VISÃO',
            'description' => 'Ser reconhecido como um Órgão da Administração Municipal que prima pela probidade, ética, transparência, imparcialidade, eficiência e efetividade.',
            'icon_path' => 'img/icons8-visível-100.png'
        ]);

        Principle::create([
            'title' => 'VALORES',
            'description' => 'Transparência, Ética, Imparcialidade, Eficiência, Foco do Cidadão e Probidade.',
            'icon_path' => 'img/icons8-diamante-100.png'
        ]);

        // Ações
        Action::create([
            'title' => 'Ouvidoria',
            'description' => 'Denúncias, reclamações e elogios podem ser feitos diretamente através do nosso canal de ouvidoria.'
        ]);

        Action::create([
            'title' => 'Auditoria',
            'description' => 'Realizamos auditorias internas para avaliar a qualidade dos serviços públicos, a legalidade dos contratos e a eficiência dos programas de governo.'
        ]);

        Action::create([
            'title' => 'Transparência',
            'description' => 'Garantimos o acesso à informação e promovemos a transparência das ações governamentais.'
        ]);

        Action::create([
            'title' => 'Controle e Fiscalização',
            'description' => 'Verificamos se os atos administrativos estão de acordo com a lei, a moralidade e a eficiência.'
        ]);

        Action::create([
            'title' => 'SigaDoc',
            'description' => 'Sistema Integrado de Gestão Arquivística Documental para gestão segura e eficiente de documentos.'
        ]);

        // Prêmios
        Award::create([
            'title' => 'Selo Diamante',
            'image_path' => 'img/SeloDiamante_PNTP-SemFundo.png',
            'modal_title' => 'Selo Diamante',
            'modal_subtitle' => '98,01%',
            'modal_description' => 'Sorriso recebeu o Selo Diamante de transparência pública, a premiação representa o mais alto nível de transparência pública, demonstrando o compromisso com a prestação de contas e o investimento dos recursos públicos.'
        ]);

        // Responsável
        Responsible::create([
            'name' => 'Laércio Costa Garcia',
            'role' => 'Controlador',
            'about' => 'Formado em Direito na Universidade Federal de Mato Grosso no ano de 2005. Servidor público efetivo desde o ano de 2010.'
        ]);

        // Links de Navegação
        $navLinks = [
            ['Página Inicial', '#hero', 'Navegação', 1, false],
            ['Responsável', '#responsible', 'Navegação', 2, false],
            ['Princípios', '#principles', 'Navegação', 3, false],
            ['Projetos e Serviços', '#actions', 'Navegação', 4, false],
            ['Prêmios', '#awards', 'Navegação', 5, false],
            ['Localização', '#location', 'Navegação', 6, false],
            ['Notícias', '#news', 'Navegação', 7, false],
        ];

        foreach ($navLinks as $link) {
            NavigationLink::create([
                'text' => $link[0],
                'url' => $link[1],
                'group' => $link[2],
                'order' => $link[3],
                'new_tab' => $link[4],
            ]);
        }

        // Links de Transparência
        $transparencyLinks = [
            ['Portal da Transparência', 'https://transparencia.sorriso.mt.gov.br', 'Transparência', 1, true],
            ['Ouvidoria', 'https://ouvidoria.sorriso.mt.gov.br', 'Transparência', 2, true],
            ['Acesso à Informação', 'https://acessoinformacao.sorriso.mt.gov.br', 'Transparência', 3, true],
        ];

        foreach ($transparencyLinks as $link) {
            NavigationLink::create([
                'text' => $link[0],
                'url' => $link[1],
                'group' => $link[2],
                'order' => $link[3],
                'new_tab' => $link[4],
            ]);
        }

        // Configurações do Site
        $settings = [
            ['address', 'Rua Eurico Dutra, Nº 72, Centro, Sorriso - MT'],
            ['email', 'controladoria@sorriso.mt.gov.br'],
            ['hours', 'das 07:00 às 13:00'],
            ['phone', '(66) 3545-0000'],
        ];

        foreach ($settings as $setting) {
            SiteSetting::create([
                'key' => $setting[0],
                'value' => $setting[1],
            ]);
        }
    }
}
