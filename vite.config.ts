import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    plugins: [
        tailwindcss(),
    ],

    build: {
        outDir: 'assets',       // output relative to Kirby's structure
        rollupOptions: {
            input: 'src/main.ts', // your TS entry point (import your CSS here)
            output: {
                entryFileNames: 'main.js',
                assetFileNames: 'main.css',
            },
        },
        cssCodeSplit: false,    // ensures a single CSS file
        minify: true,
    },
})