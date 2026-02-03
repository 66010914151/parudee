<?php
	session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>พาฤดี ปูนจีน (จ๋า)</title>
</head>

<body>
<h1>b.php</h1>


<?php
	echo @$_SESSION['name']."<br>";
	echo @$_SESSION['nickname']."<br>";

?>
</body>
</html>