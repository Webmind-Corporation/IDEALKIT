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