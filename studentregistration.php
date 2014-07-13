<html>
<head>
	<meta charset="UTF-8">
	<title>Online Proctor Book</title>
	<link rel="stylesheet" href="css/signup.css" type="text/css">
    <script src="javascript/studentvalidate.js" type="text/javascript"></script>
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
	<div class="signup-card">
		<form name="myForm" onsubmit="return (validate());" action="studentregister.php" method="post">
		<h1>Student Registration Page</h1>		
		<table border="0"  cellpadding="8">
			<tbody>
					<tr>
                        <th>USN</th>
                        <td><input type="text" name="usn" value="" /></td>
                    </tr>
                    <tr>
                        <th>First Name</th>
                        <td><input type="text" name="fname" value="" /></td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td><input type="text" name="lname" value="" /></td>
                    </tr>
                    <tr>
                        <th>Birth Date</th>
                        <td><input type="text" name="bdate" value="" placeholder="dd-mmm-yyyy" /></td>
                    </tr>
                    <tr>
                        <th>Branch</th>
                        <td><input type="text" name="branch" value="" /></td>
                    </tr>
                    <tr>
                        <th>Semester</th>
                        <td><input type="text" name="sem" value="" /></td>
                    </tr>
                    <tr>
                        <th>CGPA</th>
                        <td><input type="text" name="cgpa" value="" /></td>
                    </tr>
                    <tr>
                        <th>Proctor Name</th>
                        <td><select name="pid" size="1">
                            <?php
                            $con=mysqli_connect("localhost","root","","itproject");
                            $result = mysqli_query($con,"SELECT * FROM staff");
                            while($row = mysqli_fetch_array($result))
                            {
                                echo "<option value=\"" . $row['pid'] . "\">" . $row['fname'] . " " . $row['lname'] . "</option>";
                            }
                            mysqli_close($con);
                            ?>
                        </select></td>
                    </tr>
                    <tr>
                        <th>Email id</th>
                        <td><input type="text" name="email" value="" /></td>
                    </tr>
                    <tr>
                        <th>Contact no</th>
                        <td><input type="text" name="contact" value="" /></td>
                    </tr>
                    <tr>
                        <th>User Name</th>
                        <td><input type="text" name="uname" value="" /></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><input type="password" name="pass" value="" /></td>
                    </tr>
                    <tr>
                        <th>Confirm Password</th>
                        <td><input type="password" name="cpass" value="" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" class="login login-submit" value="Submit" /></td>
                        <td><input type="reset" class="login login-submit" value="Reset" /></td>
                    </tr>
                    <tr>
                        <th colspan="2">Already registered!! <a href="index.php">Login Here</a></th>
                    </tr>
            </tbody>
        </table>
		</form>
	</div>
</body>
</html>