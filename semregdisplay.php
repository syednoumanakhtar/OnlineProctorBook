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
	<link rel="stylesheet" href="css/semregistration.css" type="text/css">
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
      <span id="name">Semester Registered</span><hr><br/>
      <?php
      $i=$_GET['sem'];
      echo "<br/><b>Semester:</b> $i";
      echo ($i==1)?"st":(($i==2)?"nd":(($i==3)?"rd":"th"));echo '</td>';
      echo " Semester";
      $con=mysqli_connect("localhost","root","","itproject");
      if (mysqli_connect_errno())
      { 
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      $result = mysqli_query($con,"SELECT * FROM $_GET[usn]Semester$i");
      echo "
      <table id=\"table\" cellspacing=\"4px\" cellpadding=\"10px\">
         <tr>
              <th>Sl no.</th>
              <th>Subject Code</th>
              <th>Subject</th>
              <th>Credits</th>
         </tr>";
      $j=1;
      while($row = mysqli_fetch_array($result))
      {
        echo "<tr>";
        echo "<td>".$j."</td><td>" . $row['scode'] ."</td><td>" . $row['sub'] . "</td><td>" . $row['credits'] . "</td>";
        echo "</tr>";
        $j++;
      }
      echo "</table>";
      echo "<center><b>Total Credits:</b> " . $_GET['credits'] . "</center>";
      echo "<br/></br></p>";
      mysqli_close($con);
      ?>
      </div>

  </body>
</html>