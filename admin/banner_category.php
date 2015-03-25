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
        <title>Admin ControlPanel</title>
        <meta content="../images/favicon128.png" itemprop="image">
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

    $viewquery = "SELECT * FROM `config` WHERE `config_key` LIKE '%_product_%'";
    $viewresult = execute_query($viewquery);
    $viewrow = mysqli_fetch_assoc($viewresult);

    $cate_query = "SELECT * FROM `category`";
    $cate_result = execute_query($cate_query);
    
    $cate_id = post('cateid');
    echo $cate_id;
    ?>

    <script>
        function previewImg(id) {
            var imgUrl = "../" + document.getElementById(id).value;

            var myWindow = window.open(imgUrl, "imgPre", "width=500");
        }
    </script>


    <form action="banner_category.php" method="post">
        <table class="hovered">
            <tr>
                <th>
                    Select category
                </th>
                <td>
                    <select name="cateid">
                        <?php while ($cate_row = mysqli_fetch_assoc($cate_result)) { ?>
                            <option value="<?php echo $cate_row['cate_id'] ?>"><?php echo $cate_row['cate_name'] ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input class="info" type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>






    <?php
    include_once 'inc_footer.php';
    ?>