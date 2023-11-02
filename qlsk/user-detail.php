<?php include 'shared/header.php';
include 'core/connector.php';
$id = $_GET['id'];
$type = $_GET['type'];
$get_user = $conn->query("SELECT * FROM nguoidung WHERE MaNguoiDung = '$id'");

if ($get_user->num_rows > 0) {
    $user = $get_user->fetch_assoc();
?>
    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">

                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Chi tiết <?php echo $user['VaiTro'] == 0 ? 'Sinh viên' : ($user['VaiTro'] == 1 ? 'Admin' : 'Giáo viên') ?></h4>
                                <div class="nk-block-des">
                                </div>
                            </div>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <form id="user-info-form" name="user-info-form" class="form-validate">
                                    <div class="row g-gs">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="slug">Ảnh đại diện</label>
                                                <input  onchange="update_preview()" type="file" class="form-control" id="image" accept="image/jpeg, image/png" name="image">
                                            </div>
                                        </div><!-- .col -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <img style="width: 150px; height: 150px" src="images/uploads/<?php echo $user['AnhDaiDien'] ?>" id="preview" />
                                                </div>
                                            </div>
                                        </div><!-- col -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="lname">Họ</label>
                                                <div class="form-control-wrap">
                                                    <input hidden value="<?php echo $user['MaNguoiDung'] ?>" type="text" class="form-control" id="id" name="id" >
                                                    <input hidden value="<?php echo $type ?>" type="text" class="form-control" id="type" name="type" >
                                                    <input value="<?php echo $user['Ho'] ?>" type="text" class="form-control" id="lname" name="lname" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fname">Tên</label>
                                                <div class="form-control-wrap">
                                                    <input value="<?php echo $user['Ten'] ?>"  type="text" class="form-control" id="fname" name="fname" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="mail">Địa chỉ email</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon ni ni-mail"></em>
                                                    </div>
                                                    <input readonly value="<?php echo $user['Email'] ?>"  type="text" class="form-control" required id="mail" name="mail">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="phone">Số điện thoại</label>
                                                <div class="form-control-wrap">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="fv-phone">+84</span>
                                                        </div>
                                                        <input value="<?php echo $user['SoDienThoai'] ?>"  type="text" class="form-control" id="phone" name="phone" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="sex">Giới tính</label>
                                                <div class="form-control-wrap">
                                                    <ul class="custom-control-group">
                                                        <li>
                                                            <div class="custom-control custom-radio custom-control-pro no-control">
                                                                <input <?php echo $user['GioiTinh'] == 1 ? 'checked' : '' ?> value="1" type="radio" class="custom-control-input" name="sex" id="sex-male" required>
                                                                <label class="custom-control-label" for="sex-male">Nam</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-radio custom-control-pro no-control">
                                                                <input <?php echo $user['GioiTinh'] == 0 ? 'checked' : '' ?> value="0" type="radio" class="custom-control-input" name="sex" id="sex-female" required>
                                                                <label class="custom-control-label" for="sex-female">Nữ</label>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="password">Mật khẩu</label>
                                                <div class="form-control-wrap">
                                                    <input value="<?php echo $user['MatKhau'] ?>" type="text" class="form-control" id="password" name="password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="add">Địa chỉ</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control form-control-sm" id="add" name="add" placeholder="Nhập địa chỉ người dùng" required><?php echo $user['DiaChi'] ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="status">Trạng thái</label>
                                                <div class="form-control-wrap ">
                                                    <select  class="form-select js-select2" id="status" name="status" data-placeholder="Vui lòng chọn" required>
                                                        <option <?php echo $user['TrangThai'] == 1 ? 'selected' : '' ?> value="1">Đang hoạt động</option>
                                                        <option <?php echo $user['TrangThai'] == 0 ? 'selected' : '' ?> value="0">Ngưng hoạt động</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <?php

                                         if ($user['VaiTro'] == 0) {
                                             $student_detail = $conn->query("select * from chitietsinhvien where MaNguoiDung = '$id'")->fetch_assoc();
                                             $class_id = $student_detail['MaLop'];
                                             $class_detail = $conn->query("SELECT * FROM lop WHERE MaLop = '$class_id'")->fetch_assoc();
                                        ?>
                                             <div  id="student_info" class="col-md-12">
                                                 <div class="row" >
                                                     <div class="col-md-6">
                                                         <div class="form-group">
                                                             <label class="form-label" for="role">Khoa</label>
                                                             <div class="form-control-wrap ">
                                                                 <select onchange="update_classroom()" class="form-select js-select2" id="fal" name="fal" data-placeholder="Vui lòng chọn" required>
                                                                     <option >Vui lòng chọn</option>
                                                                     <?php
                                                                     $fal_id = $class_detail['MaKhoa'];
                                                                     $get_fals = $conn->query('select * from khoa');

                                                                     while ($fal = $get_fals->fetch_assoc()) {
                                                                         ?>
                                                                         <option <?php echo $fal_id == $fal['MaKhoa'] ? 'selected' : '' ?> value="<?php echo $fal['MaKhoa'] ?>"><?php echo $fal['TenKhoa'] ?></option>

                                                                     <?php } ?>
                                                                 </select>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="col-md-6">
                                                         <div class="form-group">
                                                             <label class="form-label" for="role">Lớp</label>
                                                             <div class="form-control-wrap ">
                                                                 <select  class="form-select js-select2" id="classroom" name="classroom" data-placeholder="Vui lòng chọn" required>
                                                                     <?php

                                                                     $get_clss = $conn->query("select * from lop where MaKhoa = '$fal_id' ");

                                                                     while ($cl = $get_clss->fetch_assoc()) {
                                                                         ?>
                                                                         <option <?php echo $class_id == $cl['MaLop'] ? 'selected' : '' ?> value="<?php echo $cl['MaLop'] ?>"><?php echo $cl['TenLop'] ?></option>

                                                                     <?php } ?>
                                                                 </select>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>

                                             </div>
                                        <?php
                                        } else {
                                        ?>
                                             <div class="col-md-6">
                                                 <div class="form-group">
                                                     <label class="form-label" for="role">Vai trò</label>
                                                     <div class="form-control-wrap ">
                                                         <select class="form-select js-select2" id="role" name="role" data-placeholder="Vui lòng chọn" required>
                                                             <option <?php echo $user['VaiTro'] == 1 ? 'selected' : '' ?> value="1">Admin</option>
                                                             <option <?php echo $user['VaiTro'] == 2 ? 'selected' : '' ?> value="2">Giáo viên</option>

                                                         </select>
                                                     </div>
                                                 </div>
                                             </div>
                                        <?php } ?>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Cập nhật người dùng</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- .nk-block -->

                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->


    <script>
        function update_classroom() {
            var falSelect = document.getElementById('fal');
            var clSelect = document.getElementById('classroom');
            $.ajax({
                type: 'GET',
                url: 'core/functions/fals/get_classroom_by_fal_id.php?id=' + falSelect.value,

                contentType: false,
                processData: false,
                dataType: 'json',
                success: function (data) {
                    $('#classroom').empty();
                    if(data.length === 0) {
                        alert('Khoa bạn chọn hiện không có lớp nào. Vui lòng vào phần quản lý khoa thêm lớp hoặc chọn khoa khác!')
                        return;
                    }
                    $.each(data, function (index, item) {
                        $('#classroom').append($('<option>', {
                            value: item.MaLop,
                            text: item.TenLop
                        }));
                    });
                },
                error: function (error) {
                    alert('Đã có lỗi xảy ra. Vui lòng thử lại.'); // Hiển thị thông báo lỗi
                }
            });
        }
        function update_preview() {
            var input = document.getElementById('image');
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

        $("#user-info-form").submit(function(event) {
            $("#user-info-form").validate();            // <- INITIALIZES PLUGIN
            if ($("#user-info-form").valid()) {
                event.preventDefault();
                var formData = new FormData($('#user-info-form')[0]);
                $.ajax({
                    type: 'POST',
                    url: 'core/functions/users/update_user.php',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        response = JSON.parse(response);
                        if (response.error === false) {
                            Swal.fire(
                                'Thành công!',
                                'Cập nhật người dùng thành công!',
                                'success',

                            )

                            // $("#user-info-form").trigger("reset");
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





    </script>
    <!-- content @e -->
<?php }
else {
    ?>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <?php  echo 'Lỗi! Người dùng có mã ' . $id . ' không tồn tại!'; ?>

                </div>
            </div>
        </div>
    </div>
<?php } include 'shared/footer.php' ?>