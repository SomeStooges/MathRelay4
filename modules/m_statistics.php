<!DOCTYPE HTML>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="../scripts/Chart.min.js"></script>
		<script src="../scripts/Chart.Scatter.min.js"></script>
    <script type="text/javascript" src="../modules/m_scripts/ms_statistics.js"></script>

    <!--Bootstrap code -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../modules/m_styles/mst_statistics.css">
    <link href='http://fonts.googleapis.com/css?family=Advent+Pro:500' rel='stylesheet' type='text/css'/>
  </head>
  <body style='background-color: black'>
    <div id='buttons'>
      <button class='selectorButton' id='forceStatUpdate'>Update Now</button>
      <button class='selectorButton' id='bindLineButton'>Attempts vs Time</button>
      <button class='selectorButton' id='bindScatterButton'>Questions vs Time</button>
      <button class='selectorButton' id='bindBar1Button'>Attempts vs Team</button>
      <button class='selectorButton' id='bindBar2Button'>Attempts vs Question</button>
    </div>
    <div id='y-axis'></div>
    <div id='x-axis'></div>
    <div  class='graphwrap' id='bindLine'><canvas id="attemptsVTime" class='graph' width='1000' height='500'></canvas></div><br>
		<div  class='graphwrap' id='bindScatter'><canvas id="questionVTime" class='graph' width="5000" height="500"></canvas></div><br>
		<div  class='graphwrap' id='bindBar1'><canvas id="attemptsVTeam" class='graph' width="1000" height="500"></canvas></div><br>
		<div  class='graphwrap' id='bindBar2'><canvas id="attemptsVQuestion" class='graph' width="1000" height="500"></canvas></div><br>
  </body>
</html>
