function popupWindow(o,d) {
// o - Object to display.
// d - Display, true =display, false = hide
//alert("inside popuoWindow() function");
var obj = document.getElementById(o);
//var $obj = $(o);

/*
if(d) obj.style.display = 'block';
else obj.style.display = 'none';
//alert("inside popuoWindow() function");
*/


if(d) {
    //alert("true");
    $('#'+o).css("display","block");
    //alert("true");
}
else {
    //alert("false");
    $('#'+o).css("display","none");
    //alert("false");
}

}
