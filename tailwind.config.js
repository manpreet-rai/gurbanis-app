/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            fill: ['hover', 'focus'], // this line does the trick
        },
    },
    plugins: [
        require('tailwind-scrollbar'),
        require("@tailwindcss/forms")
    ],
}
