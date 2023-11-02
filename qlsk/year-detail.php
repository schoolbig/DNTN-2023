<?php
include 'shared/header.php';
include 'core/connector.php';

$id = $_GET['id'];

$get_year = $conn->query("SELECT * FROM namhoc WHERE MaNamHoc = '$id'");

if ($get_year->num_rows > 0) {
    $year = $get_year->fetch_assoc();
    ?>

    <!-- content @s -->
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Năm học <?php echo $year['TenNamHoc'] ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="row g-gs flex-row-reverse">
                            <div class="col-xxl-5">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <form id="year-info-form">

                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="year-name">Tên năm học</label>
                                                        <span class="form-note">Tên năm học sẽ xuất hiện trên trang web và ứng dụng.</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" hidden="" class="form-control" id="year-id" value="<?php echo $year['MaNamHoc'] ?>" name="year-id">
                                                            <input type="text" class="form-control" id="year-name" required value="<?php echo $year['TenNamHoc'] ?>" name="year-name">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="year-start">Ngày bắt đầu</label>
                                                        <span class="form-note">Ngày năm học bắt đầu.</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="year-start" required value="<?php echo $year['NgayBatDau'] ?>" name="year-start">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="year-end">Ngày kết thúc</label>
                                                        <span class="form-note">Ngày năm học kết thúc.</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="year-end" required value="<?php echo $year['NgayKetThuc'] ?>" name="year-end">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="year-desc">Mô tả</label>
                                                        <span class="form-note">Mô tả về năm học.</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-control-wrap">
                                                        <textarea class="form-control form-control-sm no-resize" required id="year-desc" name="year-desc" placeholder="Mô tả năm học"><?php echo $year['MoTa'] ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <div class="form-group mt-2">
                                                        <button type="submit" class="btn btn-lg btn-primary">Cập nhật năm học</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-7">
                                <h6>Danh sách học kỳ thuộc năm học <?php echo $year['TenNamHoc'] ?></h6>
                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <table id="class-list-table" class="datatable-init nk-tb-list nk-tb-ulist " data-export-title="Export" data-auto-responsive="false">
                                            <thead>
                                            <tr class="nk-tb-item nk-tb-head">
                                                <th class="nk-tb-col"><span class="sub-text">Mã học kỳ</span></th>
                                                <th class="nk-tb-col"><span class="sub-text">Tên học kỳ</span></th>
                                                <th class="nk-tb-col"><span class="sub-text">Ngày bắt đầu</span></th>
                                                <th class="nk-tb-col"><span class="sub-text">Ngày kết thúc</span></th>

                                                <th class="nk-tb-col nk-tb-col-tools text-end">
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $get_s = $conn->query("SELECT * FROM hocky WHERE MaNamHoc = '$id'");
                                            while ($s = $get_s->fetch_assoc()) {
                                                ?>
                                                <tr class="nk-tb-item">
                                                    <td class="nk-tb-col">
                                                        <span class="tb-sub"><?php echo $s['MaHocKy']; ?></span>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                <span class="tb-lead"><?php echo $s['TenHocKy']; ?><span class="dot dot-success d-md-none ms-1"></span></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                <span class="tb-lead"><?php echo $s['NgayBatDau'] ?><span class="dot dot-success d-md-none ms-1"></span></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                <span class="tb-lead"><?php echo $s['NgayKetThuc'] ?><span class="dot dot-success d-md-none ms-1"></span></span>
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
                                                                            <li><a href="semester-detail.php?id=<?php echo $s['MaHocKy'] ?>"><em class="icon ni ni-focus"></em><span>Xem chi tiết</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            <?php } ?>
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
            $("#year-info-form").submit(function(event) {
                event.preventDefault();
                $("#year-info-form").validate();
                if ($("#year-info-form").valid()) {
                    event.preventDefault();
                    var formData = new FormData($('#year-info-form')[0]);
                    $.ajax({
                        type: 'POST',
                        url: 'core/functions/years/update_year.php',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            response = JSON.parse(response);
                            if (response.error === false) {
                                Swal.fire(
                                    'Thành công!',
                                    'Đã cập nhật thông tin năm học!',
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
                    <?php  echo 'Lỗi! Năm học có mã ' . $id . ' không tồn tại!'; ?>
                </div>
            </div>
        </div>
    </div>
<?php } include 'shared/footer.php' ?>