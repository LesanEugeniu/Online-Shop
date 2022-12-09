<?php
    if(!empty($_GET['product_id'])){
        $product_id = $_GET['product_id'];
    }
    else{
        header("Location: index.php");
    }
    include 'php/db.php';
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
    <link rel="shortcut icon" type="image/svg" href="assets/Logo.svg">
    <link rel="stylesheet" href="css/iPhone13-dual.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Showcase</title>
</head>
<body <?php include 'php/product.php'; 
if($product_id <= 25){
    echo "style=\"background-image:".$elements_color[0]."; color: black;\"";
}else{
    echo "style=\"background-image: linear-gradient(90deg, rgba(0,0,0,1) 13%, rgba(32,33,33,1) 49%, rgba(39,40,40,1) 100%); color: white;\"";
}?>>

    <div class="first nonactive"><img class="logo-first" src="assets/Logo.svg" alt="Logo"></div>
    <nav class="nav-bar">
        <div class="ul">
        <div class="dropdown" data-dropdown="">
            <button class="linked nav-btn link linkuri-nav trei-links dispar-after" data-dropdown-button="">Apple</button>
                <div class="dropdown-menu">
                    <div class="flex-div">
                        <a class="link flex-div-1 linked black-link-dropdown" href="Apple/iPhone.php" target="_self">iPhone</a>
                        <a class="link flex-div-1 linked black-link-dropdown" href="Apple/iPad.php" target="_self">iPad</a>
                    </div>
                </div>
                <a class="linked nav-btn link procent linkuri-nav" href="Apple/iPhone.php" target="_self">iPhone</a>
                <a class="linked nav-btn link procent linkuri-nav" href="Apple/iPad.php" target="_self">iPad</a>
        </div>
        <div class="dropdown" data-dropdown="">
            <button class="linked nav-btn link linkuri-nav trei-links dispar-after" data-dropdown-button="">Smartphone</button>
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
        <div class="dropdown" data-dropdown="">
            <button class="linked nav-btn link linkuri-nav trei-links dispar-after" data-dropdown-button="">Tablet</button>
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

    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
    </nav>
        <a href="index.php" class="logo">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="fill: black;" xml:space="preserve">
            <path class="st0" d="M203.57,106.14"></path>
            <polygon class="st1" points="12.17,413.22 31.99,413.22 183.27,91.65 225.33,182.45 287.63,316.96 309.07,317.76 182.46,49.58 "></polygon>
            <polygon class="st1" points="163.45,318.17 225.33,182.45 236.04,205.57 189.61,302.8 280.86,302.35 287.63,316.96 "></polygon>
            <polygon class="st1" points="118.69,413.22 127.31,398.26 345.47,398.26 351.67,413.22 "></polygon>
            <polygon class="st1" points="260.53,29.97 279.74,29.97 461.16,413.22 439.72,413.22 "></polygon>
            </svg>
        </a>
    <div class="section-fluid-main">
        <div class="section">
            <div class="info-wrap mob-margin">
                <p class="title-up" style="color: black;">Astro</p>
                <h2 style="color: black;"><?php
                include 'php/product.php';
                echo $brand." ".$model_name;
                ?></h2>
                <h3 style="color: black;"> $<?php
                include 'php/product.php';
                echo $price;
                ?> <span style="color: black;">$<?php
                include 'php/product.php';
                echo $price+($price*(20/100));
                ?></span></h3>
                <div class="section-fluid">
                    <input type="radio" id="desc-1" name="desc-btn" class="desc-btn" checked="">
                    <label for="desc-1" style="color: black;">Description</label>
                    <input type="radio" id="desc-2" name="desc-btn" class="desc-btn">
                    <label for="desc-2" style="color: black;">Specification</label>
                    <div class="section-fluid desc-sec accor-1">
                        <p id="descriere"><?php
                include 'php/product.php';
                echo $description;
                ?></p>
                    </div>
                <div class="section-fluid desc-sec accor-2"> 
                <?php
                include 'php/product.php';
                function printSection1($array){
                    echo "<div class=\"section-inline\">";
                    echo "<p><span>".$array[0]."</span>".$array[1]." <br>".$array[2]."</p>";
                    echo "</div>";
                }
                
                printSection1($displayArray);
                printSection1($gpuArray);
                printSection1($bateryArray);
                printSection1($unlock_typeArray);
                ?>
                </div>
                </div>
                <h5 style="color: black;">Chose Color:</h5>
            </div>
            <div class="clearfix"></div>
            <?php
            echo "<input type=\"radio\" id=\"color-1\" name=\"color-btn\" class=\"color-btn for-color1\" checked=\"\">";
            echo "<label for=\"color-1\" class=\"first-color\" style=\"background-image: url(&quot;".$urls[0]."&quot;); color: black;\"></label>";
            if(sizeof($urls) != 1){
                function printSection2($array){
                    for ($i=2; $i <= sizeof($array); $i++) {
                        echo "<input type=\"radio\" id=\"color-$i\" name=\"color-btn\" class=\"color-btn for-color$i\">";
                        echo "<label for=\"color-$i\" class=\"color-$i\" style=\"background-image: url(&quot;".$array[$i-1]."&quot;); color: black;\"></label>";
                    }
                }
                printSection2($urls);
            }
            ?>
            <div class="clearfix"></div>

            <div class="info-wrap" id="last-wrap">
                <a href="./php/addOrder.php<?php echo "?product_id=$product_id"; ?>" class="btn"><p class="fa fa-shopping-cart icon" style="color: black;">   Add To Cart</p></a>
            </div>
            <?php
                function printSection3($array){
                    for ($i=0; $i < sizeof($array); $i++) {
                        echo "<div class=\"img-wrap watch-". $i+1 ."\" style=\"background-image: url(&quot;".$array[$i]."&quot;);\"></div>";
                    }
                }

                function printSection4($array){
                    echo "<div class=\"back-color\" id=\"div-color\" style=\"background-image: ".$array[0].";\"></div>";
                    if(sizeof($array) != 1){
                        for ($i=1; $i < sizeof($array); $i++) {
                            echo "<div class=\"back-color watch-".$i."mob-".$i."\" style=\"background-image: ".$array[$i].";\"></div>";
                        }
                    }
                    
                }

                printSection3($urls);
                if($product_id <= 25){
                    printSection4($elements_color);
                }
            ?>
        </div>
    </div>
    <script src="js/login-menu.js"></script>
    <script src="js/object-change.js"></script>
    <script src="js/script.js"></script>
</body>
<?php
mysqli_close($conn);
?>
</html>