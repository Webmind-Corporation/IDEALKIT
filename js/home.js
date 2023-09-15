selectType = document.querySelector("#project");


selectType.addEventListener("change", function() {
	if (selectType)
	{
		if (selectType.value == "default")
		{
			selectType.style.color = "#757575";
		}
		else {
			selectType.style.color = "#000000";
		}
	}
});

var navbar = document.querySelector("nav");
if (window.scrollY > 0)
	navbar.classList.add("sticky");
else
	navbar.classList.remove("sticky");
window.addEventListener("scroll", function() {
	var navbar = document.querySelector("nav");
	if (window.scrollY > 0)
		navbar.classList.add("sticky");
	else
		navbar.classList.remove("sticky");
});