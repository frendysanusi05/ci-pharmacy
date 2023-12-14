/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/**/*.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        poppins : ['Poppins', 'sans-serif']
      }
    },
  },
  plugins: [],
}
