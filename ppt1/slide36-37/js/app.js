window.onload = function() {
	// Dom getters
	var changeColorButton = document.getElementById('changeColor');
	var addCourses = document.getElementById('addCourses');
	var header = document.getElementById('header');
	var coursesList = document.getElementById('coursesList');

	// Change header color
	changeColorButton.addEventListener("click",function() {
		var newColor = prompt("Veuillez entrer une couleur", "#000000");
		header.style.background = newColor;
	});

	// Add new courses
	addCourses.addEventListener("click", function() {
		var name = prompt("Veuillez entrer le nom de la matière");
		var code = prompt("Veuillez entrer le code de la matière");
		
		var node = document.createElement("tr");  
		var tdName = document.createElement("td");
		var tdCode = document.createElement("td");

		tdName.innerHTML = name;
		tdCode.innerHTML = code;

		node.appendChild(tdName);
		node.appendChild(tdCode);

		coursesList.appendChild(node);
	});
}

