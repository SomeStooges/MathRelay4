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
		<script type="text/javascript" src="../modules/m_scripts/ms_team_activity.js"></script>
		<script type="text/javascript">
			var startTime = JSON.parse('<?php print json_encode($startTime) ?>');
		</script>
		<link rel="stylesheet" type="text/css" href="../modules/m_styles/mst_team_activity.css">
		<link href='http://fonts.googleapis.com/css?family=Advent+Pro:500' rel='stylesheet' type='text/css'/>
	</head>
	<body>
		<div id='dataStore' style='display: none;'>
			<span id='sTime'>
				<?php print getOption('event','startTime'); ?>
			</span>
		</div>
		<?php if(!function_exists('db_Query')){require $_SERVER['DOCUMENT_ROOT'] . 'MathRelay3/server/utilities.php';} ?>
		<!--<b> Team ID </b>--> <button id='freezeButton'>Freeze Log</button>
		<div id = 'table'>
			<th><b> Team ID </b></th>
			<table id='teamActivity'>
				<?php
					$numTeams = getOption('reset','numTeams');
					for($i=1;$i<=$numTeams;$i++){
						print "<tr><td id='t" . $i . "' class='teamIDdiv'>";
						print $i;
						print "</td></tr>";
					}
				?>
			</table>
		</div>
	</body>
</html>
