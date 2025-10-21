<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteSetting;

class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        SiteSetting::truncate();

        SiteSetting::create(['key' => 'address', 'value' => "Rua Eurico Dutra, Nº 72\nCentro, Sorriso - MT"]);
        SiteSetting::create(['key' => 'email', 'value' => 'controladoria@sorriso.mt.gov.br']);
        SiteSetting::create(['key' => 'hours', 'value' => 'das 07:00 às 13:00']);
        SiteSetting::create(['key' => 'phone', 'value' => '(66) 3545-0000']);
    }
}
