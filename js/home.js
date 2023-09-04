filtres = document.querySelectorAll(".filtre");
next = document.querySelector(".search");
form = document.querySelector(".form");
inputs = document.querySelectorAll("input");
select = document.querySelector("select");
let count = 0;

next.addEventListener("click", function () {
	if (count == 0) {
		if (filtres[count + 1] && inputs[0].value != "") {
			filtres[count].classList.add("hidden");
			filtres[count + 1].classList.remove("hidden");
			count++;
		}
		else if (filtres[count + 1] && inputs[0].value == "")
			alert("Veuillez remplir le champ");
		else
			form.submit();
	}
	else if (count == 1) {
		if (filtres[count + 1] && (select.value != "" && select.value != 0)) {
			filtres[count].classList.add("hidden");
			filtres[count + 1].classList.remove("hidden");
			count++;
		}
		else if (filtres[count + 1] && (select.value == "" || select.value == 0))
			alert("Veuillez choisir une option");
	}
});