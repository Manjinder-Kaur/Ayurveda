<?php include"header1.php";?>
<div class="body" style="background:url('images/img-2-229-4.jpg'); ">
	
	<div class="login" style="width:30%;height:500px; margin:auto">
	<h2 style="margin:0px;padding:30px; font-weight:bold;"> Customer Login</h2>
	<div class="first" >
	
	<form action="index.php">
	Username:&nbsp;<input type="text" value="Username" onblur="this.value=!this.value?'Username':this.value;" onfocus="this.select()" onclick="this.value='';">
	<br/><br/>Login:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" value=""><br/><br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><span style="color:cyan;font-weight:bold;background:rgba(0,0,0,0.5);padding:10px">Forgot your password?</span></a>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="submit" value="Login">
	</form>
	</div>
	</div>
	</div>
<?php include"footer.php";?>