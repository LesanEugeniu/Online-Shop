<?php

include 'db.php';
session_start();
if(isset($_SESSION['unique_id'])){
    $unique_id = $_SESSION['unique_id'];
    $query = mysqli_query($conn,"SELECT id FROM users WHERE unique_id = '{$unique_id}'");
    $row = mysqli_fetch_assoc($query);
    $id = $row['id'];
    if(isset($_GET['product_id']) && isset($_GET['user_id'])){
        if($id == $_GET['user_id']){
            $query = mysqli_query($conn,"DELETE FROM orders WHERE product_id = '{$_GET['product_id']}' AND user_id = '{$_GET['user_id']}'");
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }else{
            header('Location: ../index.php');
        }
    }
}else{
    header('Location: ../index.php');
}

?>