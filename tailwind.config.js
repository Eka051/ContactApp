const { addDynamicIconSelectors } = require('@iconify/tailwind');
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        fontFamily: {
            'sans' : ['SF Pro', 'Helvetica', 'Sans Serif']
        },
        colors : {
          bluePrimary : '#4588FB',
          blueSeconday : '#86DBFE',
          peach : '#E88A55',
          yelPrimary : '#F8C213'
        }
    },
  },
  plugins: [
    addDynamicIconSelectors(),
  ],
}

