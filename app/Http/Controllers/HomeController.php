<?php

namespace App\Http\Controllers;

use App\Models\Page; // Importar o modelo
use App\Service;
use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;


class homeController extends Controller
{
    public function index()
    {
        $page = Page::first();
        $content = Content::first();
        $services = Service::all()->where("active","1");
        return view('home.index', compact('page','content','services'));
    }

    public function clear(){
         Artisan::call('config:clear');
         Artisan::call('cache:clear');
         Artisan::call('view:clear');

         return redirect()->back()->with('status', 'Config cache cleared!');
    }
}
