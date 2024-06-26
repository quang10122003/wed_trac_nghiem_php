function logout() {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../controller/logout.php',true );
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var response = xhr.responseText;
                if(response == "logged_out"){
                    window.location.href = '../view/index.php';
                }
            } else {
                console.error('Lỗi khi gửi yêu cầu: ' + xhr.status);
            }
        }
    };
    xhr.send();
}