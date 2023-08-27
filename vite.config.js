import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// import * as bs from 'bootstrap-icons';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    // resolve: {
    //     alias: {
    //         '@/': path.join(__dirname, '/resources/ts/src/'),
    //         '~': path.join(__dirname, '/node_modules/'),
    //     },
    // },
});
