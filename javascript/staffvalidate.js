function validate()
{
		var x=document.myForm.sid.value;
		if (x==null || x=="")
  		{
  			alert("Staff ID must be filled out");
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
  		var x=document.forms["myForm"]["dept"].value;
		if (x==null || x=="")
  		{
  			alert("Department name must be filled out");
  			return false;
  		}
      if(reg.test(x)){}
    else
    {
      alert("Department name should not contain a digit or special characters");
        return false;
    }
      var x=document.forms["myForm"]["desg"].value;
    if (x==null || x=="")
      {
        alert("Designation must be filled out");
        return false;
      }
    if(reg.test(x)){}
    else
    {
      alert("Designation should not contain a digit or special characters");
        return false;
    }
  		var x=document.forms["myForm"]["qual"].value;
		if (x==null || x=="")
  		{
  			alert("Qualification must be filled out");
  			return false;
  		}
  		var x=document.forms["myForm"]["res"].value;
		if (x==null || x=="")
  		{
  			alert("Research areas must be filled out");
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
