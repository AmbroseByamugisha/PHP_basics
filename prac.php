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
echo "<br>";
// uploading an image
echo <<<_END
<html><head><title>PHP FORM UPLOAD</title></head><body>
<form method='post' action='prac.php' enctype='multipart/form-data'>
Select File: <input type='file' name='filename' size='10'>
<input type='submit' value='upload'>
</form>
_END;

if ($_FILES)
{
	$name = $_FILES['filename']['name'];
	move_uploaded_file($_FILES['filename']['tmp_name'], $name);
	echo "Uploaded image '$name'<br><img src='$name'>";
}

echo "</body></html>";


?>