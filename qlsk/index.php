<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Hệ thống quản lý nhà trọ</title>

    <meta name="description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <style>
        #map {  top: 0; bottom: 0; width: 100%; }
        body {
            font-family: 'Be Vietnam Pro' !important;
        }
    </style>
    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Stylesheets -->
    <!-- OneUI framework -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
          integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
            integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
            crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <link rel="stylesheet" id="css-main" href="assets/css/oneui.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100&display=swap" rel="stylesheet">
    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
</head>
<style>
    #map { height: 720px; }
</style>
<body>
<!-- Page Container -->
<!--
    Available classes for #page-container:

GENERIC

  'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                              - Theme helper buttons [data-toggle="theme"],
                                              - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                              - ..and/or One.layout('dark_mode_[on/off/toggle]')

SIDEBAR & SIDE OVERLAY

  'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
  'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
  'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
  'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
  'sidebar-dark'                              Dark themed sidebar

  'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
  'side-overlay-o'                            Visible Side Overlay by default

  'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

  'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

HEADER

  ''                                          Static Header if no class is added
  'page-header-fixed'                         Fixed Header

HEADER STYLE

  ''                                          Light themed Header
  'page-header-dark'                          Dark themed Header

MAIN CONTENT LAYOUT

  ''                                          Full width Main Content if no class is added
  'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
  'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

DARK MODE

  'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
-->
<div id="page-container">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="bg-primary-dark" style="background-image: url('assets/media/photos/photo28@2x.jpg");>
            <div class="row g-0 bg-primary-dark-op">
                <!-- Meta Info Section -->
                <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
                    <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                        <div class="w-100">
                            <a class="link-fx fw-semibold fs-2 text-white" href="login.php">
                                BDU <span class="fw-normal">Student Support System</span>
                            </a>
                            <p class="text-white-75 me-xl-8 mt-2">
                                Với quý chủ nhà trọ muốn đăng tải thông tin về nhà trọ của mình lên hệ thống. Vui lòng hoàn thành biểu mẫu sau và đợi phản hồi từ nhà trường.
                            </p>
                        </div>
                    </div>

                </div>
                <!-- END Meta Info Section -->

                <!-- Main Section -->
                <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-body-extra-light">
                    <div class="p-3 w-100 d-lg-none text-center">
                        <a class="link-fx fw-semibold fs-3 text-dark" href="index.html">
                            One<span class="fw-normal">UI</span>
                        </a>
                    </div>
                    <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
                        <div class="w-100">
                            <!-- Header -->
                            <div class="text-center mb-5">
                                <p class="mb-3">
                                    <i class="fa fa-2x fa-circle-notch text-primary-light"></i>
                                </p>
                                <h1 class="fw-bold mb-2">
                                    Đăng ký thành viên
                                </h1>
                                <p class="fw-medium text-muted">
                                    Để quảng bá và tiếp cận sinh viên có nhu cầu thuê trọ.
                                </p>
                            </div>
                            <!-- END Header -->

                            <!-- Sign Up Form -->
                            <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
                            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <div class="row g-0 justify-content-center">
                                <div class="col-sm-8 col-xl-4">
                                    <form id="data" enctype="multipart/form-data" >
                                        <div class="mb-4">
                                            <input type="text" class="form-control form-control-lg form-control-alt py-3" id="phone" name="phone" placeholder="Số điện thoại">
                                        </div>

                                        <div class="mb-4">
                                            <input type="password" class="form-control form-control-lg form-control-alt py-3" id="password" name="password" placeholder="Mật khẩu">
                                        </div>
                                        <div class="mb-4">
                                            <input type="password" class="form-control form-control-lg form-control-alt py-3" id="rppw"  placeholder="Nhập lại mật khẩu">
                                        </div>
                                        <hr>
                                        <center>Thông tin nhà trọ/KTX</center>
                                        <hr>
                                        <p>Chọn vị trí nhà trọ</p>
                                        <div class="mb-4">
                                            <input type="text" class="form-control form-control-lg form-control-alt py-3" id="tennt" name="tennt" placeholder="Tên nhà trọ">
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="example-select">Chọn phường</label>
                                            <select class="form-select" id="id_phuong" name="example-select">
                                                <option selected>Vui lòng chọn phường</option>
                                                <option value="1">Hiệp Thành</option>
                                                <option value="2">Phú Lợi</option>
                                                <option value="3">Phú Cường</option>
                                                <option value="4">Phú Hòa</option>
                                                <option value="5">Phú Thọ</option>
                                                <option value="6">Chánh Nghĩa</option>
                                                <option value="7">Định Hòa</option>
                                                <option value="8">Phú Mỹ</option>
                                                <option value="9">Hiệp An</option>
                                                <option value="10">Phú Tân</option>
                                                <option value="11">Hoàn Phú</option>
                                                <option value="12">Tương Bình Hiệp</option>
                                                <option value="13">Tân An</option>
                                                <option value="14">Chánh Mỹ</option>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <textarea type="text" class="form-control form-control-lg form-control-alt py-3" id="dcct" name="dcct" placeholder="Địa chỉ chi tiết"></textarea>
                                        </div>
                                        <p>Dùng để định vị trên app mobile.</p>
                                        <div class="row">
                                            <div style="margin-bottom:  20px" class="text-center">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#location-picker"  class="btn btn-lg btn-alt-info">
                                                    <i class="fa fa-fw fa-location me-1 opacity-50"></i> Chọn địa điểm nhà trọ
                                                </button>
                                            </div>

                                            <div  class="col-12 col-md-6">
                                                <div class="mb-4">
                                                    <label>Vĩ độ</label>
                                                    <input readonly type="text" class="form-control form-control-lg form-control-alt py-3" id="kinhdo" name="vido" />
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mb-4">
                                                    <label>Kinh độ</label>
                                                    <input readonly type="text" class="form-control form-control-lg form-control-alt py-3" id="vido" name="kinhdo" />
                                                </div>
                                            </div>
                                        </div>
                                        <p style="margin-top: 15px">Ảnh nhà trọ</p>
                                        <div class="mb-4">
                                            <input type="file" class="form-control form-control-lg form-control-alt py-3" id="anhnhatro"  name="anhnhatro" placeholder="Ảnh nhà trọ">
                                        </div>
                                        <p hidden>Ảnh giấy phép ĐKKD</p>
                                        <div hidden class="mb-4">
                                            <input disabled type="file" class="form-control form-control-lg form-control-alt py-3" id="anhgiayphep" name="anhgiayphep" placeholder="Ảnh giấy phép ĐKKD">
                                        </div>
                                    </form>
                                    <div class="mb-4">

                                        <div class="d-md-flex align-items-md-center justify-content-md-between">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="signup-terms" name="signup-terms">
                                                <label class="form-check-label" for="signup-terms">Tôi đồng ý với điều khoản & điều kiện của trường Đại Học Bình Dương</label>
                                            </div>
                                            <div class="py-2">
                                                <a class="fs-sm fw-medium" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#one-signup-terms">Xem điều khoản</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button onclick="reg()" class="btn btn-lg btn-alt-success">
                                            <i class="fa fa-fw fa-plus me-1 opacity-50"></i> Đăng ký
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <!-- END Sign Up Form -->
                        </div>
                    </div>
                    <!-- Extra Large Block Modal -->

                    <!-- END Extra Large Block Modal -->
                    <div class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start">
                        <p class="fw-medium text-black-50 py-2 mb-0">
                            <strong>BDU Student Support System 5.5</strong> &copy; <span data-toggle="year-copy"></span>
                        </p>

                    </div>
                </div>
                <!-- END Main Section -->
            </div>
            <!-- END Terms Modal -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</div>
<!-- END Page Container -->
<div class="modal" id="location-picker" tabindex="-1" role="dialog" aria-labelledby="modal-block-extra-large" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-transparent mb-0">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Chọn địa điểm nhà trọ</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div style="" class="block-content fs-sm">
                    <div id="map">
                        <div class="modal-body" id="map-canvas"></div>
                    </div>
                </div>
                <div class="block-content block-content-full text-end bg-body">
                    <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Chọn</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<!--
    OneUI JS

    Core libraries and functionality
    webpack is putting everything together at assets/_js/main/app.js
-->
<script src="assets/js/oneui.app.min.js"></script>

<!-- jQuery (required for jQuery Validation plugin) -->
<script src="assets/js/lib/jquery.min.js"></script>

<!-- Page JS Plugins -->
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script>
    var popup = L.popup();

    function onMapClick(e) {
        Swal.fire({
            icon: 'info',
            title: 'Xác nhận',
            confirmButtonText: "Xác nhận",
            cancelButtonText: "Chọn lại",
            html: 'Chọn địa điểm này làm vị trí nhà trọ của bạn?<br>' +
                'Vĩ độ: ' +
                e.latlng.lat + '<br>Kinh độ: ' + e.latlng.lng,
        }).then((result) => {
            if (result.isConfirmed) {
                $('#kinhdo').val(e.latlng.lat);
                $('#vido').val(e.latlng.lng);
                $('#location-picker').modal('toggle');
            }
        });

    }

    var map = L.map('map').setView([10.990233169382483, 106.66372773931532], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var marker = L.marker([10.990233169382483, 106.66372773931532]).addTo(map);

    let geoCoderOptions = {
        collapsed: false,
        geocoder: L.Control.Geocoder.nominatim({
            geocodingQueryParams: {
                // List the country codes here
                countrycodes: 'vn'
            }
        })
    }

    L.Control.geocoder(geoCoderOptions).addTo(map);

    map.on('click', onMapClick);
    $('#location-picker').on('show.bs.modal', function(){
        setTimeout(function() {
            map.invalidateSize();
        }, 10);
    });
    var img_data;
    function  getBase64(file) {
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function () {
            img_data = reader.result;

        };
    }
    $('#anhnhatro').on("change", function(){
        var file = document.querySelector('input[type="file"]').files[0];
        getBase64(file);
    });
    function reg() {
        var pw = $('#password').val();
        var rp = $('#rppw').val();
        if (pw != rp) {
            Swal.fire({
                icon: 'error',
                title: 'Lỗi...',
                text: 'Mật khẩu và nhập lại phải trùng lặp!',

            })
        }
        else {


            var dc = $('#dcct').val();

            var form_data = new FormData(document.querySelector('#data'));

            form_data.append('dcct', dc);
            form_data.append('image', img_data);
            form_data.append('id_phuong', $('#id_phuong').val());
            $.ajax({
                url : 'http://localhost:3001/api/cnt_register',
                type : 'POST',
                data : form_data,
                processData: false,  // tell jQuery not to process the data
                contentType: false,
                success : function(resp){
                    if (resp.error == true) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Lỗi...',
                            text: 'Số điện thoại đã tồn tại!',

                        })
                    }
                    else {
                        Swal.fire({
                            icon: 'success',
                            title: 'Thành công',
                            text: 'Đăng ký thành công! Hồ sơ của bạn đang trong trạng thái kiểm duyệt. Vui lòng chờ phản hồi từ hệ thống!',

                        });
                        window.location.href = "sign_in.php";
                    }

                },
                error: function (resp) {
                    console.log(resp)
                }
            });
        }



    }



</script>

</body>
</html>
