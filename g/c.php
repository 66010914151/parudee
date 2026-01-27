<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบจัดการข้อมูล Pop Supermarket</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; }
        .card { border: none; border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .table-header { background-color: #4e73df; color: white; }
        .product-img { border-radius: 8px; object-fit: cover; border: 1px solid #ddd; }
        .total-row { background-color: #e9ecef; font-weight: bold; }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <h1 class="display-5 fw-bold text-primary">พาฤดี ปูนจีน (จ๋า)</h1>
            <p class="text-muted">รายการคำสั่งซื้อระบบ Pop Supermarket</p>
        </div>
    </div>

    <div class="card">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table id="supermarketTable" class="table table-hover align-middle" style="width:100%">
                    <thead class="table-light">
                        <tr>
                            <th class="text-center">Order ID</th>
                            <th>สินค้า</th>
                            <th>ประเภท</th>
                            <th>วันที่</th>
                            <th>ประเทศ</th>
                            <th class="text-end">จำนวนเงิน</th>
                            <th class="text-center">รูปภาพ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include_once("connectdb.php");
                            $sql = "SELECT * FROM `popsupermarket` ORDER BY p_order_id DESC";
                            $rs = mysqli_query($conn, $sql);
                            $total = 0;
                            while($data = mysqli_fetch_array($rs)){
                                $total += $data['p_amount'];
                        ?>
                        <tr>
                            <td class="text-center fw-bold">#<?php echo $data['p_order_id'];?></td>
                            <td><?php echo $data['p_product_name'];?></td>
                            <td><span class="badge bg-info text-dark"><?php echo $data['p_category'];?></span></td>
                            <td><?php echo date('d/m/Y', strtotime($data['p_date']));?></td>
                            <td><?php echo $data['p_country'];?></td>
                            <td class="text-end text-primary fw-bold"><?php echo number_format($data['p_amount'], 2);?></td>
                            <td class="text-center">
                                <img src="<?php echo $data['p_product_name'];?>.png" 
                                     alt="product"
                                     class="product-img"
                                     width="50" height="50"
                                     onerror="this.src='https://via.placeholder.com/50?text=No+Img'">
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr class="table-secondary">
                            <td colspan="5" class="text-end fw-bold">รวมทั้งสิ้น:</td>
                            <td class="text-end text-danger fw-bold" style="font-size: 1.2rem;">
                                <?php echo number_format($total, 2); ?>
                            </td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#supermarketTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.7/i18n/th.json" // เมนูภาษาไทย
            },
            "pageLength": 10,
            "order": [[ 0, "desc" ]] // เรียงจาก Order ID ล่าสุด
        });
    });
</script>

</body>
</html>