<?php
session_start();
if(!isset($_SESSION['person']))
{
  header('Location: index.php');
}
    $con=mysqli_connect("localhost","root","","itproject");
    if (mysqli_connect_errno())
    { 
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    if ($_SESSION['person'] == "staff") 
    {
    	mysqli_query($con,"UPDATE notification SET `read` =1 WHERE `to`='$_SESSION[pid]' AND `read`=0");
    }
    elseif ($_SESSION['person'] == "student") 
    {
    	mysqli_query($con,"UPDATE notification SET `read` =1 WHERE `to`='$_SESSION[usn]' AND `read`=0");
    }
    mysqli_close($con);
    header('Location: ' . $_SESSION['person'] . 'page.php');
?>