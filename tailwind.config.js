import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                k2d: ['K2D', ...defaultTheme.fontFamily.sans],
                // prompt: ['Prompt', ...defaultTheme.fontFamily.serif],
                // kanit: ['Kanit', ...defaultTheme.fontFamily.serif],
                prompt: ['Prompt', 'sans-serif'],
                kanit: ['Kanit', 'sans-serif'],
                varela: ['Varela Round', 'sans-serif']
            },
            colors: {
                orange: {
                    '50': '#ea4a18'
                },
            }
        },
    },

    plugins: [forms],
};
