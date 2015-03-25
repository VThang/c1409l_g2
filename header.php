<?php
require_once './include/config.php';
require_once './include/functions.php';
require_once './include/process.php';

$nav_query = "SELECT * FROM `category`";
$nav_result = execute_query($nav_query);
?>
<body>
    <div id="base-background" class="">
        <div class="video-container show">
            <video id="background-video" autoplay="" loop="" name="media" preload="auto">
                <source media="screen" src="media/final.webm" type="video/webm">
                <source media="screen" src="media/final.ogg" type="video/ogg">
                <source media="screen" src="media/final.ogg" type="video/mp4">
            </video>
        </div>
    </div>
    <header>
        <div class="other-header">
            <div class="container">
                <div id="welcome-top" style="position: relative; height: 32px;">
                    <div style="position: relative; padding-top: 5px; padding-bottom: auto;">
                        <a class="link" style="font-size: 1.3em;" href="home.php">WELCOME TO paygames</a>
                    </div>
                </div>
                <div id="other-top" class="right-text">
                    <ul class="list-inline right-text" style="overflow: hidden">
                        <li>
                            <form action="process/search.php?do=select" method="post">
                                Search: 
                                <input type="text" name="s_query" id="search" style="line-height: 0.8em"/>
                                <select name="filter">
                                    <option value="title">Title</option>
                                    <option value="cate_name">Category</option>
                                </select>
                                <input type="submit" id="search" value="Search" style="line-height: 1em"/>
                            </form>
                        </li>
                        <li><a class="link" href="cart.php"><i class="fa fa-shopping-cart fa-lg fa-fw"></i> My Cart</a>
                        </li>
                        <li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container" id="header-top">
            <a class="link" href="home.php">
                <div class="logo">
                    <img src="<?php echo get_value_config('logo_header') ?>" style="height: 160px;"/>
                </div>
            </a>
        </div>
    </header>

    <nav>
        <div class="container">
            <ul class="list-inline navbar">
                <?php while ($nav_row = mysqli_fetch_assoc($nav_result)) { ?>
                    <li class="nav-button">
                        <a href="category.php?cateid=<?php echo $nav_row['cate_id'] ?>" class="nav-link">
                            <?php echo $nav_row['cate_name'] ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
