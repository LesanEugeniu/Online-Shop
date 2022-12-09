<?php
    include 'php/db.php';
    session_start();
    $unique_id = $_SESSION['unique_id'];
    $product_id;
        if(empty($unique_id)){
            header("Location: login.php");
        }
        $query = mysqli_query($conn,"SELECT Role FROM users WHERE unique_id = '{$unique_id}'");
        $row = mysqli_fetch_assoc($query);
        $role = $row['Role'];
        if($role=="user"){
            header("Location: index.php");
        }
    if(isset($_GET['product_id'])){
        $product_id = $_GET['product_id'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/svg" href="assets/Logo.svg">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/adminPanel.css">
    <link rel="stylesheet" href="css/editProduct.css">
    <title>Admin Panel</title>
</head>
<body>
    <nav class="nav-bar">
            <div class="ul">
            <a href="index.php">
                <img class="logo logo-nav" src="assets/Logo.svg" alt="Logo">
            </a>
            <div class="dropdown" data-dropdown>
                <button class="linked nav-btn link linkuri-nav trei-links dispar-after" data-dropdown-button>Apple</button>
                    <div class="dropdown-menu">
                        <div class="flex-div">
                            <a class="link flex-div-1 linked black-link-dropdown" href="Apple/iPhone.php" target="_self">iPhone</a>
                            <a class="link flex-div-1 linked black-link-dropdown" href="Apple/iPad.php" target="_self">iPad</a>
                        </div>
                    </div>
                    <a class="linked nav-btn link procent linkuri-nav" href="Apple/iPhone.php" target="_self">iPhone</a>
                    <a class="linked nav-btn link procent linkuri-nav" href="Apple/iPad.php" target="_self">iPad</a>
            </div>
            <div class="dropdown" data-dropdown>
                <button class="linked nav-btn link linkuri-nav trei-links dispar-after" data-dropdown-button>Smartphone</button>
                <div class="dropdown-menu">
                    <div class="flex-div">
                        <a class="link flex-div-1 linked black-link-dropdown" href="Smartphone/Xiaomi.php" target="_self">Xiaomi</a>
                        <a class="link flex-div-1 linked black-link-dropdown" href="Smartphone/Samsung.php" target="_self">Samsung</a>
                        <a class="link flex-div-1 linked black-link-dropdown" href="Smartphone/Huawei.php" target="_self">Huawei</a>
                    </div>
                </div>
                <a class="linked nav-btn link procent linkuri-nav" href="Smartphone/Xiaomi.php" target="_self">Xiaomi Phone</a>
                <a class="linked nav-btn link procent linkuri-nav" href="Smartphone/Samsung.php" target="_self">Samsung Phone</a>
                <a class="linked nav-btn link procent linkuri-nav" href="Smartphone/Huawei.php" target="_self">Huawei Phone</a>
            </div>
            <div class="dropdown" data-dropdown>
                <button class="linked nav-btn link linkuri-nav trei-links dispar-after" data-dropdown-button>Tablet</button>
                <div class="dropdown-menu">
                    <div class="flex-div">
                        <a class="link flex-div-1 linked black-link-dropdown" href="Tablet/Samsung-tab.php" target="_self">Samsung</a>
                        <a class="link flex-div-1 linked black-link-dropdown" href="Tablet/Huawei-tab.php" target="_self">Huawei</a>
                    </div>
                </div>
                <a class="linked nav-btn link procent linkuri-nav" href="Tablet/Samsung-tab.php" target="_self">Samsung Tablet</a>
                <a class="linked nav-btn link procent linkuri-nav" href="Tablet/Huawei-tab.php" target="_self">Huawei Tablet</a>
            </div>
            <a class="linked white-link-navbar linkuri-nav" href="About Astro.php">About Astro</a>
            <a class="linked white-link-navbar linkuri-nav" href="Support.php">Support</a>
            <div class="search-box linkuri-nav">
                <input class="search-txt" type="text" name="" placeholder="Type to search">
                <a class="search-btn" href="#">
                    <i class="fas fa-search"></i>
                </a>
            </div>
            <?php
            $image;
            if(isset($_SESSION['unique_id'])){
                $qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}'");
                if(mysqli_num_rows($qry) > 0){
                    $row = mysqli_fetch_assoc($qry);
                    if($row){
                        $image = $row['image'];
                    }
                }
            }
            if(!empty($unique_id)){
                echo "<div class=\"dropdown-user\">".
                "<a><img onclick=\"myFunction()\" class=\"size35 linkuri-nav dropbtn user-image\" src=\""."Images/".$image."\" alt=\"Profile\"></a>".
                "<div id=\"myDropdown\" class=\"dropdown-content\">".
                "<a href=\"account.php\">".
                "<i class=\"fa fa-user uk-margin-right\"></i> Account</a>".
                "<a class=\"orders-border\" href=\"cart.php\">".
                "<i class=\"fa fa-shopping-bag uk-margin-right\"></i> Orders</a>".
                "<a href=\"php/logout.php?logout_id=$unique_id\">".
                "<i class=\"fa fas fa-sign-out-alt uk-margin-right\"></i>Logout</a>".
                "</div>".
                "</div>";
            }
            else{
                echo "<a href=\"login.php\"><img  class=\"size35 linkuri-nav\" src=\"assets/Profile.svg\" alt=\"Profile\"></a>";
            }
            mysqli_close($conn);
            ?>
             </div>

        <a class="logo-2" href="index.php">
            <img class="logo" src="assets/Logo.svg" alt="Logo">
        </a>

        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        </nav>




    
        <div class="container-1">
                <div class="wrapper-left">
                    <p class="name-tag">Logged in as admin</p>

                    <div>
                        <ul>
                            <li class="menu-li">
                                <a href="adminPanel.php">
                                    <i class="fas fa-cart-plus"></i> 
                                    Products
                                </a>
                            </li>
                            <li class="menu-li">
                                <a href="orderList.php">
                                    <i class="fas fa-headset"></i> 
                                    Orders List
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
        
        <div class="wrapper">
           <?php
                include 'php/db.php';
                
                $query = mysqli_query($conn, "SELECT * FROM product WHERE product_id = '{$product_id}'");
                $query1 = mysqli_query($conn, "SELECT * FROM specification WHERE product_id = '{$product_id}'");
            
                $row = mysqli_fetch_assoc($query);
                $row1 = mysqli_fetch_assoc($query1);

                    echo "
                    <form class=\"form\" action=\"php/productupdate.php\" method=\"post\" enctype=\"multipart/form-data\">
                        <input type=\"hidden\" name=\"product_id\" value=\"".$row['product_id']."\">
                    <label for=\"brand\">Brand
                        <input class=\"input-text\" type=\"text\" name=\"brand\" value=\"".$row['brand']."\">
                    </label>
                    <label for=\"model_name\">Model
                        <input class=\"input-text\" type=\"text\" name=\"model_name\" value=\"".$row['model_name']."\">
                    </label>
                    <label for=\"price\">Price
                        <input class=\"input-text\" type=\"text\" name=\"price\" value=\"".$row['price']."\">
                    </label>
                    <label for=\"mini_description\">Mini Description
                        <input class=\"input-text\" type=\"text\" name=\"mini_description\" value=\"".str_replace("\"","",str_replace("<br>"," ",$row['mini_description']))."\" >
                    </label>
                    <label for=\"description\">Description
                        <textarea class=\"input-text\" name=\"description\" cols=\"30\" rows=\"10\">".$row['description']."</textarea>
                    </label>
                    <label for=\"display\"> Specification 1
                        <input class=\"input-text\" type=\"text\" name=\"display\" value=\"".$row1['display']."\">
                    </label>
                    <label for=\"gpu\"> Specification 2
                        <input class=\"input-text\" type=\"text\" name=\"gpu\" value=\"".$row1['gpu']."\">
                    </label>
                    <label for=\"batery\"> Specification 3
                        <input class=\"input-text\" type=\"text\" name=\"batery\" value=\"".$row1['batery']."\">
                    </label>
                    <label for=\"unlock_type\"> Specification 4
                        <input class=\"input-text\" type=\"text\" name=\"unlock_type\" value=\"".$row1['unlock_type']."\">
                    </label>
                    ";

                    if($product_id > 25){
                        $query3 = mysqli_query($conn, "SELECT * FROM image WHERE product_id = '{$product_id}'");
                        echo "<div class=\"images\">";
                        $k=1;
                        while($row3 = mysqli_fetch_assoc($query3)){
                            echo "
                            <label for=\"image\"> Images
                                <input type=\"file\" name=\"image$k\" value=\"".$row3['url']."\">
                            </label>
                            ";
                            $k++;
                        }
                        echo "</div>";
                    }
                    echo "<input type=\"submit\" value=\"Submit\">
                    </form>";
                        
                

                mysqli_close($conn);
           ?> 
                   

        </div>
        

        </div>
        
    <script src="js/login-menu.js"></script>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 3000,
        once: true,
      });
</script>
</body>
</html>