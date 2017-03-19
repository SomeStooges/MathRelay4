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
    		<link rel="stylesheet" type="text/css" href="./styles/styles_index_4.css"/>
    		<title>Math Relay</title>
    	</head>

    	<body>
        <div class="blackbody"></div>
        <div class="container">
          <div class="contentLeft">
              <div class="subLeft">
                Math Relay
              </div>
          </div>
          <div class="contentRight">
              <button class = 'indexButton' id="welcomeButton" disabled> Student Login </button> <br>
              <button class = 'indexButton' id="adminButton"> Admin Login </button><br>
              <button class = 'indexButton' id="aboutButton"> About This Program </button><br>
          </div>
        </div>
    	</body>
    </html>
