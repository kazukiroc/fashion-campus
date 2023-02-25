/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      spacing: {
        '50': '12.5rem',
        '100': '26.25rem',
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
