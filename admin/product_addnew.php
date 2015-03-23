<?php
require_once './process/_inc.php';
require_once './inc_checklogin.php';
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
    </head>
    <?php
    include_once './inc_header.php';
    ?>
    <form action="process/product.php?do=add_new" method="post">
        <table class="table hovered">
            <tr>
                <th>
                    Title
                </th>
                <td>
                    <input type="text" value="" name="title" />
                </td>
            </tr>
            <tr>
                <th>
                    Price
                </th>
                <td>
                    <input type="number" value="" name="price" />
                </td>            
            </tr>
            <tr>
                <th>
                    Category ID
                </th>
                <td>
                    <input type="text" value="" name="cate_id" required="" />
                </td>            
            </tr>
            <tr>
                <th>
                    Release Date
                </th>
                <td>
                    <input type="date" value="" name="release_date" />
                </td>            
            </tr>
            <tr>
                <th>
                    Product Details
                </th>
                <td>
                    <input type="text" value="" name="product_details" />
                </td>            
            </tr>
            <tr>
                <th>
                    Image 1
                </th>
                <td>
                    <input type="text" value="" name="image1" />
                </td>            
            </tr>
            <tr>
                <th>
                    Image 2
                </th>
                <td>
                    <input type="text" value="" name="image2" />
                </td>            
            </tr>
            <tr>
                <th>
                    Image 3
                </th>
                <td>
                    <input type="text" value="" name="image3" />
                </td>            
            </tr>
            <tr>
                <th>
                    Image 4
                </th>
                <td>
                    <input type="text" value="" name="image4" />
                </td>            
            </tr>
            <tr>
                <th>
                    Image 5
                </th>
                <td>
                    <input type="text" value="" name="image5" />
                </td>            
            </tr>
            <tr>
                <td>
                    <input class="info" type="submit" value="Submit" />
                </td> 
                <td>
                    <input type="reset" value="Cancel" />
                </td>
            </tr>
        </table>
    </form>







    <?php
    include_once './inc_footer.php';
    ?>