<!DOCTYPE html>
<html>
	<head>
		<title> registration</title>
		<link rel="stylesheet" type="text/css" href="styles/styles_1.css">
		<link rel="stylesheet" type="text/css" href="styles/nav_footer.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"crossorigin="anonymous">
		<script src="js/script.js"></script>
	</head>
	<body>
	<nav>
		<div class="logo">
			<h1><a href="index.html"> uPark </a></h1>
		</div>
	
		<ul>
			<li><a href="Howit.html">How it work</a></li>
			<li><a href="solution.html">Solutions</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href="login.php">Log in</a></li>
			<li><a href="#" class="active">Sign Up</a></li>
		</ul>
		</nav>
		
	<br><br><br>
	
	<form onsubmit="return checkPassword()" method="post" action="sign.php">
	<div class="signup">
		<div class="loging-box">
		<div class="left-box">
		<h1>Sign Up</h1>
		<h6>Already a member?<a href="url">Log In</a></h6>
		<br>
			<input type="text" class="input-box" name="username" placeholder="UserName" required >
			<input type="email" class="input-box" name="Email" placeholder="Email" required>
			<input type="password" id="pwd1" class="input-box" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,}" 
			title="Must contain at least one number and one uppercase and lowercase letter, and at least 10 or more characters" required>
			<input type="password" id="pwd2" class="input-box" name="repassword" placeholder="Re-Enter password" onchange = "accept()" required>
			<input type="submit" id = "sumbit" class="submit-btn" name="SUBMIT" placeholder="Sign Up" onclick = "location.href = 'index.html';">
		</div>
		<div class="right-box">
		<span class="right-title"> Sign up with <br>Social Network</span>
		<button class="social facebook">Log in with Facebook</button>
		<button class="social twitter">Log in with twitter</button>
		<button class="social google">Log in with Google</button>
		</div>
		
		<div class="or">
		OR
		</div>
		</div>
	</div>
	</form>
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