<html>
<head>
  <title>Online Proctor Book</title>
  <link rel="stylesheet" href="css/display.css" type="text/css">
</head>
<body>
  <div id="header">
            <div>
                  <div id="logo">
                        <a href="index.php">Online Proctor Book</a>
                  </div>
                  <div id="navigation">
                        <ul>
                              <li class="selected">
                                    <a href="index.php">Home</a>
                              </li>
                              <li>
                                    <a href="about.php">About</a>
                              </li>
                        </ul>
                  </div>
            </div>
      </div>
  <div id="content">
  	<center>
		<?php
		//retrieve data from staff
		$con=mysqli_connect("localhost","root","","itproject");
		if (mysqli_connect_errno())
		{	
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
    $result = mysqli_query($con,"SELECT * FROM staff WHERE uname='$_POST[uname]'");
    $row = mysqli_fetch_array($result);
    if($row>0)
    {
      echo "User with this Username already exist! ";
      echo "<a href=\"index.php\"> Click here!!";
      die();
    }
    $pswd=md5($_POST['pass']);
		$sql="INSERT INTO staff(pid, fname, lname, dept, dsgn, qual, rarea, email, contact, uname, pass) VALUES ('$_POST[sid]','$_POST[fname]','$_POST[lname]','$_POST[dept]','$_POST[desg]','$_POST[qual]','$_POST[res]','$_POST[email]','$_POST[contact]','$_POST[uname]','$pswd')";
		if (!mysqli_query($con,$sql))
		{
  			die('Error: ' . mysqli_error($con));
		}
		echo "Registration Successful!! ";
		mysqli_close($con);
		?>
		<a href="index.php">Click here</a>
	</center>
  </div>
</body>
</html>