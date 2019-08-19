<!DOCTYPE html>
<html>
	<body>
		<?php
	
	function reverse(){
		for($x = 4; $x >= 0; $x-- ){
			echo "Number: $x <br>";
		}
	}
	reverse();

	function reverseArray(){
		$rev = array(1, 2, 3, 4);
		$arrlength = count($rev);

		for($x = 5; $x >= $arrlength; $x--){
			echo $rev[$x];
			echo "<br>";
		}
	}
	reverseArray();

	function reverseDoWhile(){
		$revdo = array(1, 2, 3, 4);
		$arrdolength = count($revdo);
		do{
			echo "Number: $revdo[$x] <br>";
			$x--;
		}while($x >= $arrdolength);
		echo "<br>";
	}
	reverseDoWhile();

		?>
	</body>
</html>