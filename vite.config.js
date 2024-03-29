import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // 'resources/css/app.css',
                'resources/css/bootstrap.min.css',
                'resources/css/all.css',
                'resources/css/icofont.css',
                'resources/css/styles.css',

                'resources/js/app.js',
                'resources/js/bootstrap.min.js',
                'resources/js/script.js',
            ],
            refresh: true,
        }),
    ],
});
