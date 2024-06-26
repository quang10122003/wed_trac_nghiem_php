<?php
session_start();
// Hủy session
unset($_SESSION['username']);

// Trả về kết quả là đã đăng xuất thành công
echo 'logged_out';
exit;
?>
