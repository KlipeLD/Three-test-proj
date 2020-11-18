<?php

$first = [1, 212, 3876, 481, 75, 36, 24, 76, 81, 2734, 6751, 53, 76, 4512, 364, 51826, 374, 61, 93, 26, 4517, 26, 3, 5, 4, 1, 23465, 851, 56253, 76, 41, 783, 26, 9461, 238, 674, 51, 95, 2, 39764];
$second = [7638, 2710, 4157, 82, 36017, 6397562, 93, 47, 519, 37985, 716038, 479176, 345872, 653486, 53, 48, 652, 9, 7, 4369278, 36, 48576, 2934765, 62973, 645, 62, 5364, 9, 7, 562, 9387, 465, 927346, 957, 2364, 9572, 69347, 956];
$sum_first = 0;

foreach ($first as $val ) 
{
	$sum_first = $sum_first + $val;
}
$average = $sum_first / count($first);
qsort($second);

for ($i = 0; $i < count($second); $i++) 
{
    if($second[$i] < $average)
	{
		continue;
	}
	else
	{
		$answer = $second[$i];
		break;
	}
}

function qsort(&$array) 
{
	$left = 0;
	$right = count($array) - 1;
	my_sort($array, $left, $right);
}

function my_sort(&$array, $left, $right) 
{

	$l = $left;
	$r = $right;
	$center = $array[(int)($left + $right) / 2];
	do 
	{
		while ($array[$r] > $center) 
		{
			$r--;
		}
		while ($array[$l] < $center) 
		{
			$l++;
		}
		if ($l <= $r) 
		{
			list($array[$r], $array[$l]) = array($array[$l], $array[$r]);
			$l++;
			$r--;
		}
	} 
	while ($l <= $r);
	if ($r > $left) 
	{
		my_sort($array, $left, $r);
	}
	if ($l < $right) 
	{
		my_sort($array, $l, $right);
	}
}

echo"Первый массив:<br>";
print_r($first);
echo "<br><br>Среднее арифметическое для первого массива = ".$average;

echo"<br><hr><br>Второй массив (после сортировки):<br>";
print_r($second);
echo "<br><br>Во втором массиве самое маленькое число, большее, чем среднеарифметическое значение всех элементов первого массива = ".$answer;

