<?php
include 'db.php';
$product_id = $_GET['product_id'];
if($product_id > 25){
    $query=mysqli_query($conn,"DELETE FROM image WHERE product_id='{$product_id}'");
    $query=mysqli_query($conn,"DELETE FROM orders WHERE product_id='{$product_id}'");
    $query=mysqli_query($conn,"DELETE FROM cart WHERE product_id='{$product_id}'");
    $query=mysqli_query($conn,"DELETE FROM specification WHERE product_id='{$product_id}'");
    $query=mysqli_query($conn,"DELETE FROM product WHERE product_id='{$product_id}'");
}

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>