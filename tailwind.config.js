const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        screens: {
            sm: '576px',
            md: '768px',
            lg: '992px',
            xl: '1200px',
          },
          container: {
            center: true,
            padding: '1rem',
          },
        extend: {
            colors: {
                primary: '#FD3D57'
              },
              fontFamily:{
                poppins:  "'Poppins', sans-serif",
                roboto:  "'Roboto', sans-serif",
              }
        },
        variants: {
            extend: {
              visibility: ['group-hover'],
              display: ['group-hover']
            },
          },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
