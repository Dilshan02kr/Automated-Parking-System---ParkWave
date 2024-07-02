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
    <title>About us</title>
    <link rel="stylesheet" href="./style/aboutus.css">
    <link rel="stylesheet" href="./style/footernav.css">
</head>

<body>
<?php 
   include 'usernavbar.php';
   
   ?> 

    <div class="body-sec">
        <!-- hero section -->
    <div class="hero-section">
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-img">
                    <img src="./assets/image5.jpg" alt="">
                </div>
                <div class="hero-text">
                    <h1>We're ParkWave and we make parking quicker, cheaper and smarter.</h1>
                    <p>We've been a trusted player in the parking sector for almost two decades now, helping people get
                        from A to B with handy reservable spaces and speedy app payments.</p><br>
                    <p>Read on to learn more about our mission, our company culture and our exciting plans for the
                        future.</p>
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
                <div class="hero-2-img">
                    <img src="./assets/pngpark.svg" alt="">
                </div>
                <div class="hero-2-text">
                    <p class="sec-topic">The Sri Lankan's favourite parking app</p>
                    <p class="sec-desc">The idea for ParkWave first came to Ant, our CEO, in 2006 while driving past empty driveways
                        looking for a place to park. Now, 18 years on, drivers can find & book parking in a few taps
                        through our app - in car parks, supermarkets, and even driveways. 45,000 of them in fact. </p>
                    <br>
                    <p class="sec-desc">We've helped over 13 million UK drivers take the stress out of parking while also raising over
                        £90m for space owners. Now with international expansion on the horizon, we're excited to bring
                        ParkWave to new territories and become the world's favourite parking app.</p>
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