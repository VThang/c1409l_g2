<?php
require_once '../../include/config.php';
require_once '../../include/functions.php';
require_once '../../include/process.php';
require_once './session.php';

function update_bannerhome() {
    $configvalue1 = post('banner_home1');
    $configsubvalue1 = post('banner_sub_home1');
    $configinfovalue1 = post('info_banner_home1');
    
    save_value_config('banner_home1', $configvalue1);
    save_value_config('info_banner_home1', $configinfovalue1);
    save_sub_value_config2('banner_home1', $configsubvalue1);
    
    
    $configvalue2 = post('banner_home2');
    $configsubvalue2 = post('banner_sub_home2');
    $configinfovalue2 = post('info_banner_home2');
    save_value_config('banner_home2', $configvalue2);
    save_value_config('info_banner_home2', $configinfovalue2);
    save_sub_value_config2('banner_home2', $configsubvalue2);
    
    
    $configvalue3 = post('banner_home3');
    $configsubvalue3 = post('banner_sub_home3');
    $configinfovalue3 = post('info_banner_home3');
    save_value_config('banner_home3', $configvalue3);
    save_value_config('info_banner_home3', $configinfovalue3);
    save_sub_value_config2('banner_home3', $configsubvalue3);
    
    $configvalue4 = post('banner_home4');
    $configsubvalue4 = post('banner_sub_home4');
    $configinfovalue4 = post('info_banner_home4');
    save_value_config('banner_home4', $configvalue4);
    save_value_config('info_banner_home4', $configinfovalue4);
    save_sub_value_config2('banner_home4', $configsubvalue4);
    
    redirect('../banner_home.php');
}

function update_bannerfooter() {
    $configvalue = post('banner_footer');
    save_value_config('banner_footer', $configvalue);
    
    redirect('../logo.php');
}

function update_headerlogo() {
    $configvalue = post('logo_header');
    
    save_value_config('logo_header', $configvalue);
    
    redirect('../logo.php');
}