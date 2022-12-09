<?php

include 'db.php';
session_start();
if(isset($_SESSION['unique_id'])){
    $unique_id = $_SESSION['unique_id'];
    $query = mysqli_query($conn,"SELECT id FROM users WHERE unique_id = '{$unique_id}'");
    $row = mysqli_fetch_assoc($query);
    $id = $row['id'];
    if(isset($_GET['product_id']) && isset($_GET['user_id']) && isset($_GET['type'])){
        if($_GET['type'] == "dec"){
            $query = mysqli_query($conn,"SELECT quantity FROM cart WHERE product_id = '{$_GET['product_id']}' AND user_id = '{$_GET['user_id']}'");
            $row = mysqli_fetch_row($query);
            $quantity = $row[0];
            if($quantity == 1){
                $query = mysqli_query($conn,"DELETE FROM cart WHERE product_id = '{$_GET['product_id']}' AND user_id = '{$_GET['user_id']}'");
                mysqli_close($conn);
                header('Location: ../cart.php');
            }else{
                $quantity--;
                $query = mysqli_query($conn,"UPDATE cart 
                SET quantity = '{$quantity}'
                WHERE product_id = '{$_GET['product_id']}' AND user_id = '{$_GET['user_id']}'");
                mysqli_close($conn);
                header('Location: ../cart.php');
            }
        }
        if($_GET['type'] == "inc"){
            $query = mysqli_query($conn,"SELECT quantity FROM cart WHERE product_id = '{$_GET['product_id']}' AND user_id = '{$_GET['user_id']}'");
            $row = mysqli_fetch_row($query);
            $quantity = $row[0];
            $quantity++;
            $query = mysqli_query($conn,"UPDATE cart 
            SET quantity = '{$quantity}'
            WHERE product_id = '{$_GET['product_id']}' AND user_id = '{$_GET['user_id']}'");
            mysqli_close($conn);
            header('Location: ../cart.php');
        }else{
            mysqli_close($conn);
            header('Location: ../index.php');
        }
    }
}else{
    mysqli_close($conn);
    header('Location: ../index.php');
}

?>