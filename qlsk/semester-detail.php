<?php
include 'shared/header.php';
include 'core/connector.php';

$id = $_GET['id'];

$get_semester = $conn->query("SELECT * FROM hocky WHERE MaHocKy = '$id'");

if ($get_semester->num_rows > 0) {
    $semester = $get_semester->fetch_assoc();
    ?>

    <!-- content @s -->
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Học kỳ <?php echo $semester['TenHocKy'] ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="row g-gs flex-row-reverse">
                            <div class="col-xxl-5">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <form id="semester-info-form">

                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="semester-name">Tên học kỳ</label>
                                                        <span class="form-note">Tên học kỳ sẽ xuất hiện trên trang web và ứng dụng.</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="semester-id" value="<?php echo $semester['MaHocKy'] ?>" name="semester-id" hidden>
                                                            <input type="text" class="form-control" id="semester-name" required value="<?php echo $semester['TenHocKy'] ?>" name="semester-name">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="semester-name">Năm học</label>
                                                        <span class="form-note">Học kỳ này thuộc về năm học.</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <select class="form-select js-select2" id="semester-year" name="semester-year" data-placeholder="Vui lòng chọn" required>

                                                                <?php
                                                                $year_id = $semester['MaNamHoc'];
                                                                $get_y = $conn->query('select * from namhoc');

                                                                while ($y = $get_y->fetch_assoc()) {
                                                                    ?>
                                                                    <option <?php echo $year_id == $y['MaNamHoc'] ? 'selected' : '' ?> value="<?php echo $y['MaNamHoc'] ?>"><?php echo $y['TenNamHoc'] ?></option>

                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="semester-start">Ngày bắt đầu</label>
                                                        <span class="form-note">Ngày học kỳ bắt đầu.</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="semester-start" required value="<?php echo $semester['NgayBatDau'] ?>" name="semester-start">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="semester-end">Ngày kết thúc</label>
                                                        <span class="form-note">Ngày học kỳ kết thúc.</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="semester-end" required value="<?php echo $semester['NgayKetThuc'] ?>" name="semester-end">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="semester-desc">Mô tả</label>
                                                        <span class="form-note">Mô tả về học kỳ.</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-control-wrap">
                                                        <textarea class="form-control form-control-sm no-resize" required id="semester-desc" name="semester-desc" placeholder="Mô tả học kỳ"><?php echo $semester['MoTa'] ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <div class="form-group mt-2">
                                                        <button type="submit" class="btn btn-lg btn-primary">Cập nhật học kỳ</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-7">
                                <h6>Danh sách sự kiện thuộc học kỳ <?php echo $semester['TenHocKy'] ?></h6>
                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <table id="class-list-table" class="datatable-init nk-tb-list nk-tb-ulist " data-export-title="Export" data-auto-responsive="false">
                                            <thead>
                                            <tr class="nk-tb-item nk-tb-head">
                                                <th class="nk-tb-col"><span class="sub-text">Mã sự kiện</span></th>
                                                <th class="nk-tb-col"><span class="sub-text">Tên sự kiện</span></th>
                                                <th class="nk-tb-col"><span class="sub-text">Địa điểm tổ chức</span></th>
                                                <th class="nk-tb-col"><span class="sub-text">Loại sự kiệm</span></th>
                                                <th class="nk-tb-col"><span class="sub-text">Trạng thái</span></th>

                                                <th class="nk-tb-col nk-tb-col-tools text-end">
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->

    <script>
        $(document).ready(function() {
            $("#semester-info-form").submit(function(event) {
                event.preventDefault();
                $("#semester-info-form").validate();
                if ($("#semester-info-form").valid()) {
                    event.preventDefault();
                    var formData = new FormData($('#semester-info-form')[0]);
                    $.ajax({
                        type: 'POST',
                        url: 'core/functions/semesters/update_semester.php',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            response = JSON.parse(response);
                            if (response.error === false) {
                                Swal.fire(
                                    'Thành công!',
                                    'Đã cập nhật thông tin học kỳ!',
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
                            alert('Đã có lỗi xảy ra. Vui lòng thử lại.');
                        }
                    });
                }
            });
        });
    </script>

    <!-- content @e -->
    <?php
} else { ?>
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <?php  echo 'Lỗi! Học kỳ có mã ' . $id . ' không tồn tại!'; ?>
                </div>
            </div>
        </div>
    </div>
<?php } include 'shared/footer.php' ?>