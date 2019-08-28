<!DOCTYPE html>
<html>
	<body>
		<?php

	function reverseArray(){
		$rev = array(1, 2, 3, 4);
		$temp = array();
		$arrlength = sizeof($rev)-1;

	

		$hello = 1;
		for($x = $arrlength; $x >-1; $x--)
		{
			echo $temp[$hello] = $rev[$x];
			$hello++;
			echo "<br>";
		}
		echo $temp;
	}
	reverseArray();

		?>
	</body>
</html>