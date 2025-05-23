import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/css/index.css',
                'resources/css/admin.css',
                'resources/css/biografi.css',
                'resources/css/blog.css',
                'resources/css/dokumentasi.css',
                'resources/css/donasi.css',
                'resources/css/edit.css',
                'resources/css/login.css',
                'resources/css/about.css',
                'resources/css/cekdonasi.css',
                'resources/css/daftardonatur.css',
                'resources/css/editprogram.css',
                'resources/css/headerfooter.css',
                'resources/css/program.css',
                'resources/css/tambahprogram.css',
                'resources/css/layout.css',
            ],
            refresh: true,
        }),
    ],
});
