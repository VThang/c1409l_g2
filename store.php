<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Cart - Paygames</title>
        <link href="css/global.css" type="text/css" rel="stylesheet" media="all" />
        <link href="css/cart.css" type="text/css" rel="stylesheet" media="all" />
        <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" media="all" />
        <script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
        <script src="js/unslider.js" type="text/javascript"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:800|Roboto&subset=latin,vietnamese' rel='stylesheet' type='text/css'>

        <style type="text/css">
            html, body, #map { height: 300px; margin: 0; padding: 0;}
        </style>
        <script type="text/javascript"
        src="http://maps.google.com/maps/api/js?sensor=false"></script> 

        <script type="text/javascript">
            function initialize() {

                var myOptions = {
                    zoom: 11,
                    center: new google.maps.LatLng(10.788025, 106.729909),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }

                var map = new google.maps.Map(document.getElementById("map"), myOptions);

                var locations = [
                    ['B5, Trần Não, P.Bình An Q2', 10.788025, 106.729909],
                    ['75-77 Lý Tự Trong, P. Bến Thành Q1', 10.774706, 106.697990],
                    ['Aces Gaming 1', 10.768709, 106.658610],
                    ['Aces Gaming 2', 10.850365, 106.754485]
                ];

                for (var i = 0; i < locations.length; i++) {
                    var location = locations[i];
                    var myLatLng = new google.maps.LatLng(location[1], location[2]);
                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map,
                        title: location[0],
                        zIndex: location[3]
                    });
                }
            }
        </script> 

    </head>
    <?php
    require_once 'header.php';
    $order_query = "SELECT * FROM `order` WHERE `order_id` = (SELECT MAX(order_id) FROM `order`)";
    $order_result = execute_query($order_query);
    $order_row = mysqli_fetch_assoc($order_result);
    ?>
    <main>
        <div class="container main-content">
            <div class="main-content">
                <div style="width: 100%;" onload="initialize();">
                    <h1 style="text-align: center;">Our Store</h1>
                    <h3 style="text-align: center;">Your Invoice ID: <?php echo $order_row['order_id']; ?></h3>
                    <body style="margin:0px; padding:0px;" onload="initialize();"> 
                        <div id="map" style="width:90%; height:300px; margin: 0 auto;"></div> 
                    </body> 

                    <p style="width: 800px;margin: 0px auto; font-weight: 600;">
                        <br/><br/>
                        1. B5, Trần Não, P.Bình An Q2 (Free) Làm việc từ 7 A.M - 10 P.M<br/>

                        2. 75-77 Lý Tự Trong, P. Bến Thành Q1, Sau lưng Phở 24h ( phí: 10.000 VNĐ ) Thời gian làm việc - liên hệ trc<br/>

                        3. Aces Gaming 1: 219 Lý Thường Kiệt Q11 ( Phí 10.000 VNĐ làm việc từ 7 A.M sáng đến 3 P.M)<br/>

                        4. Aces Gaming 2: 1090 Kha Vạn Cân, Thủ Đức<br/>
                        <br/><br/>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <?php
    require_once 'footer.php';
    ?>