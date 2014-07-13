function validate()
{
		var x=document.myForm.usn.value;
    var reg= /^\d{1}\w{2}\d{2}\w{2}\d{3}$/
		if (x==null || x=="")
  		{
  			alert("USN must be filled out");
  			return false;
  		}
      if (reg.test(x)){ }
    else{
    alert("USN is incorrect");
        return false;
    }
  		var x=document.myForm.fname.value;
      var reg= /^[a-zA-Z. \r\t\n\f]+$/
		if (x==null || x=="")
  		{
  			alert("First name must be filled out");
  			return false;
  		}
      if(reg.test(x)){}
    else
    {
      alert("First name should not contain a digit or special characters");
        return false;
    }
  		var x=document.forms["myForm"]["lname"].value;
		if (x==null || x=="")
  		{
  			alert("Last name must be filled out");
  			return false;
  		}
    if(reg.test(x)){}
    else
    {
      alert("Last name should not contain a digit or special characters");
        return false;
    }
  		reg= /^\d{2}[-]\w{3}[-]\d{4}$/
  		var x=document.forms["myForm"]["bdate"].value;
		if (x==null || x=="")
  		{
  			alert("Birthdate must be filled out");
  			return false;
  		}
  		if (reg.test(x)){ }
 		else{
 		alert("Birthdate is in incorrect format");
  			return false;
 		}
  		var x=document.forms["myForm"]["branch"].value;
      var reg= /^[a-zA-Z. \r\t\n\f]+$/
		if (x==null || x=="")
  		{
  			alert("Branch name must be filled out");
  			return false;
  		}
      if(reg.test(x)){}
    else
    {
      alert("Branch name should not contain a digit or special characters");
        return false;
    }
  		var x=document.forms["myForm"]["sem"].value;
		  reg=/^\d{1}$/
    if (x==null || x=="")
  		{
  			alert("Semester should be filled out");
  			return false;
  		}
    if(x<1 || x>8)
    {
      alert("Semester should be an integer between 1 and 8");
      return false;
    }
      if (reg.test(x)){ }
    else{
      alert("Semester should be an integer");
        return false;
    }
  	
      var x=document.forms["myForm"]["email"].value;
      var reg= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    if (x==null || x=="")
      {
        alert("Email must be filled out");
        return false;
      }
    if (reg.test(x)){ }
  else{
    alert("Email is in incorrect format");
        return false;
    }
 		reg=/^\d{10}$/
 		var x=document.forms["myForm"]["contact"].value;
		if (x==null || x=="")
  		{
  			alert("Contact must be filled out");
  			return false;
  		}
  		if (reg.test(x)){ }
 		else{
 		alert("Phone number is incorrect");
  			return false;
 		}
  		var x=document.forms["myForm"]["uname"].value;
		if (x==null || x=="")
  		{
  			alert("Username must be filled out");
  			return false;
  		}
  		var x=document.forms["myForm"]["pass"].value;
		if (x==null || x=="")
  		{
  			alert("Password must be filled out");
  			return false;
  		}
      var y=document.forms["myForm"]["cpass"].value;
    if (x!=y)
      {
        alert("Passwords do not match");
        return false;
      }
  		return( true );
}
