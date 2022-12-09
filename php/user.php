<?php
    include 'php/db.php';
    $image;
    $firstName;
    $lastName;
    $email;
    $phone;
    $address;
    if(isset($_SESSION['unique_id'])){
        $unique_id = $_SESSION['unique_id'];

            $qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}'");
            if(mysqli_num_rows($qry) > 0){
                $row = mysqli_fetch_assoc($qry);
                if($row){
                    $image = $row['image'];
                    $firstName = $row['firstName'];
                    $lastName = $row['lastName'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $address = $row['address'];
                }
            }

    }
?>