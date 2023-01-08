import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import {svelte} from "@sveltejs/vite-plugin-svelte";

export default defineConfig({
    plugins: [
        laravel.default({
            input: ['resources/js/main.ts'],
            refresh: true,
        }),
        svelte()
    ],
});
