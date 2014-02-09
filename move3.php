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
 
 if(($square1 != "O") and ($square2 != "O") and ($square3 != "O") and ($square4 != "O") and ($square5 != "O") and ($square6 != "O") and ($square7 != "O") and ($square8 != "O") and ($square9 != "O")){
	header("location: error.html");
 }
 
 $board = check_o($board, $square1, $square2, $square3, $square4, $square5, $square6, $square7, $square8, $square9);
 
 $o_win = three_in_a_row_o($board, $o_win);
 
 if($o_win == true){
	header("location: owin.html");
 }
 
 $_SESSION['board'] = $board;
 
?>

<html>
 <head>
	<title>Player 1's Turn</title>
	<link rel='stylesheet' href='style.css' type='text/css' />
	<link rel="icon" type="image/ico" href="favicon.ico" />
 </head>
 <body onunload="back()">
	<div id="title">
	 <p>PHP Tic-Tac-Toe</p>
	</div>
	<div id="instructions">
	 Player 1 - Pick one square and type an X in it.
	</div>
	<div id="box">
	 <form action="move4.php" method="post">
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