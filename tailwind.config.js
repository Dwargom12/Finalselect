import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';


/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class', // Enable dark mode using the 'class' strategy
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        'node_modules/preline/dist/*.js',

    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            // You can add custom colors, but this isn't necessary unless you want specific shades
            colors: {
                dark: {
                    background: '#1a202c', // Optional: Dark mode background color
                    text: '#f7fafc', // Optional: Dark mode text color
                },
            },
        },
    },

    plugins: [forms,  
        require('preline/plugin'),],
};
