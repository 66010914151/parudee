<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>พาฤดี ปูนจีน (จ๋า)</title>

<!-- Bootstrap 5.3 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0">ฟอร์มสมัครสมาชิก</h3>
                    <small>พาฤดี ปูนจีน (จ๋า) • ChatGPT</small>
                </div>

                <div class="card-body">

                    <form method="post" action="">
                        
                        <div class="mb-3">
                            <label class="form-label">ชื่อ-สกุล</label>
                            <input type="text" name="fullname" class="form-control" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">เบอร์โทร</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">ความสูง (ซม.)</label>
                            <input type="number" name="height" class="form-control" min="90" max="220" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">สีที่ชอบ</label><br>
                            <input type="color" name="color" class="form-control form-control-color" value="#000000">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">สาขาวิชา</label>
                            <select name="major" class="form-select">
                                <option value="การบัญชี">การบัญชี</option>
                                <option value="การจัดการ">การจัดการ</option>
                                <option value="การตลาด">การตลาด</option>
                                <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <button type="submit" name="Submit" class="btn btn-success">สมัครสมาชิก</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <button type="button" class="btn btn-info text-white" onclick="window.location='https://www.msu.ac.th';">MSU</button>
                            <button type="button" class="btn btn-secondary" onclick="window.print();">พิมพ์</button>
                        </div>

                    </form>
                </div>
            </div>

            <!-- แสดงข้อมูลผลลัพธ์ -->
            <div class="mt-4">
                <span class="text-light">
                <?php
                if(isset($_POST['Submit'])){
                    $fullname = $_POST['fullname'];
                    $phone = $_POST['phone'];
                    $height = $_POST['height'];
                    $color = $_POST['color'];
                    $major = $_POST['major'];

					include("connectdb.php");

					$sql="INSERT INTO register (r_id,r_name,r_phone,r_height,r_color,r_major) VALUES (null,'{$fullname}','{$phone}','{$height}','{$color}','{$major}');";
					mysqli_query($conn,$sql) or die("insert ไม่ได้");
					
					echo"<script>";
					echo"alert('เพิ่มข้อมูลสำเร็จ');";
					echo"</script>";
                }
                ?>
            </span>            
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap 5.3 JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
