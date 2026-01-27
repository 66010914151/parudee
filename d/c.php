<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>พาฤดี ปูนจีน (จ๋า)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    /* ปรับให้ฟอร์มดูดีขึ้นบนหน้าจอขนาดเล็ก */
    .form-container {
        max-width: 600px;
        margin: auto;
    }
</style>
</head>

<body>

<div class="container py-5">
    
    <h1 class="text-center mb-5 text-primary">ฟอร์มสมัครสมาชิก -- พาฤดี ปูนจีน (จ๋า) -- Gemini</h1>
    
    <div class="card shadow-lg form-container">
        <div class="card-body">
            
            <form method="post" action="">
                
                <div class="mb-3">
                    <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fullname" name="fullname" required autofocus>
                </div>
                
                <div class="mb-3">
                    <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                
                <div class="mb-3">
                    <label for="height" class="form-label">ความสูง <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="height" name="height" min="90" max="220" required>
                        <span class="input-group-text">ซม.</span>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="color" class="form-label">สีที่ชอบ</label>
                    <input type="color" class="form-control form-control-color w-100" id="color" name="color" value="#4e99e6">
                </div>
                
                <div class="mb-3">
                    <label for="major" class="form-label">สาขาวิชา</label>
                    <select class="form-select" id="major" name="major">
                        <option value="การบัญชี">การบัญชี</option>
                        <option value="การจัดการ">การจัดการ</option>
                        <option value="การตลาด">การตลาด</option>
                        <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                    </select>
                </div>
                
                <div class="d-grid gap-2 d-md-block mt-4">
                    <button type="submit" name="Submit" class="btn btn-primary btn-lg">สมัครสมาชิก</button>
                    <button type="reset" class="btn btn-danger btn-lg">Reset</button>
                    <button type="button" onClick="window.location='https://www.msu.ac.th';" class="btn btn-info btn-lg text-dark">MSU</button>
                    <button type="button" onClick="window.print();" class="btn btn-secondary btn-lg">พิมพ์</button>
                </div>

            </form>
            
        </div>
    </div>
    
    <hr class="my-5">

    <div class="card shadow-lg form-container">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">✅ ผลการสมัครสมาชิก</h4>
        </div>
        <div class="card-body">
            
            <?php
            if(isset($_POST['Submit'])){
                $fullname = $_POST['fullname'];
                $phone = $_POST['phone'];
                $height = $_POST['height'];
                $color = $_POST['color'];
                $major = $_POST['major'];
                
                // ฟังก์ชันสำหรับตรวจสอบความสว่างของสี (เพื่อเลือกสีตัวอักษร)
                function get_text_color($hex_color) {
                    $hex = str_replace('#', '', $hex_color);

                    $r = hexdec(substr($hex, 0, 2));
                    $g = hexdec(substr($hex, 2, 2));
                    $b = hexdec(substr($hex, 4, 2));
                    // ใช้สูตร Luminosity
                    $luminosity = (0.299 * $r + 0.587 * $g + 0.114 * $b) / 255;
                    return ($luminosity > 0.5) ? '#000' : '#fff'; // ถ้าสว่างให้ใช้ตัวอักษรดำ, ถ้างั้นใช้ขาว
                }

                echo "<p><strong>ชื่อ-สกุล:</strong> <span class='text-primary'>".$fullname."</span></p>";
                echo "<p><strong>เบอร์โทร:</strong> <code>".$phone."</code></p>";
                echo "<p><strong>ความสูง:</strong> <span class='text-success'>".$height."</span> ซม. </p>";
                
                // ปรับการแสดงผลสีให้สวยงามด้วย Badge ของ Bootstrap
                $text_color = get_text_color($color);
                echo "<p><strong>สีที่ชอบ:</strong> ".$color." <span class='badge' style='background-color:{$color}; color:{$text_color}; border: 1px solid #ccc;'>&nbsp;&nbsp;สีตัวอย่าง&nbsp;&nbsp;</span></p>";
                
                echo "<p><strong>สาขาวิชา:</strong> <span class='text-info'>".$major."</span></p>";
            }
            ?>
        </div>
    </div>
    
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>