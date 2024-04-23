// tailwind.config.js
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './node_modules/flowbite/**/*.js',
  ],
  theme: {
    extend: {
      fontFamily: {
        playfair: ['Playfair Display', 'serif'],
        poppins: ['Poppins', 'sans-serif'],
      },
      colors: {
        'kaero-primary': '#3C2415',
        'kaero-gold': '#AD976E',
      },
    },
  },
  plugins: [require('flowbite/plugin')],
}
