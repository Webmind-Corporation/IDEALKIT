var navbars = document.querySelectorAll("nav");

if (window.scrollY > 0)
	navbars.forEach(navbar => {
		navbar.classList.add("sticky");
	});
else {
	navbars.forEach(navbar => {
		navbar.classList.remove("sticky");
	});
}

window.addEventListener("scroll", function () {
	var navbars = document.querySelectorAll("nav");
	if (window.scrollY > 0)
		navbars.forEach(navbar => {
			navbar.classList.add("sticky");
		});
	else {
		navbars.forEach(navbar => {
			navbar.classList.remove("sticky");
		});
	}
});

function checkResize() {
	if (window.innerWidth < 948) {
		navbars[0].style.display = "none";
		navbars[1].style.display = "flex";
		// document.querySelector(".secondPart").style.flexDirection = "column";
		document.querySelector(".firstPart").style.width = "80vw";
		document.querySelector(".secondPart").style.width = "80vw";
		document.querySelector(".titleContact").style.display = "none";
		document.querySelector(".firstPart").style.fontSize = "3rem";
		document.querySelector(".secondPart svg").style.display = "none";
	} else {
		navbars[0].style.display = "flex";
		navbars[1].style.display = "none";
		document.querySelector(".secondPart svg").style.display = "block";
		document.querySelector(".secondPart").style.flexDirection = "row";
	}
}

checkResize();
window.addEventListener("resize", function () {
	console.log(window.innerWidth);
	checkResize();
});