<?php
session_start();
if(!isset($_SESSION['person']))
{
  header('Location: index.php');
}
?>
<?php
    $con=mysqli_connect("localhost","root","","itproject");
    if (mysqli_connect_errno())
    { 
       echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    if ($_SESSION['person'] == "staff") {
        if ($_POST['usn']) {
            $sql="INSERT INTO notification (`from`,`fromname`, `to`, `msg`) VALUES ('$_SESSION[pid]','$_SESSION[name]','$_POST[usn]','$_POST[message]')";
            if (!mysqli_query($con,$sql))
            {
                die('Error: ' . mysqli_error($con));
            }
        }
        else {
            $result = mysqli_query($con,"SELECT * FROM student WHERE pid='$_SESSION[pid]'");
            $i=0;
            while ($row = mysqli_fetch_array($result)) 
            {
    	       $names[$i]=$row['usn'];
    	       $i++;
            }
            $j=0;
            while ($j < $i)
            {
    	       $sql="INSERT INTO notification (`from`,`fromname`, `to`, `msg`) VALUES ('$_SESSION[pid]','$_SESSION[name]','$names[$j]','$_POST[message]')";
		      if (!mysqli_query($con,$sql))
		      {
  			       die('Error: ' . mysqli_error($con));
		      }
    	       $j++;   
            }
        }
    }

    elseif ($_SESSION['person'] == "student")  {
        $sql="INSERT INTO notification (`from`,`fromname`, `to`, `msg`) VALUES ('$_SESSION[usn]','$_SESSION[name]','$_SESSION[pid]','$_POST[message]')";
        if (!mysqli_query($con,$sql))
        {
            die('Error: ' . mysqli_error($con));
        }
    }
    mysqli_close($con);
    header('Location: ' . $_SESSION['person'] . 'page.php');
?>