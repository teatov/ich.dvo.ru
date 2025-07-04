import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import dotenv from "dotenv";

dotenv.config();

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/tiptap-editor.js",
            ],
            refresh: true,
        }),
    ],
    server: {
        host: true,
        port: 5173,
        hmr: {
            host: process.env.APP_NAME,
        },
    },
});
