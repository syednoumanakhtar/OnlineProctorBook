<?php
session_start();
if(!isset($_SESSION['person']))
{
	header('Location: index.php');
}
echo "session is set";
if($_SESSION['person'] != 'student')
{
	header('Location: staffpage.php');
}
if($_SESSION['person'] != 'staff')
{
	header('Location: studentpage.php');
}