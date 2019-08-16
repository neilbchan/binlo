<!DOCTYPE html>
<html>
	<body>
		<?php

	function reverseArray(){
		$rev = array(1, 2, 3, 4);
		$arrlength = count($rev);
		$holder = 0;

		for($x = 5; $x > $arrlength; $x--){
			echo $rev[$x];
			$holder++;
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

echo "<br><br>=================================================<br><br>";

	$num = 59;

	if($num == 0 || $num <= 3){
		echo "I am an Infant";
	}else if ($num <= 4 || $num <= 7) {
		echo "I am a Toddler";
	}else if ($num <= 8 || $num <= 15) {
		echo "I am a Kid";
	}else if ($num <= 16 || $num <= 21) {
		echo "I am a Adolescence";
	}else if ($num <= 22 || $num <= 35) {
		echo "I am a Young Professionals";
	}else if ($num <= 36 || $num <= 59) {
		echo "I am a Adult";
	}else if ($num >= 60) {
		echo "I am a Senior Citizen";
	}


echo "<br><br>=================================================<br><br>";

	$color = "red";

	switch($color){
		case "red":
			echo "Your favorite color is red!";
			break;
		case "blue":
			echo "Your favorite color is blue";
			break;
		case "green":
			echo "Your favorite color is green";
			break;
		default:
			echo "Your favorite color is neither red, blue, nor green!";
	}

echo "<br><br>=================================================<br><br>";

	$val = array(true, false, null, 'abc', 123, '123', 0, '', 1.0, ';');
	$arrStringLength = count($val);
	$holder = 0;

	
	for($x = 0; $x < $arrStringLength; $x++){
		if(is_string($val[$x])){
				$holder++;
		}		
	}
		echo $holder;

echo "<br><br>=================================================<br><br>";

	$score = 101;
	echo "Your score is .$score.";
	echo($score >= 96? "Exceptional" : 
		($score >= 95? "VeryGood": 
		($score >= 90? "Satisfactory":
		($score >= 84? "Good":
		($score >= 75? "Good": "Failed"))))); 

echo "<br><br>=================================================<br><br>";

		?>
	</body>
</html>