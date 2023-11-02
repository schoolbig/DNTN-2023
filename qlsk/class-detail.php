<?php
include 'shared/header.php';
include 'core/connector.php';

$id = $_GET['id'];

$get_class = $conn->query("SELECT * FROM lop WHERE MaLop = '$id'");

if ($get_class->num_rows > 0) {
    $class = $get_class->fetch_assoc();
    ?>

    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Lớp <?php echo $class['TenLop'] ?></h3>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs flex-row-reverse">
                            <div class="col-xxl-5" style="height: 450px">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <form id="class-info-form">

                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="class-name">Tên lớp</label>
                                                        <span class="form-note">Tên lớp sẽ xuất hiện trên trang web và ứng dụng.</span>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" hidden="" class="form-control" id="class-id" value="<?php echo $class['MaLop'] ?>" name="class-id">
                                                            <input type="text" class="form-control" id="class-name" required value="<?php echo $class['TenLop'] ?>" name="class-name">
                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="class-begin">Năm bắt đầu</label>
                                                        <span class="form-note">Năm lớp được tạo và bắt đầu học.</span>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">

                                                            <select id="class-begin" class="form-control" name="class-begin">
                                                                <?php
                                                                for ($year = (int)date('Y'); 2000 <= $year+1; $year--): ?>
                                                                    <option <?php echo $class['NamBatDau'] == $year ? 'selected' : ''  ?> value="<?=$year;?>"><?=$year;?></option>
                                                                <?php endfor; ?>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="class-desc">Mô tả</label>
                                                        <span class="form-note">Mô tả dành cho lớp.</span>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-control-wrap">
                                                        <textarea class="form-control form-control-sm no-resize"  required id="class-desc" name="class-desc"  placeholder="Mô tả lớp"><?php echo $class['MoTa'] ?></textarea>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="class_status">Trạng thái</label>
                                                        <span class="form-note">Lớp này sẽ xuất hiện khi thêm các sự kiện hoặc ngược lại.</span>
                                                    </div>
                                                </div><!-- .col -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <select id="class_status" name="class_status" class="form-control" >
                                                                <option <?php echo $class['TrangThai'] == 0 ? 'selected' : '' ?> value="0">Ngưng hoạt động</option>
                                                                <option <?php echo $class['TrangThai'] == 1 ? 'selected' : '' ?> value="1">Đang hoạt động</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <div class="form-group mt-2">
                                                        <button type="submit" class="btn btn-lg btn-primary">Cập nhật lớp</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form><!-- form -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-7">
                                <h6>Danh sách sinh viên thuộc lớp <?php echo $class['TenLop'] ?></h6>
                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <table id="student-list-table" class="datatable-init nk-tb-list nk-tb-ulist " data-export-title="Export" data-auto-responsive="false">
                                            <thead>
                                            <tr class="nk-tb-item nk-tb-head">
                                                <th class="nk-tb-col"><span class="sub-text">Mã sinh viên</span></th>
                                                <th class="nk-tb-col"><span class="sub-text">Họ và tên</span></th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Email</span></th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">GioiTinh</span></th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Trạng thái</span></th>
                                                <th class="nk-tb-col nk-tb-col-tools text-end">
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $get_students = $conn->query("SELECT
                                                                              nguoidung.MaNguoiDung,
                                                                              nguoidung.Ho,
                                                                                nguoidung.Ten,
                                                                              nguoidung.Email,
                                                                              nguoidung.TrangThai,
                                                                              nguoidung.GioiTinh,
                                                                              lop.MaLop
                                                                            FROM chitietsinhvien
                                                                              INNER JOIN lop
                                                                                ON chitietsinhvien.MaLop = lop.MaLop
                                                                              INNER JOIN nguoidung
                                                                                ON chitietsinhvien.MaNguoiDung = nguoidung.MaNguoiDung
                                                                                     WHERE lop.MaLop = '$id'");
                                            while ($student = $get_students->fetch_assoc()) {
                                                ?>
                                                <tr class="nk-tb-item">
                                                    <td class="nk-tb-col">
                                                        <span class="tb-sub"><?php echo $student['MaNguoiDung']; ?></span>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                <span class="tb-lead"><?php echo $student['Ho'] . ' ' . $student['Ten']; ?><span class="dot dot-success d-md-none ms-1"></span></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <span class="tb-sub"><?php echo $student['Email']; ?></span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <span class="tb-sub"><?php echo $student['GioiTinh'] == 0 ? 'Nữ' : 'Nam'; ?></span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <span class="tb-status text-<?php echo $student['TrangThai'] == 1 ? 'success' : 'danger' ?>"><?php echo $student['TrangThai'] == 1 ? 'Hoạt động' : 'Ngừng hoạt động'; ?></span>
                                                    </td>
                                                    <td class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                            <div class="drodown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li><a href="user-detail.php?id=<?php echo $student['MaNguoiDung'] ?>&type=student"><em class="icon ni ni-focus"></em><span>Xem chi tiết</span></a></li>
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

        $(document).ready(function() {

            $("#class-info-form").submit(function(event) {
                event.preventDefault();
                console.log("eqưq");
                $("#class-info-form").validate();            // <- INITIALIZES PLUGIN
                if ($("#class-info-form").valid()) {
                    event.preventDefault();
                    var formData = new FormData($('#class-info-form')[0]);
                    $.ajax({
                        type: 'POST',
                        url: 'core/functions/classes/update_class.php',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            response = JSON.parse(response);
                            if (response.error === false) {
                                Swal.fire(
                                    'Thành công!',
                                    'Đã cập nhật thông tin lớp!',
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
        });

    </script>

    <!-- content @e -->
<?php } else { ?>
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <?php  echo 'Lỗi! Lớp có mã ' . $id . ' không tồn tại!'; ?>
                </div>
            </div>
        </div>
    </div>
<?php } include 'shared/footer.php' ?>
