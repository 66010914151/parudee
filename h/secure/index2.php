<?php
    include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard - พาฤดี ปูนจีน</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <style>
        body {
            background-color: #f4f7f6;
            font-family: 'Sarabun', sans-serif;
        }
        /* Sidebar Styles */
        .sidebar {
            min-height: 100vh;
            background-color: #212529;
            color: white;
            transition: all 0.3s;
        }
        .sidebar .nav-link {
            color: rgba(255,255,255,0.8);
            padding: 15px 20px;
            border-radius: 0;
            transition: 0.3s;
        }
        .sidebar .nav-link:hover {
            background-color: #343a40;
            color: #fff;
            padding-left: 25px;
        }
        .sidebar .nav-link.active {
            background-color: #0d6efd;
            color: white;
        }
        .sidebar-heading {
            padding: 20px;
            font-size: 1.2rem;
            font-weight: bold;
            border-bottom: 1px solid #444;
        }
        /* Content Styles */
        .main-content {
            padding: 20px;
        }
        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-0">
            <div class="sidebar-heading text-center">
                <i class="fa-solid fa-gauge-high me-2"></i> Admin Panel
            </div>
            <div class="nav flex-column nav-pills">
                <a href="index2.php" class="nav-link active">
                    <i class="fa-solid fa-home me-2"></i> หน้าหลักแอดมิน
                </a>
                <a href="products.php" class="nav-link">
                    <i class="fa-solid fa-box me-2"></i> จัดการสินค้า
                </a>
                <a href="orders.php" class="nav-link">
                    <i class="fa-solid fa-cart-shopping me-2"></i> จัดการออเดอร์
                </a>
                <a href="customers.php" class="nav-link">
                    <i class="fa-solid fa-users me-2"></i> จัดการลูกค้า
                </a>
                <hr class="mx-3 my-2" style="border-color: #444;">
                <a href="logout.php" class="nav-link text-danger" onclick="return confirm('ยืนยันการออกจากระบบ?')">
                    <i class="fa-solid fa-right-from-bracket me-2"></i> ออกจากระบบ
                </a>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            
            <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow-sm mb-4 px-3">
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h1 text-primary">ระบบจัดการหลังบ้าน</span>
                    <div class="d-flex align-items-center">
                        <span class="me-3 d-none d-md-inline text-muted">สวัสดีคุณ: <strong><?php echo $_SESSION['a.name']; ?></strong></span>
                        <img src="https://ui-avatars.com/api/?name=<?php echo $_SESSION['a.name']; ?>&background=0D6EFD&color=fff" alt="User" class="rounded-circle" width="35">
                    </div>
                </div>
            </nav>

            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-sm p-4">
                        <h2 class="fw-bold">ยินดีต้อนรับสู่ Dashboard</h2>
                        <p class="text-muted">คุณสามารถเลือกจัดการระบบต่างๆ ได้จากเมนูด้านซ้ายมือ</p>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-4 mb-3">
                    <div class="card bg-primary text-white border-0 shadow-sm">
                        <div class="card-body py-4">
                            <h5 class="card-title"><i class="fa-solid fa-box me-2"></i> สินค้าทั้งหมด</h5>
                            <h2 class="mb-0">120 รายการ</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card bg-success text-white border-0 shadow-sm">
                        <div class="card-body py-4">
                            <h5 class="card-title"><i class="fa-solid fa-cart-shopping me-2"></i> ออเดอร์ใหม่</h5>
                            <h2 class="mb-0">15 ออเดอร์</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card bg-warning text-dark border-0 shadow-sm">
                        <div class="card-body py-4">
                            <h5 class="card-title"><i class="fa-solid fa-users me-2"></i> ลูกค้าทั้งหมด</h5>
                            <h2 class="mb-0">450 คน</h2>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>