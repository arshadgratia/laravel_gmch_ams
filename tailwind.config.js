/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            "blue":'#222831',
            "white":'#EEEEEE',
            "cyan":'#76ABAE'
        },
        extend: {
            fontFamily: {
                "Italiana":["Italiana", "sans-serif"],
            }

        },

    },
    plugins: [],
}

