<?php
require_once('include/head.php');
require_once('include/nav.php');
include 'config.php';
session_start();
?> 
<div class="container-xxl flex-grow-1 container-p-y"><br>
      <div class="row justify-content-center">
              <div class="col-md-5"></div>
            </div>
              <div class="mt-2">
        <form id="dangnhap" method="POST">
            <div class="mb-3">
                <input type="text" name="username" class="form-control" placeholder="Tên đăng nhập" required autofocus>
            </div>
           <div class="mb-3">
    <div class="input-group">
        <input type="password" name="password" id="password" class="form-control" placeholder="Mật khẩu" required>
        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
            <i class="fas fa-eye"></i>
        </button>
    </div>
</div>

            <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
        </form>
        <p class="mt-3 text-center">Chưa có tài khoản? <a href="register.php">Đăng ký</a></p>
    </div>
</div>
<script>
document.getElementById("togglePassword").addEventListener("click", function() {
    var passwordInput = document.getElementById("password");
    var icon = this.querySelector("i");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        passwordInput.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
});

$(document).ready(function() {
    $('#dangnhap').submit(function(e) {
        e.preventDefault();
        var submitButton = $(this).find('button[type="submit"]');
        submitButton.html('Đang Đăng Nhập...').prop('disabled', true);
        $.ajax({
            type: 'POST',
            url: 'process_login.php', // Gửi đến file xử lý riêng
            data: $(this).serialize(),
            dataType: 'json', // Nhận JSON từ server
            success: function(response) {
                if (response.status === 'success') {
                    showToastrNotification('success', response.message, 'Thông báo');
                    setTimeout(function() {
                        window.location.href = 'index.php';
                    }, 1500);
                } else {
                    showToastrNotification('error', response.message, 'Thông báo');
                    submitButton.html('Đăng nhập').prop('disabled', false);
                }
            },
            error: function() {
                showToastrNotification('error', 'Lỗi kết nối server', 'Thông báo');
                submitButton.html('Đăng nhập').prop('disabled', false);
            }
        });
    });
});
</script>
<script>
document.querySelector('input[name="username"]').focus();
</script>

<?php require_once('include/foot.php'); ?>