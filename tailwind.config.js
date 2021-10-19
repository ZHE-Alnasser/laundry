const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],


    theme: {
        extend: {
            screens: {
                'print': {'raw': 'print'},
                // => @media print { ... }
            },
            fontFamily: {
                'tajawal': ['Tajawal', 'sans-serif']
            },

            // fontFamily: {
            //     sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            // },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'),
        require("tailwindcss-flip"),
        require('daisyui')],

    daisyui: {
        themes: [
            'light' //@todo custom color based on the ui checkout: https://daisyui.com/docs/add-themes
            ],
        styled: true,
        base: true,
        utils: true,
        logs: false,
        rtl: false,
    },
};
