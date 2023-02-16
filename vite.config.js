// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import { viteStaticCopy } from 'vite-plugin-static-copy'



export default defineConfig({
    plugins: [
        laravel([
            '/resources/js/app.js',
            '/resources/assets/js/jquery.min.js',
            '/resources/assets/js/bootstrap.bundle.min.js',
            '/resources/assets/js/blockui.min.js',
            '/resources/assets/js/app.js',
            '/resources/assets/js/uploader_bootstrap.js',
            '/resources/assets/js/sortable.min.js',
            '/resources/assets/js/fileinput.min.js']),

        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve:{
        alias:{
            '@': '/resources/js',

        }
    }
});
