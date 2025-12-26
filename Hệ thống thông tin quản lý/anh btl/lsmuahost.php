<?php require_once('head.php'); ?>
<title>Trang Quản Trị | Dashboard</title>
<?php
if (isset($_GET['del'])) {
    $del = $_GET['del'];
    echo '<script> if (confirm("Bạn có chắc muốn xoá gói này")) {
        window.location="?delete=' . $del . '";
    } else {
        alert("Đã huỷ");
        window.location="?ok";
    }
    </script>';
}
?>

<?php
if (isset($_GET['delete'])) {
    $delete = $_GET['delete'];

    $create = mysqli_query($ketnoi, "DELETE FROM `list_host` WHERE `id` = '" . $delete . "' ");

    if ($create) {
        echo '<script type="text/javascript">swal("Thành Công","Xóa thành công","success");setTimeout(function(){ location.href = "chuyen-muc.php" },500);</script>';
    } else {
        echo '<script type="text/javascript">swal("Lỗi","Lỗi máy chủ","error");setTimeout(function(){ location.href = "chuyen-muc.php" },1000);</script>';
    }
}
?>
<?php
$sotin1trang = 100;
if (!empty($_GET['page'])) {
    $page = xss(intval($_GET['page']));
} else {
    $page = 1;
}
$from = ($page - 1) * $sotin1trang;


$where = ' `id` > 0 ';
$username = '';
$domain = '';
$goi_host = '';
$status = '';
if (!empty($_GET['username'])) {
    $username = mysqli_real_escape_string($ketnoi, $_GET['username']);
    $where .= " AND `username` = '$username'";
}
if (!empty($_GET['domain'])) {
    $domain = mysqli_real_escape_string($ketnoi, $_GET['domain']);
    $where .= " AND `domain` = '$domain'";
}


if (!empty($_GET['goi_host'])) {
    $goi_host = mysqli_real_escape_string($ketnoi, $_GET['goi_host']);

    $where .= " AND `goi_host` = '$goi_host'";
}
if (!empty($_GET['status'])) {
    $status = mysqli_real_escape_string($ketnoi, $_GET['status']);

    $where .= " AND `status` = '$status'";
}



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
                        <a href="#">IP: 118.71.137.222</a>
                    </li>
                </ul>
            </div>

            <div class="cpanel-header_user d-flex align-items-center">
                <a href="#" class="header-user_button">
                    <span>
                        <i class="fas fa-user"></i>
                    </span>
                    chinhapi </a>
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
                                Lịch sử mua hàng </div>
                        </div>
                        <div class="cpanel-heading_links">

                            <a href="add-goi-host.php">
                                <i class="fas fa-cogs"></i>
                                Thêm Gói Hosting
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade modal-module" id="ChargingModal">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div id="CharigngAjaxContent"></div>
                    </div>
                </div>
            </div>

            <div class="cpanel-wrap">
                <div class="mb-2">
                    <div class="form-m1 form-m1_filter">
                        <form action="/admin/lsmuahost.php" name="formSearch" method="GET">
                            <div class="row row5 rowmb3">
                                <div class="col-lg col-md-3 col-6">
                                    <input class="form-control" value="" name="username" placeholder="username">
                                </div>
                                <div class="col-lg col-md-3 col-6">
                                    <input class="form-control" value="" name="domain" placeholder="domain">
                                </div>
                                <div class="col-lg col-md-3 col-6">
                                    <input class="form-control" value="" name="goi_host" placeholder="goi_host">
                                </div>


                                <div class="col-lg col-md-3 col-6">
                                    <select name="status" class="form-control">
                                        <option value="" selected="selected">-- Trạng thái --</option>

                                        <option value="hoatdong">Hoạt Động</option>
                                        <option value="tamkhoa">Tạm Dừng</option>
                                    </select>
                                </div>


                                <div class="col-12 col-md flex-lg-grow-0 d-flex align-items-center px-0">
                                    <button class="btn btn-primary btn-small m-1 my-md-0" type="submit" name="submit" value="filter">
                                        <span class="fal fa-search"></span>
                                        Tìm kiếm
                                    </button>
                                    <button class="btn btn-success btn-small m-1 my-md-0" type="submit" name="submit" value="excel">
                                        <i class="fas fa-file-excel"></i>
                                    </button>
                                    <a class="btn btn-danger btn-small m-1 my-md-0" href="lsmuahost.php">
                                        <i class="fa fa-trash"></i>
                                        Bỏ lọc
                                    </a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                <form action="/admin/listseverhost.php" onsubmit="return confirm('Bạn có chắc chắn thực hiện hành động này?');" method="POST">
                    <input type="hidden" name="_token" value="1QwzSMJh1YeafrNAs5uAO8xSFSj836jtaZzKcTp5">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover table-module mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        <input type="checkbox" class="mt-1 check-all" value="">
                                    </th>
                                    <th style="width: 10px">ID</th>
                                    <th>USERNAME</th>
                                    <th>TÊN MIỀN</th>
                                    <th>GÓI</th>
                                    <th>NGÀY BẮT ĐẦU</th>
                                    <th>NGÀY HẾT HẠN</th>
                                    <th>TRẠNG THÁI</th>
                                    <th>THAO TÁC</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $result = mysqli_query($ketnoi, "SELECT * FROM `lich_su_mua_host`  WHERE $where ORDER BY id DESC LIMIT $from,$sotin1trang  ");
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr>
                                        <th class="text-center">
                                            <input type="checkbox" class="mt-1 check-all" value="">
                                        </th>
                                        <td><?= $row['id']; ?></td>
                                        <td><?= $row['username']; ?></td>
                                        <td><?= $row['domain']; ?></td>
                                        <td><?= $row['goi_host']; ?></td>
                                        <td><?= ngay($row['ngay_mua']); ?></td>
                                        <td><?= ngay($row['ngay_het']); ?></td>
                                        <td><?= host($row['status']); ?></td>
                                        </td>
                                        <td>
                                            <a href="edit-host.php?id=<?= $row['id']; ?>" class="btn btn-default">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
  <div class="row align-items-center justify-content-between mt-3">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                            <div class="form-m1">
                                <div class="form">
                                    <div class="row row5 rowmb3 justify-content-center justify-content-sm-start">
                                        <div class="col-5 col-sm-6 col-md-5 col-lg-4 col-xl-3">
                                            <select name="action" class="form-control">
                                                <option value="" selected="selected">Hành động(nguy hiểm)</option>
                                                <option value="delete">Xoá đã chọn</option>
                                            </select>
                                        </div>
                                        <div class="col-4 col">
                                            <button class="btn btn-primary btn-small" type="submit">
                                                <i class="fas fa-check-circle mr-1"></i>Thực hiện
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="section-pagination">
                                <ul class="pagination" role="navigation">


                                </ul>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <div class="section-pagination">
                    <ul class="pagination" role="navigation">
                        <?php
                        $lsmua = num_rows("SELECT * FROM `lich_su_mua_host` WHERE $where ORDER BY id DESC");
                        if ($lsmua > $sotin1trang) {
                            echo '<center>' . pagination(BASE_URL("admin/lsmuahost.php?username=$username&domain=$domain&goi_host=$goi_host&status=$status&submit=filter&"), $from, $lsmua, $sotin1trang) . '</center>';
                        } ?>

             
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form id="deleteForm" action="" method="POST">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div id="deleteMes" class="modal-body">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                </button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <input type="hidden" name="_method" value="delete" />
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Delete form-->



            <div class="cpanel-footer">
                <div class="cpanel-wrap">
                    <div class="text-center">
                        Copyright © 2023-2024 <a href="https://chinhapi.net">ChinhApi</a>. All rights reserved. Software
                        version 10.0

                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

    </html>