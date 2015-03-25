<?php
$username = $_SESSION["username"];
$query = "SELECT * FROM `admin` WHERE `username`='$username'";
$adminresult = execute_query($query);
?>

<body class="metro">
    <div class="container">
        <div id="left" style="position: initial;">
            <div class="sidebar dark" style="width: 200px; position: fixed;">
                <ul>
                    <li class="title">&nbsp;&nbsp;PAYGAMESVN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <li class="active"><a href="dashboard.php"><i class="icon-home"></i>Dashboard</a></li>
                    <li class="title"><i class="icon-database"></i> Database</li>
                    <li class="stick bg-yellow">
                        <a class="dropdown-toggle" href="#"><i class="icon-user-3"></i>Administrator</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="admin_list.php">ADMIN List</a></li>
                            <li><a href="admin_addnew.php">Add new ADMIN</a></li>
                        </ul>
                    </li>
                    <li class="stick bg-yellow">
                        <a class="dropdown-toggle" href="#"><i class="icon-cabinet"></i>Product Category</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="category_list.php">Category List</a></li>
                            <li><a href="category_addnew.php">Add new Category</a></li>
                        </ul>
                    </li>
                    <li class="stick bg-yellow">
                        <a class="dropdown-toggle" href="#"><i class="fa fa-gamepad"></i>&nbsp;&nbsp;&nbsp;Product</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="product_list.php">Product List</a></li>
                            <li><a href="product_addnew.php">Add new Product</a></li>
                        </ul>
                    </li>
                    <li class="stick bg-yellow">
                        <a class="dropdown-toggle" href="#"><i class="fa fa-users"></i>&nbsp;&nbsp;&nbsp;Customer</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="customer_list.php">Customer List</a></li>
                            <li><a href="customer_addnew.php">Add new Customer</a></li>
                        </ul>
                    </li>
                    <li class="stick bg-yellow">
                        <a class="dropdown-toggle" href="#"><i class="fa fa-money"></i>&nbsp;&nbsp;&nbsp;Order</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="order_list.php">Order List</a></li>
                            <li><a href="order_addnew.php">Add new Order</a></li>
                        </ul>
                    </li>
                    <li class="stick bg-yellow">
                        <a class="dropdown-toggle" href="#"><i class="icon-comments-4"></i>Comment</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="comment_list.php">Comment List</a></li>
                            <li><a href="comment_addnew.php">Add new comment</a></li>
                        </ul>
                    </li>
                    <li class="stick bg-yellow">
                    <li class="title dropdown-toggle" style="cursor: pointer;" id="email" href="#"><i class="fa fa-envelope-o"></i>&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <ul class="dropdown-menu" data-role="dropdown">
                        <li><a href="">Subitem 1</a></li>
                        <li><a href="">Subitem 2</a></li>
                        <li><a href="">Subitem 3</a></li>
                    </ul>
                    
                    <li class="title"><i class="icon-cog"></i> Config</li>
                    <li class="stick bg-yellow">
                        <a class="dropdown-toggle" href="#"><i class="icon-pictures"></i>Banner</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="banner_home.php">Home banner</a></li>
                            <li><a href="banner_category.php">Category banner</a></li>
                            <li><a href="logo.php">Logo Setting</a></li>
                        </ul>
                    </li>
                    <li><a href="../eXtplorer/index.php"><i class="icon-upload-2"></i>Upload tools</a></li>
                </ul>
            </div>
        </div>
        <div id="right">
            <nav id="top">
                <nav class="navigation-bar dark">
                    <span class="element-divider"></span>
                    <nav class="navigation-bar-content">
                        <div class="element" id="cp">
                            <a class="dropdown-toggle" href="#">ADMIN CONTROLPANEL</a>
                            <ul class="dropdown-menu" data-role="dropdown">
                                <li><a href="#">Home Page</a></li>
                                <li class="divider"></li>
                                <li><a href="process/admin.php?do=logout">Logout</a></li>
                            </ul>
                        </div>
                        <span class="element-divider" style=""></span>
                        <span class="element-divider place-right"></span>
                        <button class="element image-button image-left place-right">
                            <?php
                            $row = mysqli_fetch_assoc($adminresult);
                            $adminame = $row["Fullname"];
                            print_r($adminame);
                            ?>
                            <img src="../images/loader_gif.gif"/>
                        </button>
                    </nav>
                </nav>
            </nav>
            <main>