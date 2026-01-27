<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>พาฤดี ปูนจีน(จ๋า)</title>
</head>

<h1>พาฤดี ปูนจีน(จ๋า)</h1>
<form method="post" action="">
กรอกตัวเลข<input type="number" name="a" autofocus required>.
<button type= "submit" name="Submit">ok</button>
</form>
<hr>

<?php
if (isset($_POST['Submit'])) {
	
    $gender=$_POST['a'];
	
	if($gender == 1){
        echo "เพศชาย";
    } else if($gender == 2){
		echo "เพศหญิง";
	} else if($gender == 3){
		echo "เพศทางเลือก";
	} else {
		echo "อื่นๆ";
	}
}
?>

<body>
</body>
</html>