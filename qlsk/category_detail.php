<?php include 'shared/header.php';
include 'core/connector.php';
$id = $_GET['cate_id'];

$get_cate = $conn->query("SELECT * FROM loaisukien WHERE MaLoai = '$id'");

if ($get_cate->num_rows > 0) {
    $cate = $get_cate->fetch_assoc();
?>
    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title"><?php echo $cate['TenLoai']  ?></h3>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs flex-row-reverse">

                            <div class="col-xxl-5" style="height: 550px">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <form enctype="multipart/form-data" id="cate-info-form">
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="addDescription">Ảnh đại diện danh mục</label>
                                                        <span class="form-note">.</span>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-control-wrap">
                                                       <img  id="preview" src="images/uploads/<?php echo $cate['HinhAnh'] ?>" style="width: 150px; height: 150px" />
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="cate-name">Tên danh mục</label>
                                                        <span class="form-note">Tên danh mục sẽ xuất hiện trên trang web và ứng dụng.</span>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" hidden="" class="form-control" id="cate-id" value="<?php echo $cate['MaLoai'] ?>" name="cate-id">
                                                            <input type="text" class="form-control" id="cate-name" required value="<?php echo $cate['TenLoai'] ?>" name="cate-name">
                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="slug">Hình ảnh</label>
                                                        <span class="form-note">Hình ảnh đại diện cho danh mục.</span>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="file" class="form-control" onchange="previewImage()" id="cate-image" accept="image/jpeg, image/png"  name="cate-image">
                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->

                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="addDescription">Mô tả</label>
                                                        <span class="form-note">Mô tả dành cho danh mục.</span>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-control-wrap">
                                                        <textarea class="form-control form-control-sm no-resize"  required id="cate-desc" name="cate-desc"  placeholder="Mô tả danh mục sự kiện"><?php echo $cate['MoTa'] ?></textarea>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="cate-name">Trạng thái</label>
                                                        <span class="form-note">Loại danh mục này sẽ xuất hiện khi thêm các sự kiện hoặc ngược lại.</span>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <select id="cate_status" name="cate_status" class="form-control" >
                                                                <option <?php echo $cate['TrangThai'] == 0 ? 'selected' : '' ?> value="0">Ngưng hoạt động</option>
                                                                <option <?php echo $cate['TrangThai'] == 1 ? 'selected' : '' ?> value="1">Đang hoạt động</option>

                                                            </select>

                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <div class="form-group mt-2">
                                                        <button type="submit" class="btn btn-lg btn-primary">Cập nhật danh mục</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form><!-- form -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                            </div><!-- .col -->

                            <div class="col-xxl-7">
                                <h6>Danh sách sự kiện thuộc danh mục <?php echo $cate['TenLoai'] ?></h6>
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
                                                <th class="nk-tb-col"><span class="sub-text">Tên sự kiện</span></th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Trạng thái</span></th>
                                                <th class="nk-tb-col nk-tb-col-tools text-end">
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            include 'core/connector.php';
                                            $get_cates = $conn->query("SELECT * FROM loaisukien");
                                            while ($row = $get_cates->fetch_assoc()) {


                                                ?>
                                                <tr class="nk-tb-item">
                                                    <td class="nk-tb-col nk-tb-col-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input" id="uid<?php echo $row['MaLoai'] ?>">
                                                            <label class="custom-control-label" for="uid<?php echo $row['MaLoai'] ?>"></label>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                <span class="tb-lead"><?php echo $row['TenLoai'] ?><span class="dot dot-success d-md-none ms-1"></span></span>
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
                                                                            <li><a href="category_detail.php?id=<?php echo $row['MaLoai'] ?>"><em class="icon ni ni-focus"></em><span>Xem chi tiết</span></a></li>
                                                                            <li class="divider"></li>
                                                                            <li><a onclick="delete_category(<?php echo $row['MaLoai'] ?>)"><em class="icon ni ni-delete"></em><span>Xóa</span></a></li>

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


    <script>
        function previewImage() {
            var input = document.getElementById('cate-image');
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
        $("#cate-info-form").submit(function(event) {
            $("#cate-info-form").validate();            // <- INITIALIZES PLUGIN
            if ($("#cate-info-form").valid()) {
                event.preventDefault();
                var formData = new FormData($('#cate-info-form')[0]);
                $.ajax({
                    type: 'POST',
                    url: 'core/functions/categories/update_category.php',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        response = JSON.parse(response);
                        if (response.error === false) {
                            Swal.fire(
                                'Thành công!',
                                'Đã cập nhật danh mục!',
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
<?php }
else {
    ?>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <?php  echo 'Lỗi! Danh mục có mã ' . $id . ' không tồn tại!'; ?>

                </div>
            </div>
        </div>
    </div>
<?php } include 'shared/footer.php' ?>