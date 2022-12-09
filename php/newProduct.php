<?php
    include 'db.php';
    session_start();
    $unique_id = $_SESSION['unique_id'];
    $query = mysqli_query($conn, "SELECT Role FROM users WHERE unique_id='{$unique_id}'");
    $row = mysqli_fetch_assoc($query);
    if($row['Role'] == "user"){
        header('Location: ../index.php');
    }
    $model_name = $_POST['model_name'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $mini_description = $_POST['mini_description'];
    $description = $_POST['description'];
    $display = $_POST['display'];
    $gpu = $_POST['gpu'];
    $batery = $_POST['batery'];
    $unlock_type = $_POST['unlock_type'];
    
        $img_name = $_FILES['image1']['name'];
        $img_typ = $_FILES['image1']['type'];
        $tmp_name = $_FILES['image1']['tmp_name'];
        $img_explode = explode('.',$img_name);
        $img_extension = end($img_explode);
        $time = time();
        $extensions = ['png','jpeg','jpg'];
            if(in_array($img_extension,$extensions) == true){
                    if(move_uploaded_file($tmp_name, "../ProductsImages/".$time.$img_name)){
                        $image = $time.$img_name;
                        }
                }
        



    $query = mysqli_query($conn, "INSERT INTO product 
    (brand, price, mini_description, description, model_name,image,number_models)
    VALUES ('{$brand}','{$price}','{$mini_description}','{$description}','{$model_name}','{$image}',2)");

    $query = mysqli_query($conn, "SELECT product_id FROM product 
    WHERE brand='{$brand}' AND model_name='{$model_name}' AND mini_description='{$mini_description}'");
    $row = mysqli_fetch_assoc($query);
    $product_id = $row['product_id'];
    
    $query = mysqli_query($conn, "INSERT INTO specification 
    (display, gpu, batery, unlock_type,product_id)
    VALUES ('{$display}','{$gpu}','{$batery}','{$unlock_type}','{$product_id}')");

    $sql = mysqli_query($conn, "INSERT INTO image (product_id, url) VALUES ('{$product_id}', '{$image}')");

    $img_name = $_FILES['image2']['name'];
    $img_typ = $_FILES['image2']['type'];
    $tmp_name = $_FILES['image2']['tmp_name'];
    $img_explode = explode('.',$img_name);
    $img_extension = end($img_explode);
    $extensions = ['png','jpeg','jpg'];
    
        if(in_array($img_extension,$extensions) == true){ 
                if(move_uploaded_file($tmp_name, "../ProductsImages/".$time.$img_name)){
                    $url = $time.$img_name;
                    $sql = mysqli_query($conn, "INSERT INTO image (product_id, url) VALUES ('{$product_id}', '{$url}')");
                    }
            }
            

    header('Location: ' . $_SERVER['HTTP_REFERER']);

    mysqli_close($conn);
