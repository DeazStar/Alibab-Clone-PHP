<?php
require_once '../src/core/Database.php';
require_once '../src/model/Product.php';

if(isset($_GET['id'])) {
    $product = Product::getProductById($_GET['id']);

    $productName = $product->getProductName();
    $quantity = $product->getQuantity();
    $price = $product->getPrice();

    $imageSrc = $product->getImageUrls();
    $src = [];

    for ($i = 0; $i < 6; $i++) {
        $uploadsDir = "uploads/";

        $uploadPos = strrpos($imageSrc[$i], $uploadsDir);
    
        if ($uploadPos !== false) {
            $src[] = substr($imageSrc[$i], $uploadPos);
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!---->

    <!--custom css-->
    <link rel="stylesheet" href="../public/assets/css/product-detail.css">
    <link rel="stylesheet" href="../public/assets/css/footer.css">

    <!---->

    <title>Product Name</title>
</head>
<body>
        <!--navbar-->
        <nav class="navbar">
            <div class="container-fluid align-items-center justify-content-start">
                <a href="index.php">
                    <img src="assets/images/alibab-logo.png" width="200" alt="">
                </a>

                <form class="text-center ps-5 pe-5">
                    <div class="search-bar-container text-center justify-content-center">
                        <input type="text" placeholder="What are you looking for?" class="searchbar py-2 ps-4">
                        <button type="submit" class="search-btn py-2 px-4"><i class="bi bi-search pe-2"></i> Search</button>
                    </div>
                </form>
                <div class="ps-5 nav-item px-2 person"><i class="bi bi-person-fill person-icon"></i><i class="bi bi-chevron-down ps-2"></i></div>
                <div class="nav-item px-3"><i class="bi bi-chat-square-text-fill icons"></i><i class="bi bi-chevron-down ps-2"></i></div>
                <div class="nav-item px-3"><i class="bi bi-clipboard-check-fill icons"></i><i class="bi bi-chevron-down ps-2"></i></div>
                <div class="nav-item px-3"><i class="bi bi-cart-fill icons"></i><i class="bi bi-chevron-down ps-2"></i></div>
            </div>
    
        </nav>
    <div class="container-lg pt-5">
        <div class="product-description row">
            <div class="col-4">
                <div class="product-main-image-container">
                    <img src="<?= $src[0] ?>" alt="" class="product-main-image img-fluid">
                </div>
                <div class="other-images d-flex pt-3">
                    <div class="image1-container">
                        <img src="<?= $src[0] ?>" alt="" class="img-fluid">
                    </div>
                    <div class="image1-container">
                        <img src="<?= $src[1] ?>" alt="" class="img-fluid">
                    </div>
                    <div class="image1-container">
                        <img src="<?= $src[2] ?>" alt="" class="img-fluid">
                    </div>
                    <div class="image1-container">
                        <img src="<?= $src[3] ?>" alt="" class="img-fluid">
                    </div>
                    <div class="image1-container">
                        <img src="<?= $src[4] ?>" alt="" class="img-fluid">
                    </div>
                    <div class="image1-container">
                        <img src="<?= $src[5] ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="product-name h5" data-id="<?= $_GET['id'] ?>"><?= $productName ?></div>
                <div class="review d-flex gap-2 pt-2">
                    <div>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star-fill star"></i>
                        <i class="bi bi-star star"></i>
                    </div>
                    <div class="text-secondary">7 Reviews </div>
                    <div class="text-secondary">9 buyers</div>
                </div>

                <div class="quantity pt-3">
                    Limit: 1 - <?= $quantity ?> pieces
                </div>
                <div class="price pt-2">
                    Price per Piece: $ <?= $price ?>
                </div>

                <div class="benefits pt-2">Benefits: Quick refunds on orders under US $500</div>
                <div class="selected-quantity pt-3">
                    <input type="number" id="quantity">
                </div>
            </div>
            <div class="col-3">
                <div class="selected-details text-center py-5 rounded">
                    <div class="row">
                        <div class="col-6 selected-peices">5 Pieces</div>
                        <div class="col-6 selected-priece">2000$</div>
                        <div class="col-6 pt-3">Shipping</div>
                        <div class="col-6 pt-3">20000$</div>
                        <div class="col-6 pt-3">Total</div>
                        <div class="col-6 total pt-3">50000$</div>
                    </div>
                    <button class="mt-5 order-button px-3 py-1"><i class="bi bi-cart pe-2"></i> ADD TO CHART</button>
                </div>
            </div>
        </div>

        <form action="../src/controller/cartcontroller.php" action="GET">
            <input type="text" value="<?= $_GET['id'] ?>" name="product_id"">
            <input type="text" id="rl-quantity" name="quantity">
            <input type="submit" id="rl-submit-btn">
        </form>
    </div>

    <div id="line"></div>
    <footer>
        <div id="container">
            <div id="row-1">
                <a href="#">AliExpress| </a>
                <a href="#">1688.com |</a>
                <a href="#">Tamil Taobao World |</a>
                <a href="#">Alipay |</a>
                <a href="#">Lazada</a>
            </div>
            <div id="row-1">
                <p>Browse Alphabetically:</p>
                <a href="#">Onetouch |</a>
                <a href="#"> Showroom |</a>
                <a href="#">Country Search |</a>
                <a href="#">Suppliers |</a>
                <a href="#"> Affiliate</a>
            </div>
            <div id="row-1">
                <p>Product Listing Policy -</p>
                <a href="#">Intellectual Property Protection - </a>
                <a href="#"> Privacy Policy - </a>
                <a href="#">Terms of Use - </a>
                <a href="#">User Information Legal Enquiry Guide</a>
            </div>
            <div id="row-1">
                <img src="https://s.alicdn.com/@img/tfs/TB1VtZtebH1gK0jSZFwXXc7aXXa-65-70.gif" alt="logo" id="logo">
                <span>© 1999-2021 Alibaba.com. </span>
                <span> All rights reserved.</span>
                <img src="https://s.alicdn.com/@img/tfs/TB1QhYprKT2gK0jSZFvXXXnFXXa-20-20.png" alt="logo" id="logo">
                <span>浙公网安备 33010002000092号 浙B2-20120091-4</span>
            </div>
        </div>
    </footer>

    <script src="assets/script/product-detail.js"></script>
</body>
</html>