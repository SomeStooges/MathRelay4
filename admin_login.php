<!doctype HTML>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="./scripts/scripts_admin_login.js"></script>

		<!--Bootstrap code -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="./styles/admin_login_4.css"/>
		<link href='http://fonts.googleapis.com/css?family=Advent+Pro:500' rel='stylesheet' type='text/css'/>
		<title> Admin </title>
	</head>

	<body style="text-align:center">
		<div class="decker"><div class="blackbody"></div></div>

		<div class="container">
			<div class="contentLeft">
					<div class="subLeft">
						Admin Login
					</div>
			</div>
			<div class="contentRight">
				Enter login information below <br />
				Password: <input type = "password" name= "password" placeholder="Enter Password" id='adminPassword'>
				<button id="admin_login" class = 'userLoginButton'> LOGIN </button><br />
				<span style="color: Red" id="passErr"></span>
				If you are not an administrator, please click the back button below. Thank you.
			</div>
		</div>
		<div class="navButtons">
			<button id="back_button" class = 'userLoginButton'> BACK </button>
			<div id="adminverify"><div>
			<!-- <br> <?php print $currentEvent ?> -->
		</div>

		</body>
	</body>
</html>
