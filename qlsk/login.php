<?php
require_once 'core/connector.php';

?>
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Hệ thống quản lý sự kiện</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.2.2">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.2.2">
</head>

<body class="nk-body ui-rounder npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Đăng nhập</h4>
                                        <div class="nk-block-des">
                                            <p>Vui lòng nhập email và mật khẩu để tiếp tục.</p>
                                        </div>
                                    </div>
                                </div>
                                <form >
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Email</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" id="email" placeholder="Nhập email của bạn">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Mật khẩu</label>
                                            <a id="forget_password" class="link link-primary link-sm" >Bạn quên mật khẩu?</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="password" placeholder="Nhập mật khẩu của bạn">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button btn id="btn_login" class="btn btn-lg btn-primary btn-block">Đăng nhập</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="nk-footer nk-auth-footer-full">
                        <div class="container wide-lg">
                            <div class="row g-3">
                                <div class="col-lg-6 order-lg-last">
                                    <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Terms & Condition</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Help</a>
                                        </li>
                                        <li class="nav-item dropup">
                                            <a class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                <ul class="language-list">
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/english.png" alt="" class="language-flag">
                                                            <span class="language-name">English</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/spanish.png" alt="" class="language-flag">
                                                            <span class="language-name">Español</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/french.png" alt="" class="language-flag">
                                                            <span class="language-name">Français</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/turkey.png" alt="" class="language-flag">
                                                            <span class="language-name">Türkçe</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="nk-block-content text-center text-lg-left">
                                        <p class="text-soft">&copy; 2023 DashLite. All Rights Reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=3.2.2"></script>
    <script src="./assets/js/scripts.js?ver=3.2.2"></script>


    <!--đăng nhập-->
    <script>
        $("#btn_login").click(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Bạn đang đăng nhập dưới quyền',
                html: `
                <row style="display: inline-block">
                    <input type="radio" id="admin" name="op" value="1">
                    <label for="admin">Admin</label><br>
                    <input type="radio" id="teacher" name="op" value="0">
                    <label for="cashier">Giáo viên</label><br>
                </row>

                    `,
                confirmButtonText: 'OK',
                preConfirm: () => {
                    const selectedOption = document.querySelector('input[name="op"]:checked');
                    if (!selectedOption) {
                        Swal.showValidationMessage('Vui lòng chọn một trong các quyền để đăng nhập');
                    }
                    return selectedOption ? selectedOption.value : '';
                }
            }).then((result) => {

                if (result.isConfirmed) {
                    // Swal.fire(`Bạn đã chọn: ${}`);
                    login(result.value)
                }
            });
        });

        function login(type) {
            console.log(type)
            var email = $("#email").val();
            var password = $("#password").val();

            if (email && password) {
                var data = {
                    email: email,
                    password: password
                };

                $.ajax({
                    type: "POST",
                    url: "core/functions/login.php?type=" + type,
                    data: data,
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        if (response.error === false) {
                            // Sử dụng SweetAlert để hiển thị thông báo
                            Swal.fire({
                                icon: 'success',
                                title: 'Đăng nhập thành công!',
                                showConfirmButton: false,
                                timer: 1500 // Tự động đóng thông báo sau 1.5 giây
                            });
                            // Redirect hoặc thực hiện hành động sau khi đăng nhập thành công.
                            window.location = "index.php"
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Lỗi',
                                text: response.message,
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Lỗi',
                            text: 'Đã xảy ra lỗi trong quá trình đăng nhập.',
                        });
                    }
                });
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'Cảnh báo',
                    text: 'Vui lòng nhập email và mật khẩu.',
                });
            }

        }

        $("#forget_password").click(function() {
            Swal.fire({
                title: 'Vui lòng nhập email của bạn',
                input: 'email',

                showCancelButton: true,
                confirmButtonText: 'Gửi',
                cancelButtonText: 'Hủy',
                showLoaderOnConfirm: true,
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {

                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'Đang xử lý...',
                        html: 'Vui lòng đợi...',
                        icon: 'info',
                        showConfirmButton: false, // Ẩn nút xác nhận
                        allowOutsideClick: false, // Không cho phép click ngoài cửa sổ
                    });
                    $.ajax({
                        url: 'core/functions/quen_mat_khau.php', // Đường dẫn tới API
                        type: 'POST',
                        data: { email: result.value }, // Dữ liệu gửi đi (email)
                        success: function(response) {
                            Swal.fire('Thông báo!', response);
                            Swal.showConfirmButton(true);
                        },
                        error: function(error) {
                            // Xử lý lỗi ở đây nếu cần
                            console.log(error);
                            Swal.update({
                                title: 'Lỗi!',
                                html: 'Có lỗi xảy ra.',
                                icon: 'error',
                            });
                            Swal.showConfirmButton(true);
                        }
                    });

                }
            });
        });



    </script>

</html>