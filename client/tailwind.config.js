import colors from 'tailwindcss/colors'


const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  purge: [
    './components/**/*.{vue,js}',
    './layouts/**/*.vue',
    './pages/**/*.vue',
    './plugins/**/*.{js,ts}',
    './nuxt.config.{js,ts}',
  ],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        sans: ['Nunito', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        primary: colors.green
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    
  ],

  // content: [
  //   `${srcDir}/components/**/*.{vue,js,ts}`,
  //   `${srcDir}/layouts/**/*.vue`,
  //   `${srcDir}/pages/**/*.vue`,
  //   `${srcDir}/composables/**/*.{js,ts}`,
  //   `${srcDir}/plugins/**/*.{js,ts}`,
  //   `${srcDir}/utils/**/*.{js,ts}`,
  //   `${srcDir}/App.{js,ts,vue}`,
  //   `${srcDir}/app.{js,ts,vue}`,
  //   `${srcDir}/Error.{js,ts,vue}`,
  //   `${srcDir}/error.{js,ts,vue}`,
  //   `${srcDir}/app.config.{js,ts}`
  // ]
}
