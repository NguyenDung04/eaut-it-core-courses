<?php require_once('head.php');?>
<title>Trang Quản Trị | Dashboard</title>
<?php
if (isset($_GET['del'])) {
    $del = $_GET['del'];
    echo '<script> if (confirm("Bạn có chắc muốn xoá server này")) {
        window.location="?delete='.$del.'";
    } else {
        alert("Đã huỷ");
        window.location="?ok";
    }
    </script>';
}
?>

<?php
if (isset($_GET['delete'])) 
{
    $delete = $_GET['delete'];

    $create = mysqli_query($ketnoi,"DELETE FROM `list_server_host` WHERE `id` = '".$delete."' ");

    if ($create)
    {
      echo '<script type="text/javascript">swal("Thành Công","Xóa thành công","success");setTimeout(function(){ location.href = "chuyen-muc.php" },500);</script>'; 
    }
    else
    {
      echo '<script type="text/javascript">swal("Lỗi","Lỗi máy chủ","error");setTimeout(function(){ location.href = "chuyen-muc.php" },1000);</script>'; 
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
                <img src="https://there24h.com/assets/storage/images/image_9U0MR.png" height="16" width="90"
                    class="img-fluid" alt="">
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
                                Danh sách sever hosting </div>
                        </div>
                        <div class="cpanel-heading_links">
                            
                            <a href="add-server-host.php">
                                <i class="fas fa-cogs"></i>
                                Thêm Sever Hosting
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
                        <form action="/admin/listseverhost.php" name="formSearch" method="GET">
                            <div class="row row5 rowmb3">
                                <div class="col-lg col-md-3 col-6">
                                    <input class="form-control" value="" name="account_num" placeholder="Name Sever">
                                </div>

                               
                                <div class="col-lg col-md-3 col-6">
                                    <select name="approved" class="form-control">
                                        <option value="" selected="selected">-- Trạng thái --</option>

                                        <option value="OFF">Hoạt Động</option>
                                        <option value="ON">Tạm Dừng</option>
                                    </select>
                                </div>
                               

                                <div class="col-12 col-md flex-lg-grow-0 d-flex align-items-center px-0">
                                    <button class="btn btn-primary btn-small m-1 my-md-0" type="submit" name="submit"
                                        value="filter">
                                        <span class="fal fa-search"></span>
                                        Tìm kiếm
                                    </button>
                                    <button class="btn btn-success btn-small m-1 my-md-0" type="submit" name="submit"
                                        value="excel">
                                        <i class="fas fa-file-excel"></i>
                                    </button>
                                    <a class="btn btn-danger btn-small m-1 my-md-0"
                                        href="/admin/listseverhost.php">
                                        <i class="fa fa-trash"></i>
                                        Bỏ lọc
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <form action="/admin/listseverhost.php"
                    onsubmit="return confirm('Bạn có chắc chắn thực hiện hành động này?');" method="POST">
                    <input type="hidden" name="_token" value="1QwzSMJh1YeafrNAs5uAO8xSFSj836jtaZzKcTp5">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover table-module mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        <input type="checkbox" class="mt-1 check-all" value="">
                                    </th>
                                    <th>id</th>
                                    <th>Name Server</th>
                                    <th>Ip Sever</th>
                                    <th>Status</th>
                                    <th>Ngày Thêm </th>
                                    <th>Thao Tác</th>

                                </tr>
                            </thead>
                            <tbody>
 <?php
                                                $result = mysqli_query($ketnoi,"SELECT * FROM `list_server_host` ");
                                                while($row = mysqli_fetch_assoc($result))
                                                {
                                                ?>
                                <tr>
                                    <td class="text-center">
                                        <input type="checkbox" class="mt-1 check-only" name="check[]" value="1">
                                    </td>
                                    <td><?=$row['id'];?></td>
                                    <td><?=$row['name_server'];?></td>
                                    <td><?=$row['ip_whm'];?></td>
                                    <td><?=$row['status'];?></td>
                                    <td><?=ngay($row['time']);?></td>
                                    <td>
                                                        <a href="edit-server-host.php?id=<?=$row['id'];?>"
                                                            class="btn btn-default">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>
                                                        <a href="?del=<?=$row['id'];?>" class="btn btn-default">
                                                            <i class="fas fa-trash"></i> Delete
                                                        </a>
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
                                                <option value="" selected="selected">Hành động</option>
                                                <option value="approved">Bật phê duyệt</option>
                                                <option value="unapproved">Bỏ phê duyệt</option>
                                                <option value="delete">Xóa đã chọn</option>
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



            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->

</div>
<script type="text/javascript">
    function RemoveRow(id, name) {
        cuteAlert({
            type: "question",
            title: "CẢNH BÁO",
            message: "Bạn có chắc chắn muốn xóa ngân hàng " + name + " không ?",
            confirmText: "Đồng Ý",
            cancelText: "Hủy"
        }).then((e) => {
            if (e) {
                postRemove(id);
                location.reload();
            }
        })
    }


    function postRemove(id) {
        $.ajax({
            url: "https://there24h.com/backend/localbank/controllers/delete-localbank.php",
            type: 'POST',
            dataType: "JSON",
            data: {
                id: id
            },
            success: function (response) {
                if (response.status == 'success') {
                    cuteToast({
                        type: "success",
                        message: "Đã xóa thành công item " + id,
                        timer: 3000
                    });
                } else {
                    cuteToast({
                        type: "error",
                        message: "Đã xảy ra lỗi khi xoá item " + id,
                        timer: 5000
                    });
                }
            }
        });
    }

</script>




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