import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
        
    ],
    build: {
        rollupOptions: {
            output: [
              {
                // Primeiro destino
                dir: './public/build', // Primeiro diretório de build
                manifest: true,
              },
              {
                // Segundo destino
                dir: './build', // Segundo diretório de build,
                manifest: true,
              },
            ],
          },
    },
});
