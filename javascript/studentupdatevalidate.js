function validate()
{
		var x=document.myForm.proj.value;
		if (x==null || x=="")
  		{
  			alert("Please enter project details");
  			document.myForm.proj.focus();
  			return false;
  		}
 }
 function validate1()
{
		var x=document.myForm1.sg.value;
		var reg=/^\d+([.]\d+)?$/
    if ((x!=null||x!="")&& x>10)
      {
        alert("SGPA should be less than or equal to 10");
        document.myForm1.sg.focus();
        return false;
      }
      if (reg.test(x)){ }
    else
    {
        alert("SGPA should be less than or equal to 10");
        document.myForm1.sg.focus();
        return false;
    }
  		var x=document.myForm1.yr.value;
  		var reg= /^\d{4}$/
		if (x==null || x=="")
  		{
  			alert("Please enter your year");
  			document.myForm1.yr.focus();
  			return false;
  		}
  		if(reg.test(x)){}
  		else
  		{
  			alert("Year entered is invalid");
  			document.myForm1.yr.focus();
  			return false;
  		}
  		var x=document.myForm1.at.value;
  		var reg= /^\d{1}$/
		if (x==null || x=="")
  		{
  			alert("Please enter number of attempts");
  			document.myForm1.at.focus();
  			return false;
  		}
  		if(reg.test(x)){}
  		else
  		{
  			alert("Number of attempts should be an integer");
  			document.myForm1.at.focus();
  			return false;
  		}
  	var x=document.myForm1.cg.value;
		var reg=/^\d+([.]\d+)?$/
    if ((x!=null||x!="")&& x>10)
      {
        alert("CGPA should be less than or equal to 10");
        document.myForm1.cg.focus();
        return false;
      }
      if (reg.test(x)){ }
  else{
        alert("CGPA should be less than or equal to 10");
        document.myForm1.cg.focus();
        return false;
    }
 }