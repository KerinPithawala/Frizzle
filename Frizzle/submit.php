<!DOCTYPE html>
<html>
<head>
	<title>SUBMIT</title>
	<meta charset="utf-8">
	<link href="style.css" rel="stylesheet" type="text/css">
	
</head>
<body>
	<div id="page">
		<div id="sidebar"> <a href="homepage.php"><img id="logo" src="logo.jpg" width="180" height="240" alt=""></a>
			<h2>BEVERAGE OF THE DAY</h2>
			<ul>
				<li>
					<a href="dessert.html"><img src="green.jpg" width="165" height="165" alt=""></a>
					<h3><a href="dessert.html">Misty Peppermint</a></h3>
				</li>
			</ul>
			<h2>POPULAR BEVERAGES</h2>
			<ul>
				<li>
					<a href="dessert.html"><img src="pink.jpg" width="165" height="165" alt=""></a>
					<h3><a href="dessert.html">Sour Raspberry</a></h3>
				</li>
				<li>
					<a href="dessert.html"><img src="brown.jpg" width="165" height="165" alt=""></a>
					<h3><a href="dessert.html">Caramel Crunch </a></h3>
				</li>
				<li>
					<a href="dessert.html"><img src="purple.jpg" width="165" height="165" alt=""></a>
					<h3><a href="dessert.html">Blueberry Blast</a></h3>
				</li>
			</ul>
		</div>
		<div id="content"> 
			
			<div id="header">
				<ul class="navigation">
					<li>
						<a href="about.html">About Us</a>
					</li>
					<li>
						<a href="dessert.html">Famous Recipes</a>
					</li>
					<li>
						<a href="contact.html">Contact Us</a>
					</li>
				</ul>
            </div>
            <div class="content"> 
				<div class="header">
					<div class="footer">
						<div class="body">


                            <form action="#">
								<div class="section"> 
									<div class="delivery">
										<h2>Delivery Information</h2>
										<table>
											<tr>
												<td><label for="firstname"><span>First Name*</span>
														<input type="text" name="firstname" id="delinp" value="">
													</label></td>
												<td><label for="address1"><span>Street Address 1 *</span>
														<input type="text" name="street address 1" id="delinp">
													</label></td>
											</tr>
											<tr>
												<td><label for="lastname"><span>Last Name *</span>
														<input type="text" name="lastname" id="delinp" value="">
													</label></td>
												<td><label for="address2"><span>Street Address 2 *</span>
														<input type="text" name="address2" id="delinp" value="">
													</label></td>
											</tr>
											<tr>
												<td><label for="contactnumber"><span>Contact Number *</span>
														<input type="text" name="contactnumber" id="delinp" value="">
													</label></td>
												<td><label for="city"><span class="city">City *</span>
														<input type="text" name="city" id="delinps" value="">
													</label>
													<label for="state"><span class="state">State *</span>
													<input type="text" name="State" id="delinps" value="">

													</label></td>
											</tr>
											<tr>
												<td><label for="emailaddress"><span>Email Address *</span>
														<input type="text" name="emailaddress" id="delinp" value="">
													</label></td>
												<td><label for="zipcode"><span class="zipcode">Zipcode *</span>
														<input type="text" name="zipcode" id="delinps" value="">
													</label>
													
													
													</td>
											</tr>
										</table>
                                    </div>
                                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
									<div class="payment">
										<h2>Payment Details</h2>
										<label for="paycreditcard" class="paycreditcard">
											<input type="checkbox" name="paycreditcard" value="" id="paycreditcard" checked>
											Pay Using Credit Card</label>
										<table>
											<tr>
												
												<td><label for="cardnumber">Card Number *
														<input type="text" name="cardnumber" id="cardnumber" value="">
													</label></td>
											</tr>
										</table>
										<table>
											<tr>
												<td><label for="month"><span>Credit Card Expiration *</span>
														<select name="month" id="month">
															<option selected>Jan</option>
															<option selected>Feb</option>
															<option selected>Mar</option>
															<option selected>Apr</option>
															<option selected>May</option>
															<option selected>Jun</option>
															<option selected>Jul</option>
															<option selected>Aug</option>
															<option selected>Sep</option>
															<option selected>Oct</option>
															<option selected>Nov</option>
															<option selected>Dec</option>
														</select>
													</label>
													<label for="year">Year *
														<input type="text" name="year" id="year" value="">
													</label></td>
													</td>
												<td></td>
											</tr>
										</table>
										<label for="cashondelivery">
											<input type="checkbox" value="" name="cashondelivery" id="cashondelivery" checked>
											Cash on Delivery</label>
									</div>
								</div>
								<div id="connect">
                                    <h1>TO CONFIRM YOUR ORDER,CLICK ON SUBMIT!</h1>
									<a href="thankyou.php">SUBMIT</a>
								</div>
							</form>

                        </div>
					</div>
				</div> 
			</div>
			
			<div id="footer">
			<span>&copy;2020 <a href="homepage.html">Frizzle Coffee and Shakes</a> All Rights Reserved</span>
				<ul>
					<li class="connect">
						FOLLOW US:
					</li>
						<a class="facebook" href="http://www.frizzle.com/go/facebook"><img src="facebook.png" width="30" height="30"></a>
					
						<a class="twitter" href="http://www.frizzle.com/go/twitter/"><img src="twitter.png" width="30" height="30"></a>
					
						<a class="email" href="http://www.frizzle.com/misc/contact"><img src="email.png" width="30" height="30"></a>
					
						<a class="googleplus" href="http://www.frizzle.com/go/googleplus/"><img src="googleplus.png" width="30" height="30"></a>
					
				</ul>
			</div>
		</div>
		
	</div>
</body>
</html>   