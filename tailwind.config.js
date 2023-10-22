/**
 * @format
 * @type {import('tailwindcss').Config}
 */

module.exports = {
	content: ["./*/.{php,js}", "./src/**/*.{css,js}"],
	theme: {
		extend: {
			fontFamily: {
				inter: ["Inter", "sans-serif"],
			},
			colors: {
				primary: "rgb(7, 170, 211)",
			},
			backgroundImage: {
				"hero-bg": "url('../assets/images/home-bg.png')",
			},
		},
	},
	plugins: [],
};
