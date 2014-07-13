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
	<link rel="stylesheet" href="css/semregistration.css" type="text/css">
      <script src="javascript/semregistrationvalidate.js" type="text/javascript"></script>
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
            <form name="myForm" onsubmit="return (validate());" class="semfield" action="semregister.php" method="post">
            <span id="name">Semester Registration</span><hr><br/><br/>
            <p><b>Semester:</b>
                  <select name="sem" size="1">
                            <option value="1">1st Semester</option>
                            <option value="2">2nd Semester</option>
                            <option value="3">3rd Semester</option>
                            <option value="4">4th Semester</option>
                            <option value="5">5th Semester</option>
                            <option value="6">6th Semester</option>
                            <option value="7">7th Semester</option>
                            <option value="8">8th Semester</option>
                  </select>
            </p><br/>
            <table id="table" cellspacing="4px" cellpadding="10px">
                  <tr>
                        <th>Sl no.</th>
                        <th>Subject Code</th>
                        <th>Subject</th>
                        <th>Credits</th>
                  </tr>
                  <tr>
                        <td>1.</td>
                        <td><input type="text" name="sc1"></td>
                        <td><input type="text" name="s1"></td>
                        <td><input type="text" name="c1"></td>
                  </tr>
                  <tr>
                        <td>2.</td>
                        <td><input type="text" name="sc2"></td>
                        <td><input type="text" name="s2"></td>
                        <td><input type="text" name="c2"></td>
                  </tr>
                  <tr>
                        <td>3.</td>
                        <td><input type="text" name="sc3"></td>
                        <td><input type="text" name="s3"></td>
                        <td><input type="text" name="c3"></td>
                  </tr>
                  <tr>
                        <td>4.</td>
                        <td><input type="text" name="sc4"></td>
                        <td><input type="text" name="s4"></td>
                        <td><input type="text" name="c4"></td>
                  </tr>
                  <tr>
                        <td>5.</td>
                        <td><input type="text" name="sc5"></td>
                        <td><input type="text" name="s5"></td>
                        <td><input type="text" name="c5"></td>
                  </tr>
                  <tr>
                        <td>6.</td>
                        <td><input type="text" name="sc6"></td>
                        <td><input type="text" name="s6"></td>
                        <td><input type="text" name="c6"></td>
                  </tr>
                  <tr>
                        <td>7.</td>
                        <td><input type="text" name="sc7"></td>
                        <td><input type="text" name="s7"></td>
                        <td><input type="text" name="c7"></td>
                  </tr>
                  <tr>
                        <td>8.</td>
                        <td><input type="text" name="sc8"></td>
                        <td><input type="text" name="s8"></td>
                        <td><input type="text" name="c8"></td>
                  </tr>
                  <tr>
                        <td>9.</td>
                        <td><input type="text" name="sc9"></td>
                        <td><input type="text" name="s9"></td>
                        <td><input type="text" name="c9"></td>
                  </tr>
                  <tr>
                        <td>10.</td>
                        <td><input type="text" name="sc10"></td>
                        <td><input type="text" name="s10"></td>
                        <td><input type="text" name="c10"></td>
                  </tr>                 
            </table>
                  <center>
                  Total Credits Registered: <input type="text" name="tc"><br/><br/> 
                  <input type="submit" class="login login-submit" value="Submit">
                  <input type="reset" class="login login-submit" value="Reset" />
                  </center>
            </form>
      </div>

</body>
</html>