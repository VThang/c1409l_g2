<?php
require './process/_inc.php';
require_once './inc_checklogin.php';
// tao ra query, phai chay trong navicat truoc
$query1 = "SELECT * FROM `admin`";

// mysql
$result = execute_query($query1);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/metro-bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/global_admin.css" />
        <link rel="stylesheet" type="text/css" href="css/iconFont.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
        <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="js/jquery.widget.min.js"></script>
        <script type="text/javascript" src="js/metro.min.js"></script>
        <script src="ckeditor/ckeditor.js"></script>
    </head>
    <?php
    include_once './inc_header.php';

    $viewquery = "SELECT * FROM `config` WHERE `config_key` LIKE '%banner_home%'";
    $viewresult = execute_query($viewquery);
    $row = mysqli_fetch_assoc($viewresult);

    get_value_config('banner_home1');
    ?>

    <script>
        function previewImg(id){
            var imgUrl = "../" + document.getElementById(id).value;
            
             var myWindow = window.open(imgUrl, "imgPre", "width=500");
        }
    </script>
    <form style="width: 100%;" action="process/config.php?do=update_bannerhome" method="post">
        <table class="table hovered" style="position: relative; float: left;">
            <tr>
                <th>Banner #1</th>
                <td><input type="text"  name="banner_home1" id="banner_home1"
                           value="<?php echo get_value_config('banner_home1'); ?>" />
                </td>
                <td>
                    <button class="info" type="button" onclick="previewImg('banner_home1')">Preview</button>
                </td>
            </tr>
            <tr>
                <th>Sub Banner #1</th>
                <td><input type="text"  name="banner_sub_home1" id="banner_sub_home1"
                           value="<?php echo get_sub_value_config('banner_home1'); ?>" />
                </td>
                <td>
                    <button class="info" type="button" onclick="previewImg('banner_sub_home1')">Preview</button>
                </td>
            </tr>
            <tr>
                <th>Banner Info #1</th>
                <td>
                    <textarea name="info_banner_home1" id="editor1" rows="10" cols="80">
                        <?php echo get_value_config('info_banner_home1'); ?>
                    </textarea>
                    <script>
                        CKEDITOR.replace('info_banner_home1');
                    </script>   
                </td>
            </tr>
        </table>
        <table class="table hovered" style="position: relative; float: left;">
            <tr>
                <th>Banner #2</th>
                <td><input type="text"  name="banner_home2" id="banner_home2"
                           value="<?php echo get_value_config('banner_home2'); ?>" />
                </td>

                <td>
                    <button class="info" type="button" onclick="previewImg('banner_home2')">Preview</button>
                </td>
            </tr>
            <tr>
                <th>Sub Banner #2</th>
                <td><input type="text"  name="banner_sub_home2" id="banner_sub_home2"
                           value="<?php echo get_sub_value_config('banner_home2'); ?>" />
                </td>
                <td>
                    <button class="info" type="button" onclick="previewImg('banner_sub_home2')">Preview</button>
                </td>
            </tr>
            <tr>
                <th>Banner Info #2</th>
                <td>
                    <textarea name="info_banner_home2" id="editor1" rows="10" cols="80">
                        <?php echo get_value_config('info_banner_home2'); ?>
                    </textarea>
                    <script>
                        CKEDITOR.replace('info_banner_home2');
                    </script>  
                </td>

                <td>
                    
                </td>
            </tr>
        </table>
        <table class="table hovered" style="position: relative; float: left;">
            <tr>
                <th>Banner #3</th>
                <td><input type="text"  name="banner_home3" id="banner_home3"
                           value="<?php echo get_value_config('banner_home3'); ?>" /></td>
                <td>
                    <button class="info" type="button" onclick="previewImg('banner_home3')">Preview</button>
                </td>
            </tr>
            <tr>
                <th>Sub Banner #3</th>
                <td><input type="text"  name="banner_sub_home3" id="banner_sub_home3"
                           value="<?php echo get_sub_value_config('banner_home3'); ?>" />
                </td>
                <td>
                    <button class="info" type="button" onclick="previewImg('banner_sub_home3')">Preview</button>
                </td>
            </tr>
            <tr>
                <th>Banner Info #3</th>
                <td>
                    <textarea name="info_banner_home3" id="editor1" rows="10" cols="80">
                        <?php echo get_value_config('info_banner_home3'); ?>
                    </textarea>
                    <script>
                        CKEDITOR.replace('info_banner_home3');
                    </script>   
                </td>
                <td>
                    
                </td>
            </tr>
        </table>
        <table class="table hovered" style="position: relative; float: left;">
            <tr>
                <th>Banner #4</th>
                <td><input type="text"  name="banner_home4" id="banner_home4"
                           value="<?php echo get_value_config('banner_home4'); ?>" /></td>
                <td>
                    <button class="info" type="button" onclick="previewImg('banner_home4')">Preview</button>
                </td>
            </tr>
            <tr>
                <th>Sub Banner #4</th>
                <td><input type="text"  name="banner_sub_home4" id="banner_sub_home4"
                           value="<?php echo get_sub_value_config('banner_home4'); ?>" />
                </td>
                <td>
                    <button class="info" type="button" onclick="previewImg('banner_sub_home4')">Preview</button>
                </td>
            </tr>
            <tr>
                <th>Banner Info #4</th>
                
                <td>
                    <textarea name="info_banner_home4" id="editor1" rows="10" cols="80">
                        <?php echo get_value_config('info_banner_home4'); ?>
                    </textarea>
                    <script>
                        CKEDITOR.replace('info_banner_home4');
                    </script>   
                </td>
                
                <td>
                    
                </td>
            </tr>
        </table>

        <tr>
            <th colspan="2"><input class="info" type="submit" value="Update" /></th>
        </tr>

    </form>
    <?php
    include_once 'inc_footer.php';
    ?>