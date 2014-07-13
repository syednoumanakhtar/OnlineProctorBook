<?php
session_start();
if(!isset($_SESSION['person']))
{
  header('Location: index.php');
}
elseif($_SESSION['person'] != 'student')
{
  header('Location: staffpage.php');
}
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
                        <?php
                          echo "<a href=\"" . $_SESSION['person'] . "page.php\">Online Proctor Book</a>";
                        ?>
                  </div>
                  <div id="navigation">
                        <ul>
                              <li class="selected">
                                    <?php
                                    echo "<a href=\"" . $_SESSION['person'] . "page.php\">Home</a>";
                                    ?>
                              </li>
                              <li>
                                    <a href="about.php">About</a>
                              </li>
                              <li>
                                    <a href="logout.php">Log out</a>
                              </li>
                        </ul>
                  </div>
            </div>
      </div>
  <div id="content">
  	<center>
		<?php
		//retrieve data from student
		$con=mysqli_connect("localhost","root","","itproject");
		if (mysqli_connect_errno())
		{	
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
    $id=$_POST['sem'];
		mysqli_query($con,"UPDATE academic SET s$id = $_POST[sg], y$id = $_POST[yr], a$id = $_POST[at] WHERE `usn`='$_SESSION[usn]'");
    mysqli_query($con,"UPDATE student SET cgpa = $_POST[cg] WHERE `usn`='$_SESSION[usn]'");
		echo "Updation Successful!! ";
		mysqli_close($con);
		?>
		<a href="studentpage.php">Click here</a>
	</center>
  </div>
</body>
</html>