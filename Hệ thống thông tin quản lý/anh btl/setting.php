 <?php require_once('head.php');?>
    <title>Seting | Dashboard</title>

    
<?php
    if (isset($_POST["submit"]) && isset($_SESSION['admin'])) {
       
      $create = $ketnoi->query("UPDATE `setting` SET
        `ten_web` = '".$_POST['ten_web']."',
        
        `favicon` = '".$_POST['favicon']."',
        `mo_ta` = '".$_POST['mo_ta']."',
        `fb_admin` = '".$_POST['fb_admin']."',
        `email_auto` = '".$_POST['email_auto']."',
        `sdt_admin` = '".$_POST['sdt_admin']."' ,
        `telegram_admin` = '".$_POST['telegram_admin']."' ,
        `banquyen` = '".$_POST['banquyen']."' ,
        `name_ad` = '".($_POST['name_ad'])."'");

      if ($create) {
        echo '<script type="text/javascript">if (!alert("Cập nhật thành công !")) { window.history.back().location.reload(); }</script>'; 
        die;
      } else {
        echo '<script type="text/javascript">if (!alert("Có lỗi xảy ra !")) { window.history.back().location.reload(); }</script>'; 
        die;
      }
    }
?>
<?php
    if (isset($_POST["submit1"]) && isset($_SESSION['admin'])) {
       
      $create = $ketnoi->query("UPDATE `setting` SET
        `data_sitekey` = '".$_POST['data_sitekey']."',
        `data_secret` = '".($_POST['data_secret'])."'");

      if ($create) {
        echo '<script type="text/javascript">if (!alert("Cập nhật thành công !")) { window.history.back().location.reload(); }</script>'; 
        die;
      } else {
        echo '<script type="text/javascript">if (!alert("Có lỗi xảy ra !")) { window.history.back().location.reload(); }</script>'; 
        die;
      }
    }
?>
</head>

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
            <a class="cpanel-header_logo" href="/admin">
                <img src="/assets/storage/images/image_9U0MR.png" height="16" width="90"
                    class="img-fluid" alt="">
            </a>
            <div class="cpanel-header_navigation">
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="/">Trang chủ</a>
                    </li>
                    <li>
                        <a href="/admin/merchants/list">Kết nối API</a>
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
                <a href="/account/logout" class="btn-link align-items-center d-flex ml-4">
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
                                Cấu hình </div>
                        </div>
                        <div class="cpanel-heading_links">
                            
                            <a href="/admin/setting.php">
                                <i class="fas fa-cogs"></i>
                                Cấu hình
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row5">
                <div class="col-xl-12 col-lg-12">

                    <div class="tabs-m1">
                        <ul class="nav nav-tabs" style="justify-content: left !important;">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#general">
                                    Thông tin
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#connection">
                                    Kết nối
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#additional">
                                    Khác
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab tab-pane fade active show" id="general">
                                <form action="/admin/setting.php" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-sm-4 float-left text-center" style="display: inline-block">
                                            <div class="form-group">
                                                <div class="preview">
                                                    <img id="favicon-icon" class="imgPreview"
                                                        src="<?=$chinhapi['favicon'];?>"
                                                        style="max-width: 10%; max-height: 10%;" />
                                                </div>
                                                <input class="form-control" type="file" name="favicon">
                                            </div>
                                            <label style="display:block"><b>Favicon Icon</b></label>
                                        </div>

                                        <div class="col-sm-4 float-left text-center" style="display: inline-block">
                                            <div class="form-group">
                                                <div class="preview">
                                                    <img id="logo-icon" class="imgPreview"
                                                        src="<?=$chinhapi['logo'];?>"
                                                        style="max-width: 10%; max-height: 10%;" />

                                                </div>
                                                <input class="form-control" type="file" name="logo">
                                            </div>
                                            <label style="display:block"><b>Website Logo</b></label>
                                        </div>
                                        <div class="col-sm-4 float-left text-center" style="display: inline-block">
                                            <div class="form-group">
                                                <div class="preview">
                                                    <img id="backendlogo-icon" class="imgPreview"
                                                        src="<?=$chinhapi['logo'];?>"
                                                        style="max-width: 10%; max-height: 10%;" />
                                                </div>
                                                <input class="form-control" type="file" name="image">
                                            </div>
                                            <label style="display:block"><b>Image</b></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table
                                                class="table table-bordered table-striped table-hover table-module mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>Tên Website</td>
                                                        <td>
                                                            <input type="text" name="ten_web" class="form-control"
                                                                value="<?=$chinhapi['ten_web'];?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Title</td>
                                                        <td>
                                                            <input type="text" name="title" class="form-control"
                                                                value="<?=$chinhapi['key_words'];?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Description</td>
                                                        <td>
                                                            <input type="text" name="description" class="form-control"
                                                                value="<?=$chinhapi['mo_ta'];?>.">
                                                        </td>
                                                    </tr>
                                                    <td>Author</td>
                                                    <td>
                                                        <input type="text" name="name_ad" class="form-control"
                                                            value="<?=$chinhapi['name_ad'];?>">
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Keywords</td>
                                                        <td>
                                                            <input type="text" name="keywords" class="form-control"
                                                                value="doithecao , gạch thẻ , gạch card , đổi thẻ cào ra tiền mặt , gạch thẻ cào , đổi thẻ cào thành tiền mặt, gạch thẻ cào, Gạch thẻ cào , thenap1s, Thenap1s ,THENAP1S , doithe cao, web doithe, doithe nhanh, web doi the, thenhanh1s, tn1s, napthe1s,nt1s,..."
                                                                placeholder="VD: doithecao, đổi thẻ cào thành tiền, mua bán thẻ">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lĩnh vực hoạt động</td>
                                                        <td>
                                                            <input type="text" name="linhvuc" class="form-control"
                                                                value="Hệ thống đổi thẻ cào sang tiền mặt , momo, đổi thẻ cào sang thẻ game, xử lý thẻ, rút tiền tự động trong vài giây , phí tốt nhất thị trường - tự động xử lý thẻ cực nhanh chóng !">
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Địa chỉ công ty</td>
                                                        <td>
                                                            <input type="text" name="diachi" class="form-control"
                                                                value="Nam Tư Niêm , Hà Nội">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td>
                                                            <input type="email" name="email_auto" class="form-control"
                                                                value="<?=$chinhapi['email_auto'];?>">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Hotline</td>
                                                        <td>
                                                            <input type="text" name="sdt_admin" class="form-control"
                                                                value="<?=$chinhapi['sdt_admin'];?>">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Facebook</td>
                                                        <td>
                                                            <input type="text" name="fb_admin" class="form-control"
                                                                value="<?=$chinhapi['fb_admin'];?>">
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td>Telegram</td>
                                                        <td>
                                                            <input type="text" name="telegram_admin" class="form-control"
                                                                value="<?=$chinhapi['telegram_admin'];?>">
                                                        </td>
                                                    </tr>
                                                    
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table
                                                class="table table-bordered table-striped table-hover table-module mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>Copyright</td>
                                                        <td>
                                                            <input type="text" name="banquyen" class="form-control"
                                                                value="<?=$chinhapi['banquyen'];?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Website Status:</td>
                                                        <td>
                                                            <select class="form-control" name="status" id="status">
                                                                <option value="ON" selected>
                                                                    ONLINE
                                                                </option>
                                                                <option value="OFF">
                                                                    OFFLINE
                                                                </option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bật thông báo trang chủ</td>
                                                        <td>
                                                            <select class="form-control" name="globalpopup"
                                                                id="globalpopup">

                                                                <option value="ON" selected>

                                                                    Bật
                                                                </option>
                                                                <option value="OFF">
                                                                    Tắt
                                                                </option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2"><textarea id="notice_popup" name="notice_popup"
                                                                class="form-control" placeholder="Nội dung Popup"> <?=$chinhapi['thongbao'];?>
</textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mt-4">
                                              <button name="submit" type="submit" class="btn btn-info btn-block">LƯU THAY
                                 ĐỔI</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                            <div class="tab tab-pane fade" id="connection">
                                <form action="/admin/setting.php" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table
                                                class="table table-bordered table-striped table-hover table-module mb-0">
                                                <tbody>

                                                    <tr>
                                                        <td>Google recaptcha key [reCAPTCHA v2]:</td>
                                                        <td>
                                                            <input type="text" name="data_sitekey" class="form-control"
                                                                value="<?=$chinhapi['data_sitekey'];?>">
                                                            <a target="_blank" href="#">Bỏ trống nếu không cần dùng, nó
                                                                chỉ cần thiết khi có người spam tạo clone</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Google recaptcha secret [reCAPTCHA v2]:</td>
                                                        <td>
                                                            <input type="text" name="data_secret" value="<?=$chinhapi['data_secret'];?>"
                                                                class="form-control">
                                                            <a target="_blank" href="#">Bỏ trống nếu không cần dùng, nó
                                                                chỉ cần thiết khi có người spam tạo clone</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="mt-4">
                                              
                                                      <button name="submit1" type="submit" class="btn btn-info btn-block">LƯU THAY
                                 ĐỔI</button>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                            <div class="tab tab-pane fade" id="additional">
                                <form action="#" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <table
                                                class="table table-bordered table-striped table-hover table-module mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>Token bot telegram admin [Nhận Noti website] </td>
                                                        <td>
                                                            <input type="text" name="token_tele"
                                                                class="form-control"
                                                                value="<?=$chinhapi['token_tele'];?>">
                                                            <i> </i>
                                                            <a target="_blank"
                                                                href="https://huongdan.cytrontech.vn/how-to-create-a-telegram-bot-get-the-api-key-and-chat-id.html">Xem
                                                                hướng dẫn</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chat ID tele telegram admin[Nhận Noti website]</td>
                                                        <td>
                                                            <input type="text" name="id_tele"
                                                                class="form-control" value="<?=$chinhapi['id_tele'];?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email smtp(Không cần thiết lắm)</td>
                                                        <td>
                                                            <input type="text" name="email_auto" class="form-control"
                                                                value="<?=$chinhapi['email_auto'];?>">
                                                            <a target="_blank"
                                                                href="https://wpseo.vn/huong-dan-lay-mat-khau-gmail-smtp/">Xem
                                                                hướng dẫn</a>
                                                        </td>
                                                    </tr>
                                                    </tr>
                                                    <tr>
                                                        <td>Password email smtp(Không cần thiết lắm)</td>
                                                        <td>
                                                            <input type="text" name="pass_mail_auto" class="form-control"
                                                                value="<?=$chinhapi['pass_mail_auto'];?>">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="mt-4">
                                                <button name="SaveSettings_system" type="submit"
                                                    class="btn btn-primary btn-lg">Lưu cấu hình</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>

            CKEDITOR.replace("notice_popup");

        </script>



        <div class="cpanel-footer">
            <div class="cpanel-wrap">
                <div class="text-center">
                    Copyright © 2023-2024 <a href="https://thepay.vn">thepay.vn</a>. All rights reserved. Software
                    version 6.0

                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>