/** @type {import('tailwindcss').Config} */
export default {
  content: ["./index.html", "./src/**/*.{js,ts,jsx,tsx}"],
  theme: {
    extend: {
      fontFamily: {
        sans: ["'Inter Variable', sans-serif"],
        serif: ["'Crimson Pro Variable', serif"],
      },
      colors: {
        "custom-green": "#70DBD0",
        "custom-grey": "#909DAB",
      },
    },
  },
  plugins: [],
};
