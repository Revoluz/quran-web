/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                jktsans: ["Plus Jakarta Sans"],
                trocchi: ["Trocchi"],
                quran: ["Amiri Quran"],
                surah: ["Amiri"],
                // custom font declaration tailwindcss
                // quran: ["'Al Qalam Quran Majeed'"],
                // surah: ["'Al Qalam Quran Majeed'"],
            },
            lineHeight: {
                "extra-loose": "2.5",
                12: "4.5rem",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
