<!-- Content for Team Data tab -->
<?php
	require '../server/utilities.php';
	$startTime = mysqli_fetch_object(db_Query("SELECT `value` FROM relay_options WHERE `name` = 'startTime'"));
	$startTime = $startTime->value;
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="../modules/m_scripts/ms_team_data_4.js"></script>
		<script type="text/javascript">
			var startTime = JSON.parse('<?php print json_encode($startTime) ?>');
			console.log("Start Time: " + startTime);
		</script>

		<!--Bootstrap code -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="../modules/m_styles/mst_team_data_4.css">
	</head>
	<body>
		<?php
			if(!function_exists('db_Query')){
				require $_SERVER['DOCUMENT_ROOT'] . 'MathRelay3/server/utilities.php';
			}

			$resource = db_Query("SELECT `team_id`,`team_nickname`,`password`,`points`,`rank_freetime`,`last_checkin_time`,`last_point`,`rank_final` FROM team_data;");
			$teamData = array();
			while($teamRow = mysqli_fetch_row($resource)){
				$teamData[] = $teamRow;
			}

			print "<table id='teamDataTable'>";
			print "<tr><th>Current Rank</th><th>Team ID</th><th>Team Nickname</th><th>Password</th><th>Points</th><th>Rank at Freetime</th><th>Last Point Time</th><th>Last Check-in Time</th></tr>";
			for($i=0;$i<count($teamData);$i++){
				print "<tr id='dataRow" . $i . "'>";
				$rank = $i + 1;
				print "<td> " . $rank . " </td>";
				for($j=0;$j<count($teamData[$i]);$j++){
					print "<td>" . $teamData[$i][$j] . "</td>";
				}
				print "</tr>";
			}
			print "</table>";
		?>

	</body>
</html>
