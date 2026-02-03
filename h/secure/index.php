<?php
session_start();
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login: พาฤดี ปูนจีน (จ๋า)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            background: white;
        }
    </style>
</head>

<body>

<div class="login-card">
    <h3 class="text-center mb-4">เข้าสู่ระบบหลังบ้าน</h3>
    <h6 class="text-center text-muted mb-4 small">โดย: พาฤดี ปูนจีน (จ๋า)</h6>
    
    <form method="post" action="">
        <div class="mb-3">
            <label for="auser" class="form-label">Username</label>
            <input type="text" class="form-control" id="auser" name="auser" placeholder="กรอกชื่อผู้ใช้" autofocus required>
        </div>
        <div class="mb-4">
            <label for="apwd" class="form-label">Password</label>
            <input type="password" class="form-control" id="apwd" name="apwd" placeholder="กรอกรหัสผ่าน" required>
        </div>
        <div class="d-grid">
            <button type="submit" name="Submit" class="btn btn-primary btn-lg">เข้าสู่ระบบ</button>
        </div>
    </form>

    <?php
    if (isset($_POST['Submit'])) {
        include_once("connectdb.php");
        
        $user = $_POST['auser'];
        $pwd  = $_POST['apwd'];

        // ป้องกัน SQL Injection ด้วย Prepared Statement
        $stmt = mysqli_prepare($conn, "SELECT a_id, a_name, a_password FROM admin WHERE a_username = ? LIMIT 1");
        mysqli_stmt_bind_param($stmt, "s", $user);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if ($data = mysqli_fetch_array($result)) {
            // ตรวจสอบรหัสผ่าน (ต้องเป็นรหัสที่ hash ไว้ใน DB)
            if (password_verify($pwd, $data['a_password'])) {
                $_SESSION['a.id'] = $data['a_id'];
                $_SESSION['a.name'] = $data['a_name'];
                
                echo "<div class='alert alert-success mt-3 text-center'>เข้าสู่ระบบสำเร็จ! กำลังไปหน้าหลัก...</div>";
                echo "<script>setTimeout(function(){ window.location='index2.php'; }, 1500);</script>";
            } else {
                echo "<div class='alert alert-danger mt-3 text-center'>ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง</div>";
            }
        } else {
            echo "<div class='alert alert-danger mt-3 text-center'>ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง</div>";
        }
        mysqli_stmt_close($stmt);
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>