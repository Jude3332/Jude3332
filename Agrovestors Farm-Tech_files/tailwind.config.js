/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}"],
  theme: {
    screens: {
      'xl': {'max': '1279px'},
      // => @media (max-width: 1279px) { ... }

      'lg': {'max': '1023px'},
      // => @media (max-width: 1023px) { ... }
    
      'md': {'max': '950px'},
      // => @media (max-width: 767px) { ... }

      'sm': {'max': '645px'},
      // => @media (max-width: 639px) { ... }
    },
    extend: {},
  },
  plugins: [],
}