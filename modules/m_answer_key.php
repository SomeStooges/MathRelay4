<!--Content for Answer Key tab-->
<?php
	require '../server/utilities.php';
	$choiceBank = array();
	$numQuestions = getOption('answerkey','numQuestion');
	$resource = db_Query("SELECT choice_1,choice_2,choice_3,choice_4,choice_5,choice_6 FROM answer_key ORDER BY series_number ASC, level_number ASC;");
	for($i=1;$i<=$numQuestions;$i++){
		$choiceBank[$i] = array();
		for($j=1;$j<=3;$j++){
			$tempObj = mysqli_fetch_object($resource);
			$choiceBank[$i][$j] = array(
				1 => $tempObj->choice_1,
				2 => $tempObj->choice_2,
				3 => $tempObj->choice_3,
				4 => $tempObj->choice_4,
				5 => $tempObj->choice_5,
				6 => $tempObj->choice_6
			);
		}
	}

	$correctKey = array();
	$resource = db_Query("SELECT correct_index FROM answer_key ORDER BY series_number ASC, level_number ASC;");
	for($i=1;$i<=$numQuestions;$i++){
		$correctKey[$i] = array();
		for($j=1;$j<=3;$j++){
			$tempRow = mysqli_fetch_row($resource);
			$correctKey[$i][$j] = $tempRow[0];
		}
	}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="../modules/m_scripts/ms_answer_key_4.js"></script>
		<link rel="stylesheet" type="text/css" href="../modules/m_styles/mst_answer_key_4.css">
		<script type="text/javascript">
			var choiceBank = JSON.parse('<?php print json_encode($choiceBank) ?>');
			var answerKey = JSON.parse('<?php print json_encode($correctKey) ?>');
		</script>

		<!--Bootstrap code -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<link href='http://fonts.googleapis.com/css?family=Advent+Pro:500' rel='stylesheet' type='text/css'/>
	</head>
	<body>
		<?php if(!function_exists('db_Query')){require $_SERVER['DOCUMENT_ROOT'] . 'MathRelay3/server/utilities.php';} ?>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<b>Question Number</b>
					<table id='questionTable'>
						<?php
							$numQuestions = getOption('answerkey','numQuestion');
							for ($countOut = 0; $countOut < ($numQuestions / 5); $countOut++) {
								print "<tr class='questions'>";
								for ($countIn = 1; $countIn <= 5; $countIn++) {
									$currentNum = $countIn + (5 * $countOut);
									if ($currentNum <= $numQuestions) {
										print "<td><button class='seriesNumbers' id='q" . $currentNum . "'> " . $currentNum . " </button></td>";
									}
								}
							print "</tr>";
							}
						?>
					</table>
					<div id='special_characters'>
						<b>Special Characters</b><br>
						<button class='special_button' id='PiButton'>&#960</button>
						<button class='special_button' id='RadicalButton'>&#8730</button>
						<button class='special_button' id='InfinityButton'>&#8734</button>
					</div>
				</div>
				<div class="col-md-9">
					<div class="col-md-4">
						<b> Level 3 Answer </b>
						<table class='answerTable'>
							<?php
								$numChoices = 6;
								$level = 3;
								for($i=1;$i<=6;$i++){
									print "<tr><td class='inputs'><input id='v".$level."_".$i."' class='level".$level."Values'></td>";
									print "<td class='buttons'><button id='s".$level."_".$i."' class='level".$level."Set'>Select</button></td></tr>";
								}
							?>
						</table>
					</div>
					<div class="col-md-4">
						<b> Level 2 Answer </b>
						<table class='answerTable'>
							<?php
								$level = 2;
								for($i=1;$i<=6;$i++){
									print "<tr><td class='inputs'><input id='v".$level."_".$i."' class='level".$level."Values'></td>";
									print "<td class='buttons'><button id='s".$level."_".$i."' class='level".$level."Set'>Select</button></td></tr>";
								}
							?>
						</table>
					</div>
					<div class="col-md-4">
						<b> Level 1 Answer </b>
						<table class='answerTable'>
							<?php
								$level = 1;
								for($i=1;$i<=6;$i++){
									print "<tr><td class='inputs'><input id='v".$level."_".$i."' class='level".$level."Values'></td>";
									print "<td class='buttons'><button id='s".$level."_".$i."' class='level".$level."Set'>Select</button></td></tr>";
								}
							?>
						</table>
					</div>

				</div>
			</div>
		</div>
	</body>
</html>
