<!DOCTYPE html>
<html>
<head>
    <title>REFURBISHMENTEL STORE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
        .thumbnail {
            height: 430px; /* Set a fixed height for the thumbnail */
        }
    </style>
</head>
<body>
<div>
    <?php
    session_start();
    require 'header.php';
    ?>
    <div id="bannerImage">
        <div class="container">
            <center>
                <h1>REFURBISHMENTEL STORE</h1>
                <p>Flat 40% OFF on all premium brands.</p>
                <a href="products.php" class="btn btn-danger">Shop Now</a>
            </center>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="products.php">
                        <img src="img/samsung moniter.webp" alt="Moniter">
                    </a>
                    <center>
                        <div class="caption">
                            <p id="autoResize">Moniter</p>
                            <p>Samsung 24-inch(59.8cm)FHD, 75Hz, 1800R Curved 1,920 X 1,080 LED Monitor, VA Panel, Slim Design,AMD Freesync,Game Mode, Flicker Free,HDMI,Audio Port(LS24C360EAWXXL, Black).</p>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="products.php">
                        <img src="img/lenovo thinkpad.jpg" alt="laptop">
                    </a>
                    <center>
                        <div class="caption">
                            <p id="autoResize">Laptop</p>
                            <p>Lenovo Thinkpad 6th Gen Intel Core i5 thin & Light HD Laptop (16 GB RAM/512 GB SSD/14"(35.6cm)HD/Windows 11/MS Office/Wifi/Webcam/Intel Graphics),Black.</p>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="products.php">
                        <img src="img/jbl soundbar.jpg" alt="Soundbar">
                    </a>
                    <center>
                        <div class="caption">
                            <p id="autoResize">Soundbar</p>
                            <p>JBL Cinima SB271, Dolby Digital Soundbar with Wireless Subwoofer for Extra Deep Bass, 2.1 Channel Home Theater with Remote,HDMI ARC,Bluetooth & Optical Connectivity (220W).</p>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <br><br> <br><br><br><br>
    <footer class="footer">
        <div class="container">
            <center>
            <p>Copyright &copy refurbishmental Store. All Rights Reserved. | Contact Us: +91 98756 87456</p>
            </center>
        </div>
    </footer>
</div>
</body>
</html>
