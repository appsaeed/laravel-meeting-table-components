
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                'open-sans': ['"Open Sans"', 'sans-serif'],
                'josefin-sans': ['"Josefin Sans"', 'sans-serif'],
                'work-sans': ['"Work Sans"', 'sans-serif'],
            },
        },
    },

    plugins: [
        function ({ addUtilities }) {
            const newUtilities = {
                'body': {
                    'font-family': '"Work Sans", sans-serif',
                },
            }
            addUtilities(newUtilities)
        }
    ],
};
