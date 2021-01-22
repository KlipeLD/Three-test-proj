<?php
//task1-a
$haystack = [];
for ($i=0;$i<1000000;$i++)
{
	array_push($haystack,rand());
}
$needle = rand();

$time_start = microtime(true);

$answerA  = getNearbyItemA($haystack,$needle);

$time_end = microtime(true);
$timeDif = $time_end - $time_start;

//print_r($haystack);
echo "<br>Needle: ";
print_r($needle);
echo "<br>Answer: ";
print_r($answerA);
echo "<br>";
echo "time = ".$timeDif." ms";
echo "<hr>";


//task1-b
$haystack = [2];
for ($i=1;$i<1000000;$i++)
{
	$newEl = $haystack[$i-1]+rand(1,3);
	array_push($haystack,$newEl);
}
$needle = rand(0,450000);
$time_start = microtime(true);
$answerB  = getNearbyItemB($haystack,$needle);
$time_end = microtime(true);
$timeDif = $time_end - $time_start;

//print_r($haystack);
echo "<br>Needle: ";
print_r($needle);
echo "<br>Answer: ";
print_r($answerB);
echo "<br>";
echo "time = ".$timeDif." ms";
echo "<hr>";


//task1-a
function getNearbyItemA($arr, $needle){
	$min = abs($arr[0] - $needle);
    for ($i = 0; $i < count($arr); $i++)
    {
        if (abs($arr[$i] - $needle) <= $min)
        {
            $min = abs($arr[$i] - $needle);
            $num = $i;
        }
    }
    return $num;
}
//task1-b
function getNearbyItemB($arr, $needle){

	$min = abs($arr[0] - $needle);
    for ($i = 0; $i < count($arr); $i++)
    {
    	if($arr[$i] - $needle <= 0)
		{
			if (abs($arr[$i] - $needle) <= $min)
	        {
	            $min = abs($arr[$i] - $needle);
	            $num = $i;
	        }
		}
		else
		{
			if (abs($arr[$i] - $needle) <= $min)
	        {
	            $min = abs($arr[$i] - $needle);
	            $num = $i;
	            return $num;
	        }
			else
			{
				return $num;
			}
		}
    }
    return $num;
}