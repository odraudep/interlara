const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.ts',
    ],

    theme: {
        extend: {
            container: {
                center: true,
            },
            colors: {
                primary: 'var(--clr-primary)',
                primary_dark1: 'var(--clr-primary-dark1)',
                primary_dark2: 'var(--clr-primary-dark2)',
                success_bg: '#a3cfbb',
                success_text: '#0a3622',
                error_bg: '#f1aeb5',
                error_text: '#58151c',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                roboto: ['Roboto', ...defaultTheme.fontFamily.sans],
                roboto_serif: [
                    'Roboto Serif',
                    ...defaultTheme.fontFamily.serif,
                ],
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
