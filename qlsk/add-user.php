<?php include 'shared/header.php' ?>
    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">

                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Thêm người dùng</h4>
                                <div class="nk-block-des">
                                    <p>Bạn có thể chọn vai trò cho người dùng cần thêm trước bằng tùy chọn <code class="code-class">Vai trò</code> ở bên dưới, sau đó điền thông tin người dùng.</p>
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
                                                    <input onchange="update_preview()" type="file" class="form-control" id="image" accept="image/jpeg, image/png" required name="image">
                                                </div>
                                            </div><!-- .col -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <img style="width: 150px; height: 150px" src="" id="preview" />
                                                    </div>
                                                </div>
                                            </div><!-- col -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="lname">Họ</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="lname" name="lname" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fname">Tên</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="fname" name="fname" required>
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
                                                    <input type="text" class="form-control" required id="mail" name="mail">
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
                                                        <input type="text" class="form-control" id="phone" name="phone" required>
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
                                                                <input value="1" type="radio" class="custom-control-input" name="sex" id="sex-male" required>
                                                                <label class="custom-control-label" for="sex-male">Nam</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-radio custom-control-pro no-control">
                                                                <input value="0" type="radio" class="custom-control-input" name="sex" id="sex-female" required>
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
                                                    <input type="text" class="form-control" id="password" name="password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="add">Địa chỉ</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control form-control-sm" id="add" name="add" placeholder="Nhập địa chỉ người dùng" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="role">Vai trò</label>
                                                <div class="form-control-wrap ">
                                                    <select onchange="handleRoleChange()" class="form-select js-select2" id="role" name="role" data-placeholder="Vui lòng chọn" required>
                                                        <option value="1">Admin</option>
                                                        <option value="0">Sinh viên</option>
                                                        <option value="2">Giáo viên</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div style="display: none;" id="student_info" class="col-md-12">
                                            <div class="row" >
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="role">Khoa</label>
                                                        <div class="form-control-wrap ">
                                                            <select onchange="update_classroom()" class="form-select js-select2" id="fal" name="fal" data-placeholder="Vui lòng chọn" required>
                                                                <option >Vui lòng chọn</option>
                                                                <?php
                                                                include 'core/connector.php';
                                                                $get_fals = $conn->query('select * from khoa');

                                                                while ($fal = $get_fals->fetch_assoc()) {
                                                                ?>
                                                                    <option value="<?php echo $fal['MaKhoa'] ?>"><?php echo $fal['TenKhoa'] ?></option>

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

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Thêm người dùng</button>
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
        function handleRoleChange() {

            var roleSelect = document.getElementById('role');
            var studentInfoDiv = document.getElementById('student_info');
            var studentNameInput = document.getElementById('studentName');
            var studentClassInput = document.getElementById('studentClass');
            console.log(roleSelect.value === '0')
            if (roleSelect.value === '0') {
                // Nếu vai trò là sinh viên, hiển thị thông tin sinh viên
                studentInfoDiv.style.display = 'block';
                // studentNameInput.removeAttribute('disabled');
                // studentClassInput.removeAttribute('disabled');
            } else {
                // Nếu không phải sinh viên, ẩn thông tin sinh viên và vô hiệu hóa trường
                studentInfoDiv.style.display = 'none';
                // studentNameInput.setAttribute('disabled', 'disabled');
                // studentClassInput.setAttribute('disabled', 'disabled');
            }
        }
        $("#user-info-form").submit(function(event) {
            $("#user-info-form").validate();            // <- INITIALIZES PLUGIN
            if ($("#user-info-form").valid()) {
                event.preventDefault();
                var formData = new FormData($('#user-info-form')[0]);
                $.ajax({
                    type: 'POST',
                    url: 'core/functions/users/add_user.php',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        response = JSON.parse(response);
                        if (response.error === false) {
                            Swal.fire(
                                'Thành công!',
                                'Đã thêm người dùng mới!',
                                'success',

                            )
                            window.location = 'user-list.php'
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

        function delete_category(id) {
            Swal.fire({
                title: `Xác nhận xóa danh mục có mã: ${id} ?`,
                text: 'Thông tin danh mục và sự kiện trong danh mục sẽ bị xóa hoàn toàn!',
                showCancelButton: true,
                confirmButtonText: 'Xác nhận',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        url : 'core/functions/categories/delete_category.php?id=' + id,
                        type : 'GET',
                        dataType: 'json',
                        success : function(data) {
                            if (data.error === false) {
                                Swal.fire({
                                    title: 'Thành công',
                                    text: 'Xóa danh mục thành công!',
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