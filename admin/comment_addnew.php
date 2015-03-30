<?php
require_once './process/_inc.php';
require_once './inc_checklogin.php';
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
        <script type="text/javascript" src="js/validateform.js"></script>
    </head>
    <?php
    include_once './inc_header.php';

    $product_query = "SELECT * FROM `product`";
    $product_result = execute_query($product_query);
    ?>
    <form action="process/comment.php?do=add_new" method="post" onsubmit="return validate()">
        <table class="table hovered">
            <tr>
                <th>
                    Product ID
                </th>
                <td>
                    <select name="product_id">
                        <?php while ($product_row = mysqli_fetch_assoc($product_result)) { ?>
                        <option value="<?php echo $product_row['product_id']; ?>"><?php echo $product_row['title']; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>
                    Email
                </th>
                <td>
                    <input type="email" id="email" value="" name="email" />
                </td>            
            </tr>
            <tr>
                <th>
                    Title
                </th>
                <td>
                    <input type="text" id="title" value="" name="title" />
                </td>            
            </tr>
            <tr>
                <th>
                    Content
                </th>
                <td>
                    <input type="text" id="content" value="" name="content" />
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

    <script type="text/javascript">
        function validate() {
            msg = "";
            msg += validateRequire("content");
            //msg += validateEmail("email");
            msg += validateRequire("email");
            msg += validateRequire("title");

            if (msg != "") {
                $("#error-msg").html(msg);
                return false;

            } else {
                return true;
            }
        }
    </script> 

    <?php
    include_once './inc_footer.php';
    ?>