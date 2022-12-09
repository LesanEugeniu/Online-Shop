<?php
    include '../php/db.php';
    session_start();
    if(isset($_SESSION['unique_id'])){
    $unique_id = $_SESSION['unique_id'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/svg" href="../assets/Logo.svg">
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>iPad</title>
</head>
<body>
    <div class="first"><img class="logo-first" src="../assets/Logo.svg" alt="Logo"></div>
    <nav class="nav-bar">
        <div class="ul">
        <a href="../index.php">
            <img class="logo logo-nav" src="../assets/Logo.svg" alt="Logo">
        </a>
        <div class="dropdown" data-dropdown>
            <button class="linked nav-btn link linkuri-nav trei-links dispar-after" data-dropdown-button>Apple</button>
                <div class="dropdown-menu">
                    <div class="flex-div">
                        <a class="link flex-div-1 linked black-link-dropdown" href="iPhone.php" target="_self">iPhone</a>
                        <a class="link flex-div-1 linked black-link-dropdown" href="iPad.php" target="_self">iPad</a>
                    </div>
                </div>
                <a class="linked nav-btn link procent linkuri-nav" href="iPhone.php" target="_self">iPhone</a>
                <a class="linked nav-btn link procent linkuri-nav" href="iPad.php" target="_self">iPad</a>
        </div>
        <div class="dropdown" data-dropdown>
            <button class="linked nav-btn link linkuri-nav trei-links dispar-after" data-dropdown-button>Smartphone</button>
            <div class="dropdown-menu">
                <div class="flex-div">
                    <a class="link flex-div-1 linked black-link-dropdown" href="../Smartphone/Xiaomi.php" target="_self">Xiaomi</a>
                    <a class="link flex-div-1 linked black-link-dropdown" href="../Smartphone/Samsung.php" target="_self">Samsung</a>
                    <a class="link flex-div-1 linked black-link-dropdown" href="../Smartphone/Huawei.php" target="_self">Huawei</a>
                </div>
            </div>
            <a class="linked nav-btn link procent linkuri-nav" href="../Smartphone/Xiaomi.php" target="_self">Xiaomi Phone</a>
            <a class="linked nav-btn link procent linkuri-nav" href="../Smartphone/Samsung.php" target="_self">Samsung Phone</a>
            <a class="linked nav-btn link procent linkuri-nav" href="../Smartphone/Huawei.php" target="_self">Huawei Phone</a>
        </div>
        <div class="dropdown" data-dropdown>
            <button class="linked nav-btn link linkuri-nav trei-links dispar-after" data-dropdown-button>Tablet</button>
            <div class="dropdown-menu">
                <div class="flex-div">
                    <a class="link flex-div-1 linked black-link-dropdown" href="../Tablet/Samsung-tab.php" target="_self">Samsung</a>
                    <a class="link flex-div-1 linked black-link-dropdown" href="../Tablet/Huawei-tab.php" target="_self">Huawei</a>
                </div>
            </div>
            <a class="linked nav-btn link procent linkuri-nav" href="../Tablet/Samsung-tab.php" target="_self">Samsung Tablet</a>
            <a class="linked nav-btn link procent linkuri-nav" href="../Tablet/Huawei-tab.php" target="_self">Huawei Tablet</a>
        </div>
        <a class="linked white-link-navbar linkuri-nav" href="../About Astro.php">About Astro</a>
        <a class="linked white-link-navbar linkuri-nav" href="../Support.php">Support</a>
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
                "<a><img onclick=\"myFunction()\" class=\"size35 linkuri-nav dropbtn user-image\" src=\""."../Images/".$image."\" alt=\"Profile\"></a>".
                "<div id=\"myDropdown\" class=\"dropdown-content\">".
                "<a href=\"../account.php\">".
                "<i class=\"fa fa-user uk-margin-right\"></i> Account</a>".
                "<a class=\"orders-border\" href=\"../cart.php\">".
                "<i class=\"fa fa-shopping-bag uk-margin-right\"></i> Orders</a>".
                "<a href=\"../php/logout.php?logout_id=$unique_id\">".
                "<i class=\"fa fas fa-sign-out-alt uk-margin-right\"></i>Logout</a>".
                "</div>".
                "</div>";
            }
            else{
                echo "<a href=\"../login.php\"><img  class=\"size35 linkuri-nav\" src=\"../assets/Profile.svg\" alt=\"Profile\"></a>";
            }
            ?>
    </div>

    <a class="logo-2" href="../index.php">
        <img class="logo" src="../assets/Logo.svg" alt="Logo">
    </a>

    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
    </nav>
        
    <div class="container-1" id="iPadAir">
        <div class="ipads">
            <a class="nameiPad" href="#iPadProPro">
                <div class="supraface">
                    <img class="size-ipads" src="../assets/iPadPro.svg" alt="iPad Pro">
                    <p class="nameiPad">iPad Pro</p>
                </div>
            </a>
            <a class="nameiPad" href="#iPadAirAir">
                <div class="supraface">
                    <img class="size-ipads" src="../assets/iPadAir.svg" alt="iPad Air">
                    <p class="nameiPad">iPad Air</p>
                </div>
            </a>
            <a class="nameiPad" href="#iPadiPad">
                <div class="supraface">
                    <img class="size-ipads" src="../assets/iPad.svg" alt="iPad">
                    <p class="nameiPad">iPad</p>
                </div>
            </a>
            <a class="nameiPad" href="#iPadMiniMini">
                <div class="supraface">
                    <img class="size-ipads-mini" src="../assets/iPadMini.svg" alt="iPad Mini">
                    <p class="nameiPad">iPad Mini</p>
                </div>
            </a>
        </div>
        
        <div class="iPadAir IpadAirAnsolute">
            <p class="name-white"><?php
            $product_id = 9;
            include '../php/product.php';
            echo $brand." ".$model_name;
            ?></p>
            <p class="description-white"><?php
            echo $mini_description;
            ?></p>
            <p class="price-white">From $<?php
            echo $price;
            ?></p>
            <div class="buy-learnmore">
                <form action="../php/addOrder.php" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                        <input class="btn-buy-white btn-buy-iPadAir" type="submit" value="Buy">
                </form>
                <a href="../changeable-page.php?product_id=<?php
                echo $product_id;
                ?>" class="more-info btn-learn-iPadAir">Learn more ></a>
            </div>
        </div>
        <img class="iPadAir-Image" src="<?php
        echo $image;
        ?>" alt="iPadAir">
    </div>

    <div class="container-2" id="iPadProPro">
        <div class="iPadPro" data-aos="fade-up" data-aos-duration="1500">
            <p class="name-white black"><?php
            $product_id = 6;
            include '../php/product.php';
            echo $brand." ".$model_name;
            ?></p>
            <p class="description-white black"><?php
            echo $mini_description;
            ?></p>
            <p class="price-white black">From $<?php
            echo $price;
            ?></p>
            <div class="buy-learnmore">
                <form action="../php/addOrder.php" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                        <input class="btn-buy-white black btn-buy-iPadPro" type="submit" value="Buy">
                </form>
                <a href="../changeable-page.php?product_id=<?php
                echo $product_id;
                ?>" class="more-info btn-learn-iPadPro">Learn more ></a>
            </div>
        </div>
        <img class="iPadPro-Image" src="<?php
            echo $image;
            ?>" alt="iPadPro">
    </div>

    <div class="container-3" id="iPadiPad">
        <div class="iPad" data-aos="fade-up" data-aos-duration="1500">
            <p class="name-white"><?php
            $product_id = 7;
            include '../php/product.php';
            echo $brand." ".$model_name;
            ?></p>
            <p class="description-white"><?php
            echo $mini_description;
            ?></p>
            <p class="price-white">From $<?php
            echo $price;
            ?></p>
            <div class="buy-learnmore">
                <form action="../php/addOrder.php" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                        <input class="btn-buy-white btn-buy-iPad" type="submit" value="Buy">
                </form>
                <a href="../changeable-page.php?product_id=<?php
                echo $product_id;
                ?>" class="more-info btn-learn-iPad">Learn more ></a>
            </div>
        </div>
        <img class="iPad-Image" src="<?php
            echo $image;
            ?>" alt="iPad" data-aos="fade-up" data-aos-duration="1500">
    </div>

    <div class="container-4" id="iPadMiniMini">
        <div class="iPadMini" data-aos="fade-up" data-aos-duration="1500">
            <p class="name-white black"><?php
            $product_id = 8;
            include '../php/product.php';
            echo $brand." ".$model_name;
            ?></p>
            <p class="description-white black"><?php
            echo $mini_description;
            ?></p>
            <p class="price-white black">From $<?php
            echo $price;
            ?></p>
            <div class="buy-learnmore">
                <form action="../php/addOrder.php" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                        <input class="btn-buy-white black btn-buy-iPadMini" type="submit" value="Buy">
                </form>
                <a href="../changeable-page.php?product_id=<?php
                echo $product_id;
                ?>" class="more-info btn-learn-iPadMini">Learn more ></a>
            </div>
        </div>
    </div>

    <?php
            include '../php/product.php';
            $sql = mysqli_query($conn,"SELECT * FROM product WHERE product_id>25 AND brand='iPad'");
            while($row = mysqli_fetch_assoc($sql)){
                echo "
                
                <div class=\"container-3\">
                <div class=\"iPad\" data-aos=\"fade-up\" data-aos-duration=\"1500\">
                    <p class=\"name-white\">".$row['brand']." ".$row['model_name']."</p>
                    <p class=\"description-white\">".$row['mini_description']."</p>
                    <p class=\"price-white\">From $".$row['price']."</p>
                    <div class=\"buy-learnmore\">
                        <form action=\"../php/addOrder.php\" method=\"post\">
                                <input type=\"hidden\" name=\"product_id\" value=\"".$row['product_id']."\">
                                <input class=\"btn-buy-white btn-buy-iPad\" type=\"submit\" value=\"Buy\">
                        </form>
                        <a href=\"../changeable-page.php?product_id=".$row['product_id']."
                        \" class=\"more-info btn-learn-iPad\">Learn more ></a>
                    </div>
                </div>
                <img class=\"iPad-Image\" src=\"../ProductsImages/".$row['image']."\" alt=\"iPad\" data-aos=\"fade-up\" data-aos-duration=\"1500\">
            </div>";
            }


            

    ?>

    <div class="footer">
        <div>
                <p class="text-3 text-4">ENVOY</p>
                <p class="text-3">We create possibilities<br>for the connected world.</p>
                <p class="text-3 text-5">Be Bold.</p>
        </div>
        <div>
                <p class="text-3 text-5">Explore</p>
                <p class="text-3"><a class="white-link-footer" href="../Smartphone/Samsung.php">Samsung</a></p>
                <p class="text-3"><a class="white-link-footer" href="../Smartphone/Huawei.php">Huawei</a></p>
                <p class="text-3"><a class="white-link-footer" href="../Smartphone/Xiaomi.php">Xiaomi</a></p>
                <p class="text-3"><a class="white-link-footer" href="../About Astro.php">About Astro</a></p>
                <p class="text-3"><a class="white-link-footer" href="../Support.php">Support</a></p>
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
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="../js/script.js"></script>
    <script type="text/javascript" src="../js/iPad.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="../js/login-menu.js"></script>
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