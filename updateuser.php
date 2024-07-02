<?php
session_start();

include 'config.php';

$userID = $_SESSION['userID'];

$select = "SELECT * FROM users WHERE userID = '$userID'";

$result = mysqli_query($con, $select);


$row = mysqli_fetch_array($result);

$_SESSION['userID'] = $row['userID'];

$roll = $row['roll'];

if (isset($_POST['update'])){

    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $address = $_POST['address'];
    $tele = $_POST['tele'];

    $update = "UPDATE `users` SET `fName`='$fName',`lName`='$lName',`address`='$address',`tele`='$tele' WHERE userID = '$userID'";

    $updtresult = mysqli_query($con, $update);

    if($updtresult){
        if($roll == 'driver'){
            header("Location: userprofile.php");
        }
        elseif($roll == 'spaceowner'){
            header("Location: owneruserprofile.php");
        }
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="./style/updateuser.css">
    <link rel="stylesheet" href="./style/footernav.css">
</head>
<body>

 <div class="body-sec">
    <div class="container">
        <div class="form-section">
            <div class="form-form">
                <div class="form-box">
                    <div class="form-head">
                        <div class="form-topic">
                            <p>UPDATE USER INFO</p>
                            
                        </div>
                    </div>
                    <div class="form-content">
                        <div class="form-input">
                            <form action="" method="POST">
                                <div class="input-section">
                                    <p>Name</p>
                                    <div class="two-input">
                                        <input type="text" name="fName" value="<?php echo $row['fName'] ?>" required>
                                        <input type="text" name="lName" value="<?php echo $row['lName'] ?>" required>
                                    </div>
                                </div>
                                <div class="input-section">
                                    <p>Address</p>
                                    <input type="text" name="address" value="<?php echo $row['address'] ?>" required>
                                </div>
                                
                                <div class="input-section">
                                    <p>Telephone</p>
                                    <input type="text" name="tele" value="<?php echo $row['tele'] ?>" required>
                                </div>
                                
                                <div class="input-selection btn">
                                    <div class="s-btn">
                                        <input type="submit" name="update" value = 'UPDATE'>
                                        
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
 

    <!-- JS for validate password -->
    <script src="./script/pasword.js"></script>
    <script src="./script/navbar.js"></script>
    
</body>
</html>