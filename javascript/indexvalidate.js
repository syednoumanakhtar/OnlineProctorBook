function validate()
{
		var x=document.myForm.user.value;
		if (x==null || x=="")
  		{
  			alert("Please enter your username");
  			return false;
  		}
  		var x=document.myForm.pass.value;
		if (x==null || x=="")
  		{
  			alert("Please enter your password");
  			return false;
  		}
}