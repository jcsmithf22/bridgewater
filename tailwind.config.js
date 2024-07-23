const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    theme: {
        fontSize: {
            xs: ['0.75rem', {lineHeight: '1rem'}],
            sm: ['0.875rem', {lineHeight: '1.5rem'}],
            base: ['1rem', {lineHeight: '1.75rem'}],
            lg: ['1.125rem', {lineHeight: '1.75rem'}],
            xl: ['1.25rem', {lineHeight: '2rem'}],
            '2xl': ['1.5rem', {lineHeight: '2.25rem'}],
            '3xl': ['1.75rem', {lineHeight: '2.25rem'}],
            '4xl': ['2rem', {lineHeight: '2.5rem'}],
            '5xl': ['2.5rem', {lineHeight: '3rem'}],
            '6xl': ['3rem', {lineHeight: '3.5rem'}],
            '7xl': ['4rem', {lineHeight: '4.5rem'}],
        },
        extend: {
            transitionTimingFunction: {
                'in-expo': 'cubic-bezier(0.95, 0.05, 0.795, 0.035)',
            },
            borderRadius: {
                '4xl': '2.5rem',
            },
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ['active'],
        }
    },
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.js',
        './resources/**/*.jsx',
        './resources/**/*.ts',
        './resources/**/*.tsx',
        './resources/**/*.php',
        './resources/**/*.vue',
        './resources/**/*.twig',
    ],
    plugins: [
        // require('@tailwindcss/forms'),
        // require('@tailwindcss/typography'),
    ],
}
