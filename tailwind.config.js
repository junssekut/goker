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
                'mn book': ['MnBook'],
                'mnbold': ['MnBold'],
                'britReg': ['britReg'],
                'britHeavy': ['britHeavy'],
                'britBlack': ['britBlack'],
                'helvetica': ['helvetica']
            },
            colors: {
                'footer' : '#101820',
                'ijoGojek': '#00AA13',
                'kuningGojek': '#F7CE55',
                'unguGojek': '#762582'
            },
            screens: {
                md: '1124px'
            },
            zIndex: {
                9: '9', 
            }
        },
    },
    plugins: [],
};
