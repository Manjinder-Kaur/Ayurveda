<?php 
	if(isset($_POST['sub']))
	{
		$name =$_REQUEST['name'];
		$email =$_REQUEST['email'];
		$gender =$_REQUEST['gender'];
		$tel =$_REQUEST['tel'];
		$address =$_REQUEST['address'];
		$pass =$_REQUEST['pass'];
		
		
		$link=mysqli_connect("localhost","root","","ayurvedic medicine");
	$q="insert into register values('$name','$email','$gender','$tel','$address','$pass')";
	$koiv=mysqli_query($link,$q);
	if($koiv>0){
		header("location:thanku.php?msg=insert");
	}
	else{
		echo mysqli_error($link)."sorry error occur";
	}
}
else{
	header("location:register.php");
}
?> 