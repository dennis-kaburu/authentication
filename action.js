$(document).ready(function (e) {
	

	// $("#editor1").on("keypress", function() {
 //       // $("#col_form").submit();
 //       var eve=this.value;
 //       myFunction(eve);
 //    });	    


});
function myFunction(event,qn) {
    var x = event.which || event.keyCode;
    var id=document.getElementById('id').value;      

if (x=="") {
   //document.getElementById("res").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
   //  document.getElementById("res").innerHTML=this.responseText;
     //document.getElementById("res").style.display="block";
  
    }
  }
  xmlhttp.open("GET","getkey.php?code="+x+"&id="+id+"&qn="+qn,true);
 
  xmlhttp.send();
}