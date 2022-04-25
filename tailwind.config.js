const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            height: {
                "5v" : "5vh",
                "10v" : "10vh",
                "15v" : "15vh",
                "70v" : "70vh",

            },
            margin: {
                "mlp25" : "margin-left: 25%",
                "mrp25" : "margin-right: 25%",

            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
