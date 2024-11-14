import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            transparent: "transparent",
            current: "currentColor",
            background: "#ffffff",
            foreground: "#000000",
            primary: {
                lighter: "#53B5FF",
                DEFAULT: "#40adff",
                darker: "#3A9CE6",
                detailed: "#242627",
            },
            neutral: {
                lighter: "#F5F5F5",
                DEFAULT: "#d9d9d9",
                darker: "#686868",
                light: "#606567",
                form: "#d6d6d6"
            },
        },
        extend: {
            fontFamily: {
                sans: ["Inter Variable", ...defaultTheme.fontFamily.sans],
                
            },
            spacing: {
                15: "3.75rem",
                "screen-1.5xl": "1400px",
            },
            padding: {
                '75px': '75px', 
              },
              width: {
                '434px': '434px',
                '650px': '650px',
                
              },
              height: {
                '290px': '290px',
              }
        },
    },
    plugins: [],
};
