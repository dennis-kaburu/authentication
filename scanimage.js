



var refdata;	//stored print

var matdata;   //captured print
var timer;
var dev;
function Transaction()
{

		var ens=document.getElementById("es");
		var istatus=FPEngineEx1.GetWorkMsg();
		switch(istatus)
		{
		case 1:	
		    ens.value = "Please Link Device";
			alert("Attach Finger Print Scanner");
			break;
		case 2:
		    ens.value = "Place Finger";
			alert("Place Finger");
			break;
		case 3:
		    ens.value = "Lift Finger";
			alert("Lift Finger");
			break;
		case 4:
		    ens.value = "Signature Image OK";
            imagedata=FPEngineEx1.GetImageEx();
			var en3=document.getElementById("e3");
			en3.value=imagedata;
				//header("Location: index.php");
	    var uname = imagedata;
		
		
		 var fac = "<?php echo $facId; ?>";
		 
		
		//	window.location='authFinger2.php?facId='+fac+'&userp='+encodeURIComponent(uname)+'';
			
			break;
		case 5:
		    ens.value = "Capture Template OK";
			alert("Finger Scan Complete");
			matdata=FPEngineEx1.GetCharEx();
			var en2=document.getElementById("e2");
			en2.value=matdata;
			
			var en1=document.getElementById("e1");
			refdata=en1.value;
			//Jude added the above 
			//FPEngineEx1.CloseDevice();
			//clearInterval(timer);
			clearTimeout(timer);
			return;
			break;
		case 6:
			//return;
		    ens.value = "Enrol Template OK";
			refdata=FPEngineEx1.GetFptEx();
			var en1=document.getElementById("e1");
			en1.value=refdata;
			//FPEngineEx1.CloseDevice();
			//clearInterval(timer);
			clearTimeout(timer);
			return;
			break;
		}
		timer=setTimeout("Transaction()",500);
}




function GetDeviceInfo()







{







	if(FPEngineEx1.OpenDevice(0,0,0)==1)







	{







		if(FPEngineEx1.LinkDevice()==1)







		{







			var ene=document.getElementById("ee");







			ene.value = "Random Number:" + FPEngineEx1.GetRandomStr() + "  Serial Number:" + FPEngineEx1.GetDeviceSnStr() + "  Device Name:" + FPEngineEx1.GetDeviceName() + "  Device Date:" + FPEngineEx1.GetDeviceDate();







			var ens=document.getElementById("es");						







		}







		else







		    alert("Link Device Fail");







	}







	else







	    alert("Open Device Fail");







}















function GetMatTemplate()







{







	if(FPEngineEx1.OpenDevice(0,0,0)==1)







	{







		if(FPEngineEx1.LinkDevice()==1)







		{







			var ens=document.getElementById("es");						







			FPEngineEx1.GenCharEx();







			ens.value = "Ready";







			//timer=setInterval("Transaction()",500);







			timer=setTimeout("Transaction()",500);







		}







		else







		    alert("Link Device Fail");







	}







	else







	    alert("Open Device Fail");







}















function GetFingerImage()







{







    if(FPEngineEx1.OpenDevice(0,0,0)==1)







	{







		if(FPEngineEx1.LinkDevice()==1)







		{







			var ens=document.getElementById("es");







            







			FPEngineEx1.CaptureImage();







			ens.value = "Ready";







			timer=setTimeout("Transaction()",500);







		}







		else







		    alert("Link Device Fail");








	}







	else







        alert("Open Device Fail");







}















function EnrollRefTemplate()







{








	if(FPEngineEx1.OpenDevice(0,0,0)==1)







	{







		if(FPEngineEx1.LinkDevice()==1)







		{







			var ens=document.getElementById("es");						







			FPEngineEx1.EnrFptEx();







			ens.value = "Ready";







			//timer=setInterval("Transaction()",500);







			timer=setTimeout("Transaction()",500);







		}







		else







		    alert("Link Device Fail");







	}







	else







	    alert("Open Device Fail");







}















function MatchTemplate()







{







	var ens=document.getElementById("es");						







	var va=FPEngineEx1.MatchTemplateEx(matdata,refdata);







	//var en1=document.getElementById("e1");







	//var en2=document.getElementById("e2");







	//va=FPEngineEx1.MatchTemplateEx(en2.value,en1.value);







	if(va>100)







	{







	    ens.value = "Succees:" + va;

		alert("Finger Print Approved");



		



	}







	else







	{







		ens.value="Fail:"+va;
		
		alert("Invalid User Id");







	}







}






