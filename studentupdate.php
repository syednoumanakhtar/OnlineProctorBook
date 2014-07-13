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
	<link rel="stylesheet" href="css/studentupdate.css" type="text/css">
  <script src="javascript/studentupdatevalidate.js" type="text/javascript"></script>
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
		<span id="name">Update your profile</span><hr><br/>
            <p><b>ACADEMIC DETAILS:</b></p>
            <form name="myForm1" onsubmit="return (validate1());" class="semfield" action="updateacademic.php" method="post">
            <table id="table" cellspacing="4px" cellpadding="17px">
                  <tr>
                        <th>Semester</th>
                        <th>SGPA</th>
                        <th>Year</th>
                        <th>Attempt</th>
                        <th>CGPA</th>
                  </tr>
                  <tr>
                        <td>
                        <select name="sem" size="1">
                            <option value="1">1st Semester</option>
                            <option value="2">2nd Semester</option>
                            <option value="3">3rd Semester</option>
                            <option value="4">4th Semester</option>
                            <option value="5">5th Semester</option>
                            <option value="6">6th Semester</option>
                            <option value="7">7th Semester</option>
                            <option value="8">8th Semester</option>
                        </select></td>
                        <td><input type="text" name="sg"></td>
                        <td><input type="text" name="yr"></td>
                        <td><input type="text" name="at"></td>
                        <td><input type="text" name="cg"></td>
                  </tr>
            </table><br/>
                  <input type="submit" class="login login-submit" value="Submit">
            </form><br/>

            <p><b>PROJECT DETAILS:</b><br/></p>
            <form name="myForm" onsubmit="return (validate());" class="projfield" action="updateproject.php" method="post">
                  Enter your new project:<br/><br/>
                  <input type="text" name="proj"><br/>
                  <input type="submit" class="login login-submit" value="Submit">
            </form>
	</div>

</body>
</html>