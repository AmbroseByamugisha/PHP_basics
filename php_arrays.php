<?php
// Adding items to an arry
$books[] = "bible";
$books[] = "Bios";
$books[] = "the key";
$books[] = "fukunam";
$books[] = "lost";

print_r($books);

echo "<br>";
// the indexes can be words

$places["Uganda"] = "Kampala";
$places["Germany"] = "Berlin";
$places["China"] = "Beijing";

print_r($places);

echo "<br>";
// other assignment techniques
$places = array(
"Uganda" => "Kampala",
"Germany" => "Berlin",
"Kenya" => "Nairobi");
echo $places["Uganda"];

echo "<br>";
// using the foreach loop
$colours = array("blue", "red", "yellow");
$i = 0;

foreach($colours as $item)
{
	echo "$i: $item<br>";
	++$i;
} 
?>