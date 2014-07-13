<html>
<head>
	<meta charset="UTF-8">
	<title>Online Proctor Book</title>
	<link rel="stylesheet" href="css/index.css" type="text/css">
	<script src="javascript/indexvalidate.js" type="text/javascript"></script>
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

	<div class="login-card">
    	<h1>Log-in</h1><br>
  		<form name="myForm" onsubmit="return (validate());" action="login.php" method="post">
    		<input type="text" name="user" value="" placeholder="Username">
    		<input type="password" name="pass" value="" placeholder="Password">
    		<select name="person" size="1">
  				<option value="staff">Staff</option>
  				<option value="student">Student</option>
  			</select>
    		<input type="submit" name="login" class="login login-submit" value="Let me in">
  		</form>
    
  		<div class="login-help">
    		<a href="signup.html">Staff Registration</a> • <a href="studentregistration.php"> Student Registration</a>
  		</div>
	</div>
</body>
</html>