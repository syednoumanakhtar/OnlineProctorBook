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
  <link rel="stylesheet" href="css/staff.css" type="text/css">
  <script src="javascript/staffpagevalidate.js" type="text/javascript"></script>
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
      $result = mysqli_query($con,"SELECT * FROM staff WHERE pid='$_SESSION[pid]'");
      $row = mysqli_fetch_array($result);
      echo "
    <p><img src=\"images/" . $row['pid'] . ".jpg\" width=\"80\" height=\"80\" align=\"middle\"><span id=\"name\"> " . $row['fname'] . " " . $row['lname'] . "</span></br></br></p>
    <p><b>Email id:</b> " . $row['email'] . "</br>
    <b>Contact no:</b> +91" . $row['contact'] . "
    <hr></p>
    <b>Department:</b> " . $row['dept'] . "</br>
    <b>Designation:</b> " . $row['dsgn'] . "</br>
    <b>Qualification:</b>  " . $row['qual'] . "</br>
    <b>Research Areas:</b> " . $row['rarea'] . "</br></br></p>";
    ?>
    <div>
      <div class="nav-box">
        <div>
          <div class="nav1">
            List all Students
          </div>
        </div>
        <a class="click click-submit" href="liststudent.php">Click here</a></br>
      </div>

      <div class="leftside">
        <span id="topic">STUDENT-PROCOTOR NOTE</span>
        <hr>
        <p>
          <form name="myForm" onsubmit="return (validate());" action="notify.php" method="post">
            <textarea name="message" placeholder="Enter message to your students.."></textarea></br>
            <input type="submit" class="login login-submit" value="Submit">
           </form>      
        </p>
      </div>
    </div>

  </div>
    
  <div class="notification">
      <span id="topic">NOTIFICATION</span>
      <hr>
      <p>
        <?php
        $result1 = mysqli_query($con,"SELECT * FROM notification WHERE `to`='$_SESSION[pid]' AND `read`=0 ORDER BY `time` DESC");
        if(mysqli_num_rows($result1) != 0)
        {
          while($row1 = mysqli_fetch_array($result1))
          {
            echo "<b>" . $row1['time'] . " " . $row1['from'] . " </b><i> " . $row1['fromname'] . "</i>:" . " " . $row1['msg'];
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

  <div class="notification">
      <span id="topic">Find Student</span>
      <hr>
      <p><b>Enter USN:</b></p>
      <form name="myForm1" onsubmit="return (validate1());" action="studentsearch.php" method="post">
        <input type="text" name="usn"><br/>
        <input type="submit" class="login login-submit" value="Search">
      </form>
  </div>
     
</body>
</html>