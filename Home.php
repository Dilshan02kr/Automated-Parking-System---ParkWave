<?php
session_start();

include 'config.php';

$userID = $_SESSION['userID'];

$select = "SELECT * FROM users WHERE userID = '$userID'";

$result = mysqli_query($con, $select);


$row = mysqli_fetch_array($result);

$_SESSION['userID'] = $row['userID'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./style/Home.css">
    <link rel="stylesheet" href="./style/footernav.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>

   <?php 
   include 'usernavbar.php';
   
   ?> 

   <div class="body-sec">
   <?php
    if(isset($_SESSION['dmsg'])){ ?>
    <div id="tmsg">
        <div class="tcont">
            <p><?php echo $_SESSION['dmsg'] ?></p>
            <i class="bi bi-check-circle"></i>
        </div>
    </div>

  <?php }  ?>
  <?php
    if(isset($_SESSION['bmsg'])){ ?>
    <div id="tmsg">
        <div class="tcont">
            <p><?php echo $_SESSION['bmsg'] ?></p>
            <i class="bi bi-check-circle"></i>
        </div>
    </div>

  <?php }  ?>
     <!-- hero section-->
     <div class="hero-section">
        <div class="hero-section-container">
            <div class="hero-text">
                <p class="topic"><span>The smarter way </span>to find<br>parking</p>
                <div class="hero-icons">
                    <div class="single-set">
                        <img src="assets/currency-dollar.png">
                        <p>Best price guarantee</p>
                    </div>
                    <div class="single-set">
                        <img src="assets/thumb.png">
                        <p>Trusted by 13m+ drivers</p>
                    </div>
                    <div class="single-set">
                        <img src="assets/carpark.png">
                        <p>100k+ reservable spaces</p>
                    </div>
                </div>
                <p class="hero-des">Thousands of reservable spaces located right where you need them. Join over 13
                    million drivers and enjoy stress-free, cheaper parking.</p>

                <div class="search-box">
                    <div class="search-box-content">
                        <div class="tabs">
                            <ul>
                                <li class="tab-1 tab active">
                                    <p>Hourly/Daily</p>
                                </li>
                                <li class="tab-2 tab">
                                    <p>Monthly</p>
                                </li>
                                <li class="tab-3 tab">
                                    <p>Loyalty</p>
                                </li>
                            </ul>
                        </div>
                        <div class="sec-1 sec active">
                            <div class="sec-content">
                                <div class="parkat">
                                    <p>Park at</p>
                                    <div class="parkat-search">
                                        <input type="text" placeholder="Enter a place or postcode">
                                        <i class="bi bi-search"></i>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="from">
                                        <p>From</p>
                                        <input type="date">
                                    </div>
                                    <i class="bi bi-arrow-right-short"></i>
                                    <div class="until">
                                        <p>Untill</p>
                                        <input type="date">
                                    </div>
                                </div>
                                <input type="submit" value="Show parking spaces" class="btn">
                            </div>
                        </div>
                        <div class="sec-2 sec">
                            <div class="sec-content">
                                <div class="parkat">
                                    <p>Park at</p>
                                    <div class="parkat-search">
                                        <input type="text" placeholder="Enter a place or postcode">
                                        <i class="bi bi-search"></i>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="from">
                                        <p>Starting on</p>
                                        <input type="date">
                                    </div>
                                    <i class="bi bi-arrow-right-short"></i>
                                    <div class="until">
                                        <p>Monthly duration</p>
                                        <input type="text" placeholder="Mon-Fri only">
                                    </div>
                                </div>
                                <input type="submit" value="Show parking spaces" class="btn">
                            </div>
                        </div>
                        <div class="sec-3 sec">
                            <div class="sec-content">
                                <div class="parkat">
                                    <p>Loyalty card number</p>
                                    <div class="parkat-search">
                                        <input type="text" placeholder="Enter your loyalty card number">
                                        <i class="bi bi-star"></i>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="from">
                                        <p>From</p>
                                        <input type="date">
                                    </div>
                                    <i class="bi bi-arrow-right-short"></i>
                                    <div class="until">
                                        <p>Untill</p>
                                        <input type="date">
                                    </div>
                                </div>
                                <input type="submit" value="Show parking spaces" class="btn">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-img">
                <img src="./assets/image13.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- end of hero section -->

    <div class="hr-section">
        <div class="hr-container">
            <div class="hr-content">
                <p class="details-1">96%</p>
                <p class="details-2">satisfaction rate</p>
            </div>
            <div class="hr-content">
                <p class="details-1">13million+</p>
                <p class="details-2">drivers</p>
            </div>
            <div class="hr-content">
                <p class="details-1">45,000+</p>
                <p class="details-2">space owners</p>
            </div>
            <div class="hr-content">
                <p class="details-1">2million+</p>
                <p class="details-2">bookings per year</p>
            </div>
        </div>
    </div>

    <!-- parking-section -->
    <div class="parking-section">
        <div class="parking-section-container">
            <div class="p-sec-img">
                <div class="colombo cityImg now">
                    <img src="./assets/colombo town.jpg" alt="">
                </div>
                <div class="kandy cityImg">
                    <img src="./assets/kandytown.jpg" alt="">
                </div>
                <div class="galle cityImg">
                    <img src="./assets/galletown.jfif" alt="">
                </div>
                <div class="negambo cityImg">
                    <img src="./assets/negambo.jpg" alt="">
                </div>
                <div class="anuradapura cityImg">
                    <img src="./assets/anuradhapura.jpg" alt="">
                </div>
                <div class="gampaha cityImg">
                    <img src="./assets/gampahadis.jpg" alt="">
                </div>
            </div>
            <div class="p-sec-cont">
                <div class="p-sec-tabs">
                    <div class="p-tabs">
                        <div class="raw-1 raws">
                            <ul>
                                <li class="coltab tabcity now"><p>Collombo</p></li>
                                <li class="kandtab tabcity"><p>Kandy</p></li>
                                <li class="galletab tabcity"><p>Galle</p></li>
                            </ul>
                        </div>
                        <div class="raw-2 raws">
                            <ul>
                                <li class="negtab tabcity"><p>Negambo</p></li>
                                <li class="puretab tabcity"><p>Anuradhapura</p></li>
                                <li class="gamtab tabcity"><p>Gampaha</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-spaces-sec">
                        <div class="p-sec-details">
                            <div class="p-sec-slots">
                                <div class="sec-col secslots now">
                                    <?php 
                                    $cselect = "SELECT * FROM `spaces` WHERE city = 'Colombo' || city = 'colombo'";
                                    $cresult = mysqli_query($con, $cselect);
                                    ?>
                                    <div class="slots">
                                        <?php while($crow = mysqli_fetch_assoc($cresult)){ ?>
                                        <div class="slot">
                                            <div class="slt-img">
                                            <img src="./upload/<?php echo $crow['spaceImg'] ?>" alt="">
                                            </div>
                                            <div class="slot-details">
                                                <p class="add"><?php echo $crow['pName'] ?>,  <?php echo $crow['city'] ?></p>
                                                <p class="distance">
                                                    A <?php echo $crow['pType'] ?> parking near to <?php echo $crow['address'] ?>
                                                </p>
                                                <a href="./BookingForm.php?book=<?php echo $crow['spaceID'] ?>" class="bookbtn">Reserve for LKR <?php echo $crow['price'] ?> .00</a>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="sec-kand secslots">
                                <?php 
                                    $kselect = "SELECT * FROM `spaces` WHERE city = 'Kandy' || city = 'kandy'";
                                    $kresult = mysqli_query($con, $kselect);
                                    ?>
                                    <div class="slots">
                                        <?php while($krow = mysqli_fetch_assoc($kresult)){ ?>
                                        <div class="slot">
                                            <div class="slt-img">
                                            <img src="./upload/<?php echo $krow['spaceImg'] ?>" alt="">
                                            </div>
                                            <div class="slot-details">
                                                <p class="add"><?php echo $krow['pName'] ?> ,  <?php echo $krow['city'] ?></p>
                                                <p class="distance">
                                                    A <?php echo $krow['pType'] ?> parking near to <?php echo $krow['address'] ?>
                                                </p>
                                                <a href="./BookingForm.php?book=<?php echo $krow['spaceID'] ?>" class="bookbtn">Reserve for LKR <?php echo $krow['price'] ?> .00</a>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="sec-galle secslots">
                                <?php 
                                    $gselect = "SELECT * FROM `spaces` WHERE city = 'Galle' || city = 'galle'";
                                    $gresult = mysqli_query($con, $gselect);
                                    ?>
                                    <div class="slots">
                                        <?php while($grow = mysqli_fetch_assoc($gresult)){ ?>
                                        <div class="slot">
                                            <div class="slt-img">
                                            <img src="./upload/<?php echo $grow['spaceImg'] ?>" alt="">
                                            </div>
                                            <div class="slot-details">
                                                <p class="add"><?php echo $grow['pName'] ?>,  <?php echo $grow['city'] ?></p>
                                                <p class="distance">
                                                    A <?php echo $grow['pType'] ?> parking near to <?php echo $grow['address'] ?>
                                                </p>
                                                <a href="./BookingForm.php?book=<?php echo $grow['spaceID'] ?>" class="bookbtn">Reserve for LKR <?php echo $grow['price'] ?> .00</a>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="sec-neg secslots">
                                <?php 
                                    $nselect = "SELECT * FROM `spaces` WHERE city = 'Negambo' || city = 'negambo'";
                                    $nresult = mysqli_query($con, $nselect);
                                    ?>
                                    <div class="slots">
                                        <?php while($nrow = mysqli_fetch_assoc($nresult)){ ?>
                                        <div class="slot">
                                            <div class="slt-img">
                                            <img src="./upload/<?php echo $nrow['spaceImg'] ?>" alt="">
                                            </div>
                                            <div class="slot-details">
                                                <p class="add"><?php echo $nrow['pName'] ?>,  <?php echo $nrow['city'] ?></p>
                                                <p class="distance">
                                                    A <?php echo $nrow['pType'] ?> parking near to <?php echo $nrow['address'] ?>
                                                </p>
                                                <a href="./BookingForm.php?book=<?php echo $nrow['spaceID'] ?>" class="bookbtn">Reserve for LKR <?php echo $nrow['price'] ?> .00</a>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="sec-pure secslots">
                                <?php 
                                    $aselect = "SELECT * FROM `spaces` WHERE city = 'Anuradhapura' || city = 'anuradhapura'";
                                    $aresult = mysqli_query($con, $aselect);
                                    ?>
                                    <div class="slots">
                                        <?php while($arow = mysqli_fetch_assoc($aresult)){ ?>
                                        <div class="slot">
                                            <div class="slt-img">
                                            <img src="./upload/<?php echo $arow['spaceImg'] ?>" alt="">
                                            </div>
                                            <div class="slot-details">
                                                <p class="add"><?php echo $arow['pName'] ?>,  <?php echo $arow['city'] ?></p>
                                                <p class="distance">
                                                    A <?php echo $arow['pType'] ?> parking near to <?php echo $arow['address'] ?>
                                                </p>
                                                <a href="./BookingForm.php?book=<?php echo $arow['spaceID'] ?>" class="bookbtn">Reserve for LKR <?php echo $arow['price'] ?> .00</a>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="sec-gam secslots">
                                <?php 
                                    $gaselect = "SELECT * FROM `spaces` WHERE city = 'Gampaha' || city = 'gampaha'";
                                    $garesult = mysqli_query($con, $gaselect);
                                    ?>
                                    <div class="slots">
                                        <?php while($garow = mysqli_fetch_assoc($garesult)){ ?>
                                        <div class="slot">
                                            <div class="slt-img">
                                            <img src="./upload/<?php echo $garow['spaceImg'] ?>" alt="">
                                            </div>
                                            <div class="slot-details">
                                                <p class="add"><?php echo $garow['pName'] ?>,  <?php echo $garow['city'] ?></p>
                                                <p class="distance">
                                                    A <?php echo $garow['pType'] ?> parking near to <?php echo $garow['address'] ?>
                                                </p>
                                                <a href="./BookingForm.php?book=<?php echo $garow['spaceID'] ?>" class="bookbtn">Reserve for LKR <?php echo $garow['price'] ?> .00</a>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- End of parking section -->
   </div>
    <!-- footer section -->
    <footer class="footer">
        <div class="footer-section1">
            <div class="footer-logo">
                <img src="assets/Logo.png" alt="">
            </div>
            <div class="footer-text">
                <div class="parking-locations">
                    <p>BOOK PARKING</p>
                    <ul>
                        <li><a href="#">COLOMBO PARKING</a></li>
                        <li><a href="#">GAMPAHA PARKING</a></li>
                        <li><a href="#">KANDY PARKING</a></li>
                        <li><a href="#">GALLE PARKING</a></li>
                        <li><a href="#">KURUNEGALA PARKING</a></li>
                    </ul>
                </div>
                <div class="services">
                    <p>OUR SERVICES</p>
                    <ul>
                        <li><a href="#">FIND PARKING</a></li>
                        <li><a href="#">RENT A PARKING SPOT</a></li>
                        <li><a href="#">CONTACT US</a></li>
                        <li><a href="#">PARKING MAP</a></li>
                        <li><a href="#">SEARCH LOCATION</a></li>
                    </ul>
                </div>
                <div class="resources">
                    <p>RESOURCES</p>
                    <ul>
                        <li><a href="#">PRIVACY POLICY</a></li>
                        <li><a href="#">TERMS OF SERVICE</a></li>
                        <li><a href="#">PRIVACY REQUESTS</a></li>
                        <li><a href="#">SERVICE UPDATE</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-icons">
                <p>FOLLOW US ON</p>
                <div class="footer-icon">
                    <img src="assets/fb.png" alt="">
                    <img src="assets/insta.png" alt="">
                    <img src="assets/whatsapp.png" alt="">
                    <img src="assets/gplus.png" alt="">
                </div>
            </div>
        </div>
        <div class="footer-section2">
            <p>© 2024 PARK WAVE</p>
        </div>
    </footer>

    <!-- JS link -->
    <script>
        $(document).ready(function(){
            <?php 
                if(isset($_SESSION['dmsg'])) { ?>
                $("#tmsg").addClass("display");
                setTimeout(
                    function(){
                        $("#tmsg").removeClass("display");
                    }, 6000
                );
                <?php }
                unset($_SESSION['dmsg'])
                ?>
        });
    </script>

<script>
        $(document).ready(function(){
            <?php 
                if(isset($_SESSION['bmsg'])) { ?>
                $("#tmsg").addClass("display");
                setTimeout(
                    function(){
                        $("#tmsg").removeClass("display");
                    }, 6000
                );
                <?php }
                unset($_SESSION['bmsg'])
                ?>
        });
    </script>

    <script src="./script/Home.js"></script>
    <script src="./script/navbar.js"></script>
</body>

</html>