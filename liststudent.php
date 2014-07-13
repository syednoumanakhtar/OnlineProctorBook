<?php
session_start();
if(!isset($_SESSION['person']))
{
  header('Location: index.php');
}
elseif($_SESSION['person'] != 'staff')
{
  header('Location: studentpage.php');
}
?>
<html>
<head>
	<title>Online Proctor Book</title>
	<link rel="stylesheet" href="css/liststudent.css" type="text/css">
  <script src="javascript/liststudentvalidate.js" type="text/javascript"></script>
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
		<span id="name">Student List</span><hr><br/>

    <div class="notification">
      <span id="topic">Post Message</span>
      <hr>
      <p><b>Enter USN:</b></p>
      <form name="myForm" onsubmit="return (validate());" action="notify.php" method="post">
        <input type="text" name="usn"><br/>
        <textarea name="message" placeholder="Enter message to your students.."></textarea></br>
        <input type="submit" class="login login-submit" value="Send">
      </form>
    </div>
    
    
      <?php
      $con=mysqli_connect("localhost","root","","itproject");
      if (mysqli_connect_errno())
      { 
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      $result = mysqli_query($con,"SELECT * FROM student WHERE pid='$_SESSION[pid]'");
      if(mysqli_num_rows($result) == 0)
      {
        echo "<center>No student list found!</center></br>";
      }
      else 
      {
        echo "<table id=\"table\" cellspacing=\"4px\" cellpadding=\"10px\">
      <tr>
        <th>USN</th>
        <th>Name</th>
        <th>Semester</th>
        <th>Branch</th>
      </tr>";
        while($row = mysqli_fetch_array($result))
        {
          echo '<tr>';
          echo '<td>'; echo $row['usn']; echo '</td>';
          echo '<td>'; echo $row['fname'] ." " . $row['lname']; echo '</td>';
          echo '<td>'; echo $row['sem']; echo ($row['sem']==1)?"st":(($row['sem']==2)?"nd":(($row['sem']==3)?"rd":"th"));echo '</td>';
          echo '<td>'; echo $row['branch']; echo '</td>';
          echo '</tr>';
        }
        echo "</br></p>";
      }
      mysqli_close($con);
      ?>
    </table>


                        
	</div>

</body>
</html>