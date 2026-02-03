<?php
    include_once("check_login.php");
    include_once("connectdb.php"); // ดึงไฟล์เชื่อมต่อฐานข้อมูลมาเพื่อ Query ข้อมูลสินค้า
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการสินค้า - Admin Panel</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <style>
        body { background-color: #f4f7f6; font-family: 'Sarabun', sans-serif; }
        .sidebar { min-height: 100vh; background-color: #212529; color: white; }
        .sidebar .nav-link { color: rgba(255,255,255,0.8); padding: 15px 20px; transition: 0.3s; }
        .sidebar .nav-link:hover { background-color: #343a40; color: #fff; }
        .sidebar .nav-link.active { background-color: #0d6efd; color: white; }
        .main-content { padding: 20px; }
        .product-img { width: 50px; height: 50px; object-fit: cover; border-radius: 5px; }
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
                <a href="index2.php" class="nav-link">
                    <i class="fa-solid fa-home me-2"></i> หน้าหลักแอดมิน
                </a>
                <a href="products.php" class="nav-link active">
                    <i class="fa-solid fa-box me-2"></i> จัดการสินค้า
                </a>
                <a href="orders.php" class="nav-link">
                    <i class="fa-solid fa-cart-shopping me-2"></i> จัดการออเดอร์
                </a>
                <a href="customers.php" class="nav-link">
                    <i class="fa-solid fa-users me-2"></i> จัดการลูกค้า
                </a>
                <hr class="mx-3 my-2" style="border-color: #444;">
                <a href="logout.php" class="nav-link text-danger" onclick="return confirm('ออกจากระบบหรือไม่?')">
                    <i class="fa-solid fa-right-from-bracket me-2"></i> ออกจากระบบ
                </a>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">จัดการสินค้า</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="add_product.php" class="btn btn-success">
                        <i class="fa-solid fa-plus me-1"></i> เพิ่มสินค้าใหม่
                    </a>
                </div>
            </div>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="ค้นหาชื่อสินค้า...">
                        </div>
                        <div class="col-md-3">
                            <select class="form-select">
                                <option selected>ทุกหมวดหมู่</option>
                                <option>เครื่องแต่งกาย</option>
                                <option>เครื่องใช้ไฟฟ้า</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-primary w-100">ค้นหา</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-4">ID</th>
                                    <th>รูปภาพ</th>
                                    <th>ชื่อสินค้า</th>
                                    <th>ราคา</th>
                                    <th>สต็อก</th>
                                    <th class="text-center">จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    // ตัวอย่างจำลองข้อมูล (คุณต้องไปเขียน SQL ดึงข้อมูลจริงๆ)
                                    // $sql = "SELECT * FROM products";
                                    // $rs = mysqli_query($conn, $sql);
                                    // while($data = mysqli_fetch_array($rs)){ ... }
                                ?>
                                <tr>
                                    <td class="ps-4">001</td>
                                    <td><img src="https://via.placeholder.com/50" class="product-img" alt="Product"></td>
                                    <td>
                                        <div class="fw-bold">รองเท้าผ้าใบ Men's Classic</div>
                                        <small class="text-muted">หมวดหมู่: รองเท้า</small>
                                    </td>
                                    <td>฿1,290.00</td>
                                    <td><span class="badge bg-success">คงเหลือ 24</span></td>
                                    <td class="text-center">
                                        <a href="edit_product.php?id=1" class="btn btn-sm btn-outline-primary me-1">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        <a href="delete_product.php?id=1" class="btn btn-sm btn-outline-danger" onclick="return confirm('ลบสินค้านี้ใช่หรือไม่?')">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
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