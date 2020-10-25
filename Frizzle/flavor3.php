<!DOCTYPE html>
<html>
<head>
	<title>REFRESHERS</title>
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
										<input type="checkbox" name="301" value="50">Crème base(Rs.50)<br>
                                        <input type="checkbox" name="302" value="40">Brewed Coffee(Rs.40)<br>
                                        
									</li>
									<li>
										<img src="milk.jpg" width="130" height="130" >
										<h2>MILK:</h2>
                                       	<input type="checkbox" name="303" value="50">Almond Milk(Rs.50)<br>
                                        <input type="checkbox" name="304" value="45">Coconut Milk(Rs.45)<br>
                                        <input type="checkbox" name="305" value="50">Soy Milk(Rs.50)<br>
                                        <input type="checkbox" name="306" value="45">Whole Milk(Rs.45)<br>
                                        <input type="checkbox" name="307" value="50">Low Fat(Rs.50)<br>
                                   	</li>
                                    <li>
										<img src="rblend.png" width="130" height="130" >
										<h2>BLEND:</h2>
                                        <input type="checkbox" name="308" value="35">Apple(Rs.35)<br>
                                        <input type="checkbox" name="309" value="30">Guava(Rs.30)<br>
                                        <input type="checkbox" name="310" value="50">Peach(Rs.50)<br>
                                    </li>
									<li>
										<img src="syrup.jpg" width="130" height="130">
										<h2>SYRUPS:</h2>
										<input type="checkbox" name="311" value="35">Caramel(Rs.35)<br>
                                        <input type="checkbox" name="312" value="40">Cinnamon Dolce(Rs.40)<br>
                                        <input type="checkbox" name="313" value="30">Classic(Rs.30)<br>
                                        <input type="checkbox" name="314" value="35">Hazelnut(Rs.35)<br>
                                        <input type="checkbox" name="315" value="40">Peppermint Syrup(Rs.40)<br>
                                        <input type="checkbox" name="316" value="40">Pineapple Ginger Syrup(Rs.40)<br>
                                        <input type="checkbox" name="317" value="35">Raspberry(Rs.35)<br>
                                        <input type="checkbox" name="318" value="30">Toffee Nut(Rs.30)<br>
                                        <input type="checkbox" name="319" value="25">Vanilla(Rs.25)<br>
                                        <input type="checkbox" name="320" value="30">Lemonade(Rs.30)<br>
									</li>
                                    <li>
                                    	<img src="water.jpg" width="130" height="130" >
                                    	<h2>WATER:(mention the no. of cups)</h2> 
                                    	<input type="text" name="321" value="">
                                    </li>
                                    <li>
                                        <img src="ice.jpg" width="130" height="130" >
										<h2>ICE:</h2>
                                        <input type="checkbox" name="322" value="10">Tall(Rs.10)<br>
                                        <input type="checkbox" name="323" value="15">Grande(Rs.15)<br>
                                        <input type="checkbox" name="324" value="12">Venti(Rs.12)<br>
                                    </li>
									<li>
										<img src="pwdr.jpg" width="130" height="130">
                                        <h2>SWEETENER:</h2>
                                        <input type="checkbox" name="325" value="15">Matcha powder(Rs.15)<br>
                                        <input type="checkbox" name="326" value="15">Raspberry Powder(Rs.15)<br>
                                        <input type="checkbox" name="327" value="12">pink powder sour(Rs.12)<br>
                                        <input type="checkbox" name="328" value="20">unicorn blue powder(Rs.20)<br>
                                        <input type="checkbox" name="329" value="10">Honey Powder(Rs.10)<br>
                              
                                    </li>
                                    <li>
										<img src="fruits.jpg" width="130" height="130">
										<h2>FROZEN/DRY FRUITS:</h2>
										<input type="checkbox" name="330" value="30">Blackberries(Rs.30)<br>
                                        <input type="checkbox" name="331" value="45">Dragon fruit(Rs.45)<br>
                                        <input type="checkbox" name="332" value="40">Strawberries(Rs.40)<br>
                                        <input type="checkbox" name="333" value="45">Kiwi(Rs.45)<br>
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