<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Paygames</title>
        <link href="css/global.css" type="text/css" rel="stylesheet" media="all" />
        <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" media="all" />
        <script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
        <script src="js/unslider.js" type="text/javascript"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:800|Roboto&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
    </head>
    <?php
    require_once 'header.php';
    ?>
    <div class="banner" style="margin: 0px; padding: 0px;">
        <ul style="width: 400%; position: relative; left: -300%; height: 400px;margin: 0px; padding: 0px;">
            <li style="width: 25%;height: 400px; background-image: url('<?php $i = rand (1,2); echo( $i == 1 ?  get_value_config('banner_home1') : get_sub_value_config('banner_home1') ); ?>'); background-size: 100% 100%;">
                <?php 
                    echo get_value_config('info_banner_home1');
                ?>
            </li>

            <li style="width: 25%;height: 400px; background-image: url('<?php $i = rand (1,2); echo( $i == 1 ?  get_value_config('banner_home2') : get_sub_value_config('banner_home2') ); ?>'); background-size: 100% 100%;">
                <?php 
                    echo get_value_config('info_banner_home2');
                ?>
            </li>

            <li style="width: 25%;height: 400px; background-image: url('<?php $i = rand (1,2); echo( $i == 1 ?  get_value_config('banner_home3') : get_sub_value_config('banner_home3') ); ?>'); background-size: 100% 100%;">
                <?php 
                    echo get_value_config('info_banner_home3');
                ?>
            </li>

            <li style="width: 25%;height: 400px; background-image: url('<?php $i = rand (1,2); echo( $i == 1 ?  get_value_config('banner_home4') : get_sub_value_config('banner_home4') ); ?>'); background-size: 100% 100%;">
                <?php 
                    echo get_value_config('info_banner_home4');
                ?>
            </li>
        </ul>
    </div>

    <div class="container">
        <div id="container-main-content">

        </div>
        <div id="content">
            <div id="main-game">
            </div>
        </div>
    </div>

    <script>
        $(function () {
            $('.banner').unslider({
                keys: true,
                dots: true,
                speed: 300,
                delay: 3000,
                fluid: true
            });
        });
    </script>

    <?php
    require_once 'footer.php';
    ?>