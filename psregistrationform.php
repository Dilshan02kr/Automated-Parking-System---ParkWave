<?php 

session_start();

include "config.php";

if(isset($_POST['submit'])){
    $userID = $_SESSION['userID'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pName = $_POST['pName'];
    $tele = $_POST['tele'];
    $size = $_POST['size'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $spotImg = $_FILES["spotImg"]["name"];
    $tmpName = $_FILES["spotImg"]["tmp_name"];
    $spotImgfolder = "upload/".$spotImg;

    $insert = "INSERT INTO `spaces`(`userID`, `address`, `city`, `pName`, `tele`, `size`, `price`, `pType`, `spaceImg`) VALUES ('$userID','$address','$city','$pName','$tele','$size','$price','$type','$spotImg')";

    $result = mysqli_query($con, $insert);

    if($result){
        move_uploaded_file($tmpName, $spotImgfolder);
        $_SESSION['smsg'] = "PARKING SPOT ADDED!";
        header("Location: ownerdashboard.php");
    }
    else{
        echo "<script>alert('Image Not uploaded)</script>";
    }
    
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Registration form</title>
    <link rel="stylesheet" href="./style/psRegistrationForm.css">
    <link rel="stylesheet" href="./style/footernav.css">
</head>
<body>
    <div class="container">
        <div class="form-section">
            <div class="form-img"></div>
            <div class="form-from">
                <div class="form-box">
                    <div class="form-head">
                        <div class="form-topic">
                            <p>SPOT REGISTRATION</p>
                        </div>
                    </div>
                    <div class="form-content">
                        <div class="form-input">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="input-section">
                                    <p>Location</p>
                                    <div class="two-input">
                                        <input type="text" name="address" placeholder="Address" required>
                                        <input type="text" name="city" placeholder="City" required>
                                    </div>
                                </div>
                                <div class="input-section">
                                    <p>Details</p>
                                    <div class="two-input">
                                        <input type="text" name="pName" placeholder="property name" required>
                                        <input type="number" name="tele" placeholder="Telephone" required>
                                    </div>
                                </div>
                                <div class="input-section">
                                    <p>Size & Price</p>
                                    <div class="two-input">
                                        <input type="text" name="size" placeholder="Area-Size (in perches)" required>
                                        <input type="number" name="price" placeholder="Price Per Hour" required>
                                    </div>
                                </div>
                                <div class="input-selection input-section-second">
                                    <p>Type of Parking Space</p>
                                    <select name="type" id="">
                                        <option value="none">None</option>
                                        <option value="Garage">Garage</option>
                                        <option value="Outdoor">Outdoor</option>
                                        <option value="Indoor">Indoor</option>
                                        <option value="Streat">Street</option>
                                    </select>
                                </div>
                                <!-- <div class="input-selection input-section-second">
                                    <p>Which Type Of Vehicles Can Park?</p>
                                    <div class="checkbox-section">
                                        <div class="checkbox-sec">
                                            <input type="checkbox" id="car" name="car">
                                            <label for="car">Car/Van</label>
                                        </div>
                                         <div class="checkbox-sec">
                                            <input type="checkbox" id="trucks" name="trucks">
                                            <label for="trucks">Trucks</label>
                                        </div>
                                        <div class="checkbox-sec">
                                            <input type="checkbox" id="motorcycle" name="motorcycle">
                                            <label for="motorcycle">Motorcycle</label>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="input-selection img-upload">
                                    <p>Upload an Image</p>
                                    <input type="file" name="spotImg">
                                </div>
                                <div class="input-selection btn">
                                    <div class="s-btn">
                                        <input type="submit" name="submit" value="REGISTER">
                                     </div>
                                </div>
        
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<script src="./script/navbar.js"></script>
</body>
</html>