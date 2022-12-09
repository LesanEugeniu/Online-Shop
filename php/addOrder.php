<?php

include '../php/db.php';
session_start();
if(isset($_SESSION['unique_id'])){
    $unique_id = $_SESSION['unique_id'];

    if(isset($_POST['product_id'])){
        $produs_id = $_POST['product_id'];

    $qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}'");
    if(mysqli_num_rows($qry) > 0){
        $row = mysqli_fetch_assoc($qry);
        if($row){
            $user_id = $row['id'];
        }
    }
    $qry2 = mysqli_query($conn, "SELECT * FROM cart WHERE user_id = '{$user_id}' AND product_id = '{$produs_id}'");
    if(mysqli_num_rows($qry2) > 0)//daca user cu produsu data este atunci quntity++
    {
        $row1 = mysqli_fetch_assoc($qry2);
        $quantity = $row1['quantity'];
        $quantity++;
        $qry2 = mysqli_query($conn, "UPDATE cart SET quantity = '{$quantity}' WHERE 
        user_id = '{$user_id}' AND product_id = '{$produs_id}'");
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }else{
        $quantity = 1;
        $sql = mysqli_query($conn, "INSERT INTO cart (user_id, product_id, quantity)
                            VALUES ('{$user_id}', '{$produs_id}', '{$quantity}')");
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
    if(isset($_GET['product_id'])){
        $produs_id = $_GET['product_id'];

        $qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}'");
        if(mysqli_num_rows($qry) > 0){
            $row = mysqli_fetch_assoc($qry);
            if($row){
                $user_id = $row['id'];
            }
        }
        $qry2 = mysqli_query($conn, "SELECT * FROM cart WHERE user_id = '{$user_id}' AND product_id = '{$produs_id}'");
        if(mysqli_num_rows($qry2) > 0)//daca user cu produsu data este atunci quntity++
        {
            $row1 = mysqli_fetch_assoc($qry2);
            $quantity = $row1['quantity'];
            $quantity++;
            $qry2 = mysqli_query($conn, "UPDATE cart SET quantity = '{$quantity}' WHERE 
            user_id = '{$user_id}' AND product_id = '{$produs_id}'");
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }else{
            $quantity = 1;
            $sql = mysqli_query($conn, "INSERT INTO cart (user_id, product_id, quantity)
                                VALUES ('{$user_id}', '{$produs_id}', '{$quantity}')");
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
    }

}

?>