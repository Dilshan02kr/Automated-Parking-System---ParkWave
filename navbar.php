<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/footernav.css">
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
    <!-- Navigation bar -->
<header>
    <div class="navbar">
        <div class="logo">
            <img src="./assets/Logo.png" alt="">
        </div>
        <div class="nav-links">
            <ul>
                <li><a href="./Home.html">Locate spot</a></li>
                <li><a href="./rent.html">Rent out your space</a></li>
                <li><a href="./userdashboard.html">Dashboard</a></li>
                <li><a href="./aboutus.html">About us</a></li>
            </ul>
            <a onclick="popup()">Hello!, User</a>
        </div>
    </div>
</header>

<!-- popup -->

<div class="popup-section" id="popup" onclick="closePopup()">
    <div class="popup">
        <div class="popup-container" id="pc">
            <a href="./registrationform.html" class="client">
                <div class="client-box">
                    <img class="box-img" src="./assets/userCl.svg" alt="">
                    <p class="box-text">Register as a Driver</p>
                </div>
            </a>
            <a href="./registrationform.html" class="spaceowner">
                <div class="spaceownerbox">
                    <img class="box-img" src="./assets/userOw.svg" alt="">
                    <p class="box-text">Register as a Space-owner</p>
                </div>
            </a>
        </div>
    </div>
</div>
    
</body>
</html>