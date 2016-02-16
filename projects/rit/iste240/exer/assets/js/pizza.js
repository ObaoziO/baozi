/* JavaScript for Pizza Ordering Form */

function validateForm() {
    var x = document.forms["OrderForm"]["customerName"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
}