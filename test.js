var start = null;
function test(str){
 if (!start) {//checking is a new user input
  start = $.now();
        }

// document.getElementById("res").innerHTML="down";
}

function test2(str){
  var id = document.getElementById("id").value;
    var timeElapsed = $.now() - start;
        start = null;//start the next  timing tracking
         
         console.log(['time elapsed:', timeElapsed, 'ms'].join(' '));
         var takentime=[timeElapsed];
         takentime.push(timeElapsed);

         // document.getElementById("res").innerHTML=takentime;



            if (timeElapsed=="") {
   document.getElementById("res").innerHTML="";
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
     document.getElementById("res").innerHTML=this.responseText;
     document.getElementById("res").style.display="block";
  
    }
  }
  xmlhttp.open("GET","gettime.php?q="+timeElapsed+"&id="+id,true);
 
  xmlhttp.send();

}


document.getElementById('editor1').addEventListener('keyup', function (e){
    // Do your key combination detection
    alert("Am pressed")
}, false);