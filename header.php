<?php
require_once './include/config.php';
require_once './include/functions.php';
require_once './include/process.php';
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
                <div id="welcome-top">
                    <a class="link" href="home.php">WELCOME TO paygames</a>
                </div>
                <div id="other-top" class="right-text">
                    <ul class="list-inline right-text" style="overflow: hidden">
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
                    <img src="images/paygames 3.jpg" style="height: 100px;"/>
                </div>
            </a>
        </div>
    </header>

    <nav>
        <div class="container">
            <ul class="list-inline navbar">
                <li class="nav-button">
                    <a href="steam.php" class="nav-link">
                        Steam Games
                    </a>
                </li>
                <li class="nav-button">
                    <a href="origin.php" class="nav-link">
                        Origin Games
                    </a>
                </li>
                <li class="nav-button">
                    <a href="#" class="nav-link">
                        Blizzard Games 
                    </a>
                </li>
                <li class="nav-button">
                    <a href="#" class="nav-link">
                        Bundle Games
                    </a>
                </li>
            </ul>
        </div>
    </nav>
