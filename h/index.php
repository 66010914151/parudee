<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login: พาฤดี ปูนจีน (จ๋า)</title>
</head>

<body>
<h1>เข้าสู่ระบบหลังบ้าน: พาฤดี ปูนจีน(จ๋า)</h1>
<form method="post" action="">
	Username<input type= "text" name="auser" autofocus required><br>
	pasword <input type= "password" name="apwd" required><br>
	<button type="submit" name="Submit">Login</button>
</form>

<?php
if(isset($_POST['Submit'])){
	include_once("connectdb.php");
	$sql="SELECT * FROM admin WHERE a_username='{$_POST['auser']}' AND a_password='{$_POST['apwd']}' LIMIT 1 ";
	$rs=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($rs);
	
	if($num==1){
		$data= mysqli_fetch_array($rs);
		$_SESSION['a.id']= $data['a_id'] ;
		$_SESSION['a.name']=  $data['a_name'] ;
		echo "<script>";
		echo "window.location='index2.php';";
		echo "</script>";
		//header('index2.php')
	
	
	
	}else{
		echo "<script>";
		echo "alert('ข้อมูลไม่ถูกต้อง');";
		echo "</script>";

	}

}
?>
</body>
</html>