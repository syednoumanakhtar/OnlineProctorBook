function validate()
{
		var x=document.myForm.sc1.value;
		if (x==null || x=="")
  		{
  			alert("Please enter Subject Code");
  			document.myForm.sc1.focus();
  			return false;
  		}
      var x=document.myForm.s1.value;
    if (x==null || x=="")
      {
        alert("Please enter Subject Name");
        document.myForm.s1.focus();
        return false;
      }
      var x=document.myForm.c1.value;
      var reg= /^\d{1}":"\d{1}":"\d{1}$/
    if (x==null || x=="")
      {
        alert("Please enter Credits");
        document.myForm.c1.focus();
        return false;
      }
      var f1=0; var f2=0; var f3=0;
      var x=document.myForm.sc2.value;
      var y=document.myForm.s2.value;
      var z=document.myForm.c2.value;
      if(x!="")       {var f1=1;}
      if(y!="")       {var f2=1;}
      if(z!="")       {var f3=1;}
      if(f1==1||f2==1||f3==1)
      {
        if(f1==1 && f2==1 && f3==1)
        {}
        else
        {
        alert("Please fill the 2nd row completely");
        return false;
        }
      }
      var f1=0; var f2=0; var f3=0;
      var x=document.myForm.sc3.value;
      var y=document.myForm.s3.value;
      var z=document.myForm.c3.value;
      if(x!="")       {var f1=1;}
      if(y!="")       {var f2=1;}
      if(z!="")       {var f3=1;}
      if(f1==1||f2==1||f3==1)
      {
        if(f1==1 && f2==1 && f3==1)
        {}
        else
        {
        alert("Please fill the 3rd row completely");
        return false;
        }
      }
      var f1=0; var f2=0; var f3=0;
      var x=document.myForm.sc4.value;
      var y=document.myForm.s4.value;
      var z=document.myForm.c4.value;
      if(x!="")       {var f1=1;}
      if(y!="")       {var f2=1;}
      if(z!="")       {var f3=1;}
      if(f1==1||f2==1||f3==1)
      {
        if(f1==1 && f2==1 && f3==1)
        {}
        else
        {
        alert("Please fill the 4th row completely");
        return false;
        }
      }
      var f1=0; var f2=0; var f3=0;
      var x=document.myForm.sc5.value;
      var y=document.myForm.s5.value;
      var z=document.myForm.c5.value;
      if(x!="")       {var f1=1;}
      if(y!="")       {var f2=1;}
      if(z!="")       {var f3=1;}
      if(f1==1||f2==1||f3==1)
      {
        if(f1==1 && f2==1 && f3==1)
        {}
        else
        {
        alert("Please fill the 5th row completely");
        return false;
        }
      }
      var f1=0; var f2=0; var f3=0;
      var x=document.myForm.sc6.value;
      var y=document.myForm.s6.value;
      var z=document.myForm.c6.value;
      if(x!="")       {var f1=1;}
      if(y!="")       {var f2=1;}
      if(z!="")       {var f3=1;}
      if(f1==1||f2==1||f3==1)
      {
        if(f1==1 && f2==1 && f3==1)
        {}
        else
        {
        alert("Please fill the 6th row completely");
        return false;
        }
      }
      var f1=0; var f2=0; var f3=0;
      var x=document.myForm.sc7.value;
      var y=document.myForm.s7.value;
      var z=document.myForm.c7.value;
      if(x!="")       {var f1=1;}
      if(y!="")       {var f2=1;}
      if(z!="")       {var f3=1;}
      if(f1==1||f2==1||f3==1)
      {
        if(f1==1 && f2==1 && f3==1)
        {}
        else
        {
        alert("Please fill the 7th row completely");
        return false;
        }
      }
      var f1=0; var f2=0; var f3=0;
      var x=document.myForm.sc8.value;
      var y=document.myForm.s8.value;
      var z=document.myForm.c8.value;
      if(x!="")       {var f1=1;}
      if(y!="")       {var f2=1;}
      if(z!="")       {var f3=1;}
      if(f1==1||f2==1||f3==1)
      {
        if(f1==1 && f2==1 && f3==1)
        {}
        else
        {
        alert("Please fill the 8th row completely");
        return false;
        }
      }
      var f1=0; var f2=0; var f3=0;
      var x=document.myForm.sc9.value;
      var y=document.myForm.s9.value;
      var z=document.myForm.c9.value;
      if(x!="")       {var f1=1;}
      if(y!="")       {var f2=1;}
      if(z!="")       {var f3=1;}
      if(f1==1||f2==1||f3==1)
      {
        if(f1==1 && f2==1 && f3==1)
        {}
        else
        {
        alert("Please fill the 9th row completely");
        return false;
        }
      }
      var f1=0; var f2=0; var f3=0;
      var x=document.myForm.sc10.value;
      var y=document.myForm.s10.value;
      var z=document.myForm.c10.value;
      if(x!="")       {var f1=1;}
      if(y!="")       {var f2=1;}
      if(z!="")       {var f3=1;}
      if(f1==1||f2==1||f3==1)
      {
        if(f1==1 && f2==1 && f3==1)
        {}
        else
        {
        alert("Please fill the 10th row completely");
        return false;
        }
      }
		var x=document.myForm.tc.value;
		if (x==null || x=="" || !(x>0&&x<50))
  		{
  			alert("Please enter Total Credits");
  			document.myForm.tc.focus();
  			return false;
  		}
 }