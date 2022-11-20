<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{ asset('css/style-q.css') }}">
</head>

<body>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Đăng nhập</span>
                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Nhập Email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Nhập mật khẩu" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Ghi nhớ</label>
                        </div>
                        <a href="#" class="text">Quên mật khẩu?</a>
                    </div>
                    <div class="input-field button">
                        <input type="button" value="Đăng nhập">
                    </div>
                </form>
                <div class="login-signup">
                    <span class="text">Người mới
                        <a href="#" class="text signup-link">Đăng ký ngay</a>
                    </span>
                </div>
            </div>
            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Đăng ký</span>
                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Nhập tên đăng nhập" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Nhập Email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Tạo mật khẩu" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Nhập lại mật khẩu" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon">
                            <label for="termCon" class="text">Tôi đồng ý với điều khoản</label>
                        </div>
                    </div>
                    <div class="input-field button">
                        <input type="button" value="Signup">
                    </div>
                </form>
                <div class="login-signup">
                    <span class="text">Bạn đã là thành viên?
                        <a href="#" class="text login-link">Đăng nhập ngay</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/javascript.js"></script>
</body>

</html>
