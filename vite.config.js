import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/admin.css',
                'resources/js/app.js',
                'resources/js/info-gallery.js',
                'resources/js/cookies.js'
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build',
        manifest: true,
    }
});
