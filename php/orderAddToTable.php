<?php
    include 'db.php';
    session_start();
    if(isset($_SESSION['unique_id'])){
        $unique_id = $_SESSION['unique_id'];
        $query = mysqli_query($conn,"SELECT id FROM users WHERE unique_id = '{$unique_id}'");
        $row = mysqli_fetch_assoc($query);
        $id = $row['id'];
        $query = mysqli_query($conn, "SELECT * FROM cart WHERE user_id ='{$id}'");
        $productsFromCart = array();
        while ($row=mysqli_fetch_assoc($query)) {
            array_push($productsFromCart, $row);
        }
        foreach($productsFromCart as $product){
        $query = mysqli_query($conn, "INSERT INTO orders (user_id, product_id, quantity)
            VALUES ($product[user_id], $product[product_id], $product[quantity])");
        }
        $query = mysqli_query($conn, "DELETE FROM cart WHERE user_id ='{$id}'");
        mysqli_close($conn);
        header('Location: ../index.php');
    }else{
        header('Location: ../index.php');
    }

?>