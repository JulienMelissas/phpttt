<?php
 session_start();
 session_destroy();
?>

<html>
 <head>
	<title>You've reset the game!</title>
	<link rel='stylesheet' href='style.css' type='text/css' />
 </head>
 <body>
	<div id="title">
	 <p>PHP Tic-Tac-Toe</p>
	</div>
	<div id="instructions">
	 You've Reset the game!
	</div>
	<div>
	 <a href="index.html" style="text-align: center;"><p>Go Home.</p></a>
	</div>
 </body>
</html>