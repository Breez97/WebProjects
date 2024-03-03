window.onload = function() {
	let colorBox = document.getElementById('inputColor');
	let allDiv = document.querySelectorAll('div.text-container');

	for(let i = 0; i < allDiv.length; i++) {
		changeColor(allDiv[i]);
	}

	function changeColor(element) {
		element.addEventListener('mouseover', function() {
			element.style.backgroundColor = colorBox.value;
		})

		element.addEventListener('mouseout', function() {
			element.style.backgroundColor = 'red';
		})
	}
}