<!DOCTYPE html>
<html>
	<body>
		<?php

	$num = ;

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

		?>
	</body>
</html>