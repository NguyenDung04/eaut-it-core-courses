<?php require_once('head.php');?>
<title>Thành Viên | Dashboard</title>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $api_code =  $ketnoi->query("SELECT * FROM `users` WHERE `id` = '$id' ")->fetch_array();
}
?>
<?php
$now = time();
if (isset($_POST["submit"]))
{
  $create = mysqli_query($ketnoi,"UPDATE `users` SET 
    `username` = '".$_POST['username']."',
   `full_name` = '".$_POST['full_name']."',
    `email` = '".$_POST['email']."',
    
   
    `level` = '".$_POST['level']."' WHERE `id` = '".$id."' ");
   
   
  if($create)
  {
    echo '<script type="text/javascript">if (!alert("Cập nhật thành công !")) { window.history.back().location.reload(); }</script>';
  }
  else
  {
    echo '<script type="text/javascript">if (!alert("Có lỗi xảy ra !")) { window.history.back().location.reload(); }</script>'; 
  }
  
 
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
                    chinhapi                </a>
                <a href="https://there24h.com/account/logout" class="btn-link align-items-center d-flex ml-4">
                    <span class="d-none d-lg-block ml-2">
						 <i class="fal fa-sign-out"></i> Thoát
					</span>
                </a>
            </div>
        </div> <div class="cpanel-body">
            <div class="row">
                <div class="col-12">
                    <div class="cpanel-heading">
    <div class="cpanel-heading_wrap">
        <div class="heading-title">
            Thành viên | Danh sách        </div>
            </div>
            <div class="cpanel-heading_links">
            <a href="">
    <i class="fas fa-home-alt"></i>
    Tất cả
</a>
     <a href="https://there24h.com/admin/users/list">
    <i class="fas fa-home-alt"></i>
    Tất cả
</a>
<a href="https://there24h.com/admin/users/groups">
    <i class="fas fa-layer-group"></i>
    Nhóm
</a>
        </div>
    </div>                </div>
            </div>
                 <div class="cpanel-wrap">
                <div class="form-m1">
            <form method="POST" action="edit-user.php?id=<?=$api_code['id'];?>" accept-charset="UTF-8" autocomplete="off">
            <div class="row row5">
                <div class="col-lg-6">
                    <div class="row row5 row-mb_nospacing">
                             <div class="col-lg-12">
                                <div class="text-right">IP Đăng Nhập:  <strong><?=$api_code['ip'];?></strong>
<a href="" onclick="return confirm('Bạn có chắc chắn muốn cập nhật API Key không?')">
  <span class="btn btn-sm_table btn-warning">
    <i class="fa fa-sync-alt"></i> Cập nhật API Key
  </span>
</a>                                </div>
                            </div>
                        <div class="col-lg-6">
                            <div class="position-relative mt-1">
                                <label for="" class="col-form-label font-weight-bold">
                                    Tên đăng nhập:
                                </label>
                                <input name="username" type="text" class="form-control" id="username"
                                       value="<?=$api_code['username'];?>">
                            </div>
                            <div class="position-relative mt-1">
                                <label for=""
                                       class="col-form-label font-weight-bold">
                                    Họ & tên:
                                </label>
                                <input name="full_name" type="text" class="form-control" id="full_name"
                                       placeholder="Enter Full Name" value="<?=$api_code['full_name'];?>">
                            </div>
                            <div class="position-relative mt-1">
                                <label for=""
                                       class="col-form-label font-weight-bold">
                                    Email:
                                </label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Email"
                                       value="<?=$api_code['email'];?>">
                            </div>
                            <div class="position-relative mt-1">
                                <label for=""
                                       class="col-form-label font-weight-bold">
                                    Số điện thoại:
                                </label>
                                <input name="sophone" type="text" class="form-control" id="sophone"
                                       placeholder="Enter Number Phone" value="<?=$api_code['sophone'];?>">
                            </div>
                             <div class="position-relative mt-1">
                                <label for=""
                                       class="col-form-label font-weight-bold">
                                    Level
                                </label>
                                <input name="level" type="text" class="form-control" id="level"
                                       placeholder="Enter Number Phone" value="<?=$api_code['level'];?>">
                            </div>
                         
                           
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mt-1">
                                <div class="row no-gutters align-items-center">
                                    <label for=""
                                           class="col-form-label font-weight-bold">
                                        Nhóm:
                                    </label>
                                    <select name="level" class="form-control" id="">
                                        <option value="<?=$api_code['level'];?>" selected>- - Thiết Lập Level - -</option>
                                                                                    <option value="0" >Thành viên</option>
                                                                                    <option value="9" >Admin</option>
                                                                                     <option value="cc" >Band</option>
                                                                            </select>
                                </div>
                            </div>
                                                       
                                                        <div class="position-relative mt-1">
                                <label for=""
                                       class="col-form-label font-weight-bold">
                                    Mật khẩu:
                                </label>
                                <input name="password" type="password" class="form-control" id="password" placeholder="Tối thiếu 6 ký tự" value="<?=$api_code['password'];?>">
                            </div>
                            <div class="position-relative mt-1">
                                <label for="" class="col-form-label font-weight-bold">
                                    Mật khẩu cấp 2:
                                </label>
                                <input name="mkc2" type="password" class="form-control" id="mkc2" placeholder="Nhập mật khẩu cấp 2">
                            </div>
                            <div class="position-relative mt-1">
                                <label for="" class="col-form-label font-weight-bold">Lý do từ chối đăng nhập:</label>
                                <input name="failed_reason" class="form-control" value="" >
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" name="submit" class="btn btn-primary">Lưu</button>
            </div>
            </form>
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