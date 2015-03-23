<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Product_info</title>
        <link href="css/global.css" type="text/css" rel="stylesheet" media="all" />
        <link href="css/product.css" type="text/css" rel="stylesheet" media="all" />
        <script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:800|Roboto&subset=latin,vietnamese' rel='stylesheet' type='text/css'>   
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    </head>

    <?php
    require_once 'header.php';
    ?>

    <div class="container">
        <div id="left_column">
            <div id="product_img">
                <img src="images/Demo/Dying-Light-logo.jpg" width="875px"/>
            </div>
            
            <div id="product_name">
                <h2>Dying Light</h2>
            </div>
            
            <div id="divider_1">
                GAME'S DETAIL
            </div>
            
            <div id="product_detail">
                <p> Dying Light is a survival horror video game developed by Polish video game developer Techland.
                    Dying Light is a zombie apocalypse-themed game set in an open world. 
                    Players traverse an expansive urban environment overrun by a vicious outbreak, 
                    scavenging the world for supplies and crafting weapons to defend against the growing infected population with a heavy focus on freerunning mechanics.
                    Players also can customize the four characters in the game.
                    The game is mostly melee-based with the majority of fighting using melee weapons. 
                    There are more than 100 weapons that can be used and more when players begin crafting new weapons......
                    Notes:
                    This version of game is already cracked - just install and play.
                    Included "Punk Queen Weapon Pack" and "Be the Zombie" DLC.
                    You can play multiplayer LAN using Tunngle or Evolve VPN 
                </p>
            </div>           
            
            <div id="divider_1">
                SYSTEM REQUIREMENTS
            </div>
            
            <div  id="system_requirements">
                <div>
                    <strong> MINIMUM:</strong>
                    <br>
                </div>

                <ul>
                    <li>
                        <div >OS: Windows® 7 64-bit / Windows® 8 64-bit / Windows® 8.1 64-bit</div>
                    </li>
                    <li>
                        <div >Processor: Intel® Core™ i5-2500 @3.3 GHz / AMD FX-8320 @3.5 GHz</div>
                    </li>
                    <li>
                        <div >Memory: 4 GB RAM DDR3</div>
                    </li>
                    <li>
                        <div >Hard Drive: 40 GB free space</div>
                    </li>
                    <li>
                        <div >Graphics: NVIDIA® GeForce® GTX 560 / AMD Radeon™ HD 6870 (1GB VRAM)</div>
                    </li>
                    <li>
                        <div >DirectX®: Version 11</div>
                    </li>
                    <li>
                        <div >Sound: DirectX® compatible</div>
                    </li>
                    <li>
                        <div >Additional Notes: Laptop versions of graphics cards may work but are NOT officially supported.</div>
                    </li>
                    <li>
                        <div >Windows-compatible keyboard, mouse, optional controller (Xbox 360 Controller for Windows recommended)</div>
                    </li>
                </ul>

                <div ><strong>RECOMMENDED:</strong></div>

                <ul>
                    <li>
                        <div >OS: Windows® 7 64-bit / Windows® 8 64-bit / Windows® 8.1 64-bit</div>
                    </li>
                    <li>
                        <div >Processor: Intel® Core™ i5-4670K @3.4 GHz / AMD FX-8350 @4.0 GHz</div>
                    </li>
                    <li>
                        <div >Memory: 8 GB RAM DDR3</div>
                    </li>
                    <li>
                        <div >Hard Drive: 40 GB free space</div>
                    </li>
                    <li>
                        <div >Graphics: NVIDIA® GeForce® GTX 780 / AMD Radeon™ R9 290 (2GB VRAM)</div>
                    </li>
                    <li>
                        <div >DirectX®: Version 11</div>
                    </li>
                    <li>
                        <div >Sound: DirectX® compatible</div>
                    </li>
                    <li>
                        <div >Additional Notes: Laptop versions of graphics cards may work but are NOT officially supported.</div>
                    </li>
                    <li>
                        <div >Windows-compatible keyboard, mouse, optional controller (Xbox 360 Controller for Windows recommended)</div>
                    </li>
                </ul>
            </div>

            <div id="divider_1">
                COMMENTS
            </div>
            <div id="customer_comment">
                <form action="" method="post">
                    <input type="hidden" value="product_id">
                    <table style="padding-left: 10px";>
                        <tr>
                            <th>
                                Email
                            </th>
                            <td>
                                <input type="email" value="" name="email" width="800px" height="50px"/>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Tittle
                            </th>
                            <td>
                                <input type="text" value="" name="tittle" width="800px" height="50px"/>
                            </td>
                        </tr>   
                        <tr>
                            <th>
                                Comment
                            </th>
                            <td>
                                <textarea id="cm_content" name="cm_content">
                                </textarea> 
                                <script>
            CKEDITOR.replace('cm_content');
                                </script>
                            </td>
                        </tr>    
                        <tr>
                            <td>
                                <button type="submit" id="cm_submit">Send</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="comments_display">
                <ul class="comments">
                    <li>
                        <p>Dòng comments</p>
                    </li>
                </ul>
            </div>
        </div>
        <div id="middle_column">
            <!-- cái này để chia màn hình, kệ nó -->
        </div>
        <div id="right_column">
            <div id="divider_n2">
            </div>
            <div id="download">
                <a href="#"><img src="images/Demo/buynow.png" width="320px"/></a>
            </div>
            <div id="product_clip">
                <!-- clip liên quan đến sản phẩm -->
                <video src="#" width="320px"></video>
            </div>
            <div id="divider_n2">
            </div>
            <div id="divider">
                ALSO RELATED
            </div>
            <div id="divider_n2">
            </div>
            <div id="related_links">
                <a href="#">other games</a> <br/>
                <a href="#">other games</a> <br/>
                <a href="#">other games</a> <br/>
                <a href="#">other games</a> <br/>
                <a href="#">other games</a> <br/> 
            </div>
            <div id="divider_n2">
            </div>
            <div id="divider">
                ADVERTISEMENTS
            </div>
            <div id="divider_n2">
            </div>
            <div id="advertisement">
                <img src="images/Demo/Logo with lolly.jpg" width="320px"/>
            </div>
        </div>
        <div id="page_divider"></div>

    </div>


    <?php
    require_once 'footer.php';
    ?>
    