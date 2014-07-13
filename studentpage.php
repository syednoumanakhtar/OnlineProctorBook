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
	<link rel="stylesheet" href="css/student.css" type="text/css">
  <script src="javascript/studentpagevalidate.js" type="text/javascript"></script>
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
    <?php
      $con=mysqli_connect("localhost","root","","itproject");
      if (mysqli_connect_errno())
      { 
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      $result = mysqli_query($con,"SELECT * FROM student WHERE usn='$_SESSION[usn]'");
      $row = mysqli_fetch_array($result);
      echo "
    <p><img src=\"images/" . $row['usn'] . ".jpg\" width=\"80\" height=\"80\" align=\"middle\"><span id=\"name\"> " . $row['fname'] . " " . $row['lname'] . "</span></br></br></p>
    <p><b>Email id:</b> " . $row['email'] . "</br>
    <b>Contact no:</b> +91" . $row['contact'] . "
    <hr></p>
    <b>USN:</b> " . $row['usn'] . "</br>
    <b>Date of Birth:</b> " . $row['bdate'] . "</br>
    <b>Branch:</b> " . $row['branch'] . "</br>
    <b>Semester:</b> " . $row['sem'] . "th</br>
    <b>CGPA:</b> " . $row['cgpa'] . "</br></br></p>";
    
    echo "  
    <p><b>ACADEMIC PROFILE:</b><hr></br> 
        <table id=\"table\" cellspacing=\"4px\" cellpadding=\"17px\">
          <tr>
            <th>Semester</th>
            <th>SGPA</th>
            <th>Year</th>
            <th>Attempt</th>
            <th>Semester</th>
            <th>SGPA</th>
             <th>Year</th>
                        <th>Attempt</th>
          </tr>";
          $result1 = mysqli_query($con,"SELECT * FROM academic WHERE usn='$_SESSION[usn]'");
          $row1 = mysqli_fetch_array($result1);
          $i=1;
          while($i < 9)
          {
            echo '<tr>';
            echo '<td>' . $i;
            echo ($i==1 )?'st':(($i==3)?'rd':'th');
            echo ' Sem </td>';
            echo '<td>'; echo ($row1['s'.$i])?$row1['s'.$i]:"NA"; echo '</td>';
            echo '<td>'; echo ($row1['y'.$i])?$row1['y'.$i]:"NA"; echo '</td>';
            echo '<td>'; echo ($row1['a'.$i])?$row1['a'.$i]:"NA"; echo '</td>';
            $i++;
            echo '<td>' . $i;
            echo ($i==2 )?'nd':'th';
            echo ' Sem </td>';
            echo '<td>'; echo ($row1['s'.$i])?$row1['s'.$i]:"NA"; echo '</td>';
            echo '<td>'; echo ($row1['y'.$i])?$row1['y'.$i]:"NA"; echo '</td>';
            echo '<td>'; echo ($row1['a'.$i])?$row1['a'.$i]:"NA"; echo '</td>';
            echo '</tr>';
            $i++;
          }
        echo "
            </table>
            </br></br></p>
      <p><b>SEMESTER REGISTERED:</b><hr></br>";
      $result5 = mysqli_query($con,"SELECT * FROM semreg WHERE usn='$_SESSION[usn]'");
      $row5 = mysqli_fetch_array($result5);
      $i=1;$f=0;
      while ($i <= 10) {
        if ($row5['s'.$i]) {
          $c=$row5['c'.$i];
          echo "<a href=\"semregdisplay.php?sem=$i&usn=$_SESSION[usn]&credits=$c\">" . $row5['s'.$i] . "</a><br/>";
          $f=1;
        }
        $i++;
      }
      if ($f == 0) {
        echo "No Semester registered!<br/>";
      }
      echo "</br></p>";

      echo "
      <p><b>PROJECTS:</b><hr></br>";
      $result2 = mysqli_query($con,"SELECT * FROM projects WHERE usn='$_SESSION[usn]'");
      if(mysqli_num_rows($result2) == 0)
      {
        echo "No Project found!</br>";
      }
      else 
      {
        while($row2 = mysqli_fetch_array($result2))
        {
          echo $row2['project'] . "</br>";
        }
        echo "</br></p>";
      }
    
      echo "
      <p><b>STUDENT-PROCTOR RECORD:</b><hr></br>";
      $result3 = mysqli_query($con,"SELECT * FROM notification WHERE `from`='$_SESSION[usn]' ORDER BY `time` DESC");
      if(mysqli_num_rows($result3) == 0)
      {
        echo "No Record found!</br>";
      }
      else 
      {
        while($row3 = mysqli_fetch_array($result3))
        {
          echo "<i>" . $row3['time'] . "</i>   " . $row3['msg'] . "</br>";
        }
        echo "</br></p>";
      }
    ?>
  </div>

      <div class="leftside">
            <span id="topic">NOTIFICATION</span>
            <hr>
            <p>
              <?php
              $result4 = mysqli_query($con,"SELECT * FROM notification WHERE `to`='$_SESSION[usn]' AND `read`=0 ORDER BY `time` DESC");
              if(mysqli_num_rows($result4) != 0)
              {
                while($row4 = mysqli_fetch_array($result4))
                {
                  echo "<b>" . $row4['time'] . "</b><i> ". $row4['fromname'] ."</i>: " . " " . $row4['msg'];
                  echo "<br/>";
                }
              }
              else
              {
                echo "No new notification";
              }
              mysqli_close($con);
              ?>
            </p>
            <form action="clearnotification.php" method="post">
              <input type="submit" class="login login-submit" value="Clear">
            </form>
      </div>
      
      <div class="leftside">
            <span id="topic">STUDENT-PROCOTOR NOTE</span>
            <hr>
            <p>
            <form name="myForm" onsubmit="return (validate());" action="notify.php" method="post">
                  <textarea name="message" placeholder="Enter message to your proctor.."></textarea></br>
                  <input type="submit" class="login login-submit1" value="Submit">
            </form>      
            </p>
      </div>

      <div class="leftside">
            <a class="click click-submit" href="studentupdate.php">Update your Profile</a></br>
            <a class="click click1-submit" href="semregistration.php">Semester Registration</a>
      </div>
</body>
</html>