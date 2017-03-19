<?php
	//Protection against premature entrance
	session_start();
	if(!isset($_SESSION['teamID'])){
		header('location: index.php');
	}
	require 'server/utilities.php';
	$checkEvent = mysqli_fetch_row(db_Query("SELECT `value` FROM `relay_options` WHERE `class`='event';"));
	switch($checkEvent[0]){
		case "close":	header('location: finish_page.php');break;
		case "open": $temp = "open"; //may delete later
	}
	if($checkEvent[0] == "close"){
		header('location: finish_page.php');
	}
	/*$currentEvent = getOption('event','currentEvent');
	if($currentEvent == 'none'){
		header('location: index.php');
	} elseif ($currentEvent == 'close'){
		header('location: finish_page.php');
	}*/
	$choiceBank = array();
	$numQuestions = getOption('answerkey','numQuestion');
	$resource = db_Query("SELECT choice_1,choice_2,choice_3,choice_4,choice_5,choice_6 FROM answer_key ORDER BY series_number ASC, level_number ASC;");
	for($i=1;$i<=$numQuestions;$i++){
		$choiceBank[$i] = array();
		for($j=1;$j<=3;$j++){
			$tempObj = mysqli_fetch_object($resource);
			//die(var_dump($tempObj));
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
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title> Answer Sheet </title>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript">
			var choiceBank = JSON.parse('<?php print json_encode($choiceBank) ?>');
			var id = JSON.parse('<?php print json_encode($_SESSION['teamID']) ?>')
		</script>
		<script type="text/javascript" src="./scripts/scripts_answer_sheet.js"></script>

		<!--Bootstrap code -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="./styles/styles_answer_sheet_4.css"></script>
		<link href='http://fonts.googleapis.com/css?family=Advent+Pro:500' rel='stylesheet' type='text/css'/>
	</head>

	<body>
		<div class="container-fluid">
			<div class="row">

				<div class="col-md-3" id="leftSide">
					<div class="teamNumberDiv">
						<span id='teamNumber'></span>
					</div>
					<div class="questionGrid">
						Questions
						<table id='series'>
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
					</div>
				</div>




				<div class="col-md-9">
					<div class="row">

						<div class="col-md-12">
							<button id='logoutButton'>Logout</button>
							<input id='nicknameInput' maxlength="25" value="Answer Sheet">
							<div id='freetimeDiv'>Free<br />Time!</div>
						</div>


						<div class="col-md-9">
							<div class="row">
								<div class="col-md-4">
									<div id='level3choice'class="answerLevel">
										<h1>Level 3</h1>
											<?php
												$numChoices = 6;
												$level = 3;
												for($i=1;$i<=6;$i++){
													print "<button id='c".$level."_".$i."' class='level".$level."Buttons'></button>";
												}
											?>
									</div>
								</div>
								<div class="col-md-4">
									<div id='level2choice'class="answerLevel">
											<h1>Level 2</h1>
												<?php
													$level = 2;
													for($i=1;$i<=6;$i++){
														print "<button id='c".$level."_".$i."' class='level".$level."Buttons'></button>";
													}
												?>
									</div>
								</div>
								<div class="col-md-4">
									<div id='level1choice'class="answerLevel">
										<h1>Level 1</h1>
											<?php
												$level = 1;
												for($i=1;$i<=6;$i++){
													print "<button id='c".$level."_".$i."' class='level".$level."Buttons'></button>";
												}
											?>
									</div>
								</div>

							</div>
						</div>


						<div class="col-md-3">
							<div class="column" id="submitDiv">
								<h1>Points: <span id='currentPoints'>0</span></h1>
								<button id="submit_answer"> Submit </button>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</body>
</html>
