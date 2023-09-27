/** @type {import('tailwindcss').Config} */

module.exports = {
    content: [
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
            },
            fontFamily: {
                roboto: ['Roboto', 'sans-serif'],
                roboto_serif: ['Roboto Serif', 'serif'],
            },
        },
    },
    plugins: [],
}
