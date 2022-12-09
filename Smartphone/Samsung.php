<?php
include '../php/db.php';
session_start();
if (isset($_SESSION['unique_id'])) {
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
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/samsung-mob.css">
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Samsung</title>
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
                        <a class="link flex-div-1 linked black-link-dropdown" href="../Apple/iPhone.php" target="_self">iPhone</a>
                        <a class="link flex-div-1 linked black-link-dropdown" href="../Apple/iPad.php" target="_self">iPad</a>
                    </div>
                </div>
                <a class="linked nav-btn link procent linkuri-nav" href="../Apple/iPhone.php" target="_self">iPhone</a>
                <a class="linked nav-btn link procent linkuri-nav" href="../Apple/iPad.php" target="_self">iPad</a>
            </div>
            <div class="dropdown" data-dropdown>
                <button class="linked nav-btn link linkuri-nav trei-links dispar-after" data-dropdown-button>Smartphone</button>
                <div class="dropdown-menu">
                    <div class="flex-div">
                        <a class="link flex-div-1 linked black-link-dropdown" href="Xiaomi.php" target="_self">Xiaomi</a>
                        <a class="link flex-div-1 linked black-link-dropdown" href="Samsung.php" target="_self">Samsung</a>
                        <a class="link flex-div-1 linked black-link-dropdown" href="Huawei.php" target="_self">Huawei</a>
                    </div>
                </div>
                <a class="linked nav-btn link procent linkuri-nav" href="Xiaomi.php" target="_self">Xiaomi Phone</a>
                <a class="linked nav-btn link procent linkuri-nav" href="Samsung.php" target="_self">Samsung Phone</a>
                <a class="linked nav-btn link procent linkuri-nav" href="Huawei.php" target="_self">Huawei Phone</a>
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
        <div class="GalaxyFold GalaxyFold3 text-big-width">
            <p class="name-white"><?php
                                    $product_id = 14;
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
                    <input class="btn-buy-white btn-buy-GalaxyFold3" type="submit" value="Buy">
                </form>
                <a href="../changeable-page.php?product_id=<?php
                                                            echo $product_id;
                                                            ?>" class="more-info btn-learn-GalaxyFold3">Learn more ></a>
            </div>
        </div>
        <img class="GalaxyFold-Image" src="<?php
                                            echo $image;
                                            ?>" alt="GalaxyFold">
    </div>

    <div class="container-1 container-white">
        <img class="GalaxyS22Ultra-Image" src="<?php
                                                $product_id = 15;
                                                include '../php/product.php';
                                                echo $image;
                                                ?>" alt="GalaxyS22Ultra" data-aos="fade-up" data-aos-duration="1500">
        <div class="GalaxyFold text-big-width pad-GalaxyS22Ultra" data-aos="fade-up" data-aos-duration="1500">
            <p class="name-white black"><?php
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
                    <input class="btn-buy-white black btn-buy-GalaxyS22Ultra" type="submit" value="Buy">
                </form>
                <a href="../changeable-page.php?product_id=<?php
                                                            echo $product_id;
                                                            ?>" class="more-info btn-learn-GalaxyS22Ultra">Learn more ></a>
            </div>
        </div>
    </div>

    <div class="container-1">
        <div class="GalaxyFold text-big-width" data-aos="fade-up" data-aos-duration="1500">
            <p class="name-white"><?php
                                    $product_id = 16;
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
                    <input class="btn-buy-white btn-buy-GalaxyS21" type="submit" value="Buy">
                </form>
                <a href="../changeable-page.php?product_id=<?php
                                                            echo $product_id;
                                                            ?>" class="more-info btn-learn-GalaxyS21">Learn more ></a>
            </div>
        </div>
        <img class="GalaxyS21-Image" src="<?php
                                            echo $image;
                                            ?>" alt="GalaxyS21" data-aos="fade-up" data-aos-duration="1500">
    </div>

    <?php
    include '../php/product.php';
    $sql = mysqli_query($conn, "SELECT * FROM product WHERE product_id>25 AND brand='Galaxy'");
    while ($row = mysqli_fetch_assoc($sql)) {

        echo "
                        <div class=\"container-1\">
                        <div class=\"GalaxyFold GalaxyFold3 text-big-width\">
                            <p class=\"name-white\">" . $row['brand'] . " " . $row['model_name'] . "</p>
                            <p class=\"description-white\">" . $row['mini_description'] . "</p>
                            <p class=\"price-white\">From $" . $row['price'] . "</p>
                            <div class=\"buy-learnmore\">
                                <form action=\"../php/addOrder.php\" method=\"post\">
                                        <input type=\"hidden\" name=\"product_id\" value=\"" . $row['product_id'] . "\">
                                        <input class=\"btn-buy-white btn-buy-GalaxyFold3\" type=\"submit\" value=\"Buy\">
                                </form>
                                <a href=\"../changeable-page.php?product_id=" . $row['product_id'] . "\" class=\"more-info btn-learn-GalaxyFold3\">Learn more ></a>
                            </div>
                        </div>
                        <img class=\"GalaxyFold-Image\" src=\"../ProductsImages/" . $row['image'] . "\">
                    </div>
            ";
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

    <script src="../js/login-menu.js"></script>
    <script src="../js/script.js" type="text/javascript"></script>
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