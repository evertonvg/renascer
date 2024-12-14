<?php

namespace App\Http\Controllers;

use App\Models\Page; // Importar o modelo
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class homeController extends Controller
{
    public function index()
    {
        // Buscar todos os registros do modelo Home
        $page = Page::first();

        // Retornar a visão com os dados (por enquanto podemos apenas exibir)
        return view('home.index', compact('page'));
    }

    public function clear(){
         // Executa o comando php artisan config:clear
         Artisan::call('config:clear');
         Artisan::call('cache:clear');
         Artisan::call('view:clear');

         // Exibe uma mensagem ou redireciona após a execução do comando
         return redirect()->back()->with('status', 'Config cache cleared!');
    }
}
