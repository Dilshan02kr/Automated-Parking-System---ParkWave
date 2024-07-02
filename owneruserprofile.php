<?php
session_start();

include 'config.php';

$userID = $_SESSION['userID'];

$select = "SELECT * FROM users WHERE userID = '$userID'";

$result = mysqli_query($con, $select);


$row = mysqli_fetch_array($result);

$spaceselect =  "SELECT * FROM `spaces` WHERE userID = '$userID'";

$spaceresult = mysqli_query($con, $spaceselect);

$_SESSION['userID'] = $row['userID'];

if (isset($_POST['delete'])) {
    $delete = "DELETE FROM `users` WHERE userID = '$userID'";

    $dltresult = mysqli_query($con, $delete);

    if ($dltresult) {
        header("Location: Landing.php");
    }
}
if (isset($_GET['delete'])){
    $spotID = $_GET['delete'];

    $sdelete = "DELETE FROM `spaces` WHERE spaceID = '$spotID'";

    $ref = mysqli_query($con, $sdelete);

    if($ref){
        header("Location: owneruserprofile.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space-Owner Profile-ParkWave</title>
    <link rel="stylesheet" href="./style/owneruserprofile.css">
    <link rel="stylesheet" href="./style/footernav.css">
</head>

<body>
    <?php
    include 'ownernavbar.php';

    ?>

    <div class="body-sec">
        <div class="hero-section">
            <div class="hero-container">
                <div class="sidebar">
                    <div class="sidebar-content">
                        <div class="tabs">
                            <ul>
                                <li class="tab-1 tab">
                                    <p>Listed spaces</p>
                                </li>
                                <li class="tab-2 tab">
                                    <p>Complaints</p>
                                </li>
                                <li class="tab-3 tab">
                                    <p>Billing & withdrawals</p>
                                </li>
                                <li class="tab-4 tab active">
                                    <p>User profile</p>
                                </li>
                                <li class="tab-5 tab">
                                    <p>Logout</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sections">
                    <div class="section-sec">
                        <div class="sec-conteiner">
                            <div class="sec1 sec">
                                <div class="sec-content">
                                    <p class="sec-topic">My Spots</p>
                                    <div class="sec-tabs">
                                        <ul>
                                            <li class="sec-tab1 sec-tab active">
                                                <p>Active</p>
                                            </li>
                                            <li class="sec-tab2 sec-tab">
                                                <p>Drafted</p>
                                            </li>
                                            <li class="sec-tab3 sec-tab">
                                                <p>Rejected</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="sec-details">
                                        <div class="sec-det-1 sec-det active">
                                            <div class="topel">
                                                <table>
                                                    <tr>
                                                        <th>Spot ID</th>
                                                        <th>Spot</th>
                                                        <th>Location</th>
                                                        <th>Price</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    <?php while ($srow = mysqli_fetch_assoc($spaceresult)) { ?>
                                                        <tr>
                                                            <td><?php echo $srow['spaceID'] ?></td>
                                                            <td><img src="./upload/<?php echo $srow['spaceImg'] ?>" alt="space img"></td>
                                                            <td><?php echo $srow['address'] ?>, <?php echo $srow['city'] ?></td>
                                                            <td><?php echo $srow['price'] ?>.00</td>
                                                            <td class="action">
                                                                <a href="./psupdate.php?update=<?php echo $srow['spaceID'] ?>" class="update">UPDATE</a>
                                                                <a href="./owneruserprofile.php?delete=<?php echo $srow['spaceID'] ?>" class="delete">DELETE</a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    
                                                </table>
                                            </div>
                                        </div>
                                        <div class="sec-det-2 sec-det">
                                            <div class="sec-emp-cont">
                                                <img src="./assets/empty.png" alt="">
                                                <p class="emp-h2">No Drafted items found</p>
                                                <p>Drafted items will appear here</p>
                                            </div>
                                        </div>
                                        <div class="sec-det-3 sec-det">
                                            <div class="sec-emp-cont">
                                                <img src="./assets/empty.png" alt="">
                                                <p class="emp-h2">No Rejected items found</p>
                                                <p>Rejected items will appear here</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sec2 sec">
                                <div class="sec-content">
                                    <p class="sec-topic">Complaints</p>
                                    <p class="sec-descript">The complaint page allows users to report issues related to parking spaces or services, ensuring quick and efficient resolution.</p>
                                    <p class="caption">Report your parking issues for prompt resolution</p>
                                    <div class="complaint-form">
                                        <form action="" method="POST">
                                            <label for="fname">Full Name</label><br>
                                            <input type="text" id="fname" placeholder="Enter yor full name" name="fname"><br>
                                            <label for="email">Email</label><br>
                                            <input type="email" id="email" placeholder="example@gmail.com" name="email"><br>
                                            <label for="date">Date</label><br>
                                            <input type="date" id="date" name="date"><br>
                                            <label for="reason">Reason</label><br>
                                            <input type="text" id="reason" name="reason" placeholder="Reason to complaint"><br>
                                            <label for="complaint">Complaint</label><br>
                                            <textarea name="complaint" id="complaint" placeholder="Type here...."></textarea><br>
                                            <input type="submit" value="File Complaint" name="submit" id="submit">

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="sec3 sec">
                                <div class="sec-content">
                                    <p class="sec-topic">Billing & Withdrawals</p>
                                    <div class="commingsoon">
                                        <div class="sec-emp-cont">
                                            <img src="./assets/empty.png" alt="">
                                            <p class="emp-h2">This section will comming soon</p>
                                            <p>Billing & Withdrawal details will appear here</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sec4 sec active">
                                <div class="sec-content">
                                    <div class="profile">
                                        <div class="pro-topic">
                                            <p>Account information</p>
                                        </div>
                                        <p class="pro-desc">You can edit your ParkWave profile information below.</p>

                                        <div class="pro-details">
                                            <div class="pro-name">
                                                <div class="firstn">
                                                    <label for="firstname">First name</label>
                                                    <p id="firstname"><?php echo $row['fName'] ?></p>
                                                </div>
                                                <div class="lastn">
                                                    <label for="lastname">Last name</label>
                                                    <p id="lastname"><?php echo $row['lName'] ?></p>
                                                </div>
                                            </div>
                                            <div class="pro-mobile">
                                                <label for="mobile">Phone number</label>
                                                <p id="mobile"><?php echo $row['tele'] ?></p>
                                            </div>
                                            <div class="pro-email">
                                                <label for="mail">Email Address</label>
                                                <p id="mail"><?php echo $row['email'] ?></p>
                                            </div>
                                            <div class="pro-address">
                                                <label for="address">Address</label>
                                                <p id="mail"><?php echo $row['address'] ?></p>
                                            </div>
                                            <div class="pro-psw">
                                                <label for="psw">Password</label>
                                                <a href="./resetpsw.php">
                                                    <input type="submit" value="Reset Password" id="psw">
                                                </a>
                                            </div>
                                            <div class="updtbtn">
                                                <a href="./updateuser.php"><input type="submit" value="Edit Profile" id="updtbtn"></a>
                                                <form action="" method="POST">
                                                    <input type="submit" value="Delete Profile" id="dltbtn" name="delete">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sec5 sec">
                                <div class="sec-content"></div>
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
                    <img src="./assets/Logo.png" alt="">
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
                        <img src="./assets/fb.png" alt="">
                        <img src="./assets/insta.png" alt="">
                        <img src="./assets/whatsapp.png" alt="">
                        <img src="./assets/gplus.png" alt="">
                    </div>
                </div>
            </div>
            <div class="footer-section2">
                <p>© 2024 PARK WAVE</p>
            </div>
        </footer>

        <!-- javascript -->
        <script src="./script/userprofile.js"></script>
        <script src="./script/navbar.js"></script>
</body>

</html>