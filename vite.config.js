import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';

export default defineConfig({
    server :{
        host: 'localhost',
        port: 8000
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css'
            ],
            refresh: true,
        }),
    ],
});
