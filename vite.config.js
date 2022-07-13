import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/assets/app.assets',
            'resources/js/app.js',
        ]),
    ],
});
