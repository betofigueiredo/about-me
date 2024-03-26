/** @type {import('tailwindcss').Config} */
export default {
  content: ["./index.html", "./src/**/*.{js,ts,jsx,tsx}"],
  theme: {
    fontFamily: {
      mono: ["JetBrains Mono Variable", "monospace"],
    },
    extend: {
      keyframes: {
        "cursor-blink": {
          "0%": { opacity: "0" },
          "0.1%": { opacity: "1" },
          "50%": { opacity: "1" },
          "50.1%": { opacity: "0" },
          "100%": { opacity: "0" },
        },
      },
      animation: {
        "cursor-blink": "cursor-blink 1s infinite",
      },
      colors: {
        cyan: {
          400: "#78C4EE",
          500: "#76ADCC",
        },
        amber: {
          400: "#FFD877",
          500: "#EFC04C",
        },
      },
    },
  },
  plugins: [],
};
