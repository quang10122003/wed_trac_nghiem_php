<?php
include '../db/connect.php';
$username = $_POST["user_register"];
$password = $_POST["password_register"];
$password2 = $_POST["password_again"];
$sql = "SELECT COUNT(*) as count FROM users WHERE username='$username'";
$result = mysqli_query($mysqli, $sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];

    if ($count > 0) {
        // đã tồn tại người dùng
        echo "<script>
                    window.location.href = '../view/index.php?error=tendangnhaptontai&username=$username';
                  </script>";

    } else {
        // Thực hiện thêm người dùng vào cơ sở dữ liệu
        $sql_insert = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        $result_insert = mysqli_query($mysqli, $sql_insert);
        if ($result_insert) {
            header("location:../view/home_user.php");
        } else {
            echo "Đã xảy ra lỗi khi đăng ký tài khoản.";
        }
    }
} else {
    echo "Đã xảy ra lỗi trong quá trình thực thi câu truy vấn.";
}
?>