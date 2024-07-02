<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Park Wave</title>
    <link rel="stylesheet" href="./style/landing.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
        <link rel="stylesheet" href="./style/roll.css">

    <script>
        function popup() {
           const popup = document.getElementById('popup');
           const pc = document.getElementById('pc');

           pc.style.transform ='scale(1)';
           popup.style.display ='inline-flex';

        }
        function closePopup() {
           const popup = document.getElementById('popup');
           const pc = document.getElementById('pc');
           pc.style.transform ='scale(0)';
           popup.style.display ='none';

        }
    </script>
</head>

<body>
    <div id="bg-img">
     <!-- Navigation bar -->
<header class="navhead">
    <div class="navbar">
        <div class="logo">
            <img id="nav-logo-img" src="./assets/Logo.png" alt="">
        </div>
        <div class="nav-links">
            <ul>
                <li><a class="alink" onclick="popup()">Locate spot</a></li>
                <li><a class="alink" onclick="popup()">Rent out your space</a></li>
                <li><a class="alink" onclick="popup()">Dashboard</a></li>
                <li><a class="alink" onclick="popup()">About us</a></li>
            </ul>
            <a onclick="popup()">Signup</a>
        </div>
    </div>
</header>

<!-- popup -->

<div class="popup-section" id="popup" onclick="closePopup()">
    <div class="popup">
        <div class="popup-container" id="pc">
            <a href="./registrationform.php" class="client">
                <div class="client-box">
                    <img class="box-img" src="./assets/userCl.svg" alt="">
                    <p class="box-text">Register as a Driver</p>
                </div>
            </a>
            <a href="./ownerregistrationform.php" class="spaceowner">
                <div class="spaceownerbox">
                    <img class="box-img" src="./assets/userOw.svg" alt="">
                    <p class="box-text">Register as a Renter</p>
                </div>
            </a>
        </div>
    </div>
</div>
        <!-- hero section -->
        <div class="container">
            <div class="hero-section">
                <h1>Find Parking <br><span>Faster</span> and <span>Smarter</span></h1>
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
                <div class="hero-text">
                    <p><span class="first-word">W</span>e are the largest and most accurate <br>parking services
                        provider in Sri Lanka...</p>
                </div>
                <a onclick="popup()" class="regbtn">Register Now!</a>
            </div>
        </div>
    </div>
    <!-- second section -->
    <div class="second-section">
        <!-- search bar -->
        <div class="container">
            <div class="search">
                <div class="location">
                    <i class="bi bi-geo-alt"></i>
                    <input type="text" placeholder="where are you going">
                </div>
                <div class="date">
                    <input type="date">
                </div>
                <div class="numSlots">
                    <i class="bi bi-car-front"></i>
                    <input type="text" placeholder="Number of Parking Slots">
                </div>
                <div class="searchbtn">
                    <input type="submit" value="Search">
                </div>
            </div>
        </div>
        <!-- section topic -->
        <div class="section-topic">
            <h2>Popular Destinations<span>.</span></h2>
            <p>Most popular cities for drivers from Sri Lanka</p>
        </div>
        <!-- popular city section -->
        <div class="location-section">
            <div class="flex-1">
                <div class="img-1">
                    <img src="./assets/colombo town.jpg" alt="">
                    <p class="destinationName">
                        Colombo
                    </p>
                </div>
                <div class="img-1">
                    <img src="./assets/kandytown.jpg" alt="">
                    <p class="destinationName">
                        Kandy
                    </p>
                </div>
            </div>
            <div class="flex-2">
                <div class="img-2">
                    <img src="./assets/galletown.jfif" alt="">
                    <p class="destinationName">
                        Galle
                    </p>
                </div>
                <div class="img-2">
                    <img src="./assets/anuradhapura.jpg" alt="">
                    <p class="destinationName">
                        Anuradapura
                    </p>
                </div>
                <div class="img-2">
                    <img src="./assets/negambo.jpg" alt="">
                    <p class="destinationName">
                        Negambo
                    </p>
                </div>
            </div>
        </div>
        <!-- property type section -->
        <div class="section-topic">
            <h2>Browse by parking property type<span>.</span></h2>
        </div>
        <div class="property-section">
            <div class="property-wrap">
                <div class="left-btn">
                    <i class="bi bi-arrow-left-short" id="typebackbtn"></i>
                </div>
                <div class="parking-images">
                    <div class="img-set">
                        <img src="./assets/image1.jpg" alt="">
                        <p>City Parking</p>
                    </div>
                    <div class="img-set">
                        <img src="./assets/image2.jpg" alt="">
                        <p>Indoor Garages</p>
                    </div>
                    <div class="img-set">
                        <img src="./assets/image3.jpg" alt="">
                        <p>Indoor Parkings</p>
                    </div>
                    <div class="img-set">
                        <img src="./assets/image4.jpg" alt="">
                        <p>Outdoor Garages</p>
                    </div>
                    <div class="img-set">
                        <img src="./assets/image5.jpg" alt="">
                        <p>Outdoor Parkings</p>
                    </div>
                    <div class="img-set">
                        <img src="./assets/image6.jpg" alt="">
                        <p>Street Parkings</p>
                    </div>
                    <div class="img-set">
                        <img src="./assets/image7.jpg" alt="">
                        <p>Private Parkings</p>
                    </div>
                    <div class="img-set">
                        <img src="./assets/image8.jpg" alt="">
                        <p>Office Parkings</p>
                    </div>
                </div>
                <div class="right-btn">
                    <i class="bi bi-arrow-right-short" id="typenextbtn"></i>
                </div>
            </div>
        </div>
        <!-- explore Sri Lanka section -->
        <div class="section-topic">
            <h2>Explore Sri Lanka<span>.</span></h2>
            <p>Thes popular destinations also covered by Park Wave</p>
        </div>
        <div class="explore-section">
            <div class="explore-wrap">
                <div class="left-btn">
                    <i class="bi bi-arrow-left-short" id="expbackbtn"></i>
                </div>
                <div class="exp-images">
                    <div class="exp-set">
                        <img src="./assets/colombodis.jpg" alt="">
                        <div class="exp-details">
                            <p>Colombo District</p>
                            <p class="p-details">1000+ Propeties</p>
                        </div>
                    </div>
                    <div class="exp-set">
                        <img src="./assets/gampahadis.jpg" alt="">
                        <div class="exp-details">
                            <p>Gampaha District</p>
                            <p class="p-details">500+ Propeties</p>
                        </div>
                    </div>
                    <div class="exp-set">
                        <img src="./assets/kalutaradis.jpg" alt="">
                        <div class="exp-details">
                            <p>Kalutara District</p>
                            <p class="p-details">500+ Propeties</p>
                        </div>
                    </div>
                    <div class="exp-set">
                        <img src="./assets/jaffnadis.jpg" alt="">
                        <div class="exp-details">
                            <p>Jaffna District</p>
                            <p class="p-details">200+ Propeties</p>
                        </div>
                    </div>
                    <div class="exp-set">
                        <img src="./assets/kugaladis.jpg" alt="">
                        <div class="exp-details">
                            <p>Kurunegala District</p>
                            <p class="p-details">500+ Propeties</p>
                        </div>
                    </div>
                    <div class="exp-set">
                        <img src="./assets/kandydis.jpg" alt="">
                        <div class="exp-details">
                            <p>Kandy District</p>
                            <p class="p-details">700+ Propeties</p>
                        </div>
                    </div>
                    <div class="exp-set">
                        <img src="./assets/puredis.jpg" alt="">
                        <div class="exp-details">
                            <p>Anuradapura District</p>
                            <p class="p-details">500+ Propeties</p>
                        </div>
                    </div>
                    <div class="exp-set">
                        <img src="./assets/galledis.jpg" alt="">
                        <div class="exp-details">
                            <p>Galle District</p>
                            <p class="p-details">700+ Propeties</p>
                        </div>
                    </div>
                    <div class="exp-set">
                        <img src="./assets/mataradis.jpg" alt="">
                        <div class="exp-details">
                            <p>Matara District</p>
                            <p class="p-details">500+ Propeties</p>
                        </div>
                    </div>
                    <div class="exp-set">
                        <img src="./assets/mataledis.jpg" alt="">
                        <div class="exp-details">
                            <p>Matale District</p>
                            <p class="p-details">500+ Propeties</p>
                        </div>
                    </div>
                    <div class="exp-set">
                        <img src="./assets/badulladis.jpg" alt="">
                        <div class="exp-details">
                            <p>Badulla District</p>
                            <p class="p-details">200+ Propeties</p>
                        </div>
                    </div>
                </div>
                <div class="right-btn">
                    <i class="bi bi-arrow-right-short" id="expnextbtn"></i>
                </div>
            </div>
        </div>

        <!-- Customer Feedback section -->
        <div class="section-topic">
            <h2>Customer feedbacks<span>.</span></h2>
        </div>
        <div class="feedback-section">
            <div class="feedback-wrap">
                <div class="feedback-box">
                    <div class="feedback-item">
                        <p id="fbItem">"Park Wave is incredibly convenient. It's user-friendly and saves me a lot of time finding a parking spot in Sri Lanka. Highly recommend it!"</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- horizontal line -->
    <div class="h-line"></div>

    <div class="second-bg">
        <div class="container">
            <div class="textArea">
                <h1>Now You Can <br><span>Rent</span> Your <span>Parking Spots</span></h1>
                <div class="hero-text-right">
                    <p><span class="first-word">B</span>ecome a parking spot owner and earn with us by renting out your space, making passive income easily and effortlessly.</p>
                </div>
                <a onclick="popup()" class="regbtn">Become a Renter</a>
            </div>
        </div>
    </div>

    <div class="section-topic">
        <h2>PHOTO COLLECTION<span>.</span></h2>
    </div>
    <!-- photo gallery -->
    <div class="gallery-wrap">
        <img src="assets/leftarrow2.png" id="backbtn">
        <div class="gallery">
            <div>
                <img src="assets/image1.jpg">
            </div>
            <div>
                <img src="assets/image2.jpg">
            </div>
            <div>
                <img src="assets/image3.jpg">
            </div>
            <div>
                <img src="assets/image4.jpg">
            </div>
            <div>
                <img src="assets/image5.jpg">
            </div>
            <div>
                <img src="assets/image6.jpg">
            </div>
            <div>
                <img src="assets/image7.jpg">
            </div>
            <div>
                <img src="assets/image8.jpg">
            </div>
            <div>
                <img src="assets/image9.jpg">
            </div>
            <div>
                <img src="assets/image10.jpg">
            </div>
            <div>
                <img src="assets/image11.jpg">
            </div>
            <div>
                <img src="assets/image12.jpg">
            </div>
            <div>
                <img src="assets/image13.jpg">
            </div>
            <div>
                <img src="assets/image14.jpg">
            </div>
            <div>
                <img src="assets/image15.jpg">
            </div>
            <div>
                <img src="assets/image16.jpg">
            </div>
            <div>
                <img src="assets/image17.jpg">
            </div>
            <div>
                <img src="assets/image18.jpg">
            </div>
            <div>
                <img src="assets/image19.jpg">
            </div>
            <div>
                <img src="assets/image20.jpg">
            </div>
            <div>
                <img src="assets/image21.jpg">
            </div>
            <div>
                <img src="assets/image22.jpg">
            </div>
            <div>
                <img src="assets/image23.jpg">
            </div>
            <div>
                <img src="assets/image24.jpg">
            </div>

        </div>
        <img src="assets/rightarrow2.png" id="nextbtn">
    </div>

    <div class="h-line"></div>
    <!-- promotion section -->
    <div class="promo-section">
        <div class="promo-1">
            <div class="promo1-text">
                <h2>BROWSING ON YOUR PHONE?</h2>
                <p>Try out the <span>Parkwave.com</span> app on iOS and <br>Android.</p>
                <img src="assets/appstor.png" alt="">
            </div>
            <img src="assets/promotion1.png" alt="">
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

    <!-- JS -->
    <script src="./script/landing.js"></script>
    <script src="./script/navbar.js"></script>
</body>

</html>