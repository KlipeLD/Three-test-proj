<?php

$image = ImageCreateFromJpeg("https://alef.im/php-test-colors.jpg");

$width = imagesx($image);
$height = imagesy($image);

for($x = 0; $x < $width; $x++) 
{
    for($y = 0; $y < $height; $y++) 
	{
        $color = imagecolorat($image, $x, $y);
		$colors[$color] = 0;
    }
}

for($x = 0; $x < $width; $x++) 
{
    for($y = 0; $y < $height; $y++) 
	{
        $color = imagecolorat($image, $x, $y);
		$colors[$color] = $colors[$color] + 1;
    }
}

$temp = 0;
$temp_id = 0;
foreach ( $colors as $id => $val ) 
{
	if ($val > $temp)
	{
		$temp = $val;
		$temp_id = $id;
	}
}

$answer = dechex($temp_id);
echo "Самый распространенный цвет данного изображения: #".$answer;