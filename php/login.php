<?php
session_start();
include 'db.php';
$email = $_POST['email'];
$password = md5($_POST['password']);

if(!empty($email) && !empty($password)){
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
        if($row){
            $_SESSION['unique_id'] = $row['unique_id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['otp'] = $row['otp'];
            echo "success";
            
        }
    }
    else{
        echo "Email or Password is Incorrect!";
    }     
}
else{
    echo "All Input Fields Are Required!";
}

?>