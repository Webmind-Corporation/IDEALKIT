filtres = document.querySelectorAll(".filtre");
next = document.querySelector(".search");
form = document.querySelector(".form");
inputs = document.querySelectorAll("input");
select = document.querySelector("sumary");
let count = 0;

console.log(inputs);

next.addEventListener("click", function () {
	if (count == 0) {
		if (filtres[count + 1] && inputs[0].value != "") {
			filtres[count].classList.add("hidden");
			filtres[count + 1].classList.remove("hidden");
			count++;
		}
		else if (filtres[count + 1] && inputs[0].value == "")
			alert("Veuillez remplir le champ");
	}
	else if (count == 1) {
		filtres[count].classList.add("hidden");
		filtres[count + 1].classList.remove("hidden");
		count++;
	}
	else {
		form = `
			<form method="post" action="backend/search.php">
				<input type="text" name="city" value="${inputs[0].value}">
				<input type="text" name="type" value="${inputs[1].value}">
				<input type="text" name="price" value="${inputs[5].value}">`;
		console.log(form);
		// form.submit();
	}
});