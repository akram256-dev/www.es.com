<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>introduction to php</title>
</head>
<body>
<?php
$d=date("t");
if ($d=="thur") echo"have a nice weekend";
else
echo"happy day";
if ($d=="sunday") {
	echo"have a happy sunday";
} else {
	echo"have a happy thursday";
}

?>


</body>

</html>
