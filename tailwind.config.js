module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter']
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        //require('daisyui'),
        require('@tailwindcss/forms'),
    ],
}
