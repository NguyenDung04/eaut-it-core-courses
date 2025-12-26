 <?php require_once('head.php');?>
    <title>Trang Quản Trị | Dashboard</title>
    <?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $chinhapi_host =  $ketnoi->query("SELECT * FROM `list_server_host` WHERE `id` = '$id' ")->fetch_array();
}
?>
<?php
if (isset($_POST["submit"]))
{
  $create = mysqli_query($ketnoi,"UPDATE `list_server_host` SET 
    `name_server` = '".$_POST['name_server']."',
    `link_login` = '".$_POST['link_login']."',
    `tk_whm` = '".$_POST['tk_whm']."',
    `mk_whm` = '".$_POST['mk_whm']."',
    `ip_whm` = '".$_POST['ip_whm']."',
    `ns1` = '".$_POST['ns1']."',
    `ns2` = '".$_POST['ns2']."',
    `status` = '".$_POST['status']."' WHERE `id` = '".$id."' ");

  if($create)
  {
    echo '<script type="text/javascript">if(!alert("Cập nhật thành công !")){window.history.back().location.reload();}</script>';
  }
  else
  {
    echo '<script type="text/javascript">if(!alert("Có lỗi xảy ra !")){window.history.back().location.reload();}</script>'; 
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
          Edit Server Hosting       </div>
            </div>
            <div class="cpanel-heading_links">
                <a href="listserverhost.php">
    <i class="fas fa-home-alt"></i> Danh sách Sever Hosting
</a>
<a href="edit-server-host.php">
    <i class="fas fa-plus"></i>
   Thêm mới
</a>
         </div>
    </div>                </div>
            </div>
                <!-- Main content -->
    <div class="cpanel-wrap">
                <div class="form-m1">
            <form method="POST" action="edit-server-host.php?id=<?=$chinhapi_host['id'];?>" accept-charset="UTF-8" enctype="multipart/form-data">
             <div class="row row5">
                <div class="col-lg-8 mb-3">
                    <div class="row row-x-5">
                        <div class="col-lg-6">
                            <div class="position-relative mt-1">
                                <label for="" class="col-form-label font-weight-bold">NAME SERVER:</label>
                                <input name="name_server" type="text" class="form-control" id="name_server"
                                       placeholder="NAME SERVER" value="<?=$chinhapi_host['name_server'];?>">

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mt-1">
                                <label for="" class="col-form-label font-weight-bold">LINK LOGIN:</label>
                                <input name="link_login" type="text" class="form-control" id="link_login"
                                       placeholder="LINK LOGIN" value="<?=$chinhapi_host['link_login'];?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mt-1">
                                <label for="" class="col-form-label font-weight-bold">TÀI KHOẢN WHM:</label>
                                <input name="tk_whm" type="text" class="form-control" id="tk_whm"
                                       placeholder="TÀI KHOẢN WHM" value="<?=$chinhapi_host['tk_whm'];?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mt-1">
                                <label for="" class="col-form-label font-weight-bold">MẬT KHẨU WHM:</label>
                                <input name="mk_whm" type="text" class="form-control" id="name_whm"
                                       placeholder="MẬT KHẨU WHM" value="<?=$chinhapi_host['mk_whm'];?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mt-1">
                                <label for="" class="col-form-label font-weight-bold">IP WHM:</label>
                                <input name="ip_whm" type="text" class="form-control" id="ip_whm"
                                       placeholder="IP WHM" value="<?=$chinhapi_host['ip_whm'];?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mt-1">
                                <label for="" class="col-form-label font-weight-bold">NameSever1:</label>
                                <input name="ns1" type="text" class="form-control" id="ns1"
                                       placeholder="NameSever1" value="<?=$chinhapi_host['ns1'];?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mt-1">
                                <label for="" class="col-form-label font-weight-bold">NameSever2:</label>
                                <input name="ns2" type="text" class="form-control" id="ns2"
                                       placeholder="NameSever2" value="<?=$chinhapi_host['ns2'];?>">
                            </div>
                        </div>
                        <div class="position-relative mt-1">
                                            <div class="row no-gutters align-items-center">
                                                <label for="" class="col-form-label font-weight-bold">
                                                    Trạn Thái:
                                                </label>
                                                <select class="form-control" name="status" id="status"> 
                                                    <option value="<?=$chinhapi_host['status'];?>">
                                                    <?=$chinhapi_host['status'];?>
                                                </option>
                                                <option value="ON">ON</option>
                                                <option value="OFF">OFF</option>
                                            </select>
                                            </div>
                                        </div>
                      

                    </div>
                </div>
                
            </div>
            <div class="mt-1">
                <button type="submit"name="submit" class="btn btn-success btn-default">
                    <i class="fas fa-plus"></i>Cập nhật
                </button>
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