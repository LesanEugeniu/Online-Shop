<?php
    include 'db.php';
    $brand;
    $model_name;
    $price;
    $description;
    $image;
    $number_models;
    $mini_description;

    $qry = mysqli_query($conn, "SELECT * FROM product WHERE product_id = '{$product_id}'");
    if(mysqli_num_rows($qry) > 0){
        $row = mysqli_fetch_assoc($qry);
            if($row){
                $brand = $row['brand'];
                $model_name = $row['model_name'];
                $price = $row['price'];
                $mini_description = $row['mini_description'];
                $description = $row['description'];
                $image = $row['image'];
                $number_models = $row['number_models'];
            }
        }   
    
    $elements_color = array();
    $qry1 = mysqli_query($conn, "SELECT * FROM bg_colors WHERE product_id = '{$product_id}'");
    if(mysqli_num_rows($qry1) > 0){
        while($row = mysqli_fetch_array($qry1)){
            array_push($elements_color, $row['elements_color']);
          }
        }
    $display;
    $gpu;
    $batery;
    $unlock_type;
    $qry2 = mysqli_query($conn, "SELECT * FROM specification WHERE product_id = '{$product_id}'");
    if(mysqli_num_rows($qry2) > 0){
        $row2 = mysqli_fetch_assoc($qry2);
            if($row2){
                $display = $row2['display'];
                $gpu = $row2['gpu'];
                $batery = $row2['batery'];
                $unlock_type = $row2['unlock_type'];
            }
        }
    $displayArray = explode(" ", $display);
    $gpuArray = explode(" ", $gpu);
    $bateryArray = explode(" ", $batery);
    $unlock_typeArray = explode(" ", $unlock_type);

    $urls = array();
    if($product_id <= 25){
        $qry3 = mysqli_query($conn, "SELECT * FROM image WHERE product_id = '{$product_id}'");
        if(mysqli_num_rows($qry3) > 0){
            while($row = mysqli_fetch_array($qry3)){
                array_push($urls, $row['url']);
            }
            }
    }else{
        $qry3 = mysqli_query($conn, "SELECT * FROM image WHERE product_id = '{$product_id}'");
        if(mysqli_num_rows($qry3) > 0){
            while($row = mysqli_fetch_array($qry3)){
                array_push($urls, "./ProductsImages/".$row['url']);
            }
            }
    }
    // print_r($urls);
?>