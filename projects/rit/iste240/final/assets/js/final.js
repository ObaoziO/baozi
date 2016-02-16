// Yuqing Guo 
// 5/17/2015 
// ISTE.240.01 
// Individual Project Final 
// Version JavaScript 

 
function colorchanger() { // change the background color of the wrapper div	  
    var getColor = document.getElementById("color").options[color.selectedIndex].value;
    document.getElementById("wrapper").style.backgroundColor = getColor;
}