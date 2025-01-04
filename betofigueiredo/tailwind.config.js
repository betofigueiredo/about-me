/** @type {import('tailwindcss').Config} */
export default {
  content: ["./index.html", "./src/**/*.{js,ts,jsx,tsx}"],
  theme: {
    extend: {
      container: {
        screens: {
          sm: "600px",
          md: "728px",
          lg: "900px",
          xl: "900px",
          "2xl": "900px",
        },
      },
      fontFamily: {
        // sans: ["'Inter Variable', sans-serif"],
        sans: ["'Montserrat', sans-serif"],
        serif: ["'Merriweather', serif"],
        display: ["'Anton', sans-serif"],
      },
      colors: {
        "custom-green": "#70DBD0",
        "custom-grey": "#909DAB",
      },
    },
  },
  plugins: [],
};
