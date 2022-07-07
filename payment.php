<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/style_payment.css">
	<link rel="stylesheet" type="text/css" href="styles/nav_footer.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
	integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style>
	p {font-size: 10px;}
</style>
</head>
<body>
	<nav>
				<div class="logo">
					<h1><a href="#"> uPark </a></h1>
				</div>
			<ul>
			<!-- navigation bar -->
			<li><a href="Howit.html" class="active">How it works</a></li>
			<li><a href="solution.html">Solutions</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="signUp.php">Sign Up</a></li>
			</ul>
		</nav>			
		

	<table border="0" width="80%" class="center" cellspacing="20px">
		<tr valign="top">
			<td>
				<div class="formcard">
				<table border="0" cellspacing="20" style="v:top;">
					<tr>
						<td colspan="2">Car Park on Upper Marsh, SE1</td>
						<td> <div align="right"><a href="content.php">Edit Location</a> </div> </td>
					</tr>
					<tr>
						<td colspan="3">
							<img src="Images/image21.png" class="parks" width="510px" height="170"></td>
					</tr>
					<tr>
						<td> Parking from <br> <input  style="margin-top:5px; width: 170px;" type="time" id="appt" name="appt" class="textlength" ></td>
						<td align="center"><img src="Images/image11.png" width="30px" height="30"></td>
						<td align="left" >Parking until <br> <input style="margin-top:5px; width: 170px;" type="time" id="appt" name="appt" class="textlength" > </td>
					</tr>
					<tr>
						<td></td>
						<td> <div align="center"><b>2h</b> <br> Total duration</div> </td>
						<td></td>
					</tr>

					<tr>
						<td></td>
						<td colspan="2"><div align="right" >Total Price : <b>$9.90</b> </div>
							<br>
							<div align="right" ><b>Add a promo code?</b></div>
						</td>
					</tr>
				</table>
				<br><br>

			</div>
			<br><br><br>
				<div>
				<img src="Images/image10.jpeg" width="60px" height="60">
				
					<div class="securetext">
					<p>Reserving parking with JustPark is safe and secure!</p>
					<p>Read about our cancellation policy</p>
					<br>
					</div>
					<div class="tick"><i class="fa fa-check" aria-hidden="true"></i>
					Trusted by over 5.5 million drivers
					</div> 

				</div>
			</td>
			<td>
				<div class="formcardright">
				<table border="0" width="100%"> 

				<form action="userdetails.php" method="POST" >
					<tr>
						<td>
    						<div><b>1. Personal Details</b></div>
						</div>
						</td>
						<td></td>
						<td colspan="2"><div align="right">Want to use another account?<a href="#">Logout</a></div></td>

					</tr>
    				
    				<tr>
    					<td  style="padding-top:10px;" colspan="3">
    						<label><b>Phone Number</b> (in case you need to be contacted)</label> 
    					<br>
    					<input type="text" placeholder="Enter Mobile Number" name="mobilenum">
    					</td> 
    				</tr>
    				<tr>
    					<td style="padding-top:10px;" colspan="4">
    						<label><b>Vehicle Number Plate</b></label>
    					<br>
   						<input type="text" placeholder="Enter Vehicle Number Plate" name="platenum">	
    					</td>
    					
    				</tr>
    				<tr>
    					<td colspan="4">
    						<button type="submit" class="savebtn" name="Save_and_Continue" ><b>Save and Continue</b> </button>	
    					</td>
    				</tr>
  
				</form>
				</table>
				</div>
				<br><br>

				<div class="formcardrightbottom">
				<table border="0" width="100%">

				<form action="paymentdetails.php" method="POST">
					<tr>
						<td>
    						<div><b>2. Payment Information</b></div>
						</div>
						</td>
					</tr>
    			
    				<tr>
    					<td colspan="2" style="padding-top:10px ">
    					<label>Choose your payment method</label>
    					<br>
  							<input type="radio" id="visa" name="payment_method" checked>
 							<label>Visa</label><br>
  							<input type="radio" id="mastercard" name="payment_method">
  							<label>Mastercard</label><br>
  							<input type="radio" id="american_express" name="payment_method">
  							<label>American Express</label>
    					</td>
    				</tr>
    				<tr>
    					<td colspan="2" style="padding-top:10px ">
    						<label>CARD NUMBER</label> 
    					<br>
    					<input type="text" class="inputheight" name="cardnum">
    					</td> 
    				</tr>
    				<tr>
    					<td><label>CVV CODE</label>
    					<br>
   						<input type="text" class="inputheight" name="cvvcode" >	
    					</td>
    					<td><label>EXPIRY DATE</label>
    					<br>
   						<input type="text" placeholder="MM/YY" class="inputheight" name="expiredate">
   						</td>
    					
    				</tr>

    				<tr>
    					<td colspan="2" align="center">
    						<br><br>
    						<p>Clicking below indicates that you have read and accepted the <a href="#">Terms and Conditions</a></p>
    						<div><button type="submit" class="paybtn" name="paybttn"><b><a href="verification.html">PAY NOW AND RESERVE</a></b> </button>	</div>
    					</td>
    				</tr> 	
    					
    				
  
				</form>
				</table>
				</div>

			</td>
		</tr>
	
	</table>

</body>
</html>