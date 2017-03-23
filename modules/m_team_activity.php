<!--Content for Team Activity tab -->
<?php
	require '../server/utilities.php';

	$startTime = mysqli_fetch_object(db_Query("SELECT `value` FROM relay_options WHERE `name` = 'startTime'"));
	$startTime = $startTime->value;
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="../modules/m_scripts/ms_team_activity_4.js"></script>
		<script type="text/javascript">
			var startTime = JSON.parse('<?php print json_encode($startTime) ?>');
		</script>

		<!--Bootstrap code -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="../modules/m_styles/mst_team_activity_4.css">
		<link href='http://fonts.googleapis.com/css?family=Advent+Pro:500' rel='stylesheet' type='text/css'/>
	</head>
	<body>
		<div id='dataStore' style='display: none;'>
			<span id='sTime'>
				<?php print getOption('event','startTime'); ?>
			</span>
		</div>
		<?php if(!function_exists('db_Query')){require $_SERVER['DOCUMENT_ROOT'] . 'MathRelay3/server/utilities.php';} ?>
		<div class="top">
			<div class="head">
					Team ID
			</div>
			<div class="freeze">
				<button id='freezeButton'> Click to Freeze Log</button>
			</div>
		</div>

		<div class="left">
			<table class='teamID'>
				<?php
					$numTeams = getOption('reset','numTeams');
					for($i=1;$i<=$numTeams;$i++){
						print "<tr><td id='i" . $i . "' class='teamIDdiv'>";
						print $i;
						print "</td></tr>";
					}
				?>
			</table>
		</div>

		<div class="content">
			<table class='teamActivity'>
				<?php
					for($i=1;$i<=$numTeams;$i++){
						print "<tr><td id='t" . $i . "' class='teamActivityDiv'>";
						//print $i;
						print "</td></tr>";
					}
				?>
			</table>
		</div>

















	</body>
</html>
