module.exports = {
  mode: "jit",
  purge: ["./**/*.php", "./src/**/*.js"],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        mtr: ["Montserrat"],
      },
      spacing: {
        13: "3.25rem",
        15: "3.75rem",
        128: "32rem",
        144: "36rem",
        17: "17rem",
        21: "21rem",
        22: "22rem",
        23: "23rem",
        
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
