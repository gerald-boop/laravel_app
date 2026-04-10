import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        host: '0.0.0.0',
        port: 5174,
        strictPort: true,
        origin: process.env.CODESPACE_NAME
            ? `https://${process.env.CODESPACE_NAME}-5174.${process.env.GITHUB_CODESPACES_PORT_FORWARDING_DOMAIN}`
            : 'http://localhost:5174',
        hmr: {
            host: process.env.CODESPACE_NAME
                ? `${process.env.CODESPACE_NAME}-5174.${process.env.GITHUB_CODESPACES_PORT_FORWARDING_DOMAIN}`
                : 'localhost',
            protocol: process.env.CODESPACE_NAME ? 'wss' : 'ws',
        },
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
