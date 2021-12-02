<!DOCTYPE html>
<html>
<head>
	<title>TEST 1</title>
</head>
<body>
<?php
	for($i=1; $i<=100; $i++){
		if($i % 3 == 0){
			echo '<p>'.$i.' Fizz</p>';
		}
		if($i % 5 == 0){
			echo '<p>'.$i.' Buzz</p>';
		}
		if($i % 3 == 0 && $i % 5 == 0){
			echo '<p>'.$i.' FizzBuzz</p>';
		}
		else{
			echo $i;
			echo '<br>';
		}
	}
?>
</body>
</html>