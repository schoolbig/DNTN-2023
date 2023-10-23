<?php include 'shared/header.php' ?>
    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Danh sách học kỳ</h3>
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
                                                <th class="nk-tb-col"><span class="sub-text">Tên học kỳ</span></th>
                                                <th class="nk-tb-col"><span class="sub-text">Thuộc năm học</span></th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Ngày bắt đầu - Ngày kết thúc</span></th>
                                                <th class="nk-tb-col nk-tb-col-tools text-end">
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            include 'core/connector.php';
                                            $get_sm = $conn->query("SELECT
                                                                          hocky.MaHocKy,
                                                                          hocky.TenHocKy,
                                                                          namhoc.TenNamHoc,
                                                                          hocky.NgayBatDau,
                                                                          hocky.NgayKetThuc
                                                                        FROM hocky
                                                                          INNER JOIN namhoc
                                                                            ON hocky.MaNamHoc = namhoc.MaNamHoc");
                                            while ($row = $get_sm->fetch_assoc()) {


                                                ?>
                                                <tr class="nk-tb-item">
                                                    <td class="nk-tb-col nk-tb-col-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input" id="uid<?php echo $row['MaHocKy'] ?>">
                                                            <label class="custom-control-label" for="uid<?php echo $row['MaHocKy'] ?>"></label>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                <span class="tb-lead"><?php echo $row['TenHocKy'] ?><span class="dot dot-success d-md-none ms-1"></span></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                <span class="tb-lead"><?php echo $row['TenNamHoc'] ?><span class="dot dot-success d-md-none ms-1"></span></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                <span class="tb-lead"><?php echo $row['NgayBatDau'] . ' - '  . $row['NgayKetThuc'] ?><span class="dot dot-success d-md-none ms-1"></span></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">

                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="category_detail.php?id=<?php echo $row['MaNamHoc'] ?>"><em class="icon ni ni-focus"></em><span>Xem chi tiết</span></a></li>
                                                                            <li class="divider"></li>
                                                                            <li><a onclick="delete_semester(<?php echo $row['MaNamHoc'] ?>)"><em class="icon ni ni-delete"></em><span>Xóa</span></a></li>

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
                                        <form id="semester-info-form">
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="s_name">Tên học kỳ</label>
                                                        <span class="form-note">Tên học kỳ sẽ xuất hiện trên trang web và ứng dụng.</span>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="s_name" required name="s_name">
                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div style="margin-top: 10px" class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="bg_date">Chọn năm học</label>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">

                                                            <select id="s_year" name="s_year" required class="form-control">

                                                                <?php
                                                                $get_years = $conn->query("SELECT * FROM namhoc");
                                                                while ($y = $get_years->fetch_assoc()) {
                                                                ?>
                                                                <option value="<?php echo $y['MaNamHoc'] ?>"><?php echo $y['TenNamHoc'] ?></option>
                                                                <?php } ?>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div style="margin-top: 10px" class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="bg_date">Ngày bắt đầu</label>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="bg_date" required name="bg_date">
                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div style="margin-top: 10px" class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="e_date">Ngày kết thúc</label>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="e_date" required name="e_date">
                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->


                                            <div style="margin-top: 10px" class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="s_desc">Mô tả</label>
                                                        <span class="form-note">Mô tả dành cho học kỳ.</span>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-control-wrap">
                                                        <textarea class="form-control form-control-sm no-resize"  required id="s_desc" name="s_desc"  ></textarea>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <div class="form-group mt-2">
                                                        <button type="submit" class="btn btn-lg btn-primary">Thêm học kỳ</button>
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
    <!-- content @e -->


    <script>
        // $(document).ready(function() {
        //     // Lắng nghe sự kiện mở modal
        //     $('#modalForm').on('show.bs.modal', function (event) {
        //         $('#btn_add').show();
        //         $('#cate-title').text("Thêm loại món ăn");
        //         $('#btn_update').hide();
        //         $('#cate-status').hide();
        //         $(this).find('input, textarea, select').val('');
        //     });
        // });
        // function view(id) {
        //     $.ajax({
        //         type: 'GET',
        //         url: 'core//' + id,
        //         dataType: "json",
        //         success: function (response) {
        //             console.log(response);
        //             if (response.error == false) {
        //                 $('#modalForm').modal('show');
        //                 $('#cate-title').text("Thông tin loại món ăn");
        //                 $('#btn_add').hide();
        //    //                 $('#btn_update').show();
        //    //                 $('#cate-status').show();
        //    //                 $('#cate-id').val(response.data.MaLoai);
        //                 $('#full-name').val(response.data.TenLoai);
        //                 $('#cate-desc').val(response.data.MoTa);
        //                 $('#cate-status-op').val(response.data.TrangThai);
        //             }
        //             else {
        //                 alert(response.message)
        //             }
        //
        //         },
        //         error: function (error) {
        //             alert('Đã có lỗi xảy ra. Vui lòng thử lại.'); // Hiển thị thông báo lỗi
        //         }
        //     });
        // }
        // function update_cate() {
        //     $("#cate-form").validate();            // <- INITIALIZES PLUGIN
        //     if ($("#cate-form").valid()) {
        //         event.preventDefault();
        //         var formData = new FormData($('#cate-form')[0]);
        //         var id = $('#cate-id').val();
        //         $.ajax({
        //             type: 'POST',
        //             url: '/update_cate_api/' + id,
        //             data: formData,
        //             contentType: false,
        //             processData: false,
        //             success: function (response) {
        //                 if (response.error == false) {
        //                     Swal.fire(
        //                         'Thành công!',
        //                         'Loại món ăn đã được cập nhật thành công!',
        //                         'success',
        //                     );
        //                     window.location = "categories"
        //
        //                 }
        //                 else {
        //                     Swal.fire(
        //                         'Thất bại!',
        //                         'Đã có lỗi xảy ra: ' + response.message,
        //                         'error'
        //                     )
        //                 }
        //             },
        //             error: function (error) {
        //                 alert('Đã có lỗi xảy ra. Vui lòng thử lại.'); // Hiển thị thông báo lỗi
        //             }
        //         });
        //     };
        // }
        $("#semester-info-form").submit(function(event) {
            $("#semester-info-form").validate();            // <- INITIALIZES PLUGIN
            if ($("#semester-info-form").valid()) {
                event.preventDefault();
                var formData = new FormData($('#semester-info-form')[0]);
                $.ajax({
                    type: 'POST',
                    url: 'core/functions/semesters/add_semester.php',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        response = JSON.parse(response);
                        if (response.error === false) {
                            Swal.fire(
                                'Thành công!',
                                'Đã thêm học kỳ mới!',
                                'success',

                            )
                            window.location = 'semesters.php'
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

        function delete_semester(id) {
            Swal.fire({
                title: `Xác nhận xóa học kỳ có mã: ${id} ?`,
                text: 'Thông tin sự kiện, lịch sử điểm danh và các thông tin liên quan trong học kỳ bị xóa hoàn toàn!',
                showCancelButton: true,
                confirmButtonText: 'Xác nhận',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        url : 'core/functions/semesters/delete_semester.php?id=' + id,
                        type : 'GET',
                        dataType: 'json',
                        success : function(data) {
                            if (data.error === false) {
                                Swal.fire({
                                    title: 'Thành công',
                                    text: 'Xóa học kỳ thành công!',
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



    </script>
    <!-- content @e -->
<?php include 'shared/footer.php' ?>