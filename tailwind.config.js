import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: "1rem",
                lg: "50px",
                xl: "100px",
            },
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                poppins: "Poppins, sans-serif",
            },
            colors: {
                "dark-indigo": "#0D0322",
                primary: "#321E1E",
                secondary: "#CD1818",
                "butter-yellow": "#4E3636",
                "lavender-pink": "#DF82CB",
                "persian-pink": "#DF82CA",
                "iron-grey": "#DAD5E4",
                "pastel-purple": "#A99FBD",
                "bluish-purple": "#38255F",
                "smoke-purple": "#A497BE",
                "os": "#116D6E",
                
                
                "mr": "#4E3636"
            },
        },
    },

    plugins: [forms, typography],
};
