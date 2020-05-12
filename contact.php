<?php include "header1.php"; ?>

<!--contact-->
	<div class="contact">
		<div class="container">
			<h3>Contact Us</h3>
			
				<div class="col-md-4 contact-form-left">
					<h4>Address :</h4>
					<p>241 Amazon Street</p>
					<p>9560 chandigarh</p>
					<p>Telephone : +91 9870654321</p>
					<p>FAX : +91 800 889 9898</p>
					<a href="mailto:example@email.com">me@gmail.com</a>
				</div>
				<div class="col-md-8 contact-form-right">
					<h4>Contact Form</h4>
					<form>
						<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
						<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<input type="submit" value="Submit" >
						<input type="submit" value="reset" >
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	
<!--//contact-->

<?php include "footer.php"; ?>