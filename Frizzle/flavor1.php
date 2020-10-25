
<!DOCTYPE html>
<html>
<head>
	<title>TEA</title>
	<meta charset="utf-8">
	<link href="style.css" rel="stylesheet" type="text/css">
	
</head>
<body>
	<div id="page">
		<div id="sidebar"> <a href="homepage.php"><img id="logo" src="logo.jpg" width="180" height="240" alt=""></a>
			<h2>BEVERAGE OF THE DAY</h2>
			<ul>
				<li>
					<a href="dessert.php"><img src="green.jpg" width="165" height="165" alt=""></a>
					<h3><a href="dessert.php">Misty Peppermint</a></h3>
				</li>
			</ul>
			<h2>POPULAR BEVERAGES</h2>
			<ul>
				<li>
					<a href="dessert.php"><img src="pink.jpg" width="165" height="165" alt=""></a>
					<h3><a href="dessert.php">Sour Raspberry</a></h3>
				</li>
				<li>
					<a href="dessert.php"><img src="brown.jpg" width="165" height="165" alt=""></a>
					<h3><a href="dessert.php">Caramel Crunch </a></h3>
				</li>
				<li>
					<a href="dessert.php"><img src="purple.jpg" width="165" height="165" alt=""></a>
					<h3><a href="dessert.php">Blueberry Blast</a></h3>
				</li>
			</ul>
		</div>
		<div id="content"> 
			
			<div id="header">
				<ul class="navigation">
					<li>
						<a href="about.php">About Us</a>
					</li>
					
					<li>
						<a href="dessert.php">Famous Recipes</a>
					</li>
					<li>
						<a href="contact.php">Contact Us</a>
					</li>
				</ul>
			</div>
			<div class="content"> 
				<div class="header">
					<div class="footer">
						<div class="body">
							<h1>Choose Your Ingredients</h1>
							<div class="section">
								<ul class="flavors">
									<li>
										<img src="bottle3.jpg" width="130" height="130" >
										<h2>BASES:</h2>
										<input type="checkbox" name="101" value="50">Passion Tango Tea Tart Rose Hips(Rs.50)<br>
                                        <input type="checkbox" name="102" value="30">Green Tea(Rs.30)<br>
                                        <input type="checkbox" name="103" value="45">Spiced Black Tea(Rs.45)<br>
										
									</li>
									<li>
										<img src="milk.jpg" width="130" height="130" >
										<h2>MILK:</h2>
										<input type="checkbox" name="104" value="50">Splash of 2% Milk(Rs.50)<br>
                                       	<input type="checkbox" name="105" value="50">Almond Mil(Rs.50)k<br>
                                       	<input type="checkbox" name="106" value="45">Coconut Milk(Rs.45)<br>
                                        <input type="checkbox" name="107" value="50">Soy Milk(Rs.50)<br>
                    					<input type="checkbox" name="108" value="45">Whole Milk(Rs.45)<br>
                    					<input type="checkbox" name="109" value="60">Cream(Rs.60)<br>
									</li>
									<li>
										<img src="nuts.png" width="130" height="130">
                                        <h2>CONDIMENTS:</h2>
                    					<input type="checkbox" name="110" value="20">Ginger(Rs.20)<br>
                    					<input type="checkbox" name="111" value="30">Nutmeg(Rs.30)<br>
                                        <input type="checkbox" name="112" value="25">Cinnamon(Rs.25)<br>
                    					<input type="checkbox" name="113" value="25">Cardamom(Rs.25)<br>
                    					<input type="checkbox" name="114" value="25">Cloves(Rs.25)<br>
                                        <input type="checkbox" name="115" value="30">Rooibos(Rs.30)<br>
                    					<input type="checkbox" name="116" value="30">Leamon grass(Rs.30)<br>
									<li>
										<img src="syrup.jpg" width="130" height="130">
										<h2>SYRUPS:</h2>
										<input type="checkbox" name="117" value="35">Caramel(Rs.35)<br>
                                        <input type="checkbox" name="118" value="40">Cinnamon Dolce(Rs.40)<br>
                    					<input type="checkbox" name="119" value="30">Classic(Rs.30)<br>
                    					<input type="checkbox" name="120" value="35">Hazelnut(Rs.35)<br>
                 						<input type="checkbox" name="121" value="40">Peppermint Syrup(Rs.40)<br>
                      					<input type="checkbox" name="122" value="40">Pineapple Ginger Syrup(Rs.40)<br>
                                        <input type="checkbox" name="123" value="35">Raspberry(Rs.35)<br>
                    					<input type="checkbox" name="124" value="30">Toffee Nut(Rs.30)<br>
                    					<input type="checkbox" name="125" value="25">Vanilla(Rs.25)<br>
									</li>
                                  
									<li>
										<img src="wsprinkle.jpg" width="130" height="130">
										<h2>TOPPINGS:</h2>
										<input type="checkbox" name="126" value="25">Cascara(Rs.25)<br>
                                        <input type="checkbox" name="127" value="35">Cinnamon Dolce(Rs.35)<br>
                    					<input type="checkbox" name="128" value="40">Sprinkles(Rs.40)<br>
                                        <input type="checkbox" name="129" value="30">Pumpkin Spice(Rs.30)<br>
                                        
                                    					
                                    
									<li>
										<img src="bottle1.jpg" width="130" height="130">
										<h2>DRIZZLE:</h2>
										<input type="checkbox" name="130" value="35">Mocha Drizzle(Rs.35)<br>
                                        <input type="checkbox" name="131" value="45">Caramel Drizzle(Rs.45)<br>
									</li>
								
								</ul>
							</div>
							<form name="myform" action="submit.php" onsubmit="return validation()" >
								<p><input type="submit" value="SUBMIT" name="submit"></p>
							</form>		
						</div>
					</div>
				</div> 
			</div>
			
			<div id="footer">
			<span>&copy;2020 <a href="homepage.php">Frizzle Coffee and Shakes</a> All Rights Reserved</span>
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