<?php
    include 'php/db.php';
    session_start();
    $unique_id = $_SESSION['unique_id'];
        if(empty($unique_id)){
        header("Location: login.php");
        }
        $query = mysqli_query($conn, "SELECT verification_status FROM users WHERE unique_id='{$unique_id}'");
        $row = mysqli_fetch_row($query);
        if($row[0] == "0"){
            header("Location: verify.php");
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
    <link rel="stylesheet" href="css/account.css">
    <title>Account</title>
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
                "<a href=\"#home\">".
                "<i class=\"fa fa-user uk-margin-right\"></i> Account</a>".
                "<a class=\"orders-border\" href=\"#about\">".
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

        <div class="wrapper">
            <div class="wrapper-parent">
                <div class="wrapper-left">
                    <p class="name-tag">Editing Profile</p>

                    <div>
                        <ul>
                            <li class="menu-li">
                                <a href="account.php">
                                    <i class="fa fa-user uk-margin-right"></i> 
                                    Account
                                </a>
                            </li>
                            <li class="menu-li">
                                <a href="./cart.php">
                                    <i class="fa fa-shopping-bag uk-margin-right"></i> 
                                    Orders
                                </a>
                            </li>
                            <?php
                            include 'php/db.php';
                            $query = mysqli_query($conn,"SELECT Role FROM users WHERE unique_id = '{$unique_id}'");
                            $row = mysqli_fetch_assoc($query);
                            $role = $row['Role'];
                            if($role=="admin"){
                                echo "
                            <li class=\"menu-li\">
                                <a href=\"adminPanel.php\">
                                    <i class=\"fa fa-user-secret\"></i> 
                                    Admin Panel
                                </a>
                            </li>";
                            }

                            mysqli_close($conn);
                            ?>
                            <li class="menu-li">
                                <a href="php/logout.php?logout_id=<?php echo $unique_id; ?>">
                                    <i class="fa fas fa-sign-out-alt uk-margin-right"></i> 
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="wrapper-right">
                    <form class="form" action="" enctype="multipart/form-data">
                        <div class="section-1">
                            <div class="wrapper-for-image">
                                <div class="image-container">
                                    <i class="fa fa-user"></i>
                                    <img class="image-show" src="<?php
                                    include "php/user.php";
                                    echo "Images/".$image; ?>">
                                </div>
                                <label for="img_input" class="camera-icon">
                                    <i class="fa fa-camera"></i>
                                </label>
                                <input type="file" id="img_input" accept="image/*" hidden name="avatar" value="<?php
                                    echo $image; ?>">
                            </div>
                            <div class="section-1-text-class">
                                <p class="section-1-text"><?php
                                    echo $firstName." ".$lastName; ?></p>
                                <p class="section-1-text section-1-text-child-2"><?php
                                    echo $address; ?></p>
                            </div>
                        </div>
                        <div class="section-2">
                            <div class="form-sections error">
                                <p>Error</p>
                            </div>
                            <div class="two-section">
                                <label for="">First Name
                                    <input type="text" class="long-input" name="firstName" placeholder="First Name" required value="<?php
                                    echo $firstName; ?>">
                                </label>

                                <label for="">Last Name
                                    <input type="text" class="long-input" name="lastName" placeholder="Last Name" required value="<?php
                                    echo $lastName; ?>">
                                </label>
                            </div>
                            <div class="two-section">
                                <label for="">Email Adress
                                    <input type="text" class="long-input" name="email" placeholder="Enter Your Email" required value="<?php
                                    echo $email; ?>">
                                </label>

                                <label for="">Phone
                                    <input type="text" class="long-input" name="phone" placeholder="Phone Number" pattern="[0-9]{11}" oninvalid="this.setCustomValidity('Enter 11 digits Number')" oninput="this.setCustomValidity('')" required value="<?php
                                    echo $phone; ?>">
                                </label>
                            </div>
                            <div class="two-section">
                                <label for="">Current Password
                                    <input type="password" class="long-input" name="password" placeholder="Password" required>
                                </label>

                                <label for="">Confirm Current Password
                                    <input type="password" class="long-input" name="confirmPassword" placeholder="Confirm Password" required>
                                </label>
                            </div>
                            <div>
                                <label for="">Address
                                    <input type="text" class="long-input" name="address" placeholder="Enter Your Address" required value="<?php
                                    echo $address; ?>">
                                </label>
                            </div>
                            <div class="submit-btn-class ">
                                <input type="submit" class="submit" value="Save Changes">
                            </div>
                        </div>
                    </form>
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
    </div>

    <script src="js/login-menu.js"></script>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 3000,
        once: true,
      });

      img_input = document.querySelector("#img_input");
      img_input.onchange = function(e){
        if(e.target.files.length > 0){
            src = URL.createObjectURL(e.target.files[0])
            image = document.querySelector(".image-container img");
            image.src = src;
        }
      }
    </script>
    <script src="js/account.js"></script>
</body>
<?php

mysqli_close($conn);


?>
</html>