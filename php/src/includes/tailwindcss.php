<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
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
          sans: ["'Montserrat Variable', sans-serif"],
          serif: ["'Merriweather', serif"],
          display: ["'Anton', sans-serif"],
        },
        colors: {
          "custom-green": "#70DBD0",
          "custom-grey": "#909DAB",
        },
      },
    },
  }
</script>
