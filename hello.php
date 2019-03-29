<?php
 echo "hello world";
 echo "<br>"; // line break
 // this is a single line comment
 /*
 this a multiline comment
 it covers more than 1 line
 */
// variables
 $mycounter = 1;
 $mystring = "hello there";
 $myarray = array("One", "Two", "Three");

 // display a variable
 $username = "ambrose";
 echo $username;
 echo "<br>";
 $current_user = $username;
 echo $current_user;
 echo "<br>";

 // numbers
 $count = 27;
 echo $count;
 echo "<br>";

 // arrays
 $schools = array("KCB", "Smack", "Muk", "Havard", "Kyambogo", "Mengo");
 echo $schools[3];
 echo "<br>";
 $count = 0;
 $count += 1;
 echo $count;
 echo "<br>";
 // string concatenation
 $money = 5000;
 echo "I have ". $money. " shillings";
 echo "<br>";
 $my_name = "Ambrose";
 echo "I am trying to get
 to $my_name";
 echo "<br>";
 echo "This is functions ". __LINE__. " from ". __FILE__;
 echo "<br>";
 // Functions
 function longdate($timestamp)
 {
 	return date("l F js Y", $timestamp);
 }
 echo longdate(time());
 echo "<br>";
 // static variable
 function test()
 {
 	static $count = 0;
 	echo $count;
 	$count++;
 }
 echo test();
 echo "<br>";
 /*superglobal variables
 array to string conversion error solved
 */
 print_r($GLOBALS);
 echo "<br>";
 // Expressions

?>