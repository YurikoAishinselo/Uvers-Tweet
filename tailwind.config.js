/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js}"],
  theme: {
    extend: {},
    "screens": {
      'xs': '270px',
      'sm': '700px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    },
    colors: {
      'pink' : '#FF2E63',
      'green' : '#00A09E',
      'white' : '#FFFFFF',
      'grey': '#252A34',
      'greyHomeBackground': '#D9D9D9',
      'lightGrey': '#F0F0F0',
    },
    fontFamily: {
      'plusJakarta': ['Plus Jakarta Sans', 'sans-serif'],
    },
    fontSize: {
    },
    height: {
      '110': '27.5rem', 
    },
    width: {
      '110': '27.5rem', 
    },
    backgroundImage: {
      'Dahsboard_Full_Image1': "url('/src/img/Dahsboard_Full_Image1.jpg')",
      'frame1': "url('/src/img/image1.jpeg')",
      'frame2': "url('/src/img/image2.jpeg')",
    },
  },
  plugins: [],
}