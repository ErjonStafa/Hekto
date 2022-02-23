const defaultTheme = require('tailwindcss/defaultTheme')
const { colors: defaultColors } = require('tailwindcss/defaultTheme')

const colors = {
  ...defaultColors,
  ...{
      "blu":'#0D0E43',
      'violet': '#7E33E0',
      'off-purple': '#9F63B5',
      'pink': '#FB2E86',
      'lightgrey': '#E7E6EF',
      'grey': '#F2F0FF',
      'lightpink': '#ECD2FA',
      'darkblue': '#1A0B5B',
      'open-blue': '#05E6B7',
      'sky-blue': '#F3F9FF',
      'background-grey': '#F6F7FB',
      'blue': '#2F1AC4',
      'off-navy-blue': '#3F509E',
      'navy-blue': '#151875',
      'panetone-purple': '#E0D3F5',

  },
}

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      'colors': colors,
      'width': {
        '92': '368px',
        '100': '400px',
        '104': '416px',
        '108': '432px',
        '112': '448px',
      },
      'height': {
        '92': '368px',
        '100': '400px',
        '104': '416px',
        '108': '432px',
        '112': '448px',
      },
      'lineHeight': {
        '20': '82px',
      },
      'boxShadow': {
        'custom': '0 0 25px 0 rgba(0, 0, 0, 0.1)',
      }
    },
    fontFamily:{
      'sans': [ ...defaultTheme.fontFamily.sans],
      'serif': [...defaultTheme.fontFamily.serif],
      'mono': [...defaultTheme.fontFamily.mono],
      'josefin': ['Josefin Sans'],
      'lato' : ['Lato'],
    }
  },
  plugins: [],
}
