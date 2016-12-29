<?php
 	ini_set("session.save_path","/var/lib/php/session");
 ?>
<!doctype HTML>
<html lang = "en">
<html>
	<head>
		<meta charset="utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="./scripts/scripts_index.js"></script>

    <!--Bootstrap code -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<link href='http://fonts.googleapis.com/css?family=Advent+Pro:500' rel='stylesheet' type='text/css'/>
		<link rel="stylesheet" type="text/css" href="./styles/welcome.css"/>
		<title>Math Relay 2016</title>
	</head>

	<body>
		<section>
		<h1>
			<ul><span id="first">Math</span></ul>
			<ul><span id="second">Relay</span></ul>
			<ul><span id="third">2017</span></ul>
		</h1>
		<div style='height: 25px;'></div>
		<button class = 'indexButton' id="welcomeButton" disabled> Student Login </button>
		<br>
		<button class = 'indexButton' id="adminButton"> Admin <br>Login </button>
		<button class = 'indexButton' id="aboutButton"> About This Program </button>
	</section>
	</body>
</html>
