<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrat Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style-fonts.css">
    <link rel="stylesheet" href="./assets/css/style-media.css">
    <link rel="stylesheet" href="./assets/css/style-values.css">

    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/owl.theme.default.min.css">

    <title>Item View</title>
</head>

<body>

    <!-- ********** Menus-Section ********** -->
    <?php
    include './incl/menus.php';
    ?>


    <!-- ********** Categories-Section ********** -->
    <?php
    include './incl/categories.php';
    ?>


    <div class="breadcrumb-section">
        <div class="my-container">
            <nav class="breadcrumb-nav" aria-label="breadcrumb">
                <ol class="breadcrumb m-0 py-3 px-0 rounded-0 bg-col-white font-14">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Vegetables $ Fruits</a></li>
                    <li class="breadcrumb-item"><a href="#">Fresh Fruits</a></li>
                    <!-- <li class="breadcrumb-item active" aria-current="page">Data</li> -->
                </ol><!-- /.breadcrumb -->
            </nav><!-- /.breadcrumb-nav -->
        </div><!-- /.my-container -->
    </div><!-- /.breadcrumb-section -->

    <div class="item-view-section">
        <div class="my-container">
            <div class="row p-0">
                <div class="col-md-4">
                    <div class="col-inner bg-col-primary">
                        <img class="item-view-image" src="./assets/img/searched-fruit-orange.jpg" alt=""><!-- /.item-view-image -->
                    </div><!-- /.col-inner -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-8">
                    <div class="col-inner">
                        <h5 class="item-title font-25 col-primary m-0">Kinu Malta</h5><!-- /.item-title -->
                        <div class="rating-list font-25">
                            <!-- &#9733; = Filled Star -->
                            <!-- &#9734; = Un Filled Star -->
                            <span class="rate-star">&#9734;</span><!-- /.rate-star -->
                            <span class="rate-star">&#9734;</span><!-- /.rate-star -->
                            <span class="rate-star">&#9734;</span><!-- /.rate-star -->
                            <span class="rate-star">&#9734;</span><!-- /.rate-star -->
                            <span class="rate-star">&#9734;</span><!-- /.rate-star -->
                            <span class="rate-star-number font-12">0</span><!-- /.rate-star-numberr -->
                        </div><!-- /.rating-list -->
                        <p class="item-price col-warning m-0">70</p><!-- /.item-price -->
                        <p class="item-measure font-13 col-black">500 gm</p><!-- /.item-measure -->
                        <div class="add-to-cart-section">
                            <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                            <span class="product-cart-count rounded-0 col-warning m-0">0</span> <!-- /.product-cart-count -->
                            <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                        </div><!-- /.add-to-cart-section -->
                        <div class="product-description mb-4">
                            <p class="prod-des-para mt-4 mb-0 font-16 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum ipsam assumenda illo quod expedita, delectus et deleniti, quisquam voluptates nesciunt provident veniam sint dolor tenetur nisi? Aut, natus mollitia commodi asperiores ad excepturi perferendis.</p>
                            <ul class="prod-des-list mt-1">
                                <li>Lorem ipsum dolor sit.</li>
                                <li>Lorem ipsum dolor sit amet consectetur.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem, ipsum dolor.</li>
                                <li>Lorem ipsum dolor sit amet.</li>
                            </ul><!-- /.prod-des-list -->
                        </div><!-- /.product-description -->
                        <div class="accordion customer-reviews-sect mt-3" id="accordionCustomerReviews">
                            <div class="card bg-col-bg-col-white rounded-0">
                                <div class="card-header bg-col-white" id="headingOne" data-toggle="collapse" data-target="#collapseReviews" aria-expanded="true" aria-controls="collapseReviews">
                                    <div class="card-inn py-2 text-left d-flex align-items-center">
                                        <span class="font-18 col-black">Customer Reviews</span>
                                        <span id="reviews-toggle-ico" class="col-primary reviews-toggle-ico font-40 font-weight-bold ml-auto">&#8250;</span>
                                    </div><!-- /.card-inn -->
                                </div> <!-- /.card-header -->
                                <div id="collapseReviews" class="collapse collapseReviews" aria-labelledby="headingOne" data-parent="#accordionCustomerReviews">
                                    <div class="card-body text-center">
                                        <h5 class="">No Reviews!</h5>
                                    </div><!-- /.card-body -->
                                </div><!-- /.collapse -->
                            </div><!-- /.card -->
                        </div><!-- /.customer-reviews-sect -->
                    </div><!-- /.col-inner -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.my-container -->
    </div><!-- /.item-view-section -->

    <div class="related-products-section">
        <div class="my-container">
            <div class="list-top-title">
                <!-- Title of the Listed Products -->
                <h3 class="title-of-p-list font-weight-normal m-0 d-inline-block">You might also like (related products)</h3><!-- /.title-of-p-list -->
            </div><!-- /.list-top-title -->
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 col-6 col-sm-6 col-lg-3 px-2 mt-3">
                    <div class="col-inner">
                        <div class="card">
                            <a href="#">
                                <!-- Image Card on Product -->
                                <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                                    <img class="product-image rounded-0" src="./assets/img/searched-fruit-orange.jpg" class="card-img" alt="..."> 
                                     <!-- /.product-image -->
                                    <div class="card-img-overlay py-2 d-flex align-items-center">
                                        <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                        </div><!-- /.overlay-inner -->
                                    </div><!-- /.card-img-overlay -->
                                </div><!-- /.card -->
                                <div class="card-body card-details-body pt-2 pb-1">
                                    <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                        <span class="icon-radio-unchecked mr-1"></span>
                                        <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                    </div><!-- /.offer-btn -->
                                    <p class="item-title col-primary m-0">Kinnu Malta</p><!-- /.item-title -->
                                    <div class="price-div col-warning">
                                        <span class="m-0">Rs</span>
                                        <span class="item-price">1210</span> <!-- /.item-price -->
                                        <span class="m-0">/</span>
                                        <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                                    </div><!-- /.price-div -->
                                    <div class="full-price-div card-text col-black m-0">
                                        <span>Rs</span>
                                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                    </div><!-- /.full-price-div -->
                                </div><!-- card-body /.card-details-body -->
                            </a><!-- a -->
                            <!-- <button type="button" class="b-seller-add-to-cart-btn btn btn-success m-1 rounded-0">
                                <span>Add to Cart</span>
                            </button> -->
                            <div class="add-to-cart-section">
                                <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.card -->
                    </div><!-- /.col-inner -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-6 col-sm-6 col-lg-3 px-2 mt-3">
                    <div class="col-inner">
                        <div class="card">
                            <a href="#">
                                <!-- Image Card on Product -->
                                <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                                    <img class="product-image rounded-0" src="./assets/img/searched-fruit-banana.jpg" class="card-img" alt="..."> 
                                     <!-- /.product-image -->
                                    <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                        <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                        </div><!-- /.overlay-inner -->
                                    </div><!-- /.card-img-overlay -->
                                </div><!-- /.card -->
                                <div class="card-body pt-2 pb-1">
                                    <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                        <span class="icon-radio-unchecked mr-1"></span>
                                        <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                    </div><!-- /.offer-btn -->
                                    <p class="item-title col-primary m-0">Banana</p><!-- /.item-title -->
                                    <div class="price-div col-warning">
                                        <span class="m-0">Rs</span>
                                        <span class="item-price">1210</span> <!-- /.item-price -->
                                        <span class="m-0">/</span>
                                        <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                                    </div><!-- /.price-div -->
                                    <div class="full-price-div card-text col-black m-0">
                                        <span>Rs</span>
                                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                    </div><!-- /.full-price-div -->
                                </div><!-- card-body -->
                            </a><!-- a -->
                            <div class="add-to-cart-section">
                                <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none!important;"></button><!-- /.btn-item-remove -->
                                <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.card -->
                    </div><!-- /.col-inner -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-6 col-sm-6 col-lg-3 px-2 mt-3">
                    <div class="col-inner">
                        <div class="card">
                            <a href="#">
                                <!-- Image Card on Product -->
                                <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                                    <img class="product-image rounded-0" src="./assets/img/searched-veg-potato-bag.jpg" class="card-img" alt="..."> 
                                     <!-- /.product-image -->
                                    <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                        <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                        </div><!-- /.overlay-inner -->
                                    </div><!-- /.card-img-overlay -->
                                </div><!-- /.card -->
                                <div class="card-body pt-2 pb-1">
                                    <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                        <span class="icon-radio-unchecked mr-1"></span>
                                        <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                    </div><!-- /.offer-btn -->
                                    <p class="item-title col-primary m-0">Potato Bag</p><!-- /.item-title -->
                                    <div class="price-div col-warning">
                                        <span class="m-0">Rs</span>
                                        <span class="item-price">1210</span> <!-- /.item-price -->
                                        <span class="m-0">/</span>
                                        <span class="item-measure font-13 col-black">5 bags</span><!-- /.item-measure -->
                                    </div><!-- /.price-div -->
                                    <div class="full-price-div card-text col-black m-0">
                                        <span>Rs</span>
                                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                    </div><!-- /.full-price-div -->
                                </div><!-- card-body -->
                            </a><!-- a -->
                            <div class="add-to-cart-section">
                                <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none!important;"></button><!-- /.btn-item-remove -->
                                <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.card -->
                    </div><!-- /.col-inner -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-6 col-sm-6 col-lg-3 px-2 mt-3">
                    <div class="col-inner">
                        <div class="card">
                            <a href="#">
                                <!-- Image Card on Product -->
                                <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                                    <img class="product-image rounded-0" src="./assets/img/searched-fruit-banana.jpg" class="card-img" alt="..."> 
                                     <!-- /.product-image -->
                                    <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                        <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                        </div><!-- /.overlay-inner -->
                                    </div><!-- /.card-img-overlay -->
                                </div><!-- /.card -->
                                <div class="card-body pt-2 pb-1">
                                    <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                        <span class="icon-radio-unchecked mr-1"></span>
                                        <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                    </div><!-- /.offer-btn -->
                                    <p class="item-title col-primary m-0">Banana</p><!-- /.item-title -->
                                    <div class="price-div col-warning">
                                        <span class="m-0">Rs</span>
                                        <span class="item-price">1210</span> <!-- /.item-price -->
                                        <span class="m-0">/</span>
                                        <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                                    </div><!-- /.price-div -->
                                    <div class="full-price-div card-text col-black m-0">
                                        <span>Rs</span>
                                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                    </div><!-- /.full-price-div -->
                                </div><!-- card-body -->
                            </a><!-- a -->
                            <div class="add-to-cart-section">
                                <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none!important;"></button><!-- /.btn-item-remove -->
                                <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.card -->
                    </div><!-- /.col-inner -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.my-container -->
    </div><!-- /.related-products-section -->

    <?php
    include './incl/footer.php';
    ?>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>