document.addEventListener("DOMContentLoaded", () => {
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
});

// hàm hiển thị lỗi đăng ký tên đăng ký tồn tại
function checkAndAlertError_rigister() {
    const urlParams = new URLSearchParams(window.location.search);
    const errorParam = urlParams.get('error');
    if (errorParam === 'tendangnhaptontai') {
        // Hiển thị alert thông báo
        alert("tên đăng nhập của bạn đã tồn tại");
        window.location.href = "../view/index.php";
    }
    
}
checkAndAlertError_rigister(); // goi lại hàm khi reset trang

function checkAndAlertError_login() {
    const urlParams = new URLSearchParams(window.location.search);
    const errorParam = urlParams.get('error');
    if (errorParam === 'thong_tin_mat_khau_sai') {
        // Hiển thị alert thông báo
        alert("thông tin hoặc mật khẩu không chính xác");
        window.location.href = "../view/index.php";
    }
    
}
checkAndAlertError_login(); // goi lại hàm khi reset trang


// check tạo tk mk phải giống nhau
document.getElementById("passwordInput").addEventListener("input", validateForm);
document.getElementById("passwordAgainInput").addEventListener("input", validateForm);

function validateForm() {
    var password = document.getElementById("passwordInput").value;
    var passwordAgain = document.getElementById("passwordAgainInput").value;
    var errorDiv1 = document.getElementById("passwordError1");
    var errorDiv2 = document.getElementById("passwordError2");

    // Kiểm tra độ dài mật khẩu
    if (password.length < 5 && password.length > 0) {
        errorDiv1.style.display = 'block';
    } else {
        errorDiv1.style.display = 'none';
    }

    // Kiểm tra sự khớp nhau của mật khẩu
    if (password !== passwordAgain && passwordAgain.length > 0) {
        errorDiv2.style.display = "block";
    } else {
        errorDiv2.style.display = "none";
    }

    // Ngăn chặn form gửi đi nếu có lỗi
    if (password.length < 5 || (password !== passwordAgain && passwordAgain.length > 0)) {
        return false;
    }

    return true;
}
