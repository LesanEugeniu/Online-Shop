<?php 
session_start();
include_once 'db.php';
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = "";
$password = md5($_POST['password']);
$confirmPassword = md5($_POST['confirmPassword']);
$Role = "user";
$verification_status = '0';

 if(!empty($firstName) && !empty($lastName) && !empty($email) && !empty($phone) && !empty($password) && !empty($confirmPassword)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            echo "$email ~ Already Exists";
        }
        else{
            if($password == $confirmPassword){
                // if(isset($_FILES['image']))
                $defaultImage = "default_image.png";

                $random_id = rand(time(), 10000000);
                $otp = mt_rand(1111,9999);

                $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, firstName, lastName, email, phone, address, password, image, otp, verification_status, Role)
                VALUES ({$random_id},'{$firstName}','{$lastName}','{$email}','{$phone}','{$address}','{$password}','{$defaultImage}','{$otp}','{$verification_status}','{$Role}')");
                if($sql2){
                    $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                    if(mysqli_num_rows($sql3)){
                        $row = mysqli_fetch_assoc($sql3);
                        $_SESSION['unique_id'] = $row['unique_id'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['otp'] = $row['otp'];

                        //mail function
                        if($otp){
                            $receiver = $email;
                            $subject = "[Astro] Please verify your device";
                            $body = "Hey "." $firstName $lastName! \n".
                            "\n".
                            "A sign in attempt requires further verification because we did not recognize your device. To complete the sign in, enter the verification code on the unrecognized device. \n".
                            "\n".
                            "Verification code: $otp\n".
                            "\n".
                            "Thanks,\n".
                            "The Astro Team.";
                            $sender = "From: astrotechnologiesstore@gmail.com";
                        }

                        if(mail($receiver, $subject, $body, $sender)){
                            echo "success";
                        }
                        else{
                            echo "Email Problem!" . mysqli_error($conn);
                        }

                    }
                }
            }
            else{
                echo "Confirm Password Don't Match";
            }
        }
    }
    else{
        echo "$email ~ This is not a Valid Email";
    }
}
else{
    echo "All Input Fields are Required";
}
?>