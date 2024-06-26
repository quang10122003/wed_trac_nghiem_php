<?php
include '../db/connect.php';
session_start();
$username = $_POST["user_login"];
$password = $_POST["password_login"];
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array($result);
if ($result) {
    $count= mysqli_num_rows($result);
    if ($count > 0) {
        // Thực hiện thêm người dùng vào cơ sở dữ liệu
        $_SESSION['username'] = $row["role"];
        header("location:../view/home_admin.php");
    } else {
       
        echo "<script>
        window.location.href = '../view/index.php?error=thong_tin_mat_khau_sai&username=$username';
      </script>";
    }
} else {
    echo "Đã xảy ra lỗi trong quá trình thực thi câu truy vấn.";
}
?>