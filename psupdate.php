<?php 

session_start();

include "config.php";

$spotID = $_GET['update'];

$select = "SELECT * FROM `spaces` WHERE spaceID = '$spotID'";

$sresult = mysqli_query($con, $select);

$srow = mysqli_fetch_assoc($sresult);

if(isset($_POST['submit'])){
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pName = $_POST['pName'];
    $tele = $_POST['tele'];
    $size = $_POST['size'];
    $price = $_POST['price'];

    $update = "UPDATE `spaces` SET `address`='$address',`city`='$city',`pName`='$pName',`tele`='$tele',`size`='$tele',`price`='$price' WHERE spaceID = '$spotID'";

    $result = mysqli_query($con, $update);

    if($result){
        header("Location: owneruserprofile.php");
    }
    
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Registration form</title>
    <link rel="stylesheet" href="./style/psupdate.css">
    <link rel="stylesheet" href="./style/footernav.css">
</head>
<body>
    <div class="container">
        <div class="form-section">
            <div class="form-from">
                <div class="form-box">
                    <div class="form-head">
                        <div class="form-topic">
                            <p>UPDATE SPACE DETAILS</p>
                        </div>
                    </div>
                    <div class="form-content">
                        <div class="form-input">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="input-section">
                                    <p>Location</p>
                                    <div class="two-input">
                                        <input type="text" name="address" value="<?php echo $srow['address'] ?>" required>
                                        <input type="text" name="city"  value="<?php echo $srow['city'] ?>" required>
                                    </div>
                                </div>
                                <div class="input-section">
                                    <p>Details</p>
                                    <div class="two-input">
                                        <input type="text" name="pName"  value="<?php echo $srow['pName'] ?>" required>
                                        <input type="number" name="tele"  value="<?php echo $srow['tele'] ?>" required>
                                    </div>
                                </div>
                                <div class="input-section">
                                    <p>Size & Price</p>
                                    <div class="two-input">
                                        <input type="text" name="size"  value="<?php echo $srow['size'] ?>" required>
                                        <input type="number" name="price"  value="<?php echo $srow['price'] ?>" required>
                                    </div>
                                </div>
                            
                                <div class="input-selection btn">
                                    <div class="s-btn">
                                        <input type="submit" name="submit" value="UPDATE">
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