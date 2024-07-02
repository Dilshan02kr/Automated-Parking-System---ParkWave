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
    <title>USER Dashboard</title>
    <link rel="stylesheet" href="./style/userdashboard.css">
    <link rel="stylesheet" href="./style/footernav.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
</head>
<body>

<?php 
   include 'usernavbar.php';
   
   ?> 

   <div class="body-sec">
     <!-- hero section -->
     <div class="hero-section">
        <div class="hero-container">
            <p class="topic">Dashboard</p>
            <p class="subtopic">Account Settings</p>
            <div class="hero-cards">
                <a href="./userprofile.php">
                    <div class="card card-1">
                        <i class="bi bi-person"></i>
                        <p class="card-topic">Personal info</p>
                        <p class="card-des">Your personal information, your vehicles and where we can reach you</p>
                    </div>
                </a>
                <a href="">
                    <div class="card card-2">
                        <i class="bi bi-wallet"></i>
                        <p class="card-topic">Payment preferences</p>
                        <p class="card-des">How you securely make payments through JustPark</p>
                    </div>
                </a>
                <a href="">
                    <div class="card card-3">
                        <i class="bi bi-sliders"></i>
                        <p class="card-topic">Communication preferences</p>
                        <p class="card-des">How often and through which channels you want us to communicate</p>
                    </div>
                </a>
            </div>
            <div class="banner">
                <div class="banner-text">
                    <p class="h1">Wherever you go, we have parking for you</p>
                <p class="para">Choose from over 250,000 spaces near you</p>
                </div>
            </div>

        </div>
    </div>
    <!-- end of hero section -->
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