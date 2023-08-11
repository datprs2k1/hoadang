<?php

require_once('./systems/bootstrap.php');

?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta property="og:locale" content="vi_VN">
    <meta property="og:site_name" content="<?= $title ?>">
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:description" content="<?= $title ?>">
    <meta property="og:url" content="<?= SITE_URL ?>">
    <meta property="og:image" content="<?= SITE_URL ?>/assets/images/favicon.png">
    <meta property="og:image:alt" content="<?= $title ?>">
    <title><?= $title ?></title>

    <link rel="shortcut icon" href="<?= SITE_URL ?>/assets/images/favicon.png?v=<?= VERSION ?>" />
    <link rel="stylesheet" href="<?= SITE_URL ?>/assets/styles/app.css?v=<?= VERSION ?>" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cropperjs/dist/cropper.min.css">
    <script type="text/javascript" src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/cropperjs/dist/cropper.min.js"></script>
    <script src="<?= SITE_URL ?>/assets/js/app.js?v=<?= VERSION ?>"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-100">