import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0', // Allows Vite to be accessed from outside the container
        port: 5173,      // Default port
        hmr: {
            host: 'localhost', // HMR should point to the host
            protocol: 'ws',    // Use WebSockets for HMR
            port: 5173,        // Port for HMR (same as server port)
        },
    },
});
