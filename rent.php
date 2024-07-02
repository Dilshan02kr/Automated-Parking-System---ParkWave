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
    <title>Rent out your space</title>
    <link rel="stylesheet" href="./style/rent.css">
    <link rel="stylesheet" href="./style/footernav.css">
</head>
<body>
<?php 
   include 'usernavbar.php';
   
   ?> 

    <!-- hero section -->

  <div class="body-sec">
    <div class="hero-section">
        <div class="hero-container">
            <div class="hero-content">
                <h2>Sarah in Luton earns enough to cover her monthly energy bills, what could your space pay for?</h2>
                <div class="hero-text">
                    <p>See how much<br> spaces in your area<br> can earn!</p>
                    <form action="" method="POST">
                        <input type="text" placeholder="Name">
                        <input type="text" placeholder="Postcode">
                        <input type="text" placeholder="Email Address">
                        <div class="btns">
                            <input type="submit" value="Get a quote" id="qtbtn">
                            <input type="submit" value="Rent out your space now" id="rentbtn">
                        </div>
                    </form>
                </div>
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

    <div class="hero-2">
        <div class="hero-2-container">
            <div class="hero-2-content">
                <p class="hero-2-topic">Why rent out your space with ParkWave?</p>
                <div class="hero-2-details">
                    <div class="hero-2-det">
                        <img src="./assets/moneyr.svg" alt="">
                        <p class="det-topic">Earn with us</p>
                        <p class="det-desc">Our top hosts make over £4,000 a year renting their driveways. Why not find out what yours could make you today? The first £1,000 is completely tax-free.</p>
                    </div>
                    <div class="vr-line"></div>
                    <div class="hero-2-det">
                        <img src="./assets/locationr.svg" alt="">
                        <p class="det-topic">You're in control</p>
                        <p class="det-desc">Simply choose the days & hours that suit you and set your own price. Then just sit back and watch the bookings roll in. Easy.</p>
                    </div>
                    <div class="vr-line"></div>
                    <div class="hero-2-det">
                        <img src="./assets/driverr.svg" alt="">
                        <p class="det-topic">More than 13 million drivers</p>
                        <p class="det-desc">Our growing community of verified drivers is the largest in the UK, meaning more bookings for you and more cash in your pocket.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

    <script src="./script/navbar.js"></script>
    
</body>
</html>