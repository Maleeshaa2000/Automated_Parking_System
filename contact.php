<!DOCTYPE html>
<html>
	<head>
		<title> Contact Us | uPark </title>
		<link rel="stylesheet" type="text/css" href="styles/styles.css">
		<link rel="stylesheet" type="text/css" href="styles/nav_footer.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>
<body>
	<nav>
		<div class="logo">
			<h1><a href="index.html"> uPark </a></h1>
		</div>
		<ul>
		<!-- navigation bar -->
			<li><a href="Howit.html" class="active">How it works</a></li>
			<li><a href="solution.html">Solutions</a></li>
			<li><a href="signUp.php">Sign Up</a></li>
		</ul>
	</nav>
	<br><br><br>
	<div class = "contact">
		<div class = "contact_us">
			<hr style="width:50%;text-align:left;margin-left:0">
			<br>
			<p> Please complete this form, and a member of our team will be get in touch as soon as possible. </p>
			<p> If you have ideas or suggestions on how to improve uPark you can let us know.</p><br>
			<h3> We would like to hear from you </h3>
			<h3> And ready to help! </h3><br>
			<h1> GET IN TOUCH </h1><br>
				<div class = "info">
					<div><i class="fa fa-phone" aria-hidden="true"></i> 0112 355 355 </div><br>
					<div><i class="fa fa-envelope" aria-hidden="true"></i> uPark@gmail.com </div><br>
					<div><i class="fa fa-clock-o" aria-hidden="true"></i> Mon - Fri 8:00 AM to 5:00 PM</div>
				</div>
		</div>	
	<form class = "contact_form" method = "POST" action = "process.php">
			<h3> Which of the following best defines your passion? </h3>
				<div class = "form-box">
					<label class = "container"> 
						<input type = "radio" name = "passion" value = "Driver" checked> I am a driver
						<span class="checkmark"> </span>
					</label>
					<label class = "container"> 
						<input type = "radio" name = "passion" value = "Space Owner"> I am a space owner
						<span class="checkmark"> </span>
					</label>
					<label class = "container"> 
						<input type = "radio" name = "passion" value = "Other"> Other
						<span class="checkmark"> </span>
					</label>
				</div>	
			<br>
			<input type = "text" class = "first_name" name = "firstName" placeholder = "First Name" required>
			<input type = "text" class = "last_name" name = "lastName" placeholder = "Last Name" required>
			<input type = "email" class = "email"name = "email" placeholder = "Email" pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required>
			<input type = "phone" class = "mobile_no"name = "mobile" pattern = "[0-9]{10}" placeholder = "Mobile Number" required>
			<textarea class = "message" name = "message" placeholder = "Message or Feedback" rows = "8" cols = "50" ></textarea><br/>
			<img src = "images/recaptcha.png" width = "180" height = "50" alt = "recaptcha" ><br/>
			<input type = "submit" class = "submit_bttn" name = "submit" value = "Send"><br/>
	</form>
	</div>
	<br>
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
                            <li><a href="Howit.html">How it works</a></li>
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