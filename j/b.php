<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>พาฤดี ปูนจีน(จ๋า)</title>
</head>

<body>
<h1>ข้อมูลจังหวัด--พาฤดี ปูนจีน(จ๋า)</h1>

<form method="post" action=""enctype="multipart/form-data">
	ชื่อจังหวัด<input type="text" name="pname" autofocus required><br>
    รูปภาพ<input type="file" name="pimage"><br>
    ชื่อภาค<br>
    <select name="rid">
<?php
include_once("connectdb.php");
	$sql3 = "SELECT * FROM `regions` ORDER BY `r_id` ASC";
	$rs3 = mysqli_query($conn,$sql3);
	
	while($data3 = mysqli_fetch_array($rs3)){
?>  
  	<option value="<?php echo $data3['r_id'];?>"><?php echo $data3['r_name'];?></option> 

<?php } ?>
	</select><br><br>
    <button type="submit" name="Submit">บันทึก</button>
</form>
<br>
<br>

<?php
if(isset($_POST['Submit'])){
	include_once("connectdb.php");
	
	$pname = $_POST['pname'];
	$ext = pathinfo($_FILES['pimage']['name'],PATHINFO_EXTENSION);
	$rid = $_POST['rid'];
	
	$sql2 = "INSERT INTO `provinces` VALUES (NULL, '{$pname}','{$ext}','{$rid}')";
	mysqli_query($conn,$sql2) or die ("insert ไม่ได้");
	$pic_id = mysqli_insert_id($conn);
	copy($_FILES['pimage']['tmp_name'],"images/".$pic_id.".".$ext);
}
?>

<table border="1">
	<tr>
    	<td>รหัสจังหวัด</td>
		<td>ชื่อจังหวัด</td>
        <td>รูปภาพ</td>
		<td>ภาค</td>
    </tr>
<?php
	include_once("connectdb.php");
	$sql = "SELECT * FROM `provinces` AS p 
				INNER JOIN `regions` AS r
				ON p.r_id = r.r_id
				ORDER BY `p_id` ASC";
	$rs = mysqli_query($conn,$sql);
	
	while($data = mysqli_fetch_array($rs)){
		
?>
	<tr>
    	<td><?php echo $data['p_id'];?></td>
		<td><?php echo $data['p_name'];?></td>
        <td><img src="images/<?php echo $data['p_id'];?>.<?php echo $data['p_ext'];?>" width="120"></td>
        <td><?php echo $data['r_name'];?></td>
    </tr>
<?php } ?>

</table>

</body>
</html>