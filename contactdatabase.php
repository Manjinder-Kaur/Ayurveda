<?php
		$name =$_REQUEST['name'];
		$email =$_REQUEST['email'];
		$telephone =$_REQUEST['telephone'];
		$message =$_REQUEST['message'];
		
	    $link=mysqli_connect("localhost","root","","ayurvedic medicine");
		$q="insert into contact values('$name','$email','$telephone','$message')";

	$koiv=mysqli_query($link,$q);
	if($koiv>0)
	{
		header("location:contact.php?msg=insert");
	}
	else{
		echo mysqli_error($link)."sorry error occur";
	}


?> 