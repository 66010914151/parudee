<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>พาฤดี ปูนจีน(จ๋า)</title>
</head>

<h1>พาฤดี ปูนจีน(จ๋า)</h1>
<form method="post" action="">
กรอกคะเเนน<input type="number" name="a" autofocus min= 0 max = 100 required>
<button type= "submit" name="Submit">ok</button>
</form>
<hr>

<?php
if (isset($_POST['Submit'])) {
	
    $score=$_POST['a'];
	
	if($score >= 80){
         $grade= "A";
    } else if($score >= 70){
		$grade= "B";
	} else if($score >= 60){
		$grade= "C";
	}else if($score >= 50){
		$grade= "D";
	} else {
		$grade= "F";
	}	echo "<font color='#FF0000' size=5>คะเเนน $score ได้เกรด $grade";
}
?>

<body>
</body>
</html>