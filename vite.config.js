import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({

    css: {
        devSourcemap: true, // Enable CSS source maps in development
      },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js',
            ],
            refresh: true,
            css: {
                devSourcemap: true, // Enable CSS source maps in development
              },
        }),
        
        
    ],
    
});

