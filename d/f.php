<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ผลการส่งใบสมัคร Hard Working Mahasarakham</title>

<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<style>
    body {
        background: linear-gradient(135deg, #d7e6ff, #eef4ff);
        font-family: "Segoe UI", sans-serif;
        min-height: 100vh;
    }

    .result-card {
        background: #fff;
        border-radius: 20px;
        padding: 25px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .header-box h2 {
        color: #0d6efd;
        font-weight: 700;
    }
</style>

</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-9">

            <div class="result-card">

                <div class="header-box text-center mb-4">
                    <h2><i class="bi bi-person-badge-fill me-2"></i>ข้อมูลใบสมัครงาน</h2>
                    <p class="text-secondary"> Hard Working Mahasarakham</p>
                    <p class="text-secondary">พาฤดี ปูนจีน</p>
                </div>

                <?php
                if (isset($_POST['Submit'])) {

                    $position   = $_POST['position'];
                    $prefix     = $_POST['prefix'];
                    $fullname   = $_POST['fullname'];
                    $birth      = $_POST['birth'];
                    $education  = $_POST['education'];
                    $email      = $_POST['e-mail'];
                    $exp        = $_POST['experience'];
                ?>

                <div class="list-group">

                    <div class="list-group-item py-3">
                        <h6 class="fw-bold text-primary">ตำแหน่งที่สมัคร</h6>
                        <div class="fs-5 text-secondary"><?php echo $position; ?></div>
                    </div>

                    <div class="list-group-item py-3">
                        <h6 class="fw-bold text-primary">คำนำหน้า</h6>
                        <div class="fs-5 text-secondary"><?php echo $prefix; ?></div>
                    </div>

                    <div class="list-group-item py-3">
                        <h6 class="fw-bold text-primary">ชื่อ - สกุล</h6>
                        <div class="fs-5 text-secondary"><?php echo $fullname; ?></div>
                    </div>

                    <div class="list-group-item py-3">
                        <h6 class="fw-bold text-primary">วันเดือนปีเกิด</h6>
                        <div class="fs-5 text-secondary"><?php echo $birth; ?></div>
                    </div>

                    <div class="list-group-item py-3">
                        <h6 class="fw-bold text-primary">ระดับการศึกษา</h6>
                        <div class="fs-5 text-secondary"><?php echo $education; ?></div>
                    </div>

                    <div class="list-group-item py-3">
                        <h6 class="fw-bold text-primary">อีเมล</h6>
                        <div class="fs-5 text-secondary"><?php echo $email; ?></div>
                    </div>

                    <div class="list-group-item py-3">
                        <h6 class="fw-bold text-primary">ประสบการณ์ทำงาน</h6>
                        <div class="fs-5 text-secondary"><?php echo nl2br($exp); ?></div>
                    </div>

                </div>

                <?php } else { ?>
                    <div class="alert alert-danger text-center">
                        <h5>ไม่มีข้อมูลที่ส่งมา!</h5>
                    </div>
                <?php } ?>

                <div class="text-center mt-4">
                    <a href="index.html" class="btn btn-primary px-4">
                        <i class="bi bi-arrow-left-circle me-1"></i> กลับไปหน้ากรอกฟอร์ม
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>

</body>
</html>
