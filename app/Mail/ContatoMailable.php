<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContatoMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $dados;

    /**
     * Cria uma nova instância do Mailable.
     *
     * @param array $dados
     */
    public function __construct($dados)
    {
        $this->dados = $dados;
    }

    /**
     * Constroi o e-mail.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->dados['assunto'])
                    ->view('emails.contato')
                    ->with('dados', $this->dados);
    }
}
