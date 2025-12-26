<?php require $_SERVER['DOCUMENT_ROOT'].'/hethong/config.php';?>
<?php
    if(empty($_SESSION['admin'])){
        header("Location: /auth/login");
        exit();
    }
?>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>https://there24h.com/admin/system/settings</title>
    <meta name="description" content="https://there24h.com/admin/system/settings">
    <link rel="icon" href="https://there24h.com/logo">
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://there24h.com/assets/storage/images/image_2JMGN.png" />
    <link rel="apple-touch-icon" href="https://there24h.com/logo">
    <meta name="robots" content="noindex,nofollow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://there24h.com/public/admin/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://there24h.com/public/admin/plugins/bootstrap-flatpickr/bootstrap-flatpickr.min.css">
    <link rel="stylesheet" href="https://there24h.com/public/admin/plugins/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="https://there24h.com/public/admin/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="https://there24h.com/public/admin/fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://there24h.com/public/admin/css/style.css">
    <link rel="stylesheet" href="https://there24h.com/public/cute-alert/style.css">
    <script src="https://there24h.com/public/cute-alert/cute-alert.js"></script>
    <style>
        :root {
            --template-color: #3c444d;
            --template-hover: #2c3138;
            --primary-color: #20a53a;
            --primary-hover: #20a53a;
            --primary-rgb: 32, 165, 58;
        }
    </style>
    <script type="text/javascript" src="https://there24h.com/public/admin/plugins/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://there24h.com/public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="https://there24h.com/public/admin/plugins/bootstrap-flatpickr/bootstrap-flatpickr.js"></script>
    <script type="text/javascript"
        src="https://there24h.com/public/admin/plugins/bootstrap-flatpickr/bootstrap-flatpickr-vn.js"></script>
    <script type="text/javascript"
        src="https://there24h.com/public/admin/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript" src="https://there24h.com/public/admin/plugins/select2/js/select2.min.js"></script>
    <script type="text/javascript" src="https://there24h.com/public/admin/js/app.js"></script>
    <script src="https://there24h.com/public/admin/js/clipboard.min.js" type="text/javascript"></script>
    <script src="https://there24h.com/public/ckeditor/ckeditor.js"></script>
    <script src="https://kit.fontawesome.com/e7c05d7f02.js"></script>
     
    
    </head>