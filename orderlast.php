<?php session_start();
		
	$pway = $_REQUEST['myhide'];
	$user = $_SESSION['user'];
	$obj=mysqli_connect("localhost","root","","ayurvedic medicine");
	$q = "INSERT INTO `order` (`o_id`, `email`, `payment`, `status`) VALUES ('', '$user', '$pway', 'Order Accepted ')";
	$k = mysqli_query($obj , $q);
	if($k>0)
	{
		$a = "select `oid` from `order`  ";
		$r = mysqli_query($obj,$a);
		while($l2 = mysqli_fetch_array($r))
		{
			$o_id =$l2['o_id']; 
		}
		header("location:thanks.php?o_id=$o_id&w=$pway");
	}
	else
	{
		echo mysqli_error($obj);
	}

?>