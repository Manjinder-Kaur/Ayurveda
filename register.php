<?php include"header1.php";?>
<div class="body" style="background:url('images/bigstock.jpg'); ">
	
					<div class="register"style="width:50%;height:600px; margin:auto">
						<h2 style="text-align:center;width:600px;margin:0px;padding:0px;font-family: monotype corsiva;font-weight:bold;font-size:60px;color:rgb(19,217,142);"> Register </h2>
						
						<form action="registerdatabase.php" method="post">
							<div class="" style="color:rgb(19,194,162); font-weight:bold;margin:1px;">
								<table>
									<tr>
										<td><label for="name"><span>N</span>ame:</label></td>
										<td><input type="text" id="name" name="name"></td>
									</tr>
									<tr>
										<td><label for="email"><span>E</span>mail </label></td><br/>
										<td><input type="text" id="email"name="email"></td>
									</tr>
									<tr>
									<td><label >Password</label></td>
									<td><input type="password" name="pass"/>
									</td>
									</tr>
									<tr>
          <td><label for ="gender"><span>G</span>ender:</label></td>
          <td><input type="radio" value="male" name="gender">male
		  <input type="radio" value="female" name="gender">female
		  </td>
									<tr>
										<td><label for="tel_number"><span>T</span>el. <span>N</span>umber:</label></td>
										<td><input type="text" id="tel-number" name="tel"></td>
									</tr>
									<tr>
										<td><label for="address"><span>A</span>ddress:</label></td>
										<td><textarea name="address" id="address" cols="40" rows="3"></textarea></td>
									</tr>
									
									
								</table>
								<input type="submit" id="submit" value="Register"name="sub">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	<?php include"footer.php";?>