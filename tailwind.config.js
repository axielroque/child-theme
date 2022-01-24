module.exports = {
	purge: ["./**/*.php", "./src/**/*.js"],
	darkMode: false,
	theme: {
		extend: {
			colors: {
				primary: "#fff",
				secondary: {
					200: "#000",
					500: "#323232",
				},
			},
			screens: {
				sm: "640px",
				md: "768px",
				lg: "1000px",
				xl: "1280px",
				"2xl": "1536px",
			},
		},
	},
	plugins: [
		function ({ addComponents }) {
			addComponents({
				".container": {
					maxWidth: "100%",
					"@screen sm": {
						maxWidth: "100%",
					},
					"@screen md": {
						maxWidth: "100%",
					},
					"@screen lg": {
						maxWidth: "1024px",
					},
					"@screen xl": {
						maxWidth: "1280px",
					},
					"@screen 2xl": {
						maxWidth: "1366px",
					},
				},
			});
		},
	],
};
