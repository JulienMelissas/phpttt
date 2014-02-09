<?php
 session_start();
 
 include('functions.php');
 
 $x_win = 0;
 $o_win = 0;
 
 $board = $_SESSION['board'];
 
 $square1 = strtoupper($_POST['one']);
 $square2 = strtoupper($_POST['two']);
 $square3 = strtoupper($_POST['three']);
 $square4 = strtoupper($_POST['four']);
 $square5 = strtoupper($_POST['five']);
 $square6 = strtoupper($_POST['six']);
 $square7 = strtoupper($_POST['seven']);
 $square8 = strtoupper($_POST['eight']);
 $square9 = strtoupper($_POST['nine']);
 
 if(($square1 != "X") and ($square2 != "X") and ($square3 != "X") and ($square4 != "X") and ($square5 != "X") and ($square6 != "X") and ($square7 != "X") and ($square8 != "X") and ($square9 != "X")){
	header("location: error.html");
 }
 
 $board = check_x($board, $square1, $square2, $square3, $square4, $square5, $square6, $square7, $square8, $square9);
 
 $x_win = three_in_a_row_x($board, $x_win);
 
 if($x_win == true){
	header("location: xwin.html");
 }
 
 $_SESSION['board'] = $board;
 
?>

<html>
 <head>
	<title>Player 2's Turn</title>
	<link rel='stylesheet' href='style.css' type='text/css' />
	<link rel="icon" type="image/ico" href="favicon.ico" />
 </head>
 <body>
	<div id="title">
	 <p>PHP Tic-Tac-Toe</p>
	</div>
	<div id="instructions">
	 Player 2 - Pick one square and type an O in it.
	</div>
	<div id="box">
	 <form action="move5.php" method="post">
		 <div>
			<div id="one"><p><? one($board); ?></p></div>
			<div id="two"><p><? two($board); ?></p></div>
			<div id="three"><p><? three($board); ?></p></div>
		 </div>
		 <div>
			<div id="four"><p><? four($board) ?></p></div>
			<div id="five"><p><? five($board) ?></p></div>
			<div id="six"><p><? six($board) ?></p></div>
		 </div>
		 <div>
			<div id="seven"><p><? seven($board) ?></p></div>
			<div id="eight"><p><? eight($board) ?></p></div>
			<div id="nine"><p><? nine($board) ?></p></div>
		 </div>
		 <div>
			<input type="submit" id="next" value="Next..."/>
		 </div>
	 </form>
	</div>
	<div id="reset">
	<a href="reset.php">Reset The Game</a>
	</div>
 </body>
</html>