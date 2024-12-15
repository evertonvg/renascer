<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContatoMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\Page;

class ContatoController extends Controller
{
    public function enviarEmail(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email',
            'telefone' => 'required|string',
            'assunto' => 'required|string|max:255',
        ]);

        $email = Page::first()->email;

        // Dados do formulário
        $dados = $request->only('nome', 'email', 'telefone', 'assunto');

        // Enviar o e-mail
        Mail::to($email)->send(new ContatoMailable($dados));

        return response()->json(['message' => 'E-mail enviado com sucesso!']);
    }
}