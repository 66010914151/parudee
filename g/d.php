<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>พาฤดี ปูนจีน (จ๋า)</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
    body { font-family: sans-serif; padding: 20px; background-color: #f4f7f6; }
    table { width: 50%; border-collapse: collapse; margin-bottom: 30px; background: white; }
    th { background-color: #4CAF50; color: white; padding: 10px; }
    td { padding: 8px; border: 1px solid #ddd; }
    .chart-container { 
        display: flex; 
        gap: 20px; 
        width: 90%; 
        margin: auto; 
        background: white; 
        padding: 20px; 
        border-radius: 10px; 
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    .chart-box { flex: 1; min-width: 300px; }
</style>
</head>
<body>

<h1>พาฤดี ปูนจีน (จ๋า)</h1>

<table border="1">
<tr>
	<th>ประเทศ</th>
	<th>ยอดขาย</th>
</tr>
<?php
	include_once("connectdb.php");
	$sql = "SELECT `p_country`, SUM(`p_amount`) AS total FROM `popsupermarket` GROUP BY `p_country`; ";
	$rs = mysqli_query($conn,$sql);
	
	// เตรียมตัวแปรสำหรับเก็บข้อมูลไปใช้ในกราฟ
	$labels = [];
	$dataPoints = [];
	
	while($data=mysqli_fetch_array($rs)){
		// เก็บข้อมูลลง Array เพื่อใช้ทำกราฟภายหลัง
		$labels[] = $data['p_country'];
		$dataPoints[] = $data['total'];
?>
<tr>
	<td><?php echo $data['p_country'];?></td>
	 <td align="right"><?php echo number_format($data['total'],0); ?></td>
</tr>
<?php } ?>
</table>

<hr>

<div class="chart-container">
    <div class="chart-box">
        <canvas id="myBarChart"></canvas>
    </div>
    <div class="chart-box">
        <canvas id="myPieChart"></canvas>
    </div>
</div>

<script>
// รับค่าจาก PHP เข้าสู่ JavaScript
const countryLabels = <?php echo json_encode($labels); ?>;
const salesData = <?php echo json_encode($dataPoints); ?>;

// กำหนดชุดสีที่สวยงาม
const chartColors = [
    'rgba(255, 99, 132, 0.7)',
    'rgba(54, 162, 235, 0.7)',
    'rgba(255, 206, 86, 0.7)',
    'rgba(75, 192, 192, 0.7)',
    'rgba(153, 102, 255, 0.7)',
    'rgba(255, 159, 64, 0.7)'
];

// สร้าง Bar Chart
const ctxBar = document.getElementById('myBarChart').getContext('2d');
new Chart(ctxBar, {
    type: 'bar',
    data: {
        labels: countryLabels,
        datasets: [{
            label: 'ยอดขายรายประเทศ',
            data: salesData,
            backgroundColor: chartColors,
            borderColor: chartColors.map(color => color.replace('0.7', '1')),
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            title: { display: true, text: 'กราฟแท่งแสดงยอดขาย', font: { size: 18 } },
            legend: { display: false }
        }
    }
});

// สร้าง Pie Chart
const ctxPie = document.getElementById('myPieChart').getContext('2d');
new Chart(ctxPie, {
    type: 'pie',
    data: {
        labels: countryLabels,
        datasets: [{
            data: salesData,
            backgroundColor: chartColors,
            borderWidth: 2
        }]
    },
    options: {
        responsive: true,
        plugins: {
            title: { display: true, text: 'สัดส่วนเปอร์เซ็นต์ยอดขาย', font: { size: 18 } }
        }
    }
});
</script>

</body>
</html>