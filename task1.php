<?php
//task1-a
$haystack = [-1,-6,-99,999,-567,7654, 569];
$needle = -555;
$answerA  = getNearbyItemA($haystack,$needle);

print_r($haystack);
echo "<br>";
print_r($needle);
echo "<br>Answer: ";
print_r($answerA);
echo "<hr>";

//task1-b
$haystack = [-999,-666,-99,999,1000,7654, 9569];
$needle = -555;
$answerB  = getNearbyItemB($haystack,$needle);

print_r($haystack);
echo "<br>";
print_r($needle);
echo "<br>Answer: ";
print_r($answerB);






//task1-a
function getNearbyItemA($arr, $needle){
	asort($arr);
	$diff = 0;
	$answ = 0;
	foreach ($arr as $key => $val) {
		if($needle-$val >= 0)
		{
			$diff = $needle-$val;
			$answ = $key;
		}
		else
		{
			if ($diff > ($val-$needle))
			{
				$diff = $val-$needle;
				return $key;
			}
			else
			{
				return $answ;
			}
		}
	}
}
//task1-b
function getNearbyItemB($arr, $needle){
	$diff = 0;
	$answ = 0;
	foreach ($arr as $key => $val) {
		if($needle-$val >= 0)
		{
			$diff = $needle-$val;
			$answ = $key;
		}
		else
		{
			if ($diff > ($val-$needle))
			{
				$diff = $val-$needle;
				return $key;
			}
			else
			{
				return $answ;
			}
		}
	}
}