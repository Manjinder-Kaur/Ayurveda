<?php session_start();
?>
<?php
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
  $link=mysqli_connect("localhost","root","","ayurvedic medicine");
  $g="select * from register where Name='$user'and Password='$pass'";
	$result=mysqli_query($link,$g);
	if($row=mysqli_fetch_array($result))
	{
	$_SESSION['user']=$user;
	echo header("location:home.php?x=done");
	}
	else
	{
			echo header("location:login.php?x=nodone");
		
		//echo mysqli_error($link)."sorry error occur";
	}

	?>