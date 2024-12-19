<?php

return [
    /*
     * O caminho para o arquivo `manifest.json` gerado pelo Vite.
     * O Laravel usará este arquivo para carregar os ativos (JS, CSS, etc.).
     */
    'manifest_path' => public_path('build/manifest.json'), // Caminho padrão

    /*
     * O caminho para os arquivos públicos (gerados pelo Vite) usados no frontend.
     */
    'public_path' => env('VITE_PUBLIC_PATH', '/build'),
];