import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'mn book': ['MnBook'],
                'mnbook': ['MnBook'],
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
                'unguGojek': '#762582',
                'biruGojek' : '#00ADD6',
                'kuningTuaGojek' : '#F09A1F'
            },
            screens: {
                md: '1124px'
            },
            zIndex: {
                9: '9', 
            }
        },
    },
    plugins: [
        require('@tailwindcss/line-clamp'),
    ],
};
