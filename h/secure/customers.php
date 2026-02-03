<?php
    include_once("check_login.php");
    include_once("connectdb.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการลูกค้า - Admin Panel</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <style>
        body { background-color: #f4f7f6; font-family: 'Sarabun', sans-serif; }
        .sidebar { min-height: 100vh; background-color: #212529; color: white; }
        .sidebar .nav-link { color: rgba(255,255,255,0.8); padding: 15px 20px; transition: 0.3s; }
        .sidebar .nav-link:hover { background-color: #343a40; color: #fff; }
        .sidebar .nav-link.active { background-color: #0d6efd; color: white; }
        .main-content { padding: 20px; }
        .avatar-circle { width: 40px; height: 40px; background-color: #e9ecef; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; color: #6c757d; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-0">
            <div class="p-3 text-center fw-bold border-bottom border-secondary">
                <i class="fa-solid fa-gauge-high me-2"></i> Admin Panel
            </div>
            <div class="nav flex-column nav-pills">
                <a href="index2.php" class="nav-link"><i class="fa-solid fa-home me-2"></i> หน้าหลักแอดมิน</a>
                <a href="products.php" class="nav-link"><i class="fa-solid fa-box me-2"></i> จัดการสินค้า</a>
                <a href="orders.php" class="nav-link"><i class="fa-solid fa-cart-shopping me-2"></i> จัดการออเดอร์</a>
                <a href="customers.php" class="nav-link active"><i class="fa-solid fa-users me-2"></i> จัดการลูกค้า</a>
                <hr class="mx-3 my-2" style="border-color: #444;">
                <a href="logout.php" class="nav-link text-danger"><i class="fa-solid fa-right-from-bracket me-2"></i> ออกจากระบบ</a>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">จัดการลูกค้า</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <button class="btn btn-sm btn-outline-secondary me-2"><i class="fa-solid fa-file-export me-1"></i> Export CSV</button>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body d-flex align-items-center">
                            <div class="flex-shrink-0 bg-info-subtle text-info p-3 rounded-3 me-3">
                                <i class="fa-solid fa-user-plus fa-2x"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block">ลูกค้าใหม่เดือนนี้</small>
                                <h4 class="mb-0 fw-bold">48 คน</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-4">ชื่อ-นามสกุล</th>
                                    <th>เบอร์โทรศัพท์</th>
                                    <th>อีเมล</th>
                                    <th>วันที่สมัคร</th>
                                    <th class="text-center">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-circle me-3">กก</div>
                                            <div>
                                                <div class="fw-bold">กิตติพงษ์ เรียนดี</div>
                                                <small class="text-muted">ID: CUS-001</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>081-234-5678</td>
                                    <td>kittipong@example.com</td>
                                    <td>15 ม.ค. 2026</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="customer_details.php?id=1" class="btn btn-sm btn-light" title="ดูประวัติการซื้อ"><i class="fa-solid fa-history"></i></a>
                                            <a href="mailto:kittipong@example.com" class="btn btn-sm btn-light" title="ส่งอีเมล"><i class="fa-solid fa-envelope"></i></a>
                                            <button class="btn btn-sm btn-light text-danger" title="ระงับบัญชี"><i class="fa-solid fa-user-slash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>