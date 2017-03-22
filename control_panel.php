<?php
	//Protection against premature entrance
	session_start();
	if(!isset($_SESSION['admin'])){
		header('location: index.php');
	}
	require 'server/utilities.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Control Panel</title>
		<meta charset="utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="./scripts/scripts_control_panel.js"></script>

		<!--Bootstrap code -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- Icons -->
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" type="text/css">

		<link rel="stylesheet" type="text/css" href="./styles/styles_control_panel_4.css">
		<link href='http://fonts.googleapis.com/css?family=Advent+Pro:500' rel='stylesheet' type='text/css'/>
	</head>

	<body>
		<div id='dataStore' style='display: none;'>
			<span id='cEvent'>
				<?php print getOption('event','currentEvent'); ?>
			</span>
			<span id='startTimeDiv'>
				<?php print getOption('event','startTime'); ?>
			</span>
			<span id='stopTimeDiv'>
				<?php print getOption('event','stopTime')?>
			</span>
		</div>

		<div class="container-fluid">
			<div class="row">


				<div class="col-md-1">
					<div class="pageTitle">
						Control<br /> Panel
					</div>
					<div class = "toolbar">
						<!-- The box running down the left side -->
						<button class="toolbarButton" id="teamData"><i class="ion-grid"></i><br>Teams</button>
						<button class="toolbarButton" id="leaderboardLink"><i class="ion-ios-list"></i><br>Leaderboard</button>
						<button class="toolbarButton" id="answerKey"><i class="ion-android-checkmark-circle"></i><br>Answer Key</button>
						<button class="toolbarButton" id="teamLog"><i class="ion-ios-pulse-strong"></i><br>Activity</button>
						<button class="toolbarButton" id="statistics"><i class="ion-stats-bars"></i><br>Statistics</button>
						<button class="toolbarButton" id="settings"><i class="ion-gear-a"></i><br>Settings</button>
						<button class="toolbarButton" id="printTeamData"><i class="ion-printer"></i><br>Print Login Data</button>
					</div>
				</div>


				<div class="col-md-11">
					<div class="row">
						<div class="ribbon">
							<button class="ribbonButton" id="none">Closed</button>
							<button class="ribbonButton" id="open">Open</button>
							<button class="ribbonButton" id="start">Start</button>
							<button class="ribbonButton" id="freetime">Free Time</button>
							<button class="ribbonButton" id="freezeLeaderboard">Freeze Leaderboard</button>
							<button class="ribbonButton" id="stop">Stop</button>
							<button class="ribbonButton" id="close">Close</button>
							<button class="ribbonButton" id="clear">Clear</button>
							<button class="ribbonButton" id="logoutButton">Logout</button>
							<div id="timer">00:00:00</div>
						</div>
					</div>
					<div class="row">
						<div id = "content">
						<!-- Dynamic div for content of tabs to display -->
							<div id='mod1' style='display: block;' class='contentMod'>
								<iframe src='modules/m_team_data.php' class='iframeMod' id='iframe1'></iframe>
							</div>
							<!-- Tooltab 2 is missing because it is a hyperlink -->
							<div id='mod3' style='display: none;' class='contentMod'>
								<iframe src='modules/m_answer_key.php' class='iframeMod' id='iframe2'></iframe>
							</div>
							<div id='mod4' style='display: none;' class='contentMod'>
								<iframe src='modules/m_team_activity.php' class='iframeMod' id='iframe3'></iframe>
							</div>
							<div id='mod5' style='display: none;' class='contentMod'>
								<iframe src='modules/m_statistics.php' class='iframeMod' id='iframe4'></iframe>
							</div>
							<div id='mod6' style='display: none;' class='contentMod'>
								<iframe src='modules/m_settings.php' class='iframeMod' id='iframe5'></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
