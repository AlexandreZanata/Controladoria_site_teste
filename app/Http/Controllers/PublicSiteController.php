<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Award;
use App\Models\NavigationLink;
use App\Models\Principle;
use App\Models\Responsible;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class PublicSiteController extends Controller
{
    public function index()
    {
        // Buscar dados do banco
        $principles = Principle::orderBy('created_at')->get();
        $actions = Action::orderBy('created_at')->get();
        $awards = Award::orderBy('created_at')->get();
        $responsible = Responsible::first();
        $navLinks = NavigationLink::where('group', 'Navegação')->orderBy('order')->get();
        $transparencyLinks = NavigationLink::where('group', 'Transparência')->orderBy('order')->get();

        // Buscar configurações do site
        $settings = SiteSetting::all()->keyBy('key');

        return view('welcome', compact(
            'principles',
            'actions',
            'awards',
            'responsible',
            'navLinks',
            'transparencyLinks',
            'settings'
        ));
    }
}
