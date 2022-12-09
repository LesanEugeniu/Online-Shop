<?php
include '../php/db.php';
session_start();
if (isset($_SESSION['unique_id'])) {
    $unique_id = $_SESSION['unique_id'];

    // if(isset($_POST['product_id'])){
    //     $produs_id = $_POST['product_id'];

    // $qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}'");
    // if(mysqli_num_rows($qry) > 0){
    //     $row = mysqli_fetch_assoc($qry);
    //     if($row){
    //         $user_id = $row['id'];
    //     }
    // }
    // $qry2 = mysqli_query($conn, "SELECT * FROM orders WHERE user_id = '{$user_id}' AND product_id = '{$produs_id}'");
    // if(mysqli_num_rows($qry2) > 0)//daca user cu produsu data este atunci quntity++
    // {
    //     $row1 = mysqli_fetch_assoc($qry2);
    //     $quantity = $row1['quantity'];
    //     $quantity++;
    //     $qry2 = mysqli_query($conn, "UPDATE orders SET quantity = '{$quantity}' WHERE 
    //     user_id = '{$user_id}' AND product_id = '{$produs_id}'");
    // }else{
    //     $quantity = 1;
    //     $sql = mysqli_query($conn, "INSERT INTO orders (user_id, product_id, quantity)
    //                                 VALUES ('{$user_id}', '{$produs_id}', '{$quantity}')");
    //     }
    // }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/svg" href="../assets/Logo.svg">
    <link rel="stylesheet" href="../css/iphone.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>iPhone</title>
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
            if (isset($_SESSION['unique_id'])) {
                $qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}'");
                if (mysqli_num_rows($qry) > 0) {
                    $row = mysqli_fetch_assoc($qry);
                    if ($row) {
                        $image = $row['image'];
                    }
                }
            }

            if (!empty($unique_id)) {
                echo "<div class=\"dropdown-user\">" .
                    "<a><img onclick=\"myFunction()\" class=\"size35 linkuri-nav dropbtn user-image\" src=\"" . "../Images/" . $image . "\" alt=\"Profile\"></a>" .
                    "<div id=\"myDropdown\" class=\"dropdown-content\">" .
                    "<a href=\"../account.php\">" .
                    "<i class=\"fa fa-user uk-margin-right\"></i> Account</a>" .
                    "<a class=\"orders-border\" href=\"../cart.php\">" .
                    "<i class=\"fa fa-shopping-bag uk-margin-right\"></i> Orders</a>" .
                    "<a href=\"../php/logout.php?logout_id=$unique_id\">" .
                    "<i class=\"fa fas fa-sign-out-alt uk-margin-right\"></i>Logout</a>" .
                    "</div>" .
                    "</div>";
            } else {
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

    <div class="container-1">
        <div class="iPhones">

            <a class="nameiPhone" href="#Section-13pro">
                <div class="supraface">
                    <img class="size-iPhones-v3" src="../assets/iPhone13-12.svg" alt="iPhone13Pro">
                    <p class="nameiPhone">iPhone 13 Pro</p>
                </div>
            </a>

            <a class="nameiPhone" href="#Section-13">
                <div class="supraface">
                    <img class="size-iPhones-v3" src="../assets/iPhone13-12.svg" alt="iPhone13">
                    <p class="nameiPhone">iPhone 13</p>
                </div>
            </a>

            <a class="nameiPhone" href="#Section-SE">
                <div class="supraface">
                    <img class="size-iPhones-v3" src="../assets/iPhoneSE.svg" alt="iPhoneSE">
                    <p class="nameiPhone">iPhone SE</p>
                </div>
            </a>

            <a class="nameiPhone" href="#Section-12">
                <div class="supraface">
                    <img class="size-iPhones-v3" src="../assets/iPhone13-12.svg" alt="iPhone12">
                    <p class="nameiPhone">iPhone 12</p>
                </div>
            </a>

            <a class="nameiPhone" href="#Section-11">
                <div class="supraface">
                    <img class="size-iPhones-v3" src="../assets/iPhone11.svg" alt="iPhone11">
                    <p class="nameiPhone">iPhone 11</p>
                </div>
            </a>

        </div>

        <div class="TopBrend">
            <p class="TheMost">The Most</p>
            <p class="Performant TheMost">Performant</p>
            <a href="#Section-13pro" class="more-more">learn more</a>
        </div>

        <img class="iPhone-down" src="../assets/iphone13PROdown.png" alt="iPhone13Pro">

    </div>

    <div class="container-1 container-align">
        <div class="mini-container-1">
            <img class="in6-1" src="../assets/6in-1.png" alt="6in-1" data-aos="fade-up" data-aos-duration="1500">
            <img class="one" src="../assets/one.png" alt="One" data-aos="fade-up" data-aos-duration="1500">
        </div>
    </div>

    <div class="container-2 container-align">
        <div class="mini-container-2">
            <div class="txt-paragraf" data-aos="fade-up" data-aos-duration="1500">
                <p class="TheMost Performant">Introducing<br>the Apple<br>Research app.</p>
                <p class="future">The future of health research is you.</p>
            </div>
            <img class="mob3" src="../assets/3mob.png" alt="6in-1" data-aos="fade-up" data-aos-duration="1500">
        </div>
    </div>

    <div class="container-3 ">
        <div class="flex-betwen">
            <div class="square square-1" data-aos="fade-up" data-aos-duration="1500">
                <div>
                    <p class="TheMost Performant text-center">Switching to iPhone<br>is super simple.</p>
                </div>
                <img class="Switching" src="../assets/SwitToiPhone.png" alt="SwitToiPhone">
            </div>
            <div class="square square-2" data-aos="fade-up" data-aos-duration="1500">
                <div class="in-square">
                    <img class="privacy" src="../assets/privacy.png" alt="privacy">
                    <p class="TheMost Performant text-center">Privacy</p>
                    <p class="future text-center">What you share should be up to you.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="Section-13pro" class="container-black container-flex-iphones">
        <img class="iPhone-Image-13pro" src="../assets/iPhone13ProImage.png" alt="iPhone13Pro" data-aos="fade-up" data-aos-duration="1500">
        <div class="iPhone" data-aos="fade-up" data-aos-duration="1500">
            <p class="name-white"><?php
                                    $product_id = 4;
                                    include '../php/product.php';
                                    echo $brand . " " . $model_name;
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
                    <input class="btn-buy-white btn-buy-iphone13pro" type="submit" value="Buy">
                </form>
                <a href="../changeable-page.php?product_id=<?php
                                                            echo $product_id;
                                                            ?>" class="more-info btn-learn-iphone13pro">Learn more ></a>
            </div>
        </div>
    </div>

    <div id="Section-13" class="container-black continer-white container-flex-iphones cotainer-for-iphone13">
        <div class="iPhone iPhone-big-width position-relative-iphone-13" data-aos="fade-up" data-aos-duration="1500">
            <p class="name-white black"><?php
                                        $product_id = 5;
                                        include '../php/product.php';
                                        echo $brand . " " . $model_name;
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
                    <input class="btn-buy-white black btn-buy-iphone13" type="submit" value="Buy">
                </form>
                <a href="../changeable-page.php?product_id=<?php
                                                            echo $product_id;
                                                            ?>" class="more-info btn-learn-iphone13">Learn more ></a>
            </div>
        </div>
        <img class="iPhone-Image-13" src="<?php
                                            echo $image;
                                            ?>" alt="iPhone13" data-aos="fade-up" data-aos-duration="1500">
    </div>




    <div id="Section-SE" class="container-black container-flex-iphones">
        <img class="iPhone-Image-SE-image" src="<?php
                                                $product_id = 1;
                                                include '../php/product.php';
                                                echo $image;
                                                ?>" alt="iPhoneSE" data-aos="fade-up" data-aos-duration="1500">
        <div class="iPhone iPhone-big-width-1" data-aos="fade-up" data-aos-duration="1500">
            <p class="name-white"><?php
                                    echo $brand . " " . $model_name;
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
                    <input class="btn-buy-white btn-buy-iphoneSE" type="submit" value="Buy">
                </form>
                <a href="../changeable-page.php?product_id=<?php
                                                            echo $product_id;
                                                            ?>" class="more-info more-se btn-learn-iphoneSE">Learn more ></a>
            </div>
        </div>
    </div>



    <div id="Section-12" class="container-black continer-white container-flex-iphones flex-wrap">
        <div class="iPhone iPhone-big-width position-relative-iphone-12" data-aos="fade-up" data-aos-duration="1500">
            <p class="name-white black"><?php
                                        $product_id = 2;
                                        include '../php/product.php';
                                        echo $brand . " " . $model_name;
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
                    <input class="btn-buy-white black btn-buy-iphone12" type="submit" value="Buy">
                </form>
                <a href="../changeable-page.php?product_id=<?php
                                                            echo $product_id;
                                                            ?>" class="more-info btn-learn-iphone12">Learn more ></a>
            </div>
        </div>
        <img class="iPhone-Image-12" src="<?php
                                            echo $image;
                                            ?>" alt="iPhone13" data-aos="zoom-in" data-aos-duration="1500">
    </div>

    <div id="Section-11" class="container-black container-flex-iphones">
        <div class="iPhone iPhone-big-width" data-aos="fade-up" data-aos-duration="1500">
            <p class="name-white"><?php
                                    $product_id = 3;
                                    include '../php/product.php';
                                    echo $brand . " " . $model_name;
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
                    <input class="btn-buy-white btn-buy-iphone11" type="submit" value="Buy">
                </form>
                <a href="../changeable-page.php?product_id=<?php
                                                            echo $product_id;
                                                            ?>" class="more-info btn-learn-iphone11">Learn more ></a>
            </div>
        </div>
        <img class="iPhone-Image-11-image" src="<?php
                                                echo $image;
                                                ?>" alt="iPhone11" data-aos="fade-up" data-aos-duration="1500">
    </div>

    <?php
    include '../php/product.php';
    $sql = mysqli_query($conn, "SELECT * FROM product WHERE product_id>25 AND brand='iPhone'");
    while ($row = mysqli_fetch_assoc($sql)) {
        echo "
                <div id=\"Section-SE\" class=\"container-black container-flex-iphones\">
                <div class=\"iPhone iPhone-big-width\" data-aos=\"fade-up\" data-aos-duration=\"1500\">
                    <p class=\"name-white\">" . $row['brand'] . " " . $row['model_name'] . "</p>
                    <p class=\"description-white\">" . $row['mini_description'] . "</p>
                    <p class=\"price-white\">From $" . $row['price'] . "</p>
                    <div class=\"buy-learnmore\">
                        <form action=\"../php/addOrder.php\" method=\"post\">
                                <input type=\"hidden\" name=\"product_id\" value=\"" . $row['product_id'] . "\">
                                <input class=\"btn-buy-white btn-buy-iphoneSE\" type=\"submit\" value=\"Buy\">
                        </form>
                        <a href=\"../changeable-page.php?product_id=" . $row['product_id'] . "\" class=\"more-info more-se btn-learn-iphoneSE\">Learn more ></a>
                    </div>
                </div>
                <img class=\"iPhone-Image-SE-image\" src=\"../ProductsImages/" . $row['image'] . "\" data-aos=\"fade-up\" data-aos-duration=\"1500\">
                </div>";
    }


    ?>

    <!-- Sectiunea pentru repetare -->



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
            <p class="text-3 text-5">Follow</p>
            <p class="text-3"><a class="white-link-footer" href="https://www.instagram.com/eugeniu_lesan/" target="_blank">Instagram</a></p>
            <p class="text-3"><a class="white-link-footer" href="https://twitter.com/Vatarioff" target="_blank">Twitter</a></p>
            <p class="text-3"><a class="white-link-footer" href="https://www.linkedin.com/in/eugeniu-le%C8%99an-50863a230/" target="_blank">Linkedln</a></p>
        </div>
        <div class="legal">
            <p class="text-3 text-5">Legal</p>
            <p class="text-3">Terms</p>
            <p class="text-3">Privacy</p>
        </div>
        <div class="new-buisines">
            <p class="text-3 text-5">New Buisiness</p>
            <p class="text-3">eugeniu1337@gmail.com</p>
            <p class="text-3">949.333.3106</p>
        </div>
        <p class="text-pos text-3 text-5">© 2022 Envoy. All Rights Reserved</p>
    </div>
    <script src="../js/"></script>
    <script src="../js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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