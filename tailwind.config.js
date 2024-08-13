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
            "light-blue":'#357579',
            "white":'#EEEEEE',
            "cyan":'#76ABAE',
            "red":'#f43063',
            "gray":'#31363F',
            "cyan-dark":'#4ca7ad',
        },
        extend: {
            fontFamily: {
                "Italiana":["Italiana", "sans-serif"],
            }

        },

    },
    plugins: [],
}

