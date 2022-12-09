<?php
    include 'db.php';
    session_start();
    $unique_id = $_SESSION['unique_id'];
    $query = mysqli_query($conn, "SELECT Role FROM users WHERE unique_id='{$unique_id}'");
    $row = mysqli_fetch_assoc($query);
    if($row['Role'] == "user"){
        header('Location: ../index.php');
    }
    if($_POST['product_id'] <= 25){
        $product_id = $_POST['product_id'];
        $model_name = $_POST['model_name'];
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        $mini_description = $_POST['mini_description'];
        $description = $_POST['description'];
        $display = $_POST['display'];
        $gpu = $_POST['gpu'];
        $batery = $_POST['batery'];
        $unlock_type = $_POST['unlock_type'];
    
        $query = mysqli_query($conn, "UPDATE product SET model_name='{$model_name}',brand='{$brand}', price='{$price}', mini_description='{$mini_description}', description='{$description}' WHERE product_id='{$product_id}'");
        $query = mysqli_query($conn, "UPDATE specification SET display='{$display}', gpu='{$gpu}', batery='{$batery}', unlock_type='{$unlock_type}' WHERE product_id='{$product_id}'");
        header('Location: ' . $_SERVER['HTTP_REFERER']);  
    }
    else
    {
        $product_id = $_POST['product_id'];
        $model_name = $_POST['model_name'];
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        $mini_description = $_POST['mini_description'];
        $description = $_POST['description'];
        $display = $_POST['display'];
        $gpu = $_POST['gpu'];
        $batery = $_POST['batery'];
        $unlock_type = $_POST['unlock_type'];
    
        $oldImagesArray = array();
        $query=mysqli_query($conn,"SELECT url FROM image WHERE product_id='{$product_id}'");
        while($row = mysqli_fetch_row($query)){
            array_push($oldImagesArray, $row[0]);
        }

        print_r($oldImagesArray);

        $image = $oldImagesArray[0];
        $img_name = $_FILES['image1']['name'];
        $img_typ = $_FILES['image1']['type'];
        $tmp_name = $_FILES['image1']['tmp_name'];
        $img_explode = explode('.',$img_name);
        $img_extension = end($img_explode);
        $time = time();
        $extensions = ['png','jpeg','jpg'];
            if(in_array($img_extension,$extensions) == true){
                if(!str_contains($oldImagesArray[0], $img_name)){
                    if(move_uploaded_file($tmp_name, "../ProductsImages/".$time.$img_name)){
                        $image = $time.$img_name;
                        }
                }else{
                    $image = $oldImagesArray[0];
                }
                    
                    }

        $query = mysqli_query($conn, "UPDATE product SET model_name='{$model_name}',brand='{$brand}', price='{$price}', mini_description='{$mini_description}', description='{$description}', image='{$image}' WHERE product_id='{$product_id}'");
        $query = mysqli_query($conn, "UPDATE specification SET display='{$display}', gpu='{$gpu}', batery='{$batery}', unlock_type='{$unlock_type}' WHERE product_id='{$product_id}'");
        
        $listOfImageId = array();
        $syntax = "SELECT image_id FROM image WHERE product_id='{$product_id}' ORDER BY image_id ASC";
        $query = mysqli_query($conn, $syntax);
        while($row = mysqli_fetch_assoc($query)){
            array_push($listOfImageId, $row['image_id']);
        }
        
        $query = mysqli_query($conn, "UPDATE image SET url='{$image}' WHERE product_id='{$product_id}' AND image_id='{$listOfImageId[0]}'");

        $img_name = $_FILES['image2']['name'];
        $img_typ = $_FILES['image2']['type'];
        $tmp_name = $_FILES['image2']['tmp_name'];
        $img_explode = explode('.',$img_name);
        $img_extension = end($img_explode);
        $extensions = ['png','jpeg','jpg'];
            if(in_array($img_extension,$extensions) == true){ 
                if(!str_contains($oldImagesArray[1], $img_name)){
                    if(move_uploaded_file($tmp_name, "../ProductsImages/".$time.$img_name)){
                        $url = $time.$img_name;
                        $query = mysqli_query($conn, "UPDATE image SET url='{$url}' WHERE product_id='{$product_id}' AND image_id='{$listOfImageId[1]}'");
                        }
                    }else{
                        $url = $oldImagesArray[1];
                        $query = mysqli_query($conn, "UPDATE image SET url='{$url}' WHERE product_id='{$product_id}' AND image_id='{$listOfImageId[1]}'");
                    }
                    }

        header('Location: ' . $_SERVER['HTTP_REFERER']);
        

    }


    mysqli_close($conn);
?>