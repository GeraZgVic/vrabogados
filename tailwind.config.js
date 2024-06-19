/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/**.js",
      "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        'dmserif': ['DM Serif', 'serif'],
        'com': ['Comfortaa', 'cursive'],
        'work-sans' : ['Work Sans', 'sans-serif']
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('tailwindcss-animated'),
    require('tailwind-scrollbar-hide')
  ],
}

