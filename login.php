<!DOCTYPE html>
<html>
	<head>
	<title>Login | uPark</title>
	<link rel="stylesheet" href="styles/styles_login.css">
	<link rel="stylesheet" href="style/nav_footer.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"crossorigin="anonymous">
	</head>
	<body>
	<nav>
		<div class="logo">
		<h1><a href="index.html"> uPark </a></h1>
		</div>
		<ul>
		<!-- navigation bar -->
			<li><a href="Howit.html">How it work</a></li>
			<li><a href="solution.html">Solutions</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href="#" class="active">Log in</a></li>
			<li><a href="signUp.php">Sign Up</a></li>
		</ul>
	</nav>
	<br><br><br>
		<section>
			<div class="imgBx">
			<img src="images/login.jpg">
			</div>
			<div class="contentBx">
			<div class="formBx">
				<h2>Login</h2>
				<form method="post" action="log.php">
					<div class="inputBx">
						<span>Username</span>
						<input type="text" name="username">
					</div>
					<div class="inputBx">
						<span>Password</span>
						<input type="Password" name="password">
					</div>
					<div class="remember">
					    <label><input type="checkbox" name="remember"> Remember me</label>
					</div>
					<div class="inputBx">
					    <input type="submit" value="Sign in" name="SUBMIT">
					</div>
					<div class="inputBx">
					 <p>Don't have an account? <a href="#"> Sign up</a></p>
					</div>
				</form>
			
				<h3 style="color:#9297ad"><center>Loging with social media</h3>
				<ul class="sci">
					<li><i class="fa fa-facebook-square" aria-hidden="true"></i></li>
					<li><i class="fa fa-twitter-square" aria-hidden="true"></i></li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
				</ul>
			</div>
			</div>	
		</section>		
    <footer>
            <div class="container">
                <div class="about_us">
					<h2> About Us </h2>
					<p> uPark was founded with the goal of answering any parking query, wherever in 
					the globe. uPark has evolved to become the world's largest parking service provider, with 
					millions of drivers and organizations using the services. uPark has successfully 
					built a suite of services for its customers and established a winning presence 
					throughout the world over the years. </p>
					<ul class = "pay">
						<li><a href="#"><i class="fa fa-cc-visa" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-cc-amex" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-cc-paypal" aria-hidden="true"></i></a></li>
					</ul>
				</div>		
                <div class="first">
					<h2> Quick Links </h2>
                        <ul>
                            <li><a href="#">How it works</a></li>
                            <li><a href="contact.php">Get free parking</a></li>
							<li><a href="solution.html">Student Discount</a></li>
                            <li><a href="marketing.html">Marketing and Reservation</a></li>
                            <li><a href="support.html">Support</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
							<li><a href="#">My Account</a></li>
                        </ul>
                </div>
				<div class = "final">
					<ul class = "icon">
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
					<br><br>
					<h4> Download the app </h4>
					<div class = "apple">
						<img src = "images/ios_badge.png" width = "45%" alt = "apple">
					</div>
					<div class = "android">
						<img src = "images/android_badge.png" width = "45%" alt = "android">
					</div>
				</div>	
		    </div>			
    </footer>
	<div class = "copyright">		
        <p> © Copyright uPark 2021. All Rights Reserved. </p>
	</div>	
	</body>
</html>