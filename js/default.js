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
window.addEventListener("scroll", function() {
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
    }else{
		navbars[0].style.display = "flex";
        navbars[1].style.display = "none";
    }
}

checkResize();
window.addEventListener("resize", function() {
	console.log(window.innerWidth);
	checkResize();
});