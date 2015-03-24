<?php
require_once '../../include/config.php';
require_once '../../include/functions.php';
require_once '../../include/process.php';
require_once './session.php';

function update_bannerhome() {
    $configvalue = post('banner_home1');
    save_value_config('banner_home1', $configvalue);
    
    $configvalue = post('banner_home2');
    save_value_config('banner_home2', $configvalue);
    
    $configvalue = post('banner_home3');
    save_value_config('banner_home3', $configvalue);
    
    $configvalue = post('banner_home4');
    save_value_config('banner_home4', $configvalue);
    
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