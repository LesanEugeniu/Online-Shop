<?php
    include 'php/db.php';
    session_start();
    if(isset($_SESSION['unique_id'])){
        $unique_id = $_SESSION['unique_id'];
        $qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}'");
        if(mysqli_num_rows($qry) > 0){
            $row = mysqli_fetch_assoc($qry);
            if($row){
                $_SESSION['verification_status'] = $row['verification_status'];
                if($row['verification_status'] == 'Verified'){
                    header("Location: index.php");
                }
            }
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
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Login</title>
</head>
<body>
    <div class="first"><img class="logo-first" src="assets/Logo.svg" alt="Logo"></div>
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

    <div class="section-1">
        <div class="pannel">
            <div class="pannel-sect-1">
                <div>
                    <p class="Tittle">Welcome to Astro</p>
                    <p class="Tittle-1">Sign in</p>
                </div>
                <div>
                    <img src="./assets/reg-icon.svg" alt="">
                </div>
            </div>
            
        <form class="form" action="" autocomplete="off">
            <div class="form-sections error">
                <p>Error</p>
            </div>
            <div class="form-sections">
                <label for="email">Email
                    <input type="text" name="email" class="long-input" placeholder="Enter Your Email" required>
                </label>
            </div>

            <div class="form-sections">
                <label for="password">Password
                    <input type="password" name="password" placeholder="Password" class="long-input" required>
                </label>
            </div>

            <div class="form-sections">
                <input type="submit" value="Login Now" name="submit" class="long-input submit">
            </div>

        </form>
            <div class="form-sections already-signed">
                <p>Not signed up?</p>
                <a href="Register.php">Signup now</a>
            </div>

        </div>
    </div>
    
    <script src="js/login-menu.js"></script>
    <script src="js/login.js"></script>
    <script src="js/script.js"></script>
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