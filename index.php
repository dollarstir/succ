<!DOCTYPE html>
<html>
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<meta charset="utf-8">
		<title>Success Africa</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/script.js"></script>

	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="leg.jpg" alt="" width="405px" height="530px">
				</div>
				<div id="ttip">
				<!-- <div class="mec"><p id="mess">Registration successful</p></div> -->
				<!-- message will show here -->
				</div>
			
				<form action="add.php" method="POST" id="regform">
					<h3>Success Afrfica</h3>
					<div class="form-group">
						<input type="text" placeholder="First Name" class="form-control" name="fname" id="fn">
						<input type="text" placeholder="Last Name" class="form-control" name="lname" id="ln">
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="contact" class="form-control" name="contact" id="ct">
						<i class="zmdi zmdi-phone">	</i>
					</div>
					<div class="form-wrapper">
						<select name="level" id="lev" class="form-control">
							<option value="" disabled selected>Select Level</option>
							<option value="100">100</option>
							<option value="200">200</option>
							<option value="300">300</option>
							<option value="400">400</option>
							<option value="500">500</option>
							<option value="600">600</option>
							<option value="invited">Invited</option>
							<option value="shs">S.H.S</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<select name="gender" id="gend" class="form-control">
							<option value="" disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="femal">Female</option>
							<option value="other">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<select name="type" id="tp" class="form-control">
							<option value="" disabled selected>Ticket type</option>
							<option value="10">Ghc10</option>
							<option value="20">Ghc20</option>
							<option value="complimentary">Complimentary</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					
					
				
					<button id="btnrg" name="btnreg">Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
				
				
			</div>
		</div>
		
	

<script src="../../../../ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="a0191d4b4b9ecea98a6664a2-|49" defer=""></script></body>

</html>