//https://codepen.io/iamsaief/pen/eYZogBL

/* Navbar toggler */
const toggleBtn = document.querySelector(".nav-icon");
const toggleBtnctnr = document.querySelector(".nav-icon-contianer");
const navbarNav = document.querySelector(".nav-container");


toggleBtn.addEventListener("click", () => {
	navbarNav.classList.toggle("active")
	toggleBtn.classList.toggle("open")
	toggleBtnctnr.classList.toggle("open")
});

/* Add icon on .nav-item if dropdown exists */
const navItems = document.querySelectorAll(".nav-item");
navItems.forEach((item) => {
	const hasDropdowns = item.querySelector(".dropdown") !== null;
	if (hasDropdowns) {
		item.classList.add("arrow");
	}
});




