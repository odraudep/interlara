/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.ts",
    ],
    theme: {
        extend: {
            container: {
                center: true,
            },
        },
    },
    plugins: [],
};
