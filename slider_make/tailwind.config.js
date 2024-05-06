/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js}"],
  theme: {
    extend: {
      scale: {
        'flip': '-1',
      },
    },
  },
  plugins: [],
}