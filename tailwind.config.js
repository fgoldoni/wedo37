const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');
const colorSaveList = [];
const extendeColors = {};

for (const key in colors) {
    extendeColors[key] = colors[key];

    [100, 200, 300, 400, 500, 600, 700, 800, 900].forEach(colorValue => {
        colorSaveList.push(`text-${key}-${colorValue}`);
        colorSaveList.push(`bg-${key}-${colorValue}`);
        colorSaveList.push(`hover:bg-${key}-${colorValue}`);
        colorSaveList.push(`group-hover:text-${key}-${colorValue}`);
        colorSaveList.push(`group-hover:bg-${key}-${colorValue}`);
        colorSaveList.push(`hover:text-${key}-${colorValue}`);
        colorSaveList.push(`ring-${key}-${colorValue}`);
        colorSaveList.push(`focus:ring-${key}-${colorValue}`);
        colorSaveList.push(`focus:border-${key}-${colorValue}`);
        colorSaveList.push(`focus-within:ring-${key}-${colorValue}`);
        colorSaveList.push(`border-${key}-${colorValue}`);
        colorSaveList.push(`from-${key}-${colorValue}`);
        colorSaveList.push(`to-${key}-${colorValue}`);
    });
}

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',

        './vendor/rappasoft/laravel-livewire-tables/resources/views/**/*.blade.php',
        './vendor/wire-elements/modal/resources/views/*.blade.php',
        './vendor/wireui/wireui/resources/**/*.blade.php',
        './vendor/wireui/wireui/ts/**/*.ts',
        './vendor/wireui/wireui/src/View/**/*.php'
    ],
    safelist: [
        'md:max-w-xl',
        'sm:max-w-2xl',
        'sm:max-w-3xl',
        'sm:max-w-4xl',
        'lg:max-w-2xl',
        'lg:max-w-3xl',
        'lg:max-w-4xl',
        ...colorSaveList
    ],
    theme: {
        extend: {
            colors: {
                primary: colors.teal,
                secondary: colors.slate,
                gray: colors.slate,
                orange: colors.orange,
                positive: colors.emerald,
                warning: colors.amber,
                negative: colors.red,
                info: colors.sky,
            },
            inset: {
                '-0.5': '-0.125rem',
            },
            spacing: {
                44: '11rem',
                18: '4.5rem',
                95: '23.75rem',
                125: '31.25rem',
                140: '35rem'
            },
            opacity: {
                15: '.15',
                30: '0.3',
                40: '0.4',
            },
            minHeight: {
                '(screen-content)': 'calc(100vh - 9.625rem)',
            },
            fontFamily: {
                sans: ['Josefin Sans'],
                mono: ['Operator Mono', ...defaultTheme.fontFamily.sans],
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/line-clamp'),
        require('tailwind-scrollbar')
    ],
};
