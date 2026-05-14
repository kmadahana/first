import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/**/*.php',
    ],
    safelist: [
        {pattern: /bg-(red|green|gray|white)-(50|100|200|300|400|500|600|700|800|900|950)/},
        {pattern: /text-(red|green|gray|white)-(50|100|200|300|400|500|600|700|800|900|950)/},
        {pattern: /border-(red|green|gray)-(500|600|700|800)/},
        {pattern: /from-(red|green|gray)-(800|900|950)/},
        {pattern: /via-(gray)-(900|950)/},
        {pattern: /to-(gray)-(950)/},
        'min-h-screen', 'flex', 'hidden', 'lg:flex', 'w-1/2', 'w-full',
        'lg:w-1/2', 'relative', 'absolute', 'inset-0', 'overflow-hidden',
        'object-cover', 'rounded-xl', 'z-10', 'transition',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [forms],
};