<?php
    include 'php/db.php';
    session_start();
    if(isset($_SESSION['unique_id'])){
        $unique_id = $_SESSION['unique_id'];
        $query = mysqli_query($conn, "SELECT verification_status FROM users WHERE unique_id='{$unique_id}'");
        $row = mysqli_fetch_row($query);
        if($row[0] == "0"){
            header("Location: verify.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/svg" href="assets/Logo.svg">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Cart</title>
</head>
<body>
    <!-- <div class="first"><img class="logo-first" src="assets/Logo.svg" alt="Logo"></div> -->
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
        <!-- <a href="#"><img class="Search" src="assets/Search.svg" alt="Search"></a> -->
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
            ?>
    </div>

    <a class="logo-2" href="#index.php">
        <img class="logo" src="assets/Logo.svg" alt="Logo">
    </a>

    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
    </nav>

    <div class="container-1">
        <div class="proc-100-width">
            <button class="back-to-prev" onclick="history.back()">
                <img class="cart-arrow" src="assets/Arrow-cart.svg">
                <p class="cart-arrow-text">Cart</p>
            </button>
        </div>
        <div class="produse-and-achit">
            <div class="sect-produse">

            <?php

            include 'php/db.php';
            $qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}'");
            if(mysqli_num_rows($qry) > 0){
                $row = mysqli_fetch_assoc($qry);
                if($row){
                    $user_id = $row['id'];
                }
            }

            $qry = mysqli_query($conn, "SELECT * FROM cart WHERE user_id = '{$user_id}'");
            if(mysqli_num_rows($qry) > 0){
                while($row = mysqli_fetch_array($qry)){
                    $product_id = $row['product_id'];
                    $quantity = $row['quantity'];

                    $brand;
                    $model_name;
                    $price;
                    $description;
                    $image;
                    $number_models;
                    $mini_description;
                    $urls = array();


                    $qry3 = mysqli_query($conn, "SELECT * FROM image WHERE product_id = '{$product_id}'");
                    if(mysqli_num_rows($qry3) > 0){
                        while($row = mysqli_fetch_array($qry3)){
                            array_push($urls, $row['url']);
                        }
                        }

                        $qry2 = mysqli_query($conn, "SELECT * FROM product WHERE product_id = '{$product_id}'");
                        if(mysqli_num_rows($qry2) > 0){
                            $row = mysqli_fetch_assoc($qry2);
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
                    
                    echo "<div class=\"produs-cart product-data\">\n";
                    if($product_id > 25){
                        echo "<img class=\"prod-cart-image\" src=\"./ProductsImages/".$urls[0]."\">\n";

                    }else{
                        echo "<img class=\"prod-cart-image\" src=\"".$urls[0]."\">\n";

                    }
                    echo "<p class=\"prod-cart-text\">$brand $model_name</p>\n";
                    echo "<div class=\"btn-plus-minus\">\n";
                    echo "<a href=\"php/quantityProductFromCart.php?product_id=$product_id&user_id=$user_id&type=dec\">
                    <button class=\"prod-cart-text minus decrement-btn updateQty\">-</button>
                    </a>";
                    echo "<input type=\"text\" class=\"prod-cart-text input-qty\" min=\"1\" value=\"$quantity\">\n";
                    echo "<a href=\"php/quantityProductFromCart.php?product_id=$product_id&user_id=$user_id&type=inc\">
                    <button class=\"prod-cart-text plus increment-btn updateQty\">+</button>
                    </a>";
                    echo "</div>\n";
                    echo "<p class=\"prod-cart-text pretul-produsului\">Price $$price</p>\n";
                    echo "<a href=\"php/deleteProductFromCart.php?product_id=$product_id&user_id=$user_id\">
                        <img class=\"prod-cart-trash\" src=\"assets/trash.png\">
                        </a>\n";
                    echo "</div>\n";
                  }
                }
            ?>

            </div>
            <div class="sect-achit">
                <div class="buy-menu-sect buy-menu-sect-1">
                    <div class="order-summary">
                        <p class="buy-menu-text">Order Summary</p>
                    </div>
                    <div class="sub-total">
                        <p class="buy-menu-text">Sub Total</p>
                        <p class="buy-menu-text sub-total-price price-sub-total">$0</p>
                    </div>
                    <div class="delivery">
                        <p class="buy-menu-text">Delivery</p>
                        <p class="buy-menu-text livrarea">$0</p>
                    </div>
                </div>
                
                <div class="buy-menu-sect buy-menu-sect-2">
                    <div class="total">
                        <p class="buy-menu-text">Total</p>
                        <p class="buy-menu-text pretul-final">$0</p>
                    </div>
                    <div class="btn-check">
                        <?php 
                        echo "
                        <a href=\"php/orderAddToTable.php\">
                        <button class=\"btn-checkout-black Checkout-Checkout\">Checkout</button>
                        </a>";

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer">
        <div>
                <p class="text-3 text-4">ENVOY</p>
                <p class="text-3">We create possibilities<br>for the connected world.</p>
                <p class="text-3 text-5">Be Bold.</p>
        </div>
        <div>
                <p class="text-3 text-5">Explore</p>
                <p class="text-3"><a class="white-link-footer" href="/Smartphone/Samsung.php">Samsung</a></p>
                <p class="text-3"><a class="white-link-footer" href="/Smartphone/Huawei.php">Huawei</a></p>
                <p class="text-3"><a class="white-link-footer" href="/Smartphone/Xiaomi.php">Xiaomi</a></p>
                <p class="text-3"><a class="white-link-footer" href="">About Astro</a></p>
                <p class="text-3"><a class="white-link-footer" href="">Support</a></p>
        </div>
        <div>
            <p class="text-3 text-5">Visit</p>
            <p class="text-3">Envoy So.California</p>
            <p class="text-3">34 Tesla, Ste 100</p>
            <p class="text-3">Irvine, Ca, USA 92618 </p> 
        </div>
        <div>
            <p class="text-3 text-5" >Follow</p>
            <p class="text-3"><a class="white-link-footer" href="https://www.instagram.com/eugeniu_lesan/" target="_blank">Instagram</a></p>
            <p class="text-3"><a class="white-link-footer" href="https://twitter.com/Vatarioff" target="_blank">Twitter</a></p>
            <p class="text-3"><a class="white-link-footer" href="https://www.linkedin.com/in/eugeniu-le%C8%99an-50863a230/" target="_blank">Linkedln</a></p>
        </div>
        <div class="legal">
            <p class="text-3 text-5" >Legal</p>
            <p class="text-3">Terms</p>
            <p class="text-3">Privacy</p>
        </div>
        <div class="new-buisines">
            <p class="text-3 text-5" >New Buisiness</p>
            <p class="text-3">eugeniu1337@gmail.com</p>
            <p class="text-3">949.333.3106</p>
        </div>
        <p class="text-pos text-3 text-5">© 2022 Envoy. All Rights Reserved</p>
    </div>

    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/cart.js"></script>
    <script src="js/script.js"></script>
    <script src="js/login-menu.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 3000,
        once: true,
      });
    </script>
</body>
<?php

mysqli_close($conn);

?>
</html>