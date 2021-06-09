module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                'sans': ['Roboto', 'Arial', 'sans-serif'],
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
