<?php
// function basics
$lowered = strtolower("aMbRose");
echo $lowered;
echo "<br>";

echo dothis("WILLiam");
function dothis($n1)
{
	$n1 = strtolower($n1);
	return $n1;
}
echo "<br>";

$cars = do_that("lambo", "Merc", "Toyo");
echo $cars[0], " ", $cars[1],  " ", $cars[2];

function do_that($c1, $c2, $c3)
{
	$c1 = strtoupper($c1);
	$c2 = strtoupper($c2);
	$c3 = strtoupper($c3);

	return array($c1, $c2, $c3);
}

?>
