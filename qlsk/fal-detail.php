<?php
include 'shared/header.php';
include 'core/connector.php';

$id = $_GET['id'];

$get_fal = $conn->query("SELECT * FROM khoa WHERE MaKhoa = '$id'");

if ($get_fal->num_rows > 0) {
    $fal = $get_fal->fetch_assoc();
    ?>

    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Khoa <?php echo $fal['TenKhoa'] ?></h3>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs flex-row-reverse">
                            <div class="col-xxl-5" style="height: 550px">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <form enctype="multipart/form-data" id="fal-info-form">
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="addDescription">Ảnh đại diện khoa</label>
                                                        <span class="form-note"></span>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-control-wrap">
                                                        <img  id="preview" src="images/uploads/<?php echo $fal['HinhAnh'] ?>" style="width: 150px; height: 150px" />
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fal-name">Tên khoa</label>
                                                        <span class="form-note">Tên khoa sẽ xuất hiện trên trang web và ứng dụng.</span>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" hidden="" class="form-control" id="fal-id" value="<?php echo $fal['MaKhoa'] ?>" name="fal-id">
                                                            <input type="text" class="form-control" id="fal-name" required value="<?php echo $fal['TenKhoa'] ?>" name="fal-name">
                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="slug">Hình ảnh</label>
                                                        <span class="form-note">Hình ảnh đại diện cho khoa.</span>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="file" class="form-control" onchange="previewImage()" id="fal-image" accept="image/jpeg, image/png"  name="fal-image">
                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="addDescription">Mô tả</label>
                                                        <span class="form-note">Mô tả dành cho khoa.</span>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-control-wrap">
                                                        <textarea class="form-control form-control-sm no-resize"  required id="fal-desc" name="fal-desc"  placeholder="Mô tả khoa"><?php echo $fal['MoTa'] ?></textarea>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fal-name">Trạng thái</label>
                                                        <span class="form-note">Khoa này sẽ xuất hiện khi thêm các sự kiện hoặc ngược lại.</span>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <select id="fal_status" name="fal_status" class="form-control" >
                                                                <option <?php echo $fal['TrangThai'] == 0 ? 'selected' : '' ?> value="0">Ngưng hoạt động</option>
                                                                <option <?php echo $fal['TrangThai'] == 1 ? 'selected' : '' ?> value="1">Đang hoạt động</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <div class="form-group mt-2">
                                                        <button type="submit" class="btn btn-lg btn-primary">Cập nhật khoa</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form><!-- form -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-7">

                                <h6>Danh sách lớp thuộc khoa <?php echo $fal['TenKhoa'] ?></h6>
                                <button style="margin-bottom: 10px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDefault">Thêm lớp</button>
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
                                                <th class="nk-tb-col"><span class="sub-text">Tên lớp</span></th>
                                                <th class="nk-tb-col"><span class="sub-text">Năm bắt đầu</span></th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Trạng thái</span></th>
                                                <th class="nk-tb-col nk-tb-col-tools text-end">
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            include 'core/connector.php';
                                            $get_clss = $conn->query("SELECT * FROM lop");
                                            while ($row = $get_clss->fetch_assoc()) {


                                                ?>
                                                <tr class="nk-tb-item">
                                                    <td class="nk-tb-col nk-tb-col-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input" id="uid<?php echo $row['MaLop'] ?>">
                                                            <label class="custom-control-label" for="uid<?php echo $row['MaLop'] ?>"></label>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                <span class="tb-lead"><?php echo $row['TenLop'] ?><span class="dot dot-success d-md-none ms-1"></span></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                <span class="tb-lead"><?php echo $row['NamBatDau'] ?><span class="dot dot-success d-md-none ms-1"></span></span>
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
                                                                            <li><a href="class-detail.php?id=<?php echo $row['MaLop'] ?>"><em class="icon ni ni-focus"></em><span>Xem chi tiết</span></a></li>
                                                                            <li class="divider"></li>
                                                                            <li><a onclick="delete_class(<?php echo $row['MaLop'] ?>)"><em class="icon ni ni-delete"></em><span>Xóa</span></a></li>

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
                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
    <div class="modal fade" role="dialog" id="modalDefault">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Thêm lớp mới thuộc khoa <?php echo $fal['TenKhoa'] ?></h5>
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="className">Tên lớp</label>
                                <input required type="text" class="form-control form-control-lg" id="className">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="classStartYear">Năm bắt đầu</label>
                                <select required id="classStartYear" class="form-control" name="classStartYear">
                                    <?php
                                    for ($year = (int)date('Y'); 2000 <= $year+1; $year--): ?>
                                        <option value="<?=$year;?>"><?=$year;?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="classDescription">Mô tả</label>
                                <textarea required class="form-control form-control-lg" id="classDescription" ></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <a href="#" class="btn btn-lg btn-primary" onclick="addClass()">Thêm lớp</a>
                                </li>
                                <li>
                                    <a href="#" data-bs-dismiss="modal" class="link link-light">Hủy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->

    <script>
        console.log("3312");
        function previewImage() {
            var input = document.getElementById('fal-image');
            var preview = document.getElementById('preview');
            var file = input.files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                }

                reader.readAsDataURL(file);
            }
        }
        $("#fal-info-form").submit(function(event) {
            $("#fal-info-form").validate();            // <- INITIALIZES PLUGIN
            if ($("#fal-info-form").valid()) {
                event.preventDefault();
                var formData = new FormData($('#fal-info-form')[0]);
                $.ajax({
                    type: 'POST',
                    url: 'core/functions/fals/update_fal.php',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        response = JSON.parse(response);
                        if (response.error === false) {
                            Swal.fire(
                                'Thành công!',
                                'Đã cập nhật thông tin khoa!',
                                'success',

                            )

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
        function addClass() {
            var falID = $('#fal-id').val();
            var className = $('#className').val();
            var classStartYear = $('#classStartYear').val();
            var classDescription = $('#classDescription').val();
            $.ajax({
                type: 'POST',
                url: 'core/functions/classes/add_class.php',
                data: {
                    falID: falID,
                    className: className,
                    classStartYear: classStartYear,
                    classDescription: classDescription
                },
                success: function (response) {
                    response = JSON.parse(response);
                    if (response.error === false) {
                        Swal.fire(
                            'Thành công!',
                            'Lớp đã được thêm!',
                            'success'
                        );
                        window.location.reload();
                    } else {
                        Swal.fire(
                            'Lỗi!',
                            'Đã có lỗi xảy ra: ' + response.message,
                            'error'
                        );
                    }
                    // Close the modal
                    $('#addClassModal').modal('hide');
                },
                error: function (error) {
                    alert('An error occurred. Please try again.');
                }
            });
        }
        function delete_class(id) {
            Swal.fire({
                title: `Xác nhận xóa lớp có mã: ${id} ?`,
                text: 'Mọi thông tin liên quan tới lớp sẽ bị xóa hoàn toàn!',
                showCancelButton: true,
                confirmButtonText: 'Xác nhận',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        url : 'core/functions/classes/delete_class.php?id=' + id,
                        type : 'GET',
                        dataType: 'json',
                        success : function(data) {
                            if (data.error === false) {
                                Swal.fire({
                                    title: 'Thành công',
                                    text: 'Xóa lớp thành công!',
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
<?php } else { ?>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <?php  echo 'Lỗi! Khoa có mã ' . $id . ' không tồn tại!'; ?>
                </div>
            </div>
        </div>
    </div>
<?php } include 'shared/footer.php' ?>
