<?php
	require 'server/utilities.php';
	$currentEvent = getOption('event','currentEvent');
	/*if($currentEvent == 'none'){
		header('location: index.php');
	}*/
?>
<!DOCTYPE HTML>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="./scripts/scripts_user_login.js"></script>

		<!--Bootstrap code -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="./styles/styles_user_login_4.css"/>
		<link href='http://fonts.googleapis.com/css?family=Advent+Pro:500' rel='stylesheet' type='text/css'/>
		<title>Team Captain Login</title>
	<head>

	<body>
		<div class="blackbody"></div>
		<div class="container">
			<div class="contentLeft">
					<div class="subLeft">
						Team Captain Login
					</div>
			</div>
			<div class="contentRight">
				Enter login information below <br />
				<input type="text" name="teamID" placeholder="Enter Team ID" id='teamID' class = 'loginField'> <br />
				<input type= "password" name="password" placeholder="Enter Password" id='teamPassword' class = 'loginField'><br />
				<button id="user_login" class = 'userLoginButton'> LOGIN </button>
				<span style="color: Red" id="passErr"></span>
			</div>
		</div>
		<div class="navButtons">
			<button id="back_button" class = 'userLoginButton'> BACK </button>
			<!-- <br> <?php print $currentEvent ?> -->
		</div>

	</body>
</html>
