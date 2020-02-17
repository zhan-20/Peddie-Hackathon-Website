	function checkinput() {
		if (document.getElementById("permit").value==="No"){
		alert("You must sign the permission form before registering for an account!");}
		var x =document.getElementById("email").value;
		if(x==NULL) {
			alert("You need to have an email address to open the registration link.");
		}
		var judge1=false;
		var judge2=false;
		for (j=0; j<x.length; j++) {
			if (x.substring(j, j+1)=="@") judge1=true;
			if (x.substring(j, j+1)==".") judge2=true;
		}
		if (judge1==false || judge2==false) {
			alert("You have entered an invalid email address. Please check again.");
		}
	}