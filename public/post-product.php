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

    <!--custom css-->
    <link rel="stylesheet" href="../public/assets/css/post-product.css">
    <!---->

    <title>Post Product</title>
</head>

<body>
    <!--navbar-->
    <nav class="navbar">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="d-flex">
                <a href="#" class="nav-brand">
                    <img src="assets/images/alibab-logo.png" width="200" alt="">
                </a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row align-items-center">
                    <li class="nav-item d-flex align-items-center alibaba-text ms-3 ps-3">My Alibaba</li>
                </ul>
            </div>

            <div class="pe-5 d-flex gap-3 align-items-center">
                <div class="upgrade-to-gold">
                    <button>Upgrade to Gold Supplier</button>
                </div>

                <div class="profile">
                    <i class="bi bi-person-circle"></i>
                </div>

                <div class="help">Help <i class="bi bi-chevron-compact-down ps-1"></i></div>

                <div class="language">
                    English <i class="bi bi-chevron-compact-down ps-1"></i>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="container-lg pt-4">
            <div class="post-product-header">Post a new product</div>
            <div class="progress-sheet d-flex gap-2 pt-2">
                <div class="progress-box progress-one">Select language and category</div>
                <div class="progress-box progress-two">Fill in listing information</div>
                <div class="progress-box progress-three">Submit for approval</div>
            </div>

            <div class="language-selector d-flex pt-3 align-items-center">
                <div class="language-text text-secondary">Select the language sit to publish in </div>
                <div class="select-language ms-3 text-secondary">
                    <select name="" id="">
                        <option> Global English language market (not include minority language)</option>
                    </select>
                </div>
            </div>
            <div class="text-secondary small ps-3">
                We recommend to publish your product on the global site. The system will automatically translate your
                listing to the language of the corresponding market.
            </div>
        </div>


        <div class="container-lg catagory-selection-container mt-3 pb-4">
            <div class="d-flex justify-content-between pt-4">
                <div class="d-flex gap-5">
                    <div class="select-text">Select category</div>
                    <div class="issues">Any issues? Provide feedback</div>
                </div>

                <div class="quick">Quick publish a new product</div>
            </div>

            <div class="search-text-contianer d-flex justify-content-between small text-secondary pt-3">
                <div class="d-flex gap-5">
                    <div class="search-text tab-selected">Search for a category</div>
                    <div class="recent">Recently used categories</div>
                </div>

                <div class="d-flex gap-2">
                    <div class="select-lang-tex">Select display language for category</div>
                    <select name="" id="" class="lang-sel">
                        <option value="">English</option>
                        <option value="">简体中文</option>
                    </select>
                </div>
            </div>

            <div class="search-bar-container small mt-3 pb-4">
                <input type="text" class="catagory-search-bar" placeholder="Enter product keyword e.g laptop">
                <div class="search-icon">
                    <i class="bi bi-search"></i>
                </div>
            </div>

            <div class="container-xlg catagory-list-container pt-2 pb-2">
                <div class="catagory-list ms-2">
                    <ul class="list">
                        <li class="list-item">Agriculture</li>
                        <li class="list-item">Apparel</li>
                        <li class="list-item">Beauty</li>
                        <li class="list-item">Business Services</li>
                        <li class="list-item">Chemicals</li>
                        <li class="list-item">Commercial Service Equipment</li>
                        <li class="list-item">Construction &amp; Building Machinery</li>
                        <li class="list-item">Construction &amp; Real Estate</li>
                        <li class="list-item">Consumer Electronics</li>
                        <li class="list-item">Electrical Equipment &amp; Supplies</li>
                        <li class="list-item">Electronic Components, Accessories &amp; Telecommunications</li>
                        <li class="list-item">Environment</li>
                        <li class="list-item">Fabric &amp; Textile Raw Material</li>
                        <li class="list-item">Fabrication Services</li>
                        <li class="list-item">Fashion Accessories</li>
                        <li class="list-item">Food &amp; Beverage</li>
                        <li class="list-item">Furniture</li>
                        <li class="list-item">Gifts &amp; Crafts</li>
                        <li class="list-item">Health Care</li>
                        <li class="list-item">Home &amp; Garden</li>
                        <li class="list-item">Home Appliances</li>
                        <li class="list-item">Industrial Machinery</li>
                        <li class="list-item">Lights &amp; Lighting</li>
                        <li class="list-item">Luggage, Bags &amp; Cases</li>
                        <li class="list-item">Material Handling</li>
                        <li class="list-item">Medical devices &amp; Supplies</li>
                        <li class="list-item">Metals &amp; Alloys</li>
                        <li class="list-item">Mother, Kids &amp; Toys</li>
                        <li class="list-item">Packaging &amp; Printing</li>
                        <li class="list-item">Personal Care &amp; Household Cleaning</li>
                        <li class="list-item">Pet Supplies</li>
                        <li class="list-item">Power Transmission</li>
                        <li class="list-item">Renewable Energy</li>
                        <li class="list-item">Rubber &amp; Plastics</li>
                        <li class="list-item">Safety</li>
                        <li class="list-item">School &amp; Office Supplies</li>
                        <li class="list-item">Security</li>
                        <li class="list-item">Shoes &amp; Accessories</li>
                        <li class="list-item">Sports &amp; Entertainment</li>
                        <li class="list-item">Testing Instrument &amp; Equipment</li>
                        <li class="list-item">Timepieces, Jewelry &amp; Eyewear</li>
                        <li class="list-item">Tools &amp; Hardware</li>
                        <li class="list-item">Vehicle Accessories、Electornics &amp; Tools</li>
                        <li class="list-item">Vehicles &amp; Transportation</li>
                        <li class="list-item">Vehicle Parts &amp; Accessories</li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="container-lg mt-4 basic-info pb-4">
            <div class="basic-info-text pt-3">Basic information</div>
            <hr>

            <div class="d-flex gap-2 align-items-center">
                <div class="product-name-label"><span class="star">*</span>Product name</div>
                <input type="text" class="form-control product-name">
            </div>
        </div>

        <div class="container-lg mt-4 trade-info pb-4">
            <div class="trade-info-text pt-3">Trade information 
                <span class="ps-2 small text-secondary">
                    Complete trade information helps buyers make better sourcing decisions.
                </span>
            </div>

            <hr>

            <div class="price-setting-container mt-3">
                <div class="d-flex gap-2 ps-5 align-items-center">
                    <div class="Unit"><span class="star">*</span>Unit</div>
                    <select name="" id="" class="unit-select">
                        <option value="">Bag/Bags</option>
                    </select>
                </div>

            </div>

            <div class="quantity-container d-flex">
                <div class="quantity-text">Quantity Price</div>
                <div class="quantity-controller-container d-flex">
                    <div class="quantity-controller d-flex gap-5">
                        <div class="controller-quantity">
                            <div class="quantity-label"><span class="star">*</span> MOQ(Bag/Bags)</div>
                            <div class="quantity-input-container d-flex">
                                <div> > </div>
                                <input type="text" class="quantity-input">
                            </div>
                        </div>

                        <div class="controller-price">
                            <div class="price-label"><span class="star">*</span> FOB(Bag/Bags)</div>
                            <div class="price-input-container d-flex">
                                <div> US$ </div>
                                <input type="text" class="price-input">
                            </div>
                        </div>

                        <hr>
                    </div>

                    <div class="preview d-flex">
                        <div class="preview-quantity"> >10 </div>
                        <div class="preview-price">Us $ 5</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-lg mt-4 product-info pb-4">
            <div class="basic-info-text pt-3">Product Description</div>
            <hr>

            <div class="d-flex gap-2 align-items-center">
                <div class="product-name-label"><span class="star">*</span>Product photo</div>
                <div class="fake-upload-btn-container d-flex gap-2 align-items-center">
                    <button class="fake-upload-btn">Browse</button>
                    <div class="delete-all-btn text-primary">Delete all</div>
                </div>
            </div>

            <div class="description-container pt-2 ps-5 ms-5">
                <div class="text-secondary">Image file size should be less than 5MB. Supported formate: .jpeg, jpg. png</div>
                <div class="text-secondary">Recommended image size is more than 640px * 640px images should be clear and easy for 
                    buyers at a glance. <span class="text-primary">image specifications</span>
                </div>
                <div class="text-secondary">Adding a shield to your image can prevent theft. <span class="text-primary">Check the agreement Check More</span></div>
            </div>

            <div class="row uplaod-image-container pt-3">
                <div class="col-2 upload-img-controller">
                    <div class="upload-img">
                        <img src="" alt="">
                    </div>
                    <div class="delete-img text-primary text-center pt-2">Delete</div>
                </div>
                <div class="col-2 upload-img-controller">
                    <div class="upload-img"></div>
                    <div class="delete-img text-primary text-center pt-2">Delete</div>
                </div>
                <div class="col-2 upload-img-controller">
                    <div class="upload-img"></div>
                    <div class="delete-img text-primary text-center pt-2">Delete</div>
                </div>
                <div class="col-2 upload-img-controller">
                    <div class="upload-img"></div>
                    <div class="delete-img text-primary text-center pt-2">Delete</div>
                </div>
                <div class="col-2 upload-img-controller">
                    <div class="upload-img"></div>
                    <div class="delete-img text-primary text-center pt-2">Delete</div>
                </div>
                <div class="col-2 upload-img-controller">
                    <div class="upload-img"></div>
                    <div class="delete-img text-primary text-center pt-2">Delete</div>
                </div>
            </div>

        </div>

        <div class="container-lg text-end fake-submit-btn-container">
            <button class="btn btn-primary fake-submit-btn">Submit</button>
        </div>
    </main>


    <form class="post" action="postHandler.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="category" id="category">
        <input type="text" name="product-name">
        <input type="text" name="quantity">
        <input type="text" name="price">
        <input type="file" name="image1" id="fileInput1">
        <input type="file" name="image2" id="fileInput2">
        <input type="file" name="image3" id="fileInput3">
        <input type="file" name="image4" id="fileInput4">
        <input type="file" name="image5" id="fileInput5">
        <input type="file" name="image6" id="fileInput6">
        <input type="submit">
    </form>






    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!---->
</body>

</html>