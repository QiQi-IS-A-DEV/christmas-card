<?php
// Lấy dữ liệu form an toàn
$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
$short_wish = isset($_POST['short_wish']) ? htmlspecialchars($_POST['short_wish']) : '';
$wishes = isset($_POST['wishes']) ? htmlspecialchars($_POST['wishes']) : '';
$music = isset($_POST['music']) ? htmlspecialchars($_POST['music']) : '';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thiệp Giáng Sinh</title>
<link href="https://fonts.googleapis.com/css2?family=Mali:wght@400;600;700&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Mali', cursive;
        background: linear-gradient(135deg, #8B0000, #c41e3a);
        color: white;
        padding: 20px;
    }
    .container {
        max-width: 800px;
        margin: 0 auto;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 40px;
    }
</style>
</head>
<body>
<div class="container">
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
    <h1>🎄 Chúc Mừng Giáng Sinh 🎄</h1>
    <h2>Gửi đến: <?= $name ?></h2>
    <p><strong>Lời chúc ngắn:</strong> <?= $short_wish ?></p>
    <p><strong>Lời chúc dài:</strong><br><?= nl2br($wishes) ?></p>
    <?php if (!empty($music)): ?>
        <audio controls autoplay>
            <source src="<?= $music ?>" type="audio/mpeg">
        </audio>
    <?php endif; ?>
    <p><a href="thiep.php">Tạo thiệp khác</a></p>
<?php else: ?>
    <!-- Form ban đầu -->
    <h1>Tạo Thiệp Giáng Sinh</h1>
    <form action="thiep.php" method="POST">
        <label>Tên người nhận:</label><br>
        <input type="text" name="name"><br><br>
        <label>Lời chúc ngắn:</label><br>
        <input type="text" name="short_wish"><br><br>
        <label>Lời chúc dài:</label><br>
        <textarea name="wishes"></textarea><br><br>
        <label>Link nhạc (tùy chọn):</label><br>
        <input type="text" name="music"><br><br>
        <button type="submit">Tạo Thiệp</button>
    </form>
<?php endif; ?>
</div>
</body>
</html>
