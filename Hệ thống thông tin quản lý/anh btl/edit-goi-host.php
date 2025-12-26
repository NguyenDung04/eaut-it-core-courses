 <?php require_once('head.php');?>
    <title>Trang Quản Trị | Dashboard</title>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $chinhapi_goi =  $ketnoi->query("SELECT * FROM `list_host` WHERE `id` = '$id' ")->fetch_array();
}
?>
<?php
if (isset($_POST["submit"]))
{
  $create = mysqli_query($ketnoi,"UPDATE `list_host` SET 
    `name_host` = '".$_POST['name_host']."',
    `title_host` = '".$_POST['title_host']."',
    `server_host` = '".$_POST['server_host']."',
    `code` = '".$_POST['code']."',
    `gia_host` = '".$_POST['gia_host']."',
    `dung_luong` = '".$_POST['dung_luong']."',
    `mien_khac` = '".$_POST['mien_khac']."',
    `bi_danh` = '".$_POST['bi_danh']."' WHERE `id` = '".$id."' ");

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
            Edit gói host       </div>
            </div>
            <div class="cpanel-heading_links">
                <a href="https://there24h.com/admin/news/list">
    <i class="fas fa-home-alt"></i> Danh sách
</a>
<a href="https://there24h.com/admin/news/create">
    <i class="fas fa-plus"></i>
   Thêm mới
</a>
<a href="https://there24h.com/admin/news/images">
    <i class="fas fa-plus"></i>
   Danh sách ảnh
</a>           </div>
    </div>                </div>
            </div>
                <!-- Main content -->
    <div class="cpanel-wrap">
                <div class="form-m1">
            <form method="POST" action="edit-goi-host.php?id=<?=$chinhapi_goi['id'];?>" accept-charset="UTF-8" enctype="multipart/form-data">
             <div class="row row5">
                <div class="col-lg-8 mb-3">
                    <div class="row row-x-5">
                        <div class="col-lg-6">
                            <div class="position-relative mt-1">
                                <label for="" class="col-form-label font-weight-bold">NAME HOST:</label>
                                <input name="name_host" type="text" class="form-control" 
                                       placeholder="NAME HOST" value="<?=$chinhapi_goi['name_host'];?>">

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mt-1">
                                <label for="" class="col-form-label font-weight-bold">GÓI HOST:</label>
                                <input name="code" type="text" class="form-control"
                                       placeholder="GÓI HOST" value="<?=$chinhapi_goi['code'];?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mt-1">
                                <label for="" class="col-form-label font-weight-bold">TITLE HOST: </label>
                                <select class="form-control" name="title_host">
                                    <option value="<?=$chinhapi_goi['title_host'];?>">
                                                    <?=$chinhapi_goi['title_host'];?>
                                                    </option>
                                                <option value="Start Up">Start Up</option>
                                                <option value="Advanced">Advanced</option>
                                                <option value="Enterprise">Enterprise</option>
                                            </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mt-1">
                                <label for="" class="col-form-label font-weight-bold">SERVER HOST:</label>
                                <select class="form-control" name="server_host">
                                                 <?php
                                                $sv_host = $ketnoi->query("SELECT * FROM `list_server_host` WHERE `id` = '".$chinhapi_goi['server_host']."' ")->fetch_array();
                                                ?>
                                                <option value="<?=$chinhapi_goi['server_host'];?>"><?=$sv_host['name_server'];?></option>
                                                <?php
                                                $result = mysqli_query($ketnoi,"SELECT * FROM `list_server_host` WHERE `id` != '".$chinhapi_goi['server_host']."' ");
                                                while($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                <option value="<?=$row['id'];?>"><?=$row['name_server'];?></option>
                                                <?php } ?>
                                            </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mt-1">
                                <label for="" class="col-form-label font-weight-bold">GIÁ HOST:</label>
                                <input name="gia_host" type="text" class="form-control"
                                       placeholder="GIÁ HOST" value="<?=$chinhapi_goi['gia_host'];?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mt-1">
                                <label for="" class="col-form-label font-weight-bold">DUNG LƯỢNG:</label>
                                <input name="dung_luong" type="text" class="form-control" 
                                       placeholder="DUNG LƯỢNG" value="<?=$chinhapi_goi['dung_luong'];?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mt-1">
                                <label for="" class="col-form-label font-weight-bold">MIỀN KHÁC:</label>
                                <input name="mien_khac" type="text" class="form-control" 
                                       placeholder="MIỀN KHÁC" value="<?=$chinhapi_goi['mien_khac'];?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mt-1">
                                <label for="" class="col-form-label font-weight-bold">BÍ DANH:</label>
                                <input name="bi_danh" type="text" class="form-control" 
                                       placeholder="MIỀN KHÁC" value="<?=$chinhapi_goi['bi_danh'];?>">
                            </div>
                        </div>
                       
                       
                      
                      

                    </div>
                </div>
                
            </div>
            <div class="mt-1">
                <button type="submit" name="submit" class="btn btn-success btn-default">
                    <i class="fas fa-plus"></i> Thêm mới
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