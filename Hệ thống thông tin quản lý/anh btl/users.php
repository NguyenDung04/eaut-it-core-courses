<?php require_once('head.php');?>
<title>Thành Viên | Dashboard</title>
<?php
  $thuehost = mysqli_fetch_assoc($ketnoi->query("SELECT COUNT(*) FROM `lich_su_mua_host` WHERE `username`='" . $user['username'] . "' ")) ['COUNT(*)'];

$sotin1trang = 20;
if (!empty($_GET['page'])) {
    $page = xss(intval($_GET['page']));
} else {
    $page = 1;
}
$from = ($page - 1) * $sotin1trang;
$order_by = ' ORDER BY id DESC ';

$where = ' `id` > 0 ';
$id = '';
$fullname = '';
$username = '';
$email = '';
$sophone = '';
$level = '';
$ip = '';
$status = '';
if (!empty($_GET['id'])) {
    $id = mysqli_real_escape_string($ketnoi, $_GET['id']);
    $where .= " AND `id` = '$id'";
}
if (!empty($_GET['fullname'])) {
    $fullname = mysqli_real_escape_string($ketnoi, $_GET['fullname']);
    $where .= " AND `fullname` = '$fullname'";
}
if (!empty($_GET['username'])) {
    $username = mysqli_real_escape_string($ketnoi, $_GET['username']);
    $where .= " AND `username` = '$username'";
}
if (!empty($_GET['email'])) {
    $email = mysqli_real_escape_string($ketnoi, $_GET['email']);
    $where .= " AND `email` = '$email'";
}

if (!empty($_GET['sophone'])) {
    $sophone = mysqli_real_escape_string($ketnoi, $_GET['sophone']);

    $where .= " AND `sophone` = '$sophone'";
}
if (!empty($_GET['level'])) {
    $level = mysqli_real_escape_string($ketnoi, $_GET['level']);

    $where .= " AND `level` = '$level'";
}

if(!empty($_GET['ip']))
{
    $ip = mysqli_real_escape_string($_GET['ip']);
   $where .= " AND `ip` = '$ip'";
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
    <?php require_once('nav.php');?>
    <div class="cpanel-main">
        <div class="cpanel-header">
            <div class="cpanel-header_hamburger" id="call-sidebar">
                <span></span>
            </div>
            <a class="cpanel-header_logo" href="//admin">
                <img src="//assets/storage/images/image_9U0MR.png" height="16" width="90"
                    class="img-fluid" alt="">
            </a>
            <div class="cpanel-header_navigation">
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="//">Trang chủ</a>
                    </li>
                    <li>
                        <a href="//admin/merchants/list">Kết nối API</a>
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
                <a href="//account/logout" class="btn-link align-items-center d-flex ml-4">
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
                                Thành viên | Danh sách </div>
                        </div>
                        <div class="cpanel-heading_links">
                            <a href="/admin">
                                <i class="fas fa-home-alt"></i>
                                Home
                            </a>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="cpanel-wrap">
                <div class="mb-2">
                    <div class="form-m1 form-m1_filter">
                        <form action="https://test1.chinhapi.asia/admin/users.php" name="formSearch" method="GET">
                            <div class="row row5 rowmb3">
                                <div class="col-lg col-md-3 col-6">
                                    <input class="form-control" value="" name="id" placeholder="order.id">
                                </div>

                                <div class="col-lg col-md-3 col-6">
                                    <input class="form-control" value="" name="fullname" placeholder="Họ Và Tên">
                                </div>

                                <div class="col-lg col-md-3 col-6">
                                    <input class="form-control" value="" name="username" placeholder="Tên Đăng Nhập">
                                </div>

                                <div class="col-lg col-md-3 col-6">
                                    <input class="form-control" value="" name="email" placeholder="Email">
                                </div>

                                <div class="col-lg col-md-3 col-6">
                                    <input class="form-control" value="" name="sophone" placeholder="Sđt">
                                </div>
                                <div class="col-lg col-md-3 col-6">
                                    <input class="form-control" value="" name="ip" placeholder="Địa chỉ ip">
                                </div>

                                <div class="col-lg col-md-3 col-6">
                                    <select name="level" class="form-control">
                                        <option value="" selected="selected">-- Nhóm --</option>

                                        <option value="0">Thành viên</option>
                                        <option value="9">Quan Trị Viên</option>
                                        
                                    </select>
                                </div>
                                
                              

                                <div class="col-12 col-md flex-lg-grow-0 d-flex align-items-center px-0">
                                    <button class="btn btn-primary btn-small m-1 my-md-0" type="submit" name="submit" value="filter">
    <i class="fas fa-search"></i> Tìm kiếm
</button>
                                    <a class="btn btn-danger btn-small m-1 my-md-0"
                                        href="/admin/users.php">
                                        <i class="fa fa-trash"></i>
                                        Bỏ lọc
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <form action="/admin/user.php" method="POST">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover table-module mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        <input type="checkbox" class="mt-1 check-all" value="">
                                    </th>
                                    <th>ID</th>
                                    <th>Họ tên</th>
                                    <th>Tên đăng nhập</th>
                                    <th>Email</th>
                                    <th>SDT</th>
                                    <th>Số dư</th>
                                    <th>Tổng gói host</th>
                                    <th>Level</th>

                                    <th>Ngày tạo</th>
                                    <th class="text-center">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php
                                $result = mysqli_query($ketnoi,"SELECT * FROM `users` WHERE $where ORDER BY id DESC LIMIT $from,$sotin1trang  ");
                                while($row = mysqli_fetch_assoc($result))
                                {
                                ?>
                                <tr>
                                     <td class="text-center"><input type="checkbox" class="mt-1 check-only" name="check[]" value="<?=$row['id'];?>">
                                    <td><?=$row['id'];?></td>
                                    <td><?=$row['full_name'];?></td>
                                    <td><i class="ace-icon fa fa-user bigger-130"></i><strong><?=$row['username'];?></strong></td>
                                    <td><i class="ace-icon fa fa-envelope bigger-130"></i> <?=$row['email'];?>
                                        <span class="text-danger"><i class="ace-icon fa fa-times-circle"></i></span>
                                    </td>
                                    <td> <?=$row['sophone'];?></td>
                                    <td><span class="text-dark" style="display:block"><strong><?=tien($row['money']);?> VND</strong></span></td>
                                    <td><?=$thuehost;?></td>
                                    <td><?php 
                                    if($row['level'] == '9') { echo 'Quản Trị Viên'; } 
                                    else { echo 'Thành Viên'; } 
                                    ?> 
                                    </td>

                                    
                                </div>
                                    </td>
                                    <td><?=$row['time'];?></td>
                                    <td>
                                        <div class="action-buttons">
                                            <a href="#" title="Đặt lại tài khoản, mở khóa tài khoản, spam..."> <span
                                                    class="my-1 my-lg-0 btn btn-sm_table btn-warning"><i
                                                        class="fa fa-sync-alt"></i></span></a>
                                            <a href="/admin/edit-user.php?id=<?=$row['id'];?>" title="Sửa"> <span
                                                    class="my-1 my-lg-0 btn btn-sm_table btn-info"><i
                                                        class="fas fa-edit"></i></span></a>
                                            <button style="color:white;" onclick="RemoveRow('<?=$row['id'];?>', '<?=$row['username'];?>')"
                                                class="my-1 my-lg-0 btn btn-sm_table btn-danger" type="button">
                                                <i class="fas fa-trash-alt"></i><span class=""></span>
                                            </button>

                                           
                                            <a href="" title="Nạp rút tiền">
                                                <span class="my-1 my-lg-0 btn btn-sm_table btn-success"><i
                                                        class="fas fa-dollar-sign"></i> Nạp rút</span></a>

                                        </div>
                                    </td>
                                </tr>
                              
  <?php }?>
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
       <?php
                        $userapi = num_rows("SELECT * FROM `users` WHERE $where ORDER BY id DESC");
                        if ($userapi > $sotin1trang) {
                            echo '<center>' . pagination(BASE_URL("admin/users.php?id=$id&fullname=$fullname&username=$username&email=$email&sophone=$sophone&ip=$ip&level=$level&submit=filter&"), $from, $lsmua, $sotin1trang) . '</center>';
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