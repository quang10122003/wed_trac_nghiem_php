<?php
session_start();
// Kiểm tra xem session 'username' đã được thiết lập chưa
if (isset($_SESSION['username'])) {
    if($_SESSION['username'] == 'admin'){
      header("Location: ../view/home_admin.php");
    }
    if($_SESSION['username'] == 'user'){
      header("Location: ../view/home_user.php");
    }
}
?>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>React Singup Form</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700&subset=latin,cyrillic" rel="stylesheet"
    type="text/css" />
  <link rel="stylesheet" href="../css/index.css?v= <?php echo time(); ?>" />
</head>

<body>
  <h2>Đăng nhập/Đăng ký</h2>
  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <form action="../controller/register.php" method="POST" onsubmit="return validateForm()">
        <h1>Tạo tài khoản</h1>
        <br />
        <input type="text" id="nameInput" placeholder="Name" name="user_register" required />
        <input type="password" placeholder="Password" id="passwordInput" name="password_register" required />
        <div id="passwordError1" style="color: red; display: none;margin-bottom: 10px;">Mật khẩu phải có ít nhất 5 ký tự</div>
        <input type="password" placeholder="Password again" id="passwordAgainInput" name="password_again" required />
        <div id="passwordError2" style="color: red; display: none;margin-bottom: 10px;">Mật khẩu không khớp.</div>
        <button type="submit" name="submit_register">Đăng ký</button>
      </form>
    </div>
    <div class="form-container sign-in-container">
      <form action="../controller/login.php" method="POST">
        <h1>Đăng nhập</h1>
        <input type="text" placeholder="user name" name="user_login" required/>
        <input type="password" placeholder="Password" name="password_login" required />
        <a href="#">Bạn quên mật khẩu?</a>
        <button type="submit" name="submit_login">Đăng nhập</button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Đăng nhập!</h1>
          <p>Ấn vào đây để đăng nhập</p>
          <button class="ghost" id="signIn">Đăng nhập</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Chào bạn!</h1>
          <p>bạn chưa có tài khoản hãy bấm nút đăng ký</p>
          <button class="ghost" id="signUp">đăng ký</button>
        </div>
      </div>
    </div>
  </div>
  <script src="../js/index.js?v= <?php echo time(); ?>"></script>
</body>

</html>