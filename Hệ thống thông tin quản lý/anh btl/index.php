<?php require_once('head.php'); ?>
<title>Trang Quản Trị | Dashboard</title>

<?php
$tong_sodutv = mysqli_fetch_assoc($ketnoi->query("SELECT SUM(`money`) FROM `users` WHERE `money` >= 0 AND `level`!=1"))['SUM(`money`)'];
$total_thanhvien = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `users` "))['COUNT(*)'];
$host_on = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `lich_su_mua_host` WHERE `status`='hoatdong' "))['COUNT(*)'];
$host_of = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `lich_su_mua_host` WHERE `status`='tamkhoa' "))['COUNT(*)'];
$total_thanhvienbanned = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `users` WHERE `bannd` = '1' "))['COUNT(*)'];
?>



<div class="modal fade modal-module" id="ModalAjax">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div id="ModalAjaxContent"></div>
        </div>
    </div>
</div>
<div class="template-cpanel" id="template-cpanel">
    <div class="cpanel-overlay" id="cpanel-overlay"></div>
    <?php require_once('nav.php'); ?>
    <div class="cpanel-main">
        <div class="cpanel-header">
            <div class="cpanel-header_hamburger" id="call-sidebar">
                <span></span>
            </div>
            <a class="cpanel-header_logo" href="https://there24h.com/admin">
                <img src="https://there24h.com/assets/storage/images/image_9U0MR.png" height="16" width="90" class="img-fluid" alt="">
            </a>
            <div class="cpanel-header_navigation">
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="https://there24h.com/">Trang chủ</a>
                    </li>
                    <li>
                        <a href="https://there24h.com/admin/merchants/list">Kết nối API</a>
                    </li>
                    <li>
                        <a href="#">IP: <?= $user['ip']; ?></a>
                    </li>
                </ul>
            </div>

            <div class="cpanel-header_user d-flex align-items-center">
                <a href="#" class="header-user_button">
                    <span>
                        <i class="fas fa-user"></i>
                    </span>
                    <?=$username;?></a>
                <a href="https://there24h.com/account/logout" class="btn-link align-items-center d-flex ml-4">
                    <span class="d-none d-lg-block ml-2">
                        <i class="fal fa-sign-out"></i> Thoát
                    </span>
                </a>
            </div>
        </div>
        <div class="cpanel-body">
            <div class="row">
                <div class="col-12">
                    <div class="cpanel-heading">
                        <div class="cpanel-heading_wrap">
                            <div class="heading-title">
                                Bảng quản trị </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row5">
                 <div class="col-xl-1--7 col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="cpanel-statistical_m1 card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="card-title">Tổng Thành Viên</div>
                                </div>
                            </div>
                            <div class="card-text text-primary"> <?=$total_thanhvien;?></div>
                        </div>
                        <div class="card-icon">
                            <i class="fas fa-credit-card"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1--7 col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="cpanel-statistical_m1 card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="card-title">Số Dư Thành Viên</div>
                                </div>
                            </div>
                            <div class="card-text text-primary"> <?= tien($tong_sodutv) ?></div>
                        </div>
                        <div class="card-icon">
                            <i class="fas fa-credit-card"></i>
                        </div>
                    </div>
                </div>

                <div class="col-xl-1--7 col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="cpanel-statistical_m1 card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="card-title">Hosting Hoạt Động</div>
                                </div>
                            </div>
                            <div class="card-text text-primary"><?= $host_on; ?></div>
                        </div>
                        <div class="card-icon">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1--7 col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="cpanel-statistical_m1 card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="card-title">Host Cần Gia Hạn</div>
                                </div>
                            </div>
                            <div class="card-text text-primary"><?= $host_of; ?></div>
                        </div>
                        <div class="card-icon">
                            <i class="fas fa-money-bill-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1--7 col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="cpanel-statistical_m1 card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="card-title">Doanh Thu Ngày</div>
                                </div>
                            </div>
                            <div class="card-text text-primary">0</div>
                        </div>
                        <div class="card-icon">
                            <i class="fas fa-download"></i>
                        </div>
                    </div>
                </div>

                <div class="col-xl-1--7 col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="cpanel-statistical_m1 card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="card-title">Doanh Thu Tháng</div>
                                </div>
                            </div>
                            <div class="card-text text-primary">870</div>
                        </div>
                        <div class="card-icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row row5 mt-0">
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="cpanel-card card">
                        <div class="card-header">
                            <div class="card-title">
                                Đơn Hosting
                            </div>
                            <div class="ml-auto d-flex align-items-center">
                                <div class="card-button ml-1">
                                    <button type="button" class="card-button_icon" data-toggle="collapse" aria-expanded="true" data-target="#card-deposit">
                                        <i class="fa-solid fa-arrow-up"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="collapse show" id="card-deposit">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-module mb-0">
                                        <thead>
                                            <tr>
                                                <th>Đơn hàng</th>
                                                <th>Khách hàng</th>
                                                <th>Trạng thái</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $result = mysqli_query($ketnoi, "SELECT * FROM `lich_su_mua_host` ORDER BY id DESC LIMIT 10 ");
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>

                                                <tr>
                                                    <td>Gói <?= $row['goi_host']; ?><br>
                                                        <small class="text-muted"> <?php echo date('h:i d-m-Y', $row['ngay_mua']); ?></small>
                                                        <br>
                                                        <strong class="text-success"> <?= $row['gia']; ?></strong>
                                                    </td>
                                                    <td><a href=https://there24h.com/admin/users/list?id=13 target=_blank> <?= $row['username']; ?></a> <br>0388674883</td>
                                                    <td class="text-center">
                                                        <span class="text-success"> <?= host($row['status']); ?></span>
                                                    </td>
                                                </tr>

                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="lsmuahost.php">Xem thêm</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="cpanel-card card">
                        <div class="card-header">
                            <div class="card-title">
                                Gói Hosting Cần Gia Hạn
                            </div>
                            <div class="ml-auto d-flex align-items-center">
                                <div class="card-button ml-1">
                                    <button type="button" class="card-button_icon" data-toggle="collapse" aria-expanded="true" data-target="#card-withdraw">
                                        <i class="fa-solid fa-arrow-up"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="collapse show" id="card-withdraw">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-module mb-0">
                                        <thead>
                                            <tr>
                                                <th>Đơn hàng</th>
                                                <th>Khách hàng</th>
                                                <th>Trạng thái</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $result = mysqli_query($ketnoi, "SELECT * FROM `lich_su_mua_host` WHERE `status`='tamkhoa' ORDER BY id DESC LIMIT 10 ");
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>

                                                <tr>
                                                    <td>Gói <?= $row['goi_host']; ?> <br>
                                                        <small class="text-muted"><?php echo date('h:i d-m-Y', $row['ngay_mua']); ?></small>
                                                        <br>
                                                        <strong class="text-success"><?= $row['gia_host']; ?> </strong>
                                                    </td>
                                                    <td><a href=https://there24h.com/admin/users/list?id=1 target=_blank><?= $row['username']; ?> </a> <br>0388674883</td>
                                                    <td class="text-center">
                                                        <span class="text-success"><?= host($row['status']); ?></span>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="lsmuahost.php">Xem thêm</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="cpanel-card card">
                        <div class="card-header">
                            <div class="card-title">
                                Khách Nạp Tiền
                            </div>
                            <div class="ml-auto d-flex align-items-center">
                                <div class="card-button ml-1">
                                    <button type="button" class="card-button_icon" data-toggle="collapse" aria-expanded="true" data-target="#card-transfer">
                                        <i class="fa-solid fa-arrow-up"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="collapse show" id="card-transfer">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-module mb-0">
                                        <thead>
                                            <tr>
                                                <th>Số tiền</th>
                                                <th>Khách hàng</th>
                                                <th>Trạng Thái</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $result = mysqli_query($ketnoi, "SELECT * FROM `history_nap_bank` ORDER BY id desc ");
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <tr>
                                                    <td><?= $row['type']; ?> <br>
                                                        <small class="text-muted"><?= ngay($row['time']); ?></small>
                                                        <br>
                                                        <strong class="text-success">Nạp <?= tien($row['thucnhan']); ?></strong>
                                                    </td>
                                                    <td><a href=lsnapbank.php target=_blank><?= $username; ?></a> <br><?= $user['sophone']; ?></td>
                                                    <td class="text-center">
                                                        <span class="text-success"><?= status($row['status']); ?></span>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="https://there24h.com/admin/wallets/transaction">Xem thêm</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="cpanel-card card">
                        <div class="card-header">
                            <div class="card-title">
                                Người dùng
                            </div>
                            <div class="ml-auto d-flex align-items-center">
                                <span class="badge badge-module_sm badge-success ml-1">
                                    Hôm nay
                                    <span class="badge badge-light"> 0</span>
                                </span>
                                <span class="badge badge-module_sm badge-primary ml-1">
                                    Tổng
                                    <span class="badge badge-light"><?= $total_thanhvien; ?></span>
                                </span>
                                <div class="card-button ml-1">
                                    <button type="button" class="card-button_icon" data-toggle="collapse" aria-expanded="true" data-target="#card-users">
                                        <i class="fa-solid fa-arrow-up"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="collapse show" id="card-users">
                            <div class="card-body">
                                <table class="table table-bordered table-striped table-module mb-0">
                                    <thead>
                                        <tr>
                                            <th>Tên</th>
                                            <th>Email</th>
                                            <th>Level</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $result = mysqli_query($ketnoi, "SELECT * FROM `users` ORDER BY id DESC LIMIT 10 ");
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>

                                            <tr>
                                                <td><a href=https://there24h.com/admin/users/list?id=14 target=_blank><?= $row['username']; ?></a> <br><?= $row['sophone']; ?></td>
                                                <td>
                                                    <p class="text-13px"><i class="fas fa-envelope text-danger"></i> <?= $row['email']; ?> </p>
                                                </td>
                                                <td>
 <p class="text-13px"><i class="fa-solid fa-user" style="color: #FFD43B;"></i> <?= $row['level']; ?> </p>
                                                </td>
                                            </tr>


                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="users.php">Xem thêm</a>
                        </div>
                    </div>
                </div>







            </div>
        </div>









        <div class="cpanel-footer">
            <div class="cpanel-wrap">
                <div class="text-center">
                    Copyright © 2023-2024 <a href="https://thepay.vn">thepay.vn</a>. All rights reserved. Software version 6.0

                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>