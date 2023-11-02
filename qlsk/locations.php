<?php include 'shared/header.php' ?>
    <style>
        #map { height: 500px; }
        #map1 { height: 350px; }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
          integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
            integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
            crossorigin=""></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Danh sách địa điểm</h3>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs flex-row-reverse">
                            <div class="col-xxl-7">
                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <table id="cate-list-table" class="datatable-init nk-tb-list nk-tb-ulist " data-export-title="Export" data-auto-responsive="false">
                                            <thead>
                                            <tr class="nk-tb-item nk-tb-head">
                                                <th class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="uid">
                                                        <label class="custom-control-label" for="uid"></label>
                                                    </div>
                                                </th>
                                                <th class="nk-tb-col"><span class="sub-text">Tên địa điểm</span></th>
                                                <th class="nk-tb-col"><span class="sub-text">Kinh độ</span></th>
                                                <th class="nk-tb-col"><span class="sub-text">Vĩ độ</span></th>
                                                <th class="nk-tb-col"><span class="sub-text">Trạng thái</span></th>
                                                <th class="nk-tb-col nk-tb-col-tools text-end">
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            include 'core/connector.php';
                                            $get_lct = $conn->query("select * from diadiem ");
                                            while ($row = $get_lct->fetch_assoc()) {


                                                ?>
                                                <tr class="nk-tb-item">
                                                    <td class="nk-tb-col nk-tb-col-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input" id="uid<?php echo $row['MaDiaDiem'] ?>">
                                                            <label class="custom-control-label" for="uid<?php echo $row['MaDiaDiem'] ?>"></label>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                <span class="tb-lead"><?php echo $row['TenDiaDiem'] ?><span class="dot dot-success d-md-none ms-1"></span></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                <span class="tb-lead"><?php echo $row['KinhDo'] ?><span class="dot dot-success d-md-none ms-1"></span></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                <span class="tb-lead"><?php echo $row['ViDo'] ?><span class="dot dot-success d-md-none ms-1"></span></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <span class="tb-status text-<?php echo $row['TrangThai'] == 1 ? 'success' : 'danger' ?>"><?php echo $row['TrangThai'] == 1 ? 'Hoạt động' : 'Không hoạt động' ?></span>
                                                    </td>
                                                    <td class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">

                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a onclick="showLocationDetails(
                                                                                <?php echo $row['MaDiaDiem']; ?>,
                                                                                        '<?php echo $row['TenDiaDiem']; ?>',
                                                                                        '<?php echo $row['KinhDo']; ?>',
                                                                                        '<?php echo $row['ViDo']; ?>',
                                                                                        '<?php echo $row['MoTa']; ?>',
                                                                                <?php echo $row['TrangThai']; ?>
                                                                                        )"><em class="icon ni ni-focus"></em><span>Xem chi tiết</span></a></li>
                                                                            <li class="divider"></li>
                                                                            <li><a onclick="delete_location(<?php echo $row['MaDiaDiem'] ?>)"><em class="icon ni ni-delete"></em><span>Xóa</span></a></li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr><!-- .nk-tb-item  -->
                                            <?php } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- .card-preview -->
                            </div><!-- .col -->
                            <div class="col-xxl-5" style="height: 500px">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <form id="location-info-form">
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="lct_name">Tên địa điểm</label>
                                                        <span class="form-note">Tên địa điểm sẽ xuất hiện trên trang web và ứng dụng.</span>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="lct_name" required name="lct_name">
                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="lct_name">Chọn tọa độ</label>
                                                        <span class="form-note">Tọa độ sẽ sử dụng để so sánh với vị trí của người dùng khi điểm danh.</span>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <button data-bs-toggle="modal" data-bs-target="#modalDefault" type="button"  class="btn btn-info">Chọn địa điểm</button>
                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div style="margin-top: 10px" class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="lct_long">Kinh độ</label>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" readonly class="form-control" id="lct_long" required name="lct_long">
                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div style="margin-top: 10px" class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="lct_latt">Vĩ độ</label>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input readonly type="text" class="form-control" id="lct_latt" required name="lct_latt">
                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->


                                            <div style="margin-top: 10px" class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="lct_desc">Mô tả</label>
                                                        <span class="form-note">Mô tả dành cho địa điểm.</span>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-control-wrap">
                                                        <textarea class="form-control form-control-sm no-resize"  required id="lct_desc" name="lct_desc"  ></textarea>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <div class="form-group mt-2">
                                                        <button type="submit" class="btn btn-lg btn-primary">Thêm địa điểm</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form><!-- form -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Trigger Code -->


    <!-- Modal Content Code -->
    <div class="modal fade" tabindex="-1" id="modalDefault">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div style="" class="block-content fs-sm">
                    <div id="map">
                        <div class="modal-body" id="map-canvas"></div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">Modal Footer Text</span>
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
    <div class="modal fade" role="dialog" id="modalLocationDetails">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Chi tiết địa điểm</h5>
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="locationName">Tên địa điểm</label>
                                <input  type="text" class="form-control form-control-lg" hidden id="locationID">
                                <input  type="text" class="form-control form-control-lg" id="locationName">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="locationStatus">Trạng thái</label>
                                <select id="locationStatus" class="form-control">
                                    <option value="1">Hoạt động</option>
                                    <option value="0">Ngưng hoạt động</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div id="map1">
                                <div class="modal-body" id="map-canvas1"></div>
                            </div>
                        </div><!-- col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="longitude">Kinh độ</label>
                                <input readonly type="text" class="form-control form-control-lg" id="locationLongitude">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="latitude">Vĩ độ</label>
                                <input readonly type="text" class="form-control form-control-lg" id="locationLatitude">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="locationDesc">Mô tả</label>
                                <textarea  class="form-control form-control-lg" id="locationDesc"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <a href="#" class="btn btn-lg btn-primary" onclick="updateLocation()">Cập nhật địa điểm</a>
                                </li>
                                <li>
                                    <a href="#" data-bs-dismiss="modal" class="btn btn-lg btn-primary">Đóng</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <script>
        function showLocationDetails(id, name, longitude, latitude, desc, status) {
            $('#locationID').val(id);
            $('#locationName').val(name);
            $('#locationLongitude').val(longitude);
            $('#locationLatitude').val(latitude);
            $('#locationStatus').val(status);
            $('#locationDesc').val(desc);

            $('#modalLocationDetails').modal('show');
        }
        function updateLocation() {
            var id = $('#locationID').val();
            var name = $('#locationName').val();
            var status = $('#locationStatus').val();
            var longitude = $('#locationLongitude').val();
            var latitude = $('#locationLatitude').val();
            var description = $('#locationDesc').val();

            // AJAX request to update location details
            $.ajax({
                url: 'core/functions/locations/update_location.php',
                type: 'POST',
                data: {
                    id: id,
                    name: name,
                    status: status,
                    longitude: longitude,
                    latitude: latitude,
                    description: description
                },
                success: function(response) {
                    response = JSON.parse(response);
                    if (response.error === false) {
                        Swal.fire(
                            'Thành công!',
                            'Cập nhật địa điểm thành công!',
                            'success',

                        )
                        window.location.reload();

                    }
                    else {
                        Swal.fire(
                            'Thất bại!',
                            'Đã có lỗi xảy ra: ' + response.message,
                            'error'
                        )
                    }
                },
                error: function(error) {
                    // Handle the error
                    console.error(error);
                }
            });
        }
        $("#location-info-form").submit(function(event) {
            $("#location-info-form").validate();            // <- INITIALIZES PLUGIN
            if ($("#location-info-form").valid()) {
                event.preventDefault();
                var formData = new FormData($('#location-info-form')[0]);
                $.ajax({
                    type: 'POST',
                    url: 'core/functions/locations/add_location.php',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        response = JSON.parse(response);
                        if (response.error === false) {
                            Swal.fire(
                                'Thành công!',
                                'Đã thêm địa điểm mới!',
                                'success',

                            )
                            window.location = 'locations.php'
                            // $("#cate-info-form").trigger("reset");
                            // $("#cate-list-table").load(location.href + " #cate-list-table");
                        }
                        else {
                            Swal.fire(
                                'Thất bại!',
                                'Đã có lỗi xảy ra: ' + response.message,
                                'error'
                            )
                        }
                    },
                    error: function (error) {
                        alert('Đã có lỗi xảy ra. Vui lòng thử lại.'); // Hiển thị thông báo lỗi
                    }
                });
            }
        });

        function delete_location(id) {
            Swal.fire({
                title: `Xác nhận xóa địa điểm có mã: ${id} ?`,
                text: 'Thông tin sự kiện, lịch sử điểm danh và các thông tin liên quan trong địa điểm bị xóa hoàn toàn!',
                showCancelButton: true,
                confirmButtonText: 'Xác nhận',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        url : 'core/functions/locations/delete_location.php?id=' + id,
                        type : 'GET',
                        dataType: 'json',
                        success : function(data) {
                            if (data.error === false) {
                                Swal.fire({
                                    title: 'Thành công',
                                    text: 'Xóa địa điểm thành công!',
                                    icon: 'success',
                                    confirmButtonText: 'Đóng'
                                }).then(function (e) {
                                    location.reload();
                                })
                                setTimeout(function() {
                                    location.reload();
                                }, 2000);
                            }
                            else {
                                Swal.fire({
                                    title: 'Error!',
                                    text: data.error,
                                    icon: 'error',
                                    confirmButtonText: 'Đóng'
                                })
                            }
                        },
                        error : function(request,error)
                        {
                            alert("Request: "+JSON.stringify(request));
                        }
                    });
                } else if (result.isDenied) {
                    Swal.fire('Bạn đã hủy xóa', '', 'info')
                }
            })}

        var popup = L.popup();

        function onMapClick(e) {
            Swal.fire({
                icon: 'info',
                title: 'Xác nhận',
                confirmButtonText: "Xác nhận",
                cancelButtonText: "Chọn lại",
                html: 'Xác nhận vị trí của bạn<br>' +
                    'Vĩ độ: ' +
                    e.latlng.lat + '<br>Kinh độ: ' + e.latlng.lng,
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#lct_latt').val(e.latlng.lat);
                    $('#lct_long').val(e.latlng.lng);
                    $('#modalDefault').modal('toggle');
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


        var popup1 = L.popup();

        function onMapClick1(e) {
            Swal.fire({
                icon: 'info',
                title: 'Xác nhận',
                confirmButtonText: "Xác nhận",
                cancelButtonText: "Chọn lại",
                html: 'Xác nhận chọn lại vị trí của bạn<br>' +
                    'Vĩ độ: ' +
                    e.latlng.lat + '<br>Kinh độ: ' + e.latlng.lng,
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#locationLatitude').val(e.latlng.lat);
                    $('#locationLongitude').val(e.latlng.lng);

                }
            });

        }

        var map1 = L.map('map1').setView([10.990233169382483, 106.66372773931532], 13);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map1);

        var marker1 = L.marker([10.990233169382483, 106.66372773931532]).addTo(map1);

        let geoCoderOptions1 = {
            collapsed: false,
            geocoder: L.Control.Geocoder.nominatim({
                geocodingQueryParams: {
                    // List the country codes here
                    countrycodes: 'vn'
                }
            })
        }

        L.Control.geocoder(geoCoderOptions1).addTo(map1);

        map1.on('click', onMapClick1);


    </script>
    <!-- content @e -->
<?php include 'shared/footer.php' ?>