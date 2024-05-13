import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    presets: [
        require('./vendor/wireui/wireui/tailwind.config.js')
    ],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",

        "./vendor/wireui/wireui/resources/**/*.blade.php",
        "./vendor/wireui/wireui/ts/**/*.ts",
        "./vendor/wireui/wireui/src/View/**/*.php",

        "./vendor/vildanbina/livewire-wizard/resources/views/*.blade.php"
      ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary': '#052569',
                'primary-hover': '#1C3469',
                'secondary': '#FCC008',
                'tertiary': '#FA0302',
                'success': '#22C55E',
                'danger': '#FA0302',
                'gray-darkest': '#212529',
                'gray-dark': '#353535',
                'gray-light': '#e9ecef',
                'gray-lightest': '#F8F9FA'
              },
        },
    },
    plugins: [forms, typography],
}

