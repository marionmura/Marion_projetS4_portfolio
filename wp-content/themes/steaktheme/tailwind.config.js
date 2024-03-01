/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    colors: {
      "blanc": "#FFFFFF",
      "noir": "#000000",
      "blanc-ivoir": "#F6F2EA",
      "gris": "#171C30",
      "transparent": "transparent",
    },
    fontFamily: {
      "Paytone": ["Paytone One", "sans-serif"],
    },
    fontSize: {
      '2xl': '3rem',
    },
    screens: {
      'xl': { 'max': '1439px' },
      'lg': { 'max': '1023px' },
      'md': { 'max': '767px' },
      'sm': { 'max': '424px' },
    },
    extend: {},
  },
  plugins: [],
}
