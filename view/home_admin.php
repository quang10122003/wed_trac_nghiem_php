
<?php
session_start();

// Kiểm tra xem session 'username' đã được thiết lập chưa
if (!isset($_SESSION['username'])) {
    // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
    header("Location: ../view/index.php");
    exit;
}else if($_SESSION['username']!= 'admin'){
    header("Location: ../view/index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>trang admin</h1>
    <button onclick="logout()">đăng xuất</button>
</body>
<script src="../js/home_admin.js?v= <?php echo time(); ?>"></script>
</html>