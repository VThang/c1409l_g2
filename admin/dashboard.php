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
        <link rel="stylesheet" type="text/css" href="css/dashboard.css" />
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
    <main>
        <div class="tile-area">
            <div class="tile-group six">
                <div class="tile double double-vertical bg-cobalt" data-click="transform">
                    <a href="admin_list.php">
                        <div class="tile-content icon">
                            <i class="icon-user-3"></i>
                        </div>
                        <div class="brand bg-black">
                            <span class="label fg-white">Administrator</span>
                            <div class="badge bg-darkRed paused"></div>
                        </div>
                    </a>
                </div>

                <div class="tile double bg-cyan" data-click="transform">
                    <a href="product_list.php">
                        <div class="tile-content icon">
                            <i class="icon-cabinet"></i>
                        </div>
                        <div class="brand bg-black">
                            <span class="label fg-white">Product Category</span>
                            <div class="badge bg-darkRed paused"></div>
                        </div>
                    </a>
                </div>
                <div class="tile double bg-amber" data-click="transform">
                    <a href="product_list.php">
                        <div class="tile-content icon">
                            <i class="icon-target-2"></i>
                        </div>
                        <div class="brand bg-black">
                            <span class="label fg-white">Product</span>
                            <div class="badge bg-darkRed paused"></div>
                        </div>
                    </a>
                </div>
                <div class="tile bg-lightGreen" data-click="transform">
                    <a href="customer_list.php">
                        <div class="tile-content icon">
                            <i class="icon-user-2"></i>
                        </div>
                        <div class="brand bg-black">
                            <span class="label fg-white">Customer</span>
                            <div class="badge bg-darkRed paused"></div>
                        </div>
                    </a>
                </div>
                <div class="tile bg-indigo" data-click="transform">
                    <a href="comment_list.php">
                        <div class="tile-content icon">
                            <i class="icon-comments-4"></i>
                        </div>
                        <div class="brand bg-black">
                            <span class="label fg-white">Comment</span>
                            <div class="badge bg-darkRed paused"></div>
                        </div>
                    </a>
                </div>
                <br/>
                <div class="tile double bg-steel" data-click="transform">
                    <a href="order_list.php">
                        <div class="tile-content icon">
                            <i class="icon-cart"></i>
                        </div>
                        <div class="brand bg-black">
                            <span class="label fg-white">Order</span>
                            <div class="badge bg-darkRed paused"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="tile-area">

            <div class="tile-group six">
                <div class="tile double-vertical bg-cyan" data-click="transform">
                    <a href="email_admin_send.php">
                        <div class="tile-content icon">
                            <i class="icon-mail"></i>
                        </div>
                        <div class="brand bg-black">
                            <span class="label fg-white">Send Email</span>
                            <div class="badge bg-darkRed paused"></div>
                        </div>
                    </a>
                </div>

                <div class="tile double-vertical bg-indigo" data-click="transform">
                    <a href="logo.php">
                        <div class="tile-content icon">
                            <i class="icon-calendar"></i>
                        </div>
                        <div class="brand bg-black">
                            <span class="label fg-white">Logo Setting</span>
                            <div class="badge bg-darkRed paused"></div>
                        </div>
                    </a>
                </div>

                <div class="tile double double-vertical bg-crimson" data-click="transform">
                    <a href="../eXtplorer/index.php">
                        <div class="tile-content icon">
                            <i class="icon-upload-2"></i>
                        </div>
                        <div class="brand bg-black">
                            <span class="label fg-white">Upload tools</span>
                            <div class="badge bg-darkRed paused"></div>
                        </div>
                    </a>
                </div>

                <div class="tile double bg-darker" data-click="transform">
                    <a href="banner_home.php">
                        <div class="tile-content icon">
                            <i class="icon-bookmark-2"></i>
                        </div>
                        <div class="brand bg-black">
                            <span class="label fg-white">Home Banner</span>
                            <div class="badge bg-darkRed paused"></div>
                        </div>
                    </a>
                </div>

                <div class="tile double bg-darkTeal" data-click="transform">
                    <a href="banner_category.php">
                        <div class="tile-content icon">
                            <i class="icon-bookmark"></i>
                        </div>
                        <div class="brand bg-black">
                            <span class="label fg-white">Banner Category</span>
                            <div class="badge bg-darkRed paused"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <?php
        include_once './inc_footer.php';
        ?>