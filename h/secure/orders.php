<?php
    include_once("check_login.php");
    include_once("connectdb.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการออเดอร์ - Admin Panel</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <style>
        body { background-color: #f4f7f6; font-family: 'Sarabun', sans-serif; }
        .sidebar { min-height: 100vh; background-color: #212529; color: white; }
        .sidebar .nav-link { color: rgba(255,255,255,0.8); padding: 15px 20px; transition: 0.3s; }
        .sidebar .nav-link:hover { background-color: #343a40; color: #fff; }
        .sidebar .nav-link.active { background-color: #0d6efd; color: white; }
        .main-content { padding: 20px; }
        .table-card { border: none; border-radius: 10px; box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); }
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
                <a href="orders.php" class="nav-link active"><i class="fa-solid fa-cart-shopping me-2"></i> จัดการออเดอร์</a>
                <a href="customers.php" class="nav-link"><i class="fa-solid fa-users me-2"></i> จัดการลูกค้า</a>
                <hr class="mx-3 my-2" style="border-color: #444;">
                <a href="logout.php" class="nav-link text-danger"><i class="fa-solid fa-right-from-bracket me-2"></i> ออกจากระบบ</a>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">จัดการออเดอร์</h1>
                <div class="text-muted small">ล็อกอินโดย: <strong><?php echo $_SESSION['a.name']; ?></strong></div>
            </div>

            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="card bg-white p-3 border-0 shadow-sm border-start border-primary border-4">
                        <small class="text-muted">ออเดอร์วันนี้</small>
                        <h4 class="mb-0">8 รายการ</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-white p-3 border-0 shadow-sm border-start border-warning border-4">
                        <small class="text-muted">รอตรวจสอบชำระเงิน</small>
                        <h4 class="mb-0">3 รายการ</h4>
                    </div>
                </div>
            </div>

            <div class="card table-card bg-white">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 fw-bold">รายการสั่งซื้อล่าสุด</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-4">เลขที่ออเดอร์</th>
                                    <th>ลูกค้า</th>
                                    <th>วันที่สั่งซื้อ</th>
                                    <th>ยอดรวม</th>
                                    <th>สถานะ</th>
                                    <th class="text-center">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4 fw-bold">#ORD-10025</td>
                                    <td>คุณสมชาย ใจดี</td>
                                    <td>03 ก.พ. 2026 | 10:30</td>
                                    <td>฿2,450.00</td>
                                    <td><span class="badge rounded-pill bg-warning text-dark">รอชำระเงิน</span></td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-outline-info"><i class="fa-solid fa-eye"></i> ดูรายละเอียด</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-4 fw-bold">#ORD-10024</td>
                                    <td>คุณสมหญิง รักดี</td>
                                    <td>02 ก.พ. 2026 | 15:20</td>
                                    <td>฿1,100.00</td>
                                    <td><span class="badge rounded-pill bg-success">ชำระเงินแล้ว</span></td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-outline-info"><i class="fa-solid fa-eye"></i></button>
                                        <button class="btn btn-sm btn-outline-primary"><i class="fa-solid fa-truck"></i> ส่งของ</button>
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