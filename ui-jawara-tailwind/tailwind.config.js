/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'bg-forms'  : '#F4F8FB',
        'bg-hero'   : '#66CCFF',
        'border1'   : '#BBB9BC',
        'bg-button' : '#00B4D7',
        'bg-button2': '#FF3300',
        'click1'    : '#038FCD',
        'text1'     : '#1E242B',
        'text2'     : '#155B74',
        'text3'     : '#999999',
        'yellow1'   : '#FFF000',
      },

      fontFamily: {
        'poppins': ['Poppins', 'sans-serif'],
    },
    },
  },
  plugins: [],
}