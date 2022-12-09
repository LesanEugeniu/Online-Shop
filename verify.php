<?php
    include 'php/db.php';
    session_start();
    $unique_id = $_SESSION['unique_id'];
    if(empty($unique_id)){
        header("Location: login.php");
    }
    $qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}'");
    if(mysqli_num_rows($qry) > 0){
        $row = mysqli_fetch_assoc($qry);
        if($row){
            $_SESSION['verification_status'] = $row['verification_status'];
            if($row['verification_status'] == 'Verified'){
                header("Location: index.php");
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/verify.css">
    <title>Verify</title>
</head>
<body>
    <div class="section-1">
        <div class="pannel">
            <h2>Verify Your Account</h2>
            <p>We emailed you the four digit otp code to Enter the code below to confirm your email address..</p>
            <form class="form" action="" autocomplete="off">
                <div class="form-sections error">
                    <p>Error</p>
                </div>
                <div class="fields-input">
                    <input type="number" name="otp1" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
                    <input type="number" name="otp2" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
                    <input type="number" name="otp3" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
                    <input type="number" name="otp4" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
                </div>
                <div class="form-sections">
                    <input type="submit" value="Verify Now" name="submit" class="long-input submit">
                </div>
            </form>
        </div>
    </div>
    <script src="js/verify.js"></script>
</body>
<?php
mysqli_close($conn);
?>
</html>