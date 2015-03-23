<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Games-Paygames</title>
        <link href="css/global.css" type="text/css" rel="stylesheet" media="all" />
        <script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
        <script src="js/unslider.js" type="text/javascript"></script>
       <link href='http://fonts.googleapis.com/css?family=Noto+Sans:700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <script type="text/javascript" src="engine1/jquery.js"></script>

    </head>
    <?php
    require_once 'header.php';
    ?>
    <!-- Start WOWSlider.com BODY section -->
    <div id="wowslider-container1">
        <div class="ws_images"><ul>
                <li><a href="battlefield-hardline"><img src="data1/images/battlefieldhardline309691920x1080.jpg" alt=" Battlefield Hardline" title=" Battlefield Hardline" id="wows1_0"/></a></li>
                <li><a href="dragon-age-inquisition"><img src="data1/images/dragon_age_3_inquisition_game1920x1080.jpg" alt="Dragon Age Inquisition" title="Dragon Age Inquisition" id="wows1_1"/></a></li>
                <li><a href="the-sims-4"><img src="data1/images/wallpaper_sims4_1920x1080.png" alt="The Sims 4" title="The Sims 4" id="wows1_2"/></a></li>
                <li><a href="titanfall"><img src="data1/images/titanfallgamehdwallpaper1920x10808582.jpg" alt="Titanfall" title="Titanfall" id="wows1_3"/></a></li>
            </ul></div>
        <div class="ws_bullets"><div>
                <a href="#" title=" Battlefield Hardline"><span>1</span></a>
                <a href="#" title="Dragon Age Inquisition"><span>2</span></a>
                <a href="#" title="The Sims 4"><span>3</span></a>
                <a href="#" title="Titanfall"><span>4</span></a>
            </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">html slider</a> by WOWSlider.com v7.6</div>
        <div class="ws_shadow"></div>
    </div>	
    <script type="text/javascript" src="engine1/wowslider.js"></script>
    <script type="text/javascript" src="engine1/script.js"></script>
    <!-- End WOWSlider.com BODY section -->

    <div id="game-list" class="container main-content">
        <style>
            #game-list
            {
                position: relative;
                z-index: 1500;
                width: 1200px;
                margin: 0 auto;
                padding: 0px;
                //background: url(images/squared_metal_@2X.png) repeat;
                

            }
            table{
                margin: 0 auto;
                border-collapse: collapse;
            }
            td
            {

                vertical-align: baseline;
                border: solid #cacaca 4px ;
                overflow: auto;
                
                    
                 
            }
            
            td h1
            {
                font-size: 14px;
                font-family: 'Noto Sans', sans-serif; 
                color: black;
             td h2
             {
                 font-style: 14px;
                text-decoration: underline;
                font-weight: 400;
                 color: #000055;
             }
                
            }
            
               
   
           
            
            img.img-back
            {
                height: 256px;
                width: 256px;
                z-index: 1;
                position: relative;
                top:0;
                left:0;
            }
            
            img.img-front
            {
                height: 48px;
                width:48px;
                z-index: 3;
                position: absolute;
                top:  15px;
                left: 269px;
                margin: 0 0 0 0;
                padding: 0 0 0 0;
            }
        </style>
        <table>
            <tr>
                <td>
                    <a class="link" href="product.php/battlefield-hardline" title="Battlefield Hardline" >
                        <img class="img-back" src="images/cat_logo/Battlefield_Hardline_Icon.png">
                        <img class="img-front" src="images/new.png"/> 
                        <h1>Battlefield Hardline</h1>
                        </br>
                        <h2>VND 1200000</h2>
                        
                    </a>
                </td>
                <td>
                    <a class="img-back" class="link" href="product.php/dragon-age-inquistion" title="Dragon Age: Inquisition" >
                        <img class ="img-back" width="256px"  src="images/cat_logo/dragon_age__inquisition___icon.png">
                        <img class="img-front" src="images/new.png"/> 
                        <h1>Dragon Age: Inquisition</h1>
                        </br>
                        <h2>VND 1200000</h2>
                    </a>
                </td>
                <td>
                    <a class="img-back" class="link" href="product.php/the-sims-4">
                        <img class="img-back" width="256px"  src="images/cat_logo/ts4-icon.png">
                        <img class="img-front" src="images/new.png"/> 
                        <h1>The Sims 4</h1>
                        </br>
                        <h2>VND 1200000</h2>
                    </a>
                </td>
                <td><a class="img-back" href="product.php/titanfall"><img width="256px"  src="images/cat_logo/titanfall___icon_by_blagoicons-d706jes.png">
                        <h1>Titanfall</h1>
                        </br>
                        <h2>VND 1200000</h2>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="steam.php/counter-strike-global-offensive" title="Counter Strike: Global Offensive" ><img width="256px"  src="images/cat_logo/counter_strike_global_offensive___icon_by_darhymes-d4m7o98.png">                     
                        <h1>Counter Strike: Global Offensive</h1></br>
                        <h2>VND 900000</h2>
                    </a>
                </td>
                <td>
                    <a href="steam.php/cod-aw" title="Call of Duty: Advanced Warfare"><img width="256px"  src="images/cat_logo/call_of_duty__advanced_warfare___icon.png">
                        <h1>Call of Duty: Advanced Warfare</h1>
                        </br>
                        <h2>VND 1100000</h2>
                    </a>
                </td>
                <td>
                    <a href="steam.php/dying-light" title="Dying Light"><img width="256px"  src="images/cat_logo/dying_light.png">
                        <h1>Dying Light</h1>
                        </br>
                        <h2>VND 1000000</h2>
                    </a>
                </td>
                <td>
                    <a href="steam.php/gta-v" title="Grand Theft Auto V"><img width="256px"  src="images/cat_logo/gta_v_icon_.png">
                        <h1>Grand Theft Auto V</h1>
                        </br>
                        <h2>VND 1000000</h2>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="product.php/need-for-speed-rivals"><img width="256px"  src="images/cat_logo/Need for Speed Rivals PNG.png">
                        <h1>Need for Speed: Rivals</h1>
                         </br>
                         <h2>VND 750000</h2>
                    </a>   
                </td>
                <td>
                    <a href="product.php/fifa-15"><img width="256px"  src="images/cat_logo/fifa_15___icon_by_blagoicons-d83mi4t.png">
                        <h1>FIFA 15</h1>
                         </br>
                         <h2>VND 1000000</h2>
                         
                    </a>
                </td>
                <td><a href="product.php/plants-vs-zombies-garden-warfare"><img width="256px"  src="images/cat_logo/plants_vs_zombies_garden_warfare.png">
                        <h1>Plants vs Zombies: Garden Warfare</h1>
                        </br>
                        <h2>VND 650000</h2>
                    </a>
                </td>
                <td>
                    <a href="product.php/battlefield-4"><img width="256px"  src="images/cat_logo/battlefield_4___icon.png">
                        <h1>Battlefield 4</h1>
                        </br>
                        <h2>VND 600000</h2>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="steam.php/evolve" title="Evolve"><img width="256px"  src="images/cat_logo/evolve___icon.png">
                        <h1>Evolve</h1>
                        </br>
                        <h2>VND 700000</h2>
                    </a>
                </td>
                <td>
                    <a href="steam.php/dragon-ball-xeno" title="Dragon Ball Xenoverse"> <img width="256px" height="256px;" src="images/cat_logo/dragon_ball___xenoverse_icon.png">
                        <h1>Dragon Ball Xenoverse</h1>
                        </br>
                        <h2>VND 935000</h2>
                    </a>
                </td>
                <td>
                    <a href="steam.php/ac-rogue" title="Assassin's Creed Rogue"> <img width="256px"  src="images/cat_logo/assassin_s_creed__rogue.png">
                        <h1>Assassin's Creed Rogue</h1>
                        </br>
                        <h2>VND 950000</h2>
                    </a>
                </td>
                <td>
                    <a href="steam.php/payday-2" title="Payday 2"><img width="256px"  src="images/cat_logo/payday_2_game_icon_by_wr47h-d6ku8f0.png">
                        <h1>Payday 2</h1>
                        </br>
                        <h2>VND 1000000</h2>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="product.php/simcity"><img width="256px"  src="images/cat_logo/sim_city_2013_icon.png">
                        <h1>Simcity (Standard Edition)</h1>
                        </br>
                        <h2>VND 555000</h2>
                    </a>
                </td>
                <td><a href="product.php/dead-space-3"><img width="256px"  src="images/cat_logo/dead_space_3_icon.png">
                        <h1>Dead Space 3</h1>
                        </br>
                        <h2>VND 600000</h2>
                    </a>
                </td>
                <td>
                    <a href="product.php/battlefield-3"><img width="256px"  src="images/cat_logo/battlefield_3___icon_by_blagoicons-d5pki7v.png">
                        <h1>Battlefield 3</h1>
                        </br>
                        <h2>VND 550000</h2>
                    </a>
                </td>
                <td>
                    <a href="product.php/need-for-speed-most-wanted"><img width="256px"  src="images/cat_logo/need_for_speed_most_wanted_2_icon.png">
                        <h1>Need for Speed: Most Wanted</h1>
                        </br>
                        <h2>VND 600000</h2>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="steam.php/re-evil-rev2" title="Resident Evil Revelations 2"><img width="256px"  src="images/cat_logo/resident_evil___revelations_2_icon.png">
                        <h1>Resident Evil Revelations 2</h1>
                        </br>
                        <h2>VND 960000</h2>
                    </a>
                </td>
                <td>
                    <a href="steam.php/ac-unity" title="Assassin's Creed Unity"><img width="256px"  src="images/cat_logo/assassin_s_creed_unity.png">
                        <h1>Assassin's Creed Unity</h1>
                        </br>
                        <h2>VND 900000</h2>
                    </a>
                </td>
                <td>
                    <a href="steam.php/dark-souls-2" title="Dark Souls II"><img width="256px"  src="images/cat_logo/dark_souls_ii___icon.png">
                        <h1>Dark Souls II</h1>
                        </br>
                        <h2>VND 700000</h2>
                    </a>
                </td>
                <td>
                    <a href="steam.php/life-is-strange-ep1" title="Life is Strange: Episode One"><img width="256px"  src="images/cat_logo/life-is-strange.png">
                        <h1>Life is Strange</h1>
                        </br>
                        <h2>VND 720000</h2>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="steam.php/middle-earth-shadow-mordor" title="Far Cry 4"><img width="256px"  src="images/cat_logo/middle_earth_shadow_of_mordor.png">
                        <h1>Middle Earth: Shadow of Mordor</h1>
                        </br>
                        <h2>VND 890000</h2>
                    </a>
                </td>
                <td>
                    <a href="steam.php/far-cry-4" title="Far Cry 4"><img width="256px"  src="images/cat_logo/far_cry_4_dock.png">
                        <h1>Far Cry 4</h1>
                        </br>
                        <h2>VND 920000</h2>
                    </a>
                </td>
                <td>
                    <a href="steam.php/saints-row-gat-out-hell" title="Saints Row: Gat out of Hell"><img width="256px"  src="images/cat_logo/saints-row-gat-out-of-hell.png">
                        <h1>Saints Row: Gat out of Hell</h1>
                        </br>
                        <h2>VND 700000</h2>
                    </a>
                </td>
                <td>
                    <a href="steam.php/wolfenstein-new-order" title="Wolfenstein: The New Order"><img width="256px"  src="images/cat_logo/wolfenstein__the_new_order___icon.png">
                        <h1>Wolfenstein: The New Order</h1>
                        </br>
                        <h2>VND 700000</h2>
                    </a>
                </td>

            </tr>
        </table>
    </div>

</body>
<?php
require_once 'footer.php';
?>