import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        manifest: true, // Esto es necesario para Laravel en producción
        outDir: 'public/build', // Usa una ruta relativa sin la barra inicial
        rollupOptions: {
            output: {
                // Coloca los assets correctamente
                entryFileNames: 'assets/[name].js',
                chunkFileNames: 'assets/[name].js',
                assetFileNames: 'assets/[name].[ext]'
            },
        },
    },
});
