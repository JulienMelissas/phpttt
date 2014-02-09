<?php
 //Check for Inputs
 //Check for X's
	function check_x($board, $square1, $square2, $square3, $square4, $square5, $square6, $square7, $square8, $square9){
	 //Check for an X at Square 1
	 if($square1 != ""){
		if($square1 == "X"){
		 $board[0][0] = "X";
		}
	 }
	 
	 //Check for an X at Square 2
	 elseif($square2 != ""){
		if($square2 == "X"){
		 $board[0][1] = "X";
		}
	 }
	 
	 //Check for an X at Square 3
	 elseif($square3 != ""){
		if($square3 == "X"){
		 $board[0][2] = "X";
		}
	 }
	 
	 //Check for an X at Square 4
	 elseif($square4 != ""){
		if($square4 == "X"){
		 $board[1][0] = "X";
		}
	 }
	 
	 //Check for an X at Square 5
	 elseif($square5 != ""){
		if($square5 == "X"){
		 $board[1][1] = "X";
		}
	 }
	 
	 //Check for an X at Square 6
	 elseif($square6 != ""){
		if($square6 == "X"){
		 $board[1][2] = "X";
		}
	 }
	 
	 //Check for an X at Square 7
	 elseif($square7 != ""){
		if($square7 == "X"){
		 $board[2][0] = "X";
		}
	 }
	
	 //Check for an X at Square 8
	 elseif($square8 != ""){
		if($square8 == "X"){
		 $board[2][1] = "X";
		}
	 }
	 
	 //Check for an X at Square 9
	 elseif($square9 != ""){
		if($square9 == "X"){
		 $board[2][2] = "X";
		}
	 }
	 return $board;
	}
 //Check for O's
	function check_o($board, $square1, $square2, $square3, $square4, $square5, $square6, $square7, $square8, $square9){
	 //Check for an O at Square 1
	 if($square1 != ""){
		if($square1 == "O"){
		 $board[0][0] = "O";
		}
	 }
	 
	 //Check for an O at Square 2
	 elseif($square2 != ""){
		if($square2 == "O"){
		 $board[0][1] = "O";
		}
	 }
	 
	 //Check for an O at Square 3
	 elseif($square3 != ""){
		if($square3 == "O"){
		 $board[0][2] = "O";
		}
	 }
	 
	 //Check for an O at Square 4
	 elseif($square4 != ""){
		if($square4 == "O"){
		 $board[1][0] = "O";
		}
	 }
	 
	 //Check for an O at Square 5
	 elseif($square5 != ""){
		if($square5 == "O"){
		 $board[1][1] = "O";
		}
	 }
	 
	 //Check for an O at Square 6
	 elseif($square6 != ""){
		if($square6 == "O"){
		 $board[1][2] = "O";
		}
	 }
	 
	 //Check for an O at Square 7
	 elseif($square7 != ""){
		if($square7 == "O"){
		 $board[2][0] = "O";
		}
	 }
	 
	 //Check for an O at Square 8
	 elseif($square8 != ""){
		if($square8 == "O"){
		 $board[2][1] = "O";
		}
	 }
	 
	 //Check for an O at Square 9
	 elseif($square9 != ""){
		if($square9 == "O"){
		 $board[2][2] = "O";
		}
	 }
	 return $board;
	}
 
 //Functions for Drawing the Board
 //Row 1 [0][0-2]
	function one($board){
	 if($board[0][0] != "0"){
		echo($board[0][0]);
	 }
	 else{
		echo('<input class="input" type="text" name="one" maxlength="1"/>');
	 }
	}
	function two($board){
	 if($board[0][1] != "0"){
		echo($board[0][1]);
	 }
	 else{
		echo('<input class="input" type="text" name="two" maxlength="1"/>');
	 }
	}
	function three($board){
	 if($board[0][2] != "0"){
		echo($board[0][2]);
	 }
	 else{
		echo('<input class="input" type="text" name="three" maxlength="1"/>');
	 }
	}
 //Row 2 [1][0-2]
	function four($board){
	 if($board[1][0] != "0"){
		echo($board[1][0]);
	 }
	 else{
		echo('<input class="input" type="text" name="four" maxlength="1"/>');
	 } 
	}
	function five($board){
	 if($board[1][1] != "0"){
		echo($board[1][1]);
	 }
	 else{
		echo('<input class="input" type="text" name="five" maxlength="1"/>');
	 }
	}
	function six($board){
	 if($board[1][2] != "0"){
		echo($board[1][2]);
	 }
	 else{
		echo('<input class="input" type="text" name="six" maxlength="1"/>');
	 }
	}
 //Row 3 [2][0-2]
	function seven($board){
	 if($board[2][0] != "0"){
		echo($board[2][0]);
	 }
	 else{
		echo('<input class="input" type="text" name="seven" maxlength="1"/>');
	 }
	}
	function eight($board){
	 if($board[2][1] != "0"){
		echo($board[2][1]);
	 }
	 else{
		echo('<input class="input" type="text" name="eight" maxlength="1"/>');
	 }
	}
	function nine($board){
	 if($board[2][2] != "0"){
		echo($board[2][2]);
	 }
	 else{
		echo('<input class="input" type="text" name="nine" maxlength="1"/>');
	 }
	}
	
 //Functions to check for "Three in a Row"
	function three_in_a_row_x($board, $x_win){
		//Check Row 1
		if(($board[0][0] != "0") and ($board[0][1] != "0") and ($board[0][2] != "0")){
		 if(($board[0][0] == "X") and ($board[0][1] == "X") and ($board[0][2] == "X")){
			$x_win = true;
			return $x_win;
		 }
		}
		//Check Row 2
		if(($board[1][0] != "0") and ($board[1][1] != "0") and ($board[1][2] != "0")){
		 if(($board[1][0] == "X") and ($board[1][1] == "X") and ($board[1][2] == "X")){
			$x_win = true;
			return $x_win;
		 }
		}
		//Check Row 3
		if(($board[2][0] != "0") and ($board[2][1] != "0") and ($board[2][2] != "0")){
		 if(($board[2][0] == "X") and ($board[2][1] == "X") and ($board[2][2] == "X")){
			$x_win = true;
			return $x_win;
		 }
		}
		//Check Collumn 1
		if(($board[0][0] != "0") and ($board[1][0] != "0") and ($board[2][0] != "0")){
		 if(($board[0][0] == "X") and ($board[1][0] == "X") and ($board[2][0] == "X")){
			$x_win = true;
			return $x_win;
		 }
		}
		//Check Collumn 2
		if(($board[0][1] != "0") and ($board[1][1] != "0") and ($board[2][1] != "0")){
		 if(($board[0][1] == "X") and ($board[1][1] == "X") and ($board[2][1] == "X")){
			$x_win = true;
			return $x_win;
		 }
		}
		//Check Collumn 3
		if(($board[0][2] != "0") and ($board[1][2] != "0") and ($board[2][2] != "0")){
		 if(($board[0][2] == "X") and ($board[1][2] == "X") and ($board[2][2] == "X")){
			$x_win = true;
			return $x_win;
		 }
		}
		//Check Diagonals
		if(($board[0][0] != "0") and ($board[1][1] != "0") and ($board[2][2] != "0")){
		 if(($board[0][0] == "X") and ($board[1][1] == "X") and ($board[2][2] == "X")){
			$x_win = true;
			return $x_win;
		 }
		}
		if(($board[2][0] != "0") and ($board[1][1] != "0") and ($board[0][2] != "0")){
		 if(($board[2][0] == "X") and ($board[1][1] == "X") and ($board[0][2] == "X")){
			$x_win = true;
			return $x_win;
		 }
		}
	}
	
	function three_in_a_row_o($board, $o_win){
		//Check Row 1
		if(($board[0][0] != "0") and ($board[0][1] != "0") and ($board[0][2] != "0")){
		 if(($board[0][0] == "O") and ($board[0][1] == "O") and ($board[0][2] == "O")){
			$o_win = true;
			return $o_win;
		 }
		}
		//Check Row 2
		if(($board[1][0] != "0") and ($board[1][1] != "0") and ($board[1][2] != "0")){
		 if(($board[1][0] == "O") and ($board[1][1] == "O") and ($board[1][2] == "O")){
			$o_win = true;
			return $o_win;
		 }
		}
		//Check Row 3
		if(($board[2][0] != "0") and ($board[2][1] != "0") and ($board[2][2] != "0")){
		 if(($board[2][0] == "O") and ($board[2][1] == "O") and ($board[2][2] == "O")){
			$o_win = true;
			return $o_win;
		 }
		}
		//Check Collumn 1
		if(($board[0][0] != "0") and ($board[1][0] != "0") and ($board[2][0] != "0")){
		 if(($board[0][0] == "O") and ($board[1][0] == "O") and ($board[2][0] == "O")){
			$o_win = true;
			return $o_win;
		 }
		}
		//Check Collumn 2
		if(($board[0][1] != "0") and ($board[1][1] != "0") and ($board[2][1] != "0")){
		 if(($board[0][1] == "O") and ($board[1][1] == "O") and ($board[2][1] == "O")){
			$o_win = true;
			return $o_win;
		 }
		}
		//Check Collumn 3
		if(($board[0][2] != "0") and ($board[1][2] != "0") and ($board[2][2] != "0")){
		 if(($board[0][2] == "O") and ($board[1][2] == "O") and ($board[2][2] == "O")){
			$o_win = true;
			return $o_win;
		 }
		}
		//Check Diagonals
		if(($board[0][0] != "0") and ($board[1][1] != "0") and ($board[2][2] != "0")){
		 if(($board[0][0] == "O") and ($board[1][1] == "O") and ($board[2][2] == "O")){
			$o_win = true;
			return $o_win;
		 }
		}
		if(($board[2][0] != "0") and ($board[1][1] != "0") and ($board[0][2] != "0")){
		 if(($board[2][0] == "O") and ($board[1][1] == "O") and ($board[0][2] == "O")){
			$o_win = true;
			return $o_win;
		 }
		}
	}
?>