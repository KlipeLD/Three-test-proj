<?php

$arr = [3279, 920, 4181, 8, 337, 13, 918, 4923, 4448, 8, 4756, 4012, 7467, 89, 21, 2400, 4409, 6005, 3172, 55, 5, 6367, 8, 9970, 144, 1, 4360, 407, 7010, 9160, 7149, 9038, 9196, 8625, 662, 1597, 21, 2592, 1597, 5424, 2584, 2937, 1597, 9835, 7960, 2254, 3531, 8034, 9393, 807, 3225, 6765, 399, 3230, 34, 153, 2, 3980, 2093, 9238, 2326, 6453, 89, 4606, 3413, 3, 9950, 2098, 8579, 4914, 7204, 8875];
$arr_fib = array(1, 1);
$sum_fib = 0;

qsort($arr);
$max_numb = count($arr) - 1;

while (end($arr_fib) < $arr[$max_numb])
{
    array_push($arr_fib, end($arr_fib) + prev($arr_fib));
}

foreach ($arr as $val ) 
{
	if (in_array($val, $arr_fib))
	{
		$sum_fib = $sum_fib + $val;
	}
}

echo "Изначальный массив с данными:<br>";
print_r($arr);
echo "<br><br>Сумма чисел Фибоначчи в этом массиве = ". $sum_fib;


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