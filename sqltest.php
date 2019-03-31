<?php // sqltest.php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn -> connect_error) die ($conn -> connect_error);

if (isset($_POST['delete']) && isset($_POST['year']))
{
	$year = get_post($conn, 'year');
	$query = "DELETE FROM classics WHERE year='$year'";
	$result = $conn -> query($query);
	if (!$result) echo "DELETE failed: $query<br>" .
		$conn -> error . "<br><br>"; 
}
if (isset($_POST['author']) &&
	isset($_POST['title']) &&
	isset($_POST['type']) &&
	isset($_POST['year']))
{
	$author = get_post($conn, 'author');
	$title = get_post($conn, 'title');
	$type = get_post($conn, 'type');
	$year = get_post($conn, 'year');
	$query = "INSERT INTO classics VALUES" .
	"('$author', '$title', '$type', '$year')";
	$result = $conn -> query($query);
	if (!$result) echo "INSERT failed: $query<br>" .
		$conn -> error . "<br><br>";
}

echo <<<_END
<form action="sqltest.php" method="post"><pre>
Author <input type="text" name="author">
Title <input type="text" name="title">
Type <input type="text" name="type">
Year <input type="text" name="year">
<input type="submit" value="ADD RECORD">
</pre></form>
_END;

$query = "SELECT * FROM classics";
$result = $conn -> query($query);
if (!$result) die ("Database access failed: " . $conn -> error);

$rows = $result -> num_rows;

for ($j = 0 ; $j < $rows ; ++$j)
{
	$result -> data_seek($j);
	$row = $result -> fetch_array(MYSQLI_NUM);

	echo <<<_END
	<pre>
	Author $row[0]
	Title $row[1]
	Type $row[2]
	Year $row[3]
	</pre>
	<form action = "sqltest.php" method="post">
	<input type="hidden" name="delete" value="yes">
	<input type="hidden" name="year" value="$row[3]">
	<input type="submit" value="DELETE RECORD"></form>
	_END;
}

$result -> close();
$conn -> close();

function get_post($conn, $var)
{
	return $conn -> real_escape_string($_POST[$var]);
}

?>