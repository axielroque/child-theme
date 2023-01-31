/** @type {import('tailwindcss').Config} */
module.exports = {
  purge: [
    '**/*.php',
    './src/**/*.css',
    './src/**/*.js',
  ],
  // purge: ["./src/**/*.css", "./**/*.html"],
  darkMode: 'class',
  theme: {
    extend: {},
  },
  plugins: [],
}

