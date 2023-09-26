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
            },
            fontFamily: {
                roboto: ['Roboto', 'sans-serif'],
                roboto_serif: ['Roboto Serif', 'serif'],
            },
        },
    },
    plugins: [],
}
