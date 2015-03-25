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

    $product_query = "SELECT * FROM `category`";
    $product_result = execute_query($product_query);
    ?>
    
    <style>
        #error-msg p{color:red}
    </style>
    <div id="error-msg">
    </div>
    
    <form action="process/product.php?do=add_new" method="post" onsubmit="return validate()">
        <table class="table hovered">
            <tr>
                <th>
                    Title
                </th>
                <td>
                    <input type="text" value="" name="title" id="title" alt="Title" />
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
                    Category
                </th>
                <td>
                    <select name="cate_id">
                        <?php
                        while ($product_row = mysqli_fetch_assoc($product_result)) {
                            ?>
                        <option value="<?php echo $product_row['cate_id'] ?>"><?php echo $product_row['cate_name'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
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

    
    <script type="text/javascript">
        function validate(){
            msg ="";
            msg += validateRequire("title");
            
            msg += validateEmail("title");
            
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