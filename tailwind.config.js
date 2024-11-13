import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figshest', ...defaultTheme.fontFamily.sans],
            },
            maxWidth: {
                '153px': '153px', // добавляем кастомный maxWidth
              },
            lineHeight: {
                '17px': '17px',
              },
            letterSpacing: {
                '7p': '0.07em', // 7% от ширины шрифта (примерный эквивалент)
              },
              width: {
                '165': '165px',
              },
              colors: {
                'btn-color': '#40ADFF',
              },
              height: {
                '70': '70px',
              },
              margin: {
                '89px': '89px',
              },
              margin:{
                '96': '96px'
              },
        },
    },
    plugins: [],
};
