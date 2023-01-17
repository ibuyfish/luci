/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./Modules/**/*.blade.php",
    ],
    theme: {
        container: {
            center: true,
            screens: {
                sm: "600px",
                md: "728px",
                lg: "984px",
                xl: "1240px",
                "2xl": "1660px",
            },
        },
        extend: {
            colors: {
                primary: "#7367f0",
                background: "#161d31",
                secondary: "#283046",
                dark__text: "#d0d2d6",
                text_secondary: "#6E6B7B",
                border: "#404656",
                g_divider: "#A6A4B0",
                active: "#28C76F",
                //////////
                home_primary: "#009B71",
                home_text: "#555555",
                home_light_blue: "#F6F9FB",
            },
        },
    },
    plugins: [],
};
