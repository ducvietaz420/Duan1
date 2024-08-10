<?php
ob_start();
session_start();
include './admin/includes/connect.php';
include 'display/header.php';

?>


<div class="motopress-wrapper content-holder clearfix">
    <div class="container">
        <div class="row">
            <div class="span12" data-motopress-wrapper-file="page-home.php" data-motopress-wrapper-type="content">
                <div class="row">
                    <div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-slider.php">
                        <div id="slider-wrapper" class="slider">
                            <div class="container">

                            </div>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($_REQUEST['page'])) {
                    $page = $_REQUEST['page'];
                    switch ($page) {
                        case "contact";
                            include 'display/contact.php';
                            break;

                        case "login";
                            include 'display/login.php';
                            break;
                        case "logout";
                            include 'display/logout.php';
                            break;
                        case "lichtrinh";
                            include 'display/lichtrinh.php';
                            break;
                        case "gioithieu";
                            include 'display/gioithieu.php';
                            break;
                        case "dichvu";
                            include 'display/dichvu.php';
                            break;
                        case "phieudatve";
                            include 'display/phieudatve.php';
                            break;

                        case 'lichsugd';
                            include "display/lichsugd.php";
                            break;
                    }
                } else {
                    include 'display/center.php';
                }

                ?>

                <?php
                include 'display/footer.php';
                ?>