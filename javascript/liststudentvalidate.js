function validate()
{
	var x=document.myForm.usn.value;
 	var reg= /^\d{1}\w{2}\d{2}\w{2}\d{3}$/
 	if (x==null||x=="")
 	{
 			alert("Please enter a USN");
  			document.myForm.usn.focus();
  			return false;
 	}
 	if (reg.test(x)){ }
    else{
    alert("USN is in incorrect format");
        return false;
    }
		var x=document.myForm.message.value;
		if (x==null || x=="")
  		{
  			alert("Please enter message");
  			document.myForm.message.focus();
  			return false;
  		}
  		else
  			alert("Messages Sent");
 }