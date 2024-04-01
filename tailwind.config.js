import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    safelist: [
        'text-white',
        'bg-red-300',
        'bg-green-300',
        'bg-blue-300',
        'bg-lime-300',
        'bg-orange-300',
        'bg-slate-300',
        'bg-pink-300',
        'bg-red-700',
        'bg-green-700',
        'bg-blue-700',
        'bg-lime-700',
        'bg-orange-700',
        'bg-slate-700',
        'bg-pink-700',
        'bg-horizon-300',
        'bg-horizon-500',
        'bg-horizon-900',
        'bg-blueapollo-300',
        'bg-blueapollo-500',
        'bg-blueapollo-900',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'brique': {
                    100: '#ffc6c3',
                    300: '#F39995',
                    500: '#CA615B',
                    700: "#A2352F",
                    900: '#75130E',
                },
                'bleu': {
                    100: '#99AAC3',
                    300: '#687FA0',
                    500: '#435E86',
                    700: "#26426B",
                    900: '#0F284D',
                },
                'vert': {
                    100: '#c2fff3ff',
                    300: '#96f3e1ff',
                    500: '#10997E',
                    700: "#057A63",
                    900: '#00604D',
                },
                'blueapollo': {
                    100 : '#00fdff',
                    300 : '#00cdc9',
                    500 : '#00bebc',
                    700 : '#007f8e',
                    900 : '#003f51',
                },
                'automne' : {
                    100 : '#e0a94a',
                    300 : '#db832a',
                    500 : '#d4570b',
                    700 : '#972308',
                    900 : '#5b0605',
                },
                'horizon' : {
                    100 : '#7ba5ec',
                    300 : '#527bbc',
                    500 : '#2f5d82',
                    700 : '#1e4150',
                    900 : '#172b3a',
                }
            },

        },
    },

    plugins: [
        require('@tailwindcss/forms'),
    ],
};
