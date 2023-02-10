/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            body_bg: "#2A2C39",
            bg_dark: "#252734",
            blue: "00AEEF",
            main_text: "#00aeef",
            color_white: "#ffffff",
            light_gray: "#D9D9D9",
            huva: "#57cbff",
            dalo: "#556674",
            gray2: "#9ca3af",
        },
        extend: {},
    },
    plugins: [],
};
