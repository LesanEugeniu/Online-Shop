<?php
include 'php/db.php';
session_start();
$unique_id = $_SESSION['unique_id'];
if (empty($unique_id)) {
    header("Location: login.php");
}
$query = mysqli_query($conn, "SELECT Role FROM users WHERE unique_id = '{$unique_id}'");
$row = mysqli_fetch_assoc($query);
$role = $row['Role'];
if ($role == "user") {
    header("Location: index.php");
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
                    "<a><img onclick=\"myFunction()\" class=\"size35 linkuri-nav dropbtn user-image\" src=\"" . "Images/" . $image . "\" alt=\"Profile\"></a>" .
                    "<div id=\"myDropdown\" class=\"dropdown-content\">" .
                    "<a href=\"account.php\">" .
                    "<i class=\"fa fa-user uk-margin-right\"></i> Account</a>" .
                    "<a class=\"orders-border\" href=\"cart.php\">" .
                    "<i class=\"fa fa-shopping-bag uk-margin-right\"></i> Orders</a>" .
                    "<a href=\"php/logout.php?logout_id=$unique_id\">" .
                    "<i class=\"fa fas fa-sign-out-alt uk-margin-right\"></i>Logout</a>" .
                    "</div>" .
                    "</div>";
            } else {
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
                    <li class="menu-li">
                        <a href="addProduct.php">
                            <i class="fas fa-plus-square"></i>
                            Add New Product
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="wrapper">
            <?php
            include 'php/db.php';
            echo "<table class=\"table\">";
            $query = mysqli_query($conn, "SELECT * FROM product");
            echo "
                <tr class=\"table-header\">
                    <th class=\"header__item\">Image</th>
                    <th class=\"header__item\">Brand</th>
                    <th class=\"header__item\">Model</th>
                    <th class=\"header__item\">Price</th>
                    <th class=\"header__item\">Mini description</th>
                    <th class=\"header__item\">Number models</th>
                    <th class=\"header__item\">Edit</th>
                    </tr>
                ";

            while ($row = mysqli_fetch_assoc($query)) {
                if ($row['product_id'] <= 25) {
                    echo "
                    <div class=\"table-content\">
                    <tr class=\"table-row\">
                    <td class=\"table-data\"><img class=\"images\" src=\"" . substr($row["image"], 1) . "\"></td>
                    <td class=\"table-data\">$row[brand]</td>
                    <td class=\"table-data\">$row[model_name]</td>
                    <td class=\"table-data\">$row[price]</td>
                    <td class=\"table-data\">$row[mini_description]</td>
                    <td class=\"table-data\">$row[number_models]</td>
                    <td class=\"table-data\">
                    <a href=\"editProduct.php?product_id=$row[product_id]\">
                        <i class=\"fas fa-pen-square icon\"></i>
                    </a>
                    <a href=\"php/deleteProduct.php\">
                        <i class=\"fa fa-minus-circle icon\"></i>
                    </a>
                    </td>
                    </tr>
                    </div>

                ";
                } else {
                    echo "
                        <div class=\"table-content\">
                        <tr class=\"table-row\">
                        <td class=\"table-data\"><img class=\"images\" src=\"./ProductsImages/" . $row["image"] . "\"></td>
                        <td class=\"table-data\">$row[brand]</td>
                        <td class=\"table-data\">$row[model_name]</td>
                        <td class=\"table-data\">$row[price]</td>
                        <td class=\"table-data\">$row[mini_description]</td>
                        <td class=\"table-data\">$row[number_models]</td>
                        <td class=\"table-data\">
                        <a href=\"editProduct.php?product_id=$row[product_id]\">
                            <i class=\"fas fa-pen-square icon\"></i>
                        </a>
                        <a href=\"php/deleteProduct.php?product_id=$row[product_id]\">
                            <i class=\"fa fa-minus-circle icon\"></i>
                        </a>
                        </td>
                        </tr>
                        </div>
    
                    ";
                }
            }



            mysqli_close($conn);
            ?>
        </div>

    </div>



    <!-- <div class="footer">
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
        <div class="visit">
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
    </div> -->

    <script src="js/login-menu.js"></script>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 3000,
            once: true,
        });

        img_input = document.querySelector("#img_input");
        img_input.onchange = function(e) {
            if (e.target.files.length > 0) {
                src = URL.createObjectURL(e.target.files[0])
                image = document.querySelector(".image-container img");
                image.src = src;
            }
        }
    </script>
    <script src="js/account.js"></script>
</body>

</html>