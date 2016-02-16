/* Yuqing Guo ISTE 240: Exercise 06 */

// JavaScropt for Week 6 Exercises
// Changing Style and Altering nodes
//
// helper function for 'getElementById'
function $(id){
	return document.getElementById(id);
}

/* 6a */
// function to move some text
function move(id) { 
	var x = parseInt($(id).style.left);
	x = x + 10;
	$(id).style.position = 'relative';
	$(id).style.left = x + 'px';
}

/* 6b */
function howmany() {
	// counts how many total input elements are in the form, 
	// and how many input elements of type ‘text’ are in the form
 	
 	var totalInput = document.getElementsByTagName("input");
    var textCount = 0;
    
    for(var i = 0; i < totalInput.length; i++) {
        if(totalInput[i].type == "text") {
            textCount++;   
        }
    }
    alert("The total input element is: " +  totalInput.length + "\nThe total input elements of type ‘text’ is: " + textCount);
}

/* 6c */  
function colorchanger() { 
	// change the background color of the div to selected option	  
    var getColor = document.getElementById("color").options[color.selectedIndex].value;
    document.getElementById("bckcolor").style.backgroundColor = getColor;
}

/* 6d */
function mouseOver() { 
	// When the user rolls the mouse over the text it changes 
	// to the color of the selected option in exercise 6c.
    var getColor = document.getElementById("color").options[color.selectedIndex].value;
    document.getElementById("changeColorText").style.color= getColor;
}

function mouseOut() {
	// set the font color to black when mouse move out
    document.getElementById("changeColorText").style.color= 'black';
}

/* 6e */
// Change out the innerHTML by creating a Text Node instead.
function textNode(){
    var text = document.createTextNode(" EXO E X O EXO ");
    document.body.appendChild(text);
}

/*
	function multiply(){
	//function to multiply the operands in each textfield
	var x = parseInt($('firstoperand').value);
	var y = parseInt($('secondoperand').value);
	
	var ans = x * y;
	var objAns = document.createTextNode(ans);
	
	while ($('result').firstChild){
		$('result').removeChild($('result').firstChild);
	}
	var para = document.createElement('p');
	para.appendChild(objAns);
	$('result').appendChild(para);

}

function divide(){
	//function to divide the operands in each textfield
	var x = parseInt($('firstoperand').value);
	var y = parseInt($('secondoperand').value);
	
	var ans = x/y;
	var objAns = document.createTextNode(ans);
	
	while ($('result').firstChild){
		$('result').removeChild($('result').firstChild);
	}
	var para = document.createElement('p');
	para.appendChild(objAns);
	$('result').appendChild(para);

}*/




