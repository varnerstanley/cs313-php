function clickMe() {
  alert("Clicked!");
}


function changeColor() {
	var textboxValue = "txtColor";
	var textbox = document.getElementById(textboxValue);

	var divValue = "div1";
	var div = document.getElementById(divValue);

	var color = textbox.value;
	div.style.backgroundColor = color;
}
