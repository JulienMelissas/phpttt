<html>
 <head>
	<title>Player 1's Turn</title>
	<link rel='stylesheet' href='style.css' type='text/css' />
 </head>
 <body>
	<div id="title">
	 <p>PHP Tic-Tac-Toe</p>
	</div>
	<div id="instructions">
	 Player 1 - Pick one square and type an X in it.
	</div>
	<div id="box">
	 <form action="move2.php" method="post">
		 <div>
			<div id="one"><p><input class="input" type="text" name="one" maxlength="1"/></p></div>
			<div id="two"><p><input class="input" type="text" name="two" maxlength="1"/></p></div>
			<div id="three"><p><input class="input" type="text" name="three" maxlength="1"/></p></div>
		 </div>
		 <div>
			<div id="four"><p><input class="input" type="text" name="four" maxlength="1"/></p></div>
			<div id="five"><p><input class="input" type="text" name="five" maxlength="1"/></p></div>
			<div id="six"><p><input class="input" type="text" name="six" maxlength="1"/></p></div>
		 </div>
		 <div>
			<div id="seven"><p><input class="input" type="text" name="seven" maxlength="1"/></p></div>
			<div id="eight"><p><input class="input" type="text" name="eight" maxlength="1"/></p></div>
			<div id="nine"><p><input class="input" type="text" name="nine" maxlength="1"/></p></div>
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