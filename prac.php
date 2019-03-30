<?php
//PRACTICAL PHP
// using printf
printf("come with %d oranges", 5);
echo "string";
printf("$%.2f", 24.3576);
//date and time
echo time();
echo date("l F jS, Y - g:ia", time());
// file handling
$fh = fopen("testfile.txt", 'w') or die('failed to create file');

$text = <<<_END
Line 1
Line 2
Line 3
_END;

fwrite($fh, $text) or die("couldnt write to file");
fclose($fh);
echo "File 'testfile.txt' written successfully";

?>