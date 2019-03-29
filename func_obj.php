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
echo "<br>";
echo function_exists("do_that");
// CLASS
$object = new User;
print_r($object); echo "<br>";

$object -> name = "Joe";
$object -> password = "pass123";
print_r($object); echo "<br>";

$object-> save_user();

class User
{
	public $name, $password;

	function save_user()
	{
		echo "Save User code goes here";
	}
}

echo "<br>";

$object1 = new User();
$object1 -> name = "Athur";
$object2 = clone $object1;
$object2 -> name = "Zari";

echo "object1 name = " .$object1 -> name . "<br>";
echo "object2 name = " .$object2 -> name;


?>
