<?php
session_start();
?>
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
  		if($_POST['person']=="student")
  		{
  			$con=mysqli_connect("localhost","root","","itproject");
			  if (mysqli_connect_errno())
			  {	
  		  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
        $pswd=md5($_POST['pass']);
			  $result = mysqli_query($con,"SELECT * FROM student WHERE uname='$_POST[user]' AND pass='$pswd'");
			  $row = mysqli_fetch_array($result);
  			if(!$row)
  			{
  				echo "Invalid Username or Password! ";
  				echo "<a href=\"index.php\"> Click here!!";
  				die();
  			}
  			else
  			{
  				//echo $row['usn'] . " " . $row['fname'] . " " . $row['lname'];
  				$_SESSION['usn']=$row['usn'];
				  $_SESSION['pid']=$row['pid'];
				  $_SESSION['person']='student';
          $_SESSION['name']=$row['fname'];
  			}	
  			mysqli_close($con);
  			header('Location: studentpage.php');
  		}
  		elseif ($_POST['person']=="staff")
  		{
  			$con=mysqli_connect("localhost","root","","itproject");
			  if (mysqli_connect_errno())
			  {	
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
        $pswd=md5($_POST['pass']);
			  $result = mysqli_query($con,"SELECT * FROM staff WHERE uname='$_POST[user]' AND pass='$pswd'");
			  $row = mysqli_fetch_array($result);
  			if(!$row)
  			{
  				echo "Invalid Username or Password! ";
  				echo "<a href=\"index.php\"> Click here!!";
  				die();
  			}
  			else
  			{
				  $_SESSION['pid']=$row['pid'];
				  $_SESSION['person']='staff';
          $_SESSION['name']=$row['fname'];
  			}	
  			mysqli_close($con);
  			header('Location: staffpage.php');
  		}
  		?>
  	</center>
  </div>
</body>
</html>