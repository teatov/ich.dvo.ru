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
        extend: {
            fontFamily: {
                sans: ["Inter Variable", ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                15: "3.75rem",
                "screen-1.5xl": "1400px",
            },
        },
    },
    plugins: [],
};
