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
                prompt: ['Prompt', 'sans-serif'],
                kanit: ['Kanit', 'sans-serif'],
            },

        },
    },

    plugins: [forms],
};
