<?php
	//Protection against premature entrance
	session_start();
	if(!isset($_SESSION['teamID'])){
		header('location: index.php');
	}
	require 'server/utilities.php';
	/*$currentEvent = getOption('event','currentEvent');
	if($currentEvent == 'none'){
		header('location: index.php');
	} elseif($currentEvent != 'close'){
		header('location: answer_sheet.php');
	}*/
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title> Congratulations! </title>
		<meta charset="utf-8">
		<link href='http://fonts.googleapis.com/css?family=Advent+Pro:500' rel='stylesheet' type='text/css'/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="./scripts/scripts_finish_page.js"></script>

		<!--Bootstrap code -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="./styles/styles_finish_page_4.css"></script>
	</head>

	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="blackBody">
						<div class="leftSide">
							<div class="pageTitle">
								Congratulations! 
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="rightSide">
						<div id = "congratulations">
							<?php
								$team_ID = $_SESSION['teamID'];
								$teamRank = mysqli_fetch_row(db_Query("SELECT `rank_final` FROM `team_data` WHERE `team_id`='" . $team_ID . "';"));
								$teamRank = $teamRank[0];
									if($teamRank<20){
										if($teamRank>10 && $teamRank<20){
											$finalRank = $teamRank . "th";
											print "<span>Your team ranked " . $finalRank . "!</span>";

										}else{
											$temp = $teamRank%10;
											switch($temp){
												case 1:	$finalRank = $teamRank . "st"; break;
												case 2: $finalRank = $teamRank . "nd"; break;
												case 3: $finalRank = $teamRank . "rd"; break;
												default: $finalRank = $teamRank . "th"; break;
											}
											print "<span>Your team ranked " . $finalRank . "!</span>";
										}
									}else{
										print "<span>Thanks for participating!</span>";
									}
							?>
						</div>
						<div id = "cleanUpParagraph">
							<?php
								$fileName = "server/cleanupParagraph.txt";
								$myfile = fopen($fileName,'r');
								$text = fread($myfile, filesize($fileName));
								fclose($myfile);
								print "<div id='cleanup'>".$text."</div>";
							?>
						</div>



						<button id="returnTitle">Return to Title Page</button>
					</div>


				</div>
			</div>
		</div>
	</body>
</html>
