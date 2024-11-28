import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'mnbook': ['MnBook'],
                'mnbold': ['MnBold'],
                'britReg': ['britReg'],
                'britHeavy': ['britHeavy']
            },
            colors: {
                'ijoGojek': '#00AA13',
                'kuningGojek': '#F7CE55',
                'unguGojek': '#762582'
            }
        },
    },
    plugins: [],
};
