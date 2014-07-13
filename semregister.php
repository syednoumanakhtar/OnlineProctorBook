<?php
session_start();
if(!isset($_SESSION['person']))
{
  header('Location: index.php');
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
      $con=mysqli_connect("localhost","root","","itproject");
      if (mysqli_connect_errno())
      { 
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      $id=$_POST['sem'];
      $sql="CREATE TABLE $_SESSION[usn]Semester$id(scode VARCHAR(10),sub VARCHAR(50),credits VARCHAR(10))";
      if (mysqli_query($con,$sql))
      {
        echo "Semester Successfully Registered.<br/>";
      }
      else
      {
        die ("Error creating table: " . mysqli_error($con));
      }
      $i=1;
      while ($_POST['sc'.$i] && $_POST['s'.$i] && $_POST['c'.$i] ) {        
        $sc='sc'.$i; $s='s'.$i; $c='c'.$i;
        $sql1="INSERT INTO $_SESSION[usn]Semester$id(scode, sub, credits) VALUES ('$_POST[$sc]','$_POST[$s]','$_POST[$c]')";
        if (!mysqli_query($con,$sql1))
        {
          die('Error: ' . mysqli_error($con));
        }
        $i++;
      }
      $i--;
      echo "$i Subjects Registered. ";
      $sem='Semester'.$id;
      mysqli_query($con,"UPDATE semreg SET s$id = '$sem', `c$id` = $_POST[tc] WHERE `usn`='$_SESSION[usn]'");
      mysqli_close($con);
      ?>
      <a href="studentpage.php">Click here</a> 
    </center>
  </div>
</body>
</html>