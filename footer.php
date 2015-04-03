<div class="bottom">
    <div class="container">
    </div>
</div>
<?php
$cate_nav_query = "SELECT * FROM `category`";
$cate_nav_result = execute_query($cate_nav_query);
?>
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="categories">
                <ul class="list-inline">
                    <li>
                        <h5>Categories</h5>
                    </li>
                    <?php while ($cate_nav_row = mysqli_fetch_assoc($cate_nav_result)) { ?>
                        <li class="categories-bot">
                            <a href="category.php?cateid=<?php echo $cate_nav_row['cate_id'] ?>" class="link bot-link" >
                                <?php echo $cate_nav_row['cate_name'] ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="info-footer">
                <div class="copyright">
                    Suspendisse convallis lacus commodo augue imperdiet tincidunt duis fermentum congue.<br/>
                    © 2014 HTML Game Store Theme. All Rights Reserved.<br/>
                    Designed by VThang
                    <div id="term">
                        <a href="about.php">Terms and Conditions</a>
                    </div>
                </div>
                <div class="logo-footer right-text">
                    <img src="<?php echo get_value_config('banner_footer'); ?>"/>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
