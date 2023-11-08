/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'primary': '#34AFE7',
        'secondary': '#9ca3afd9',
        
      },
      fontFamily:{
        'roboto': ['Roboto Slab', 'sans-serif'],
      }
    },
  },
  plugins: [],
}

