<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NavigationLink;

class NavigationLinkSeeder extends Seeder
{
    public function run(): void
    {
        NavigationLink::truncate();

        // Grupo 'Navegação'
        NavigationLink::create(['text' => 'Página Inicial', 'url' => '#hero', 'group' => 'Navegação', 'order' => 1, 'new_tab' => false]);
        NavigationLink::create(['text' => 'Responsável', 'url' => '#responsible', 'group' => 'Navegação', 'order' => 2, 'new_tab' => false]);
        NavigationLink::create(['text' => 'Princípios', 'url' => '#principles', 'group' => 'Navegação', 'order' => 3, 'new_tab' => false]);
        NavigationLink::create(['text' => 'Projetos e Serviços', 'url' => '#actions', 'group' => 'Navegação', 'order' => 4, 'new_tab' => false]);
        NavigationLink::create(['text' => 'Prêmios', 'url' => '#awards', 'group' => 'Navegação', 'order' => 5, 'new_tab' => false]);
        NavigationLink::create(['text' => 'Localização', 'url' => '#location', 'group' => 'Navegação', 'order' => 6, 'new_tab' => false]);
        NavigationLink::create(['text' => 'Notícias', 'url' => '#news', 'group' => 'Navegação', 'order' => 7, 'new_tab' => false]);

        // Grupo 'Transparência'
        NavigationLink::create(['text' => 'Portal da Transparência', 'url' => 'https://transparencia.sorriso.mt.gov.br', 'group' => 'Transparência', 'order' => 1, 'new_tab' => true]);
        NavigationLink::create(['text' => 'Ouvidoria', 'url' => 'https://ouvidoria.sorriso.mt.gov.br', 'group' => 'Transparência', 'order' => 2, 'new_tab' => true]);
        NavigationLink::create(['text' => 'Acesso à Informação', 'url' => 'https://acessoinformacao.sorriso.mt.gov.br', 'group' => 'Transparência', 'order' => 3, 'new_tab' => true]);
    }
}
