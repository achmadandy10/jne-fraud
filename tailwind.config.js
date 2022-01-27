module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            gridRow: {
                "span-21": "span 21 / span 21",
            },
        },
    },
    plugins: [
        // require('@themesberg/flowbite/plugin'),
    ],
};
