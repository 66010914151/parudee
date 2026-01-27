<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hard Working Mahasarakham - พาฤดี ปูนจีน</title>

<!-- Bootstrap 5.3 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


<!-- Custom Premium Style -->
<style>
    body {
        background: linear-gradient(135deg, #dbe9ff, #f4f8ff);
        min-height: 100vh;
        font-family: "Segoe UI", sans-serif;
    }

    .form-card {
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.85);
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .header-box {
        text-align: center;
        margin-bottom: 25px;
    }

    .header-box h2 {
        font-weight: 700;
        color: #0d6efd;
    }

    .header-box p {
        margin-top: -5px;
        font-size: 15px;
        color: #333;
    }

    .btn-custom {
        padding: 10px 25px;
        font-size: 16px;
        border-radius: 50px;
    }
</style>

</head>

<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-9">

            <div class="form-card">

                <!-- หัวกระดาษ -->
                <div class="header-box">
                    <h2>แบบฟอร์มสมัครงาน</h2>
                    <p>Hard Working Mahasarakham-พาฤดี ปูนจีน</p>
                </div>

                <!-- ฟอร์ม -->
                <form method="post" action="f.php">

                    <!-- ตำแหน่งงาน -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">ตำแหน่งที่ต้องการสมัคร</label>
                        <select name="position" class="form-select form-select-lg" required>
                            <option disabled selected>-- เลือกตำแหน่งงาน --</option>
                            <option>เจ้าหน้าที่การตลาด</option>
                            <option>พนักงานบัญชี</option>
                            <option>IT Support</option>
                            <option>กราฟิกดีไซน์เนอร์</option>
                            <option>ผู้ช่วยผู้จัดการ</option>
                        </select>
                    </div>

                    <!-- คำนำหน้า -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">คำนำหน้าชื่อ</label>
                        <select name="prefix" class="form-select form-select-lg" required>
                            <option>นาย</option>
                            <option>นาง</option>
                            <option>นางสาว</option>
                        </select>
                    </div>

                    <!-- ชื่อ-สกุล -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">ชื่อ-สกุล</label>
                        <input type="text" name="fullname" class="form-control form-control-lg" required>
                    </div>

                    <!-- วันเดือนปีเกิด -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">วันเดือนปีเกิด</label>
                        <input type="date" name="birth" class="form-control form-control-lg" required>
                    </div>

                    <!-- ระดับการศึกษา -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">ระดับการศึกษา</label>
                        <select name="education" class="form-select form-select-lg" required>
                            <option>มัธยมศึกษาตอนปลาย</option>
                            <option>ปวช.</option>
                            <option>ปวส.</option>
                            <option>ปริญญาตรี</option>
                            <option>ปริญญาโท</option>
                        </select>
                    </div>

                    <!-- ประสบการณ์ทำงาน -->
                    <div class="mb-3">
                        <label class="form-label fw-bold">ประสบการณ์ทำงาน</label>
                        <textarea name="experience" class="form-control" rows="3" placeholder="เช่น Adobe, ทำงานเป็นทีม, ภาษาอังกฤษ"></textarea>
                    </div>

                    <!-- อีเมล -->
                   <div class="mb-3">
                        <label class="form-label fw-bold">อีเมล</label>
                        <input type="text" name="e-mail" class="form-control form-control-lg" required>
                    </div>

                    <!-- ปุ่ม -->
                    <div class="text-center">
                        <button type="submit" name="Submit" class="btn btn-success btn-custom me-2">ส่งใบสมัคร</button>
                        <button type="reset" class="btn btn-danger btn-custom">ล้างข้อมูล</button>
                    </div>

                </form>
            </div>

            <!-- แสดงข้อมูลที่ส่ง -->
            <div class="mt-4">
                <?php
                if (isset($_POST['Submit'])) {
                    echo "<div class='alert alert-primary shadow-sm'>";
                    echo "<h5 class='mb-3'>ข้อมูลใบสมัคร</h5>";
                    echo "<strong>ตำแหน่ง:</strong> ".$_POST['position']."<br>";
                    echo "<strong>คำนำหน้า:</strong> ".$_POST['prefix']."<br>";
                    echo "<strong>ชื่อ-สกุล:</strong> ".$_POST['fullname']."<br>";
                    echo "<strong>วันเกิด:</strong> ".$_POST['birth']."<br>";
                    echo "<strong>ระดับการศึกษา:</strong> ".$_POST['education']."<br>";
                    echo "<strong>อีเมล:</strong> ".$_POST['e-mail']."<br>";
                    echo "<strong>ประสบการณ์ทำงาน:</strong> ".$_POST['experience']."<br>";
                    echo "</div>";
                }
                ?>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
