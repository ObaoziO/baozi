/* Yuqing Guo ISTE 240: Exercise 05 */


/* 5a */
function jsStyle() { 
	// function to change style
	// Change the color and the size of the font
	// in the paragraph with id='text'
	
	document.getElementById('text').style.color = "#008000";	
	document.getElementById('text').style.fontSize = "30px";
}

/* 5b */
function getFormValues() {
	// function to send first and last names
	// to an 'alert' message.
    var first, last;
    first = document.getElementById('fname');
    last = document.getElementById('lname');
    
    alert(first.value + ' ' + last.value);
}

/* 5c */
function getOptions() {
// function to display options
    var colorSelect = document.getElementById("mySelect");
    var colorValue = colorSelect.options[colorSelect.selectedIndex].value;
    alert(colorValue);
}

/* 5d */
// first add an eventlistener to the section of code that will
// respond to the mouseover and mouseout events.
function init(){
document.getElementById('rb').addEventListener("mouseout", mouseOut);
document.getElementById('rb').addEventListener("mouseover", mouseOver);
}

function mouseOver() {
	// set the font color to red
	document.getElementById('rb').style.color= 'red';
}

function mouseOut() {
	// set the font color to black
    document.getElementById('rb').style.color = 'black';
}

/* 5e */
// code two functions multiply and divide functions here
	function multiply(){
		var x = document.getElementById("firstoperand").value;
		var y = document.getElementById("secondoperand").value;
		var z = x*y;
		document.getElementById("result").innerHTML = z;
	}

	function divide(){
		var x = document.getElementById("firstoperand").value;
		var y = document.getElementById("secondoperand").value;
		var z = x/y;
		document.getElementById("result").innerHTML = z;
	}


