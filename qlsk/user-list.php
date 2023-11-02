<?php include 'shared/header.php';
include 'core/connector.php';

?>
    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href="index.php"><em class="icon ni ni-arrow-left"></em><span>Trang chủ</span></a></div>
                                <h2 class="nk-block-title fw-normal">Quản lý người dùng</h2>

                            </div>
                        </div><!-- .nk-block-head -->

                        <div class="nk-block nk-block-lg">
                            <h5>Danh sách sinh viên</h5>
                            <div class="card card-bordered card-preview">
                                <div class="card-inner">
                                    <table class="datatable-init  nk-tb-list  " data-export-title="Export" data-auto-responsive="false">
                                        <thead>
                                        <tr class="nk-tb-item nk-tb-head">
                                            <th class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid">
                                                    <label class="custom-control-label" for="uid"></label>
                                                </div>
                                            </th>
                                            <th class="nk-tb-col"><span class="sub-text">Họ và tên</span></th>
                                            <th class="nk-tb-col"><span class="sub-text">Khoa</span></th>
                                            <th class="nk-tb-col"><span class="sub-text">Lớp</span></th>
                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Trạng thái</span></th>
                                            <th class="nk-tb-col nk-tb-col-tools text-end">
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $get_student_list = $conn->query('
                                            SELECT
                                              nguoidung.Ten,
                                              nguoidung.MaNguoiDung,
                                              nguoidung.Ho,
                                              nguoidung.Email,
                                              nguoidung.VaiTro,
                                              nguoidung.TrangThai,
                                              lop.TenLop,
                                              khoa.TenKhoa
                                            FROM chitietsinhvien
                                              INNER JOIN lop
                                                ON chitietsinhvien.MaLop = lop.MaLop
                                              INNER JOIN khoa
                                                ON lop.MaKhoa = khoa.MaKhoa
                                              INNER JOIN nguoidung
                                                ON chitietsinhvien.MaNguoiDung = nguoidung.MaNguoiDung');
                                            while ($row = $get_student_list->fetch_assoc()) {
                                        ?>
                                                <tr class="nk-tb-item">
                                                    <td class="nk-tb-col nk-tb-col-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input" id="uid1">
                                                            <label class="custom-control-label" for="uid1"></label>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                                <span><?php echo $row['Ho'][0] . ' ' . $row['Ten'][0] ?></span>
                                                            </div>
                                                            <div class="user-info">
                                                                <span class="tb-lead"><?php echo $row['Ho'] . ' ' . $row['Ten']   ?> <span class="dot dot-success d-md-none ms-1"></span></span>
                                                                <span><?php echo $row['Email'] ?></span>
                                                            </div>
                                                        </div>
                                                    </td>


                                                    <td class="nk-tb-col tb-col-md">
                                                        <span><?php echo $row['TenKhoa'] ?></span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <span><?php echo $row['TenLop'] ?></span>
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
                                                                            <li><a href="user-detail.php?type=student&id=<?php echo $row['MaNguoiDung'] ?>"><em class="icon ni ni-eye"></em><span>Xem chi tiết</span></a></li>
                                                                            <li class="divider"></li>

                                                                            <li><a onclick="del(<?php echo $row['MaNguoiDung'] ?>, 0)"><em class="icon ni ni-na"></em><span>Xóa</span></a></li>

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
                        </div> <!-- nk-block -->

                        <div class="nk-block nk-block-lg">
                            <h5>Danh sách cán bộ/giáo viên</h5>
                            <div class="card card-bordered card-preview">
                                <div class="card-inner">
                                    <table class="datatable-init  nk-tb-list  " data-export-title="Export" data-auto-responsive="false">
                                        <thead>
                                        <tr class="nk-tb-item nk-tb-head">
                                            <th class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid">
                                                    <label class="custom-control-label" for="uid"></label>
                                                </div>
                                            </th>
                                            <th class="nk-tb-col"><span class="sub-text">Họ và tên</span></th>
                                            <th class="nk-tb-col"><span class="sub-text">Vai trò</span></th>
                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Trạng thái</span></th>
                                            <th class="nk-tb-col nk-tb-col-tools text-end">
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $get_teacher_list = $conn->query('
                                            SELECT
                                              nguoidung.Ten,
                                              nguoidung.MaNguoiDung,
                                              nguoidung.Ho,
                                              nguoidung.Email,
                                              nguoidung.VaiTro,
                                              nguoidung.TrangThai
                                             
                                            FROM nguoidung
                                            WHERE VaiTro = 1 or VaiTro = 2
                                            ');
                                        while ($tc = $get_teacher_list->fetch_assoc()) {
                                            ?>
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="uid1">
                                                        <label class="custom-control-label" for="uid1"></label>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <div class="user-card">
                                                        <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                            <span><?php echo $tc['Ho'][0] . ' ' . $tc['Ten'][0] ?></span>
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="tb-lead"><?php echo $tc['Ho'] . ' ' . $tc['Ten']   ?> <span class="dot dot-success d-md-none ms-1"></span></span>
                                                            <span><?php echo $tc['Email'] ?></span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="nk-tb-col tb-col-md">
                                                    <span><?php echo $tc['VaiTro'] == 1 ? 'Admin' : 'Giáo viên' ?></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span class="tb-status text-<?php echo $tc['TrangThai'] == 1 ? 'success' : 'danger' ?>"><?php echo $tc['TrangThai'] == 1 ? 'Hoạt động' : 'Không hoạt động' ?></span>
                                                </td>
                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">

                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="user-detail.php?type=teacher&id=<?php echo $tc['MaNguoiDung'] ?>"><em class="icon ni ni-eye"></em><span>Xem chi tiết</span></a></li>
                                                                        <li class="divider"></li>

                                                                        <li><a onclick="del(<?php echo $tc['MaNguoiDung'] ?>, 1)"><em class="icon ni ni-na"></em><span>Xóa</span></a></li>

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
                        </div> <!-- nk-block -->
                    </div><!-- .components-preview -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
    <script>
        function del(id, type) {

            Swal.fire({
                title: `Xác nhận xóa người dùng có mã: ${id} ?`,
                text: 'Thông tin liên quan tới người dùng sẽ bị xóa hoàn toàn!',
                showCancelButton: true,
                confirmButtonText: 'Xác nhận',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        url : 'core/functions/users/delete_user.php?id=' + id + '&type=' + type,
                        type : 'GET',
                        dataType: 'json',
                        success : function(data) {
                            if (data.error === false) {
                                Swal.fire({
                                    title: 'Thành công',
                                    text: 'Xóa người dùng thành công!',
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


<?php include 'shared/footer.php' ?>