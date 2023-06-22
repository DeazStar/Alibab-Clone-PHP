<?php 
require_once '../src/core/Database.php';
require_once '../src/model/Product.php';
$data = Product::getAllProducts();

$_SESSION['id'] = 1;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!---->

    <!--custome css-->
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/footer.css">

    <!---->
    <title>Alibab.com:Manfacturers, Supliers, Exporters and Importers from the world's
        biggest online B2B marketplace
    </title>
</head>

<body>

    <!--navbar-->
    <nav class="navbar">
        <div class="container-fluid align-items-center">
            <a href="#" class="nav-brand">
                <img src="assets/images/alibab-logo.png" width="200" alt="">
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row align-items-center">
                <li class="nav-item d-flex align-items-center"><i class="bi bi-list ps-3 small-hamburger"></i>Catagories</li>
            </ul>
            <div class="navbar-nav">
                <div class=" d-flex flex-row align-items-center justify-content-end">
                    <div class="sign">
                        <li class="nav-item px-2 person"><i class="bi bi-person-fill person-icon"></i><i class="bi bi-chevron-down ps-2"></i></li>
                        <div class="wrapper">
                            <p class="ps-3 pt-4">Welcome back!</p>
                            <?php
                                if (isset($_SESSION['id'])) {
                                    echo '<div class="btn-container">
                                    <div class="btns">
                                        <a class="btn btn-primary" href="post-product.php">Post Product</a>
                                    </div>
                                </div>';
                                } else {
                                    echo '<div class="btn-container">
                                    <div class="btns">
                                        <a class="lbtn" href="signin.php">Sign in</a>
                                    </div>
                                    <div class="btns">
                                        <a class="rbtn" href="signup.php">Join for free</a>
                                    </div>
                                </div>';
                                }
                            ?>
                            <p class="text-center pt-2">
                                <span class="line"></span>
                                or
                                <span class="line"></span>
                            </p>

                            <div class="social-container">
                                <div class="icon-container facebook"></div>
                                <div class="icon-container google"></div>
                                <div class="icon-container linkedin"></div>
                                <div class="icon-container twitter"></div>
                            </div>

                            <div class="agreement px-2 py-4"><small>By sliding to Continue with or
                                Create My Account , I agree to Alibaba.com Free
                                Membership Agreement and Receive Marketing 
                                Materials</small>
                            </div>
                        </div>
                    </div>
                    <li class="nav-item px-2"><i class="bi bi-chat-square-text-fill icons"></i><i class="bi bi-chevron-down ps-2"></i></li>
                    <li class="nav-item px-2"><i class="bi bi-clipboard-check-fill icons"></i><i class="bi bi-chevron-down ps-2"></i></li>
                    <li class="nav-item px-2"><i class="bi bi-cart-fill icons"></i><i class="bi bi-chevron-down ps-2"></i></li>
                    <li class="nav-item px-3">Help<i class="bi bi-chevron-down ps-2"></i></li>
                    <li class="nav-item px-3">English-EUR<i class="bi bi-chevron-down ps-2"></i></li>
                    <li class="nav-item px-3">Shop<i class="bi bi-chevron-down ps-2"></i></li>
                    <li class="nav-item px-3">More<i class="bi bi-chevron-down ps-2"></i></li>
                </div>
            </div>
        </div>

    </nav>

    <div class="header-main container-fluid">
        <div class="cover"></div>
        <div class="header-main-nav">
            <div class="header-container d-flex justify-content-center gap-3 pt-5 pb-2">
                <div class="header h4 is-selected">Products</div>
                <div class="header h4">Manufacturers</div>
            </div>
            <form class="text-center">
                <div class="search-bar-container text-center justify-content-center">
                    <input type="text" placeholder="What are you looking for?" class="searchbar py-2 ps-4">
                    <button type="submit" class="search-btn py-2 px-4"><i class="bi bi-search pe-2"></i> Search</button>
                    <button type="submit" class="search-btn-img"><i class="bi bi-camera"></i></button>
                </div>
            </form>
        </div>
        
    </div>


    <div class="header-content container-fluid justify-content-center">
        <div class="tool-entry row mb-4">
            <div class="col-4 d-flex align-items-center request ps-4">
                <div class="tool-icon pe-3">
                    <i class="bi bi-bullseye"></i>
                </div>

                <div class="tool-description">
                    <p class="tool-title">Request for Quotation</p>
                    <p class="tool-desc">One request, multiple quotes</p>
                </div>
            </div>
            <div class="col-4 d-flex align-items-center ready ps-4">
                <div class="tool-icon pe-3">
                    <i class="bi bi-box2"></i>
                </div>

                <div class="tool-description">
                    <p class="tool-title">Ready to Ship</p>
                    <p class="tool-desc">Order directly with fast dispatch</p>
                </div>
            </div>
            <div class="col-4 d-flex align-items-center ship ps-4">
                <div class="tool-icon pe-3">
                    <i class="bi bi-truck"></i>
                </div>
                <div class="tool-description">
                    <p class="tool-title">Logistics services</p>
                    <p class="tool-desc">Reliable shipping by Ocean and air</p>
                </div>
            </div>
        </div>

        <div class="main-first row gap-0">
            <div class="col-3">
                <div class="main-header pt-3 ps-2">My market</div>
                <hr>
                <div class="main-content d-flex gap-3 pb-2" >
                    <div class="main-icon-holder">
                        <img class="main-icon"src="assets/images/electronics.png" alt="">
                    </div>

                    <div class="main-content-text">Consumer Electronics <i class="bi bi-chevron-compact-right arrow-icon"></i></div>
                </div>
                <div class="main-content d-flex gap-3 pb-2">
                    <div class="main-icon-holder">
                        <img class="main-icon"src="assets/images/apparel.png" alt="">
                    </div>

                    <div class="main-content-text">Apparel <i class="bi bi-chevron-compact-right arrow-icon"></i></div>
                </div>
                <div class="main-content d-flex gap-3 pb-2">
                    <div class="main-icon-holder">
                        <img class="main-icon"src="assets/images/vhicel.png" alt="">
                    </div>

                    <div class="main-content-text">Vehicle Parts & Accessories <i class="bi bi-chevron-compact-right arrow-icon"></i></div>
                </div>
                <div class="main-content d-flex gap-3 pb-2">
                    <div class="main-icon-holder">
                        <img class="main-icon"src="assets/images/sports.png" alt="">
                    </div>

                    <div class="main-content-text">Sports & Entertainment<i class="bi bi-chevron-compact-right arrow-icon"></i></div>
                </div>
                <div class="main-content d-flex gap-3 pb-2">
                    <div class="main-icon-holder">
                        <img class="main-icon"src="assets/images/home.png" alt="">
                    </div>

                    <div class="main-content-text pb-2">Home & Garden<i class="bi bi-chevron-compact-right arrow-icon"></i></div>
                </div>
                <div class="main-content d-flex gap-3 pb-2">
                    <div class="main-icon-holder">
                        <img class="main-icon"src="assets/images/beauty.png" alt="">
                    </div>

                    <div class="main-content-text">Beauty <i class="bi bi-chevron-compact-right arrow-icon"></i></div>
                </div>

                <div class="main-content d-flex gap-3">
                    <div class="main-icon-holder">
                        <img class="main-icon"src="assets/images/all.png" alt="">
                    </div>

                    <div class="main-content-text">All categories <i class="bi bi-chevron-compact-right arrow-icon"></i></div>
                </div>
            </div>

            <div class="col-6"></div>
            <div class="col-3">
                <p class="main-right-header lead pt-3">Buyers Club benefits <i class="bi bi-arrow-right ps-3"></i></p>

                <div class="d-flex gap-2 club-benefits px-3 py-4">
                    <div class="main-right-text">Us $10 off with a new supplier</div>
                    <div class="main-right-img-holder">
                        <img class="main-right-img rounded"src="assets/images/card-icon.jpg" alt="">
                    </div>
                </div>

                <div class="d-flex gap-2 club-benefits px-3 py-4 mt-3">
                    <div class="main-right-text">RFQ: quotes with supplier preferences</div>
                    <div class="main-right-img-holder">
                        <img class="main-right-img rounded"src="assets/images/trll.jpg" alt="">
                    </div>
                </div>
                <p class="mt-3">Sign up to enjoy exciting Buyers club benefits</p>
                <div class="btn-container-main">
                    <div class="main-btns">
                        <a class="main-lbtn text-center" href="signin.html">Join for free</a>
                    </div>
                    <div class="main-btns my-3">
                        <a class="main-rbtn text-center" href="signup.html">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---->

    <!-- products -->
    
    <div class="container-lg product-wrapper">
        <div class="just-for-u pt-5 h4 pb-3">Just for you</div>
        <div class="product-container container-fluid">
            <div class="row product-grid ">
                <?php foreach ($data as $product): 
                    $productId = $product->getProductId();
                    $productName = $product->getProductName();
                    $productPrice = $product->getPrice();
                    $productQuantity = $product->getQuantity();
                    $imageSrc = $product->getImageUrls();
                    
                    $uploadsDir = "uploads/";

                    $uploadPos = strrpos($imageSrc[0], $uploadsDir);

                    if ($uploadPos !== false) {
                        $src = substr($imageSrc[0], $uploadPos);
                    }
                ?>
                <div class="product rounded" data-id="<?= $productId?>">
                    <div class="product-image-container">
                        <img src="<?= $src ?>" class= "img-fluid" alt="">
                    </div>
                    <div class="product-name pt-2"><?= $productName?></div>
                    <div class="product-price pt-2">$ <?= $productPrice?></div>
                    <div class="product-quantity">MOQ: <?= $productQuantity . " " ?> piece</div>
                </div>

                <?php endforeach ?>
            </div>
        </div>
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

    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!---->

    <script src="assets/script/dropdown.js"></script>
    <script src="assets/script/home.js"></script>
</body>

</html>