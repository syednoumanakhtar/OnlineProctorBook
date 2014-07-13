<html>
<head>
	<meta charset="UTF-8">
	<title>Online Proctor Book</title>
	<link rel="stylesheet" href="css/about.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<?php
                        session_start();
                        if(isset($_SESSION['person']))
                        {
                        	echo "<a href=\"" . $_SESSION['person'] . "page.php\">Online Proctor Book</a>";                        }
                        else
                        	echo "<a href=\"index.php\">Online Proctor Book</a>";
                        ?>
			</div>
			<div id="navigation">
				<ul>
					<li class="selected">
                        <?php
                        if(isset($_SESSION['person']))
                        {
                        	echo "<a href=\"" . $_SESSION['person'] . "page.php\">Home</a>";                        }
                        else
                        	echo "<a href=\"index.php\">Home</a>";
                        ?>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <?php
                    if(isset($_SESSION['person']))
                    	echo "
                    <li>
                        <a href=\"logout.php\">Log out</a>
                    </li>";
                    ?>
				</ul>
			</div>
		</div>
	</div>

	<div id="contents">
		<h1>Project Members<hr></h1></br>
		<div>
			<div id="gallery_div">
				<img class="profile_pic" src="images/ankur.jpg" height="140" width="140">
			</div>
			<div id="content_div">
				<p><span id="largefont">Ankur Mathur</span></br></br>USN: 1MS11CS016</br>ankurm92@gmail.com</br></p>
			</div>
		</div>
		<div>
			<div id="gallery_div">
				<img class="profile_pic" src="images/nouman.jpg" height="140" width="140">
			</div>
			<div id="content_div">
				<p><span id="largefont">Syed Nouman Akhtar</span></br></br>USN: 1MS11CS121</br>akhtarnouman@gmail.com</br></p>
			</div>
		</div>
	</div>
</body>
</html>