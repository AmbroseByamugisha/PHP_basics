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

echo "<br>";
// multi-dimensional arrays
$products = array(

'paper' => array(
'copier' => "a",
'inkjet' => "b",
'laser' => "c",
'photo' => "d"),

'pens' => array(
'ball' => "e",
'hilite' => "f",
'marker' => "g"),

'misc' => array(

'tape' => "Sticky Tape",
'glue' =>"h",
'clips' => "j"
)
);
echo "<pre>";

foreach($products as $section => $items)
	foreach($items as $key => $value)
		echo "$section:\t$key\t($value)<br>";
	echo $products['misc']['glue'];
	echo "</pre>";

echo "<br>";
// array functions
echo (is_array($products));
echo count($products);




?>