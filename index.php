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

    <title>Katvi - Template</title>
</head>

<body id="body">

    <!-- ********** Menus-Section ********** -->
    <?php
    include './incl/menus.php';
    ?>


    <!-- ********** Categories-Section ********** -->
    <?php
    include './incl/categories.php';
    ?>



    <!-- ********** Slider-Section ********** -->
    <div class="slider-section">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol><!-- /.carousel-indicators -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/img/slider_32.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.2);">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/slider_33.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.2);">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/slider_34.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.2);">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div><!-- /.carousel-inner -->
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a><!-- /.carousel-control-prev -->
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a><!-- /.carousel-control-next -->
        </div><!-- /.carousel  -->
    </div><!-- /.slider-section -->


    <!-- ****************** Products-Listed-Section ******************* -->
    <!-- ********** Best Seller Products ********** -->
    <div class="products-listed-sect">
        <div class="my-container">
            <div class="list-top-title d-flex">
                <!-- Title of the Listed Products -->
                <h2 class="title-of-p-list font-weight-normal m-0 d-inline-block">Best Seller</h2><!-- /.title-of-p-list -->
                <!-- View all the products, which we listed here. -->
                <a class="btn-view-all ml-auto rounded d-flex justify-content-center font-weight-bold align-items-center col-primary-dark p-0" href="#">
                    <Span class="font-12 ml-1 mr-1">See All</Span> <span class="icon-right-arrow font-12 ml-1 m-auto"></span>
                </a><!-- /.btn-view-all -->
            </div><!-- /.list-top-title -->
            <div class="owl-carousel owl-products-list owl-theme mt-3">
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-fruit-orange.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
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
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: none!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: block!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-oil-ghee-dalda.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Dalda Ghee</p><!-- /.item-title -->
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
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-fruit-orange.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Kinnu Malta</p><!-- /.item-title -->
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
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item-->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-oil-ghee-dalda.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Dalda Ghee</p><!-- /.item-title -->
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
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-fruit-orange.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Kinnu Malta</p><!-- /.item-title -->
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
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item-->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-oil-ghee-dalda.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Dalda Ghee</p><!-- /.item-title -->
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
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-fruit-orange.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Kinnu Malta</p><!-- /.item-title -->
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
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item-->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-oil-ghee-dalda.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Dalda Ghee</p><!-- /.item-title -->
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
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-fruit-orange.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Kinnu Malta</p><!-- /.item-title -->
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
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item-->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-oil-ghee-dalda.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Dalda Ghee</p><!-- /.item-title -->
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
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
            </div><!-- /.owl-carousel /.owl-products-list -->
        </div><!-- /.my-container -->
    </div><!-- /.products-listed-sect -->



    <!-- ********** Brands-Section ********** -->
    <div class="brands-section">
        <div class="my-container">
            <div class="top-title d-flex">
                <h2 class="font-weight-normal m-0 d-inline-block">Shop by Brand</h2>
                <a class="btn-see-all ml-auto rounded d-flex justify-content-center font-weight-bold align-items-center col-primary-dark p-0" href="#" onclick="openSideBrands()">
                    <Span class="font-12 ml-1 mr-1">See All</Span> <span class="icon-right-arrow font-12 ml-1 m-auto"></span>
                </a><!-- /.btn-see-all -->
            </div><!-- /.top-title -->
            <div class="brands-logs-div d-flex justify-content-center mt-3">
                <div class="brand-item">
                    <a class="d-flex align-items-center w-100 h-100 " href="#">
                        <img class="m-auto img-fluid" src="./assets/img/brand-lays.jpg" alt="">
                    </a>
                </div><!-- /.brand-item -->
                <div class="brand-item">
                    <a class="d-flex align-items-center w-100 h-100 " href="#">
                        <img class="m-auto img-fluid" src="./assets/img/brand-qarshe.jpg" alt="">
                    </a>
                </div><!-- /.brand-item -->
                <div class="brand-item">
                    <a class="d-flex align-items-center w-100 h-100 " href="#">
                        <img class="m-auto img-fluid" src="./assets/img/brand-shan.jpg" alt="">
                    </a>
                </div><!-- /.brand-item -->
                <div class="brand-item">
                    <a class="d-flex align-items-center w-100 h-100 " href="#">
                        <img class="m-auto img-fluid" src="./assets/img/brand-kurkure.jpg" alt="">
                    </a>
                </div><!-- /.brand-item -->
                <div class="brand-item">
                    <a class="d-flex align-items-center w-100 h-100 " href="#">
                        <img class="m-auto img-fluid" src="./assets/img/brand-revlon.jpg" alt="">
                    </a>
                </div><!-- /.brand-item -->
                <div class="brand-item">
                    <a class="d-flex align-items-center w-100 h-100 " href="#">
                        <img class="m-auto img-fluid" src="./assets/img/brand-lux.jpg" alt="">
                    </a>
                </div><!-- /.brand-item -->
                <div class="brand-item">
                    <a class="d-flex align-items-center w-100 h-100 " href="#">
                        <img class="m-auto img-fluid" src="./assets/img/brand-veet.jpg" alt="">
                    </a>
                </div><!-- /.brand-item -->
                <div class="brand-item">
                    <a class="d-flex align-items-center w-100 h-100 " href="#">
                        <img class="m-auto img-fluid" src="./assets/img/brand-allways.jpg" alt="">
                    </a>
                </div><!-- /.brand-item -->
                <div class="brand-item">
                    <a class="d-flex align-items-center w-100 h-100 " href="#">
                        <img class="m-auto img-fluid" src="./assets/img/brand-national.jpg" alt="">
                    </a>
                </div><!-- /.brand-item -->
                <div class="brand-item">
                    <a class="d-flex align-items-center w-100 h-100 " href="#">
                        <img class="m-auto img-fluid" src="./assets/img/brand-herman.jpg" alt="">
                    </a>
                </div><!-- /.brand-item -->
                <div class="brand-item">
                    <a class="d-flex align-items-center w-100 h-100 " href="#">
                        <img class="m-auto img-fluid" src="./assets/img/brand-jazz.jpg" alt="">
                    </a>
                </div><!-- /.brand-item -->
                <div class="brand-item">
                    <a class="d-flex align-items-center w-100 h-100 " href="#">
                        <img class="m-auto img-fluid" src="./assets/img/brand-bake-aprlor.jpg" alt="">
                    </a>
                </div><!-- /.brand-item -->
            </div><!-- /.brands-logs-div -->
        </div><!-- /.my-container -->
    </div><!-- /.brands-section -->


    <!-- ********** Side-Brands-Section ********** -->
    <?php
    include './incl/side-brands.php';
    ?>


    <!-- ****************** Products-Listed-Section ******************* -->
    <!-- ********** Vegetables Products ********** -->
    <div class="products-listed-sect">
        <div class="my-container">
            <div class="list-top-title d-flex">
                <!-- Title of the Listed Products -->
                <h2 class="title-of-p-list font-weight-normal m-0 d-inline-block">Vegetables</h2><!-- /.title-of-p-list -->
                <!-- View all the products, which we listed here. -->
                <a class="btn-view-all ml-auto rounded d-flex justify-content-center font-weight-bold align-items-center col-primary-dark p-0" href="#">
                    <Span class="font-12 ml-1 mr-1">All Vegetables</Span> <span class="icon-right-arrow font-12 ml-1 m-auto"></span>
                </a><!-- /.btn-view-all -->
            </div><!-- /.list-top-title -->
            <div class="owl-carousel owl-products-list owl-theme mt-3">
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image on Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-veg-onion.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="item-title col-primary m-0">Onion</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">50</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">1 Kg</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">61</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: none!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: block!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image on Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-veg-tomatoes.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Tomatoes</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">40</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">45</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image on Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-veg-potato.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Potato</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">50</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">Kg</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">61</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item-->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image on Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-veg-potato-bag.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Potato Bag</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">240</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">5 Kg</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">250</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image on Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-veg-onion-bag.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Onion Bag</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">250</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">5 Kg</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">250</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
            </div><!-- /.owl-carousel /.owl-products-list -->
        </div><!-- /.my-container -->
    </div><!-- /.products-listed-sect -->


    <!-- ****************** Products-Listed-Section ******************* -->
    <!-- ********** Fresh Fruits Products ********** -->
    <div class="products-listed-sect">
        <div class="my-container">
            <div class="list-top-title d-flex">
                <!-- Title of the Listed Products -->
                <h2 class="title-of-p-list font-weight-normal m-0 d-inline-block">Fresh Fruits</h2><!-- /.title-of-p-list -->
                <!-- View all the products, which we listed here. -->
                <a class="btn-view-all ml-auto rounded d-flex justify-content-center font-weight-bold align-items-center col-primary-dark p-0" href="#">
                    <Span class="font-12 ml-1 mr-1">All Fresh Fruit</Span> <span class="icon-right-arrow font-12 ml-1 m-auto"></span>
                </a><!-- /.btn-view-all -->
            </div><!-- /.list-top-title -->
            <div class="owl-carousel owl-products-list owl-theme mt-3">
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image on Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-fruit-orange.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="item-title col-primary m-0">Kinu Malta</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">1210</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">dz.</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image on Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-fruit-banana.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Banana</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">1210</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">dz.</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: none!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: block!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image on Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-fruit-orange.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Kinnu Malta</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">1210</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">dz.</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item-->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image on Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-fruit-banana.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Banana</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">1210</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">dz.</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image on Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-fruit-banana.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Banana</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">1210</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">dz.</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
            </div><!-- /.owl-carousel /.owl-products-list -->
        </div><!-- /.my-container -->
    </div><!-- /.products-listed-sect -->


    <!-- ****************** Products-Listed-Section ******************* -->
    <!-- ********** Fresh Meat Products ********** -->
    <div class="products-listed-sect">
        <div class="my-container">
            <div class="list-top-title d-flex">
                <!-- Title of the Listed Products -->
                <h2 class="title-of-p-list font-weight-normal m-0 d-inline-block">Fresh Meat</h2><!-- /.title-of-p-list -->
                <!-- View all the products, which we listed here. -->
                <a class="btn-view-all ml-auto rounded d-flex justify-content-center font-weight-bold align-items-center col-primary-dark p-0" href="#">
                    <Span class="font-12 ml-1 mr-1">All Fresh Meat</Span> <span class="icon-right-arrow font-12 ml-1 m-auto"></span>
                </a><!-- /.btn-view-all -->
            </div><!-- /.list-top-title -->
            <div class="owl-carousel owl-products-list owl-theme mt-3">
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image fn Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/cate-fresh-meat-mutton-mix.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="item-title col-primary m-0">Mutto Mix</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">1210</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">Kg</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: none!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: block!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-fresh-meat-chicken.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Whole Chicken</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">399</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">410</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/cate-fresh-meat-mutton-mix.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="item-title col-primary m-0">Mutto Mix</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">1210</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">Kg</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-fresh-meat-chicken.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Whole Chicken</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">399</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">410</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/cate-fresh-meat-mutton-mix.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="item-title col-primary m-0">Mutto Mix</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">1210</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">Kg</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
            </div><!-- /.owl-carousel /.owl-products-list -->
        </div><!-- /.my-container -->
    </div><!-- /.products-listed-sect -->


    <!-- ********** Featured Categories ********** -->
    <div class="featured-categories-sect">
        <div class="my-container">
            <div class="top-title d-flex">
                <!-- Title of the Listed Products -->
                <h2 class="title-of-p-list font-weight-normal m-0 d-inline-block">Featured Categories</h2><!-- /.title-of-p-list -->
                <!-- View all the products, which we listed here. -->
                <a class="btn-view-all ml-auto rounded d-flex justify-content-center font-weight-bold align-items-center 
                            col-primary-dark p-0" href="#" onclick="openSideCategories()">
                    <Span class="font-12 ml-1 mr-1">View All</Span> <span class="icon-right-arrow font-12 ml-1 m-auto"></span>
                </a><!-- /.btn-view-all -->
            </div><!-- /.top-title -->
            <div class="featured-cat-body mt-3 d-flex">
                <a class="f-c-items d-flex align-items-center justify-content-center" href="#">
                    <div class="f-c-items-inn text-center">
                        <span class="feature-cat-icon icon-fresh-fruit col-black font-40"></span> <!-- /.feature-cat-img -->
                        <h5 class="font-weight-normal col-primary mt-2">Fresh Fruit</h5>
                    </div><!-- /.f-c-items-inn -->
                </a><!-- /.f-c-items -->
                <a class="f-c-items d-flex align-items-center justify-content-center" href="#">
                    <div class="f-c-items-inn text-center">
                        <span class="feature-cat-icon icon-salt-sugar-tea col-black font-40"></span> <!-- /.feature-cat-img -->
                        <h5 class="font-weight-normal col-primary mt-2">Salt Sugar & Tea</h5>
                    </div><!-- /.f-c-items-inn -->
                </a><!-- /.f-c-items -->
                <a class="f-c-items d-flex align-items-center justify-content-center" href="#">
                    <div class="f-c-items-inn text-center">
                        <span class="feature-cat-icon icon-fresh-fruit col-black font-40"></span> <!-- /.feature-cat-img -->
                        <h5 class="font-weight-normal col-primary mt-2">Fresh Fruit</h5>
                    </div><!-- /.f-c-items-inn -->
                </a><!-- /.f-c-items -->
                <a class="f-c-items d-flex align-items-center justify-content-center" href="#">
                    <div class="f-c-items-inn text-center">
                        <span class="feature-cat-icon icon-salt-sugar-tea col-black font-40"></span> <!-- /.feature-cat-img -->
                        <h5 class="font-weight-normal col-primary mt-2">Salt Sugar & Tea</h5>
                    </div><!-- /.f-c-items-inn -->
                </a><!-- /.f-c-items -->
                <a class="f-c-items d-flex align-items-center justify-content-center" href="#">
                    <div class="f-c-items-inn text-center">
                        <span class="feature-cat-icon icon-fresh-fruit col-black font-40"></span> <!-- /.feature-cat-img -->
                        <h5 class="font-weight-normal col-primary mt-2">Fresh Fruit</h5>
                    </div><!-- /.f-c-items-inn -->
                </a><!-- /.f-c-items -->
                <a class="f-c-items d-flex align-items-center justify-content-center" href="#">
                    <div class="f-c-items-inn text-center">
                        <span class="feature-cat-icon icon-salt-sugar-tea col-black font-40"></span> <!-- /.feature-cat-img -->
                        <h5 class="font-weight-normal col-primary mt-2">Salt Sugar & Tea</h5>
                    </div><!-- /.f-c-items-inn -->
                </a><!-- /.f-c-items -->
                <a class="f-c-items d-flex align-items-center justify-content-center" href="#">
                    <div class="f-c-items-inn text-center">
                        <span class="feature-cat-icon icon-fresh-fruit col-black font-40"></span> <!-- /.feature-cat-img -->
                        <h5 class="font-weight-normal col-primary mt-2">Fresh Fruit</h5>
                    </div><!-- /.f-c-items-inn -->
                </a><!-- /.f-c-items -->
                <a class="f-c-items d-flex align-items-center justify-content-center" href="#">
                    <div class="f-c-items-inn text-center">
                        <span class="feature-cat-icon icon-salt-sugar-tea col-black font-40"></span> <!-- /.feature-cat-img -->
                        <h5 class="font-weight-normal col-primary mt-2">Salt Sugar & Tea</h5>
                    </div><!-- /.f-c-items-inn -->
                </a><!-- /.f-c-items -->
                <a class="f-c-items d-flex align-items-center justify-content-center" href="#">
                    <div class="f-c-items-inn text-center">
                        <span class="feature-cat-icon icon-fresh-fruit col-black font-40"></span> <!-- /.feature-cat-img -->
                        <h5 class="font-weight-normal col-primary mt-2">Fresh Fruit</h5>
                    </div><!-- /.f-c-items-inn -->
                </a><!-- /.f-c-items -->
                <a class="f-c-items d-flex align-items-center justify-content-center" href="#">
                    <div class="f-c-items-inn text-center">
                        <span class="feature-cat-icon icon-salt-sugar-tea col-black font-40"></span> <!-- /.feature-cat-img -->
                        <h5 class="font-weight-normal col-primary mt-2">Salt Sugar & Tea</h5>
                    </div><!-- /.f-c-items-inn -->
                </a><!-- /.f-c-items -->
                <a class="f-c-items d-flex align-items-center justify-content-center" href="#">
                    <div class="f-c-items-inn text-center">
                        <span class="feature-cat-icon icon-fresh-fruit col-black font-40"></span> <!-- /.feature-cat-img -->
                        <h5 class="font-weight-normal col-primary mt-2">Fresh Fruit</h5>
                    </div><!-- /.f-c-items-inn -->
                </a><!-- /.f-c-items -->
                <a class="f-c-items d-flex align-items-center justify-content-center" href="#">
                    <div class="f-c-items-inn text-center">
                        <span class="feature-cat-icon icon-salt-sugar-tea col-black font-40"></span> <!-- /.feature-cat-img -->
                        <h5 class="font-weight-normal col-primary mt-2">Salt Sugar & Tea</h5>
                    </div><!-- /.f-c-items-inn -->
                </a><!-- /.f-c-items -->
            </div><!-- /.featured-cat-body -->
        </div><!-- /.my-container -->
    </div><!-- /.featured-categories-sect -->


    <!-- ****************** Products-Listed-Section ******************* -->
    <!-- ********** Breakfast & Dairy Products ********** -->
    <div class="products-listed-sect">
        <div class="my-container">
            <div class="list-top-title d-flex">
                <!-- Title of the Listed Products -->
                <h2 class="title-of-p-list font-weight-normal m-0 d-inline-block">Breakfast & Dairy</h2><!-- /.title-of-p-list -->
                <!-- View all the products, which we listed here. -->
                <a class="btn-view-all ml-auto rounded d-flex justify-content-center font-weight-bold align-items-center col-primary-dark p-0" href="#">
                    <Span class="font-12 ml-1 mr-1">All Breakfast & Dairy</Span> <span class="icon-right-arrow font-12 ml-1 m-auto"></span>
                </a><!-- /.btn-view-all -->
            </div><!-- /.list-top-title -->
            <div class="owl-carousel owl-products-list owl-theme mt-3">
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-backery-khoya.png" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block invsible">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="item-title col-primary m-0">Organic Khoya</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">890</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">Kg</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-backery-olpers.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">4% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Olper's 1 Litre Carton</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">1920</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">12 packs</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">2300</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: none!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: block!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-backery-khoya.png" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block invsible">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="item-title col-primary m-0">Organic Khoya</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">890</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">Kg</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-backery-olpers.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">4% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Olper's 1 Litre Carton</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">1920</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">12 packs</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">2300</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-backery-khoya.png" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block invsible">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="item-title col-primary m-0">Organic Khoya</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">890</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">Kg</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
            </div><!-- /.owl-carousel /.owl-products-list -->
        </div><!-- /.my-container -->
    </div><!-- /.products-listed-sect -->


    <!-- ****************** Products-Listed-Section ******************* -->
    <!-- ********** Dry Fruits Products ********** -->
    <div class="products-listed-sect">
        <div class="my-container">
            <div class="list-top-title d-flex">
                <!-- Title of the Listed Products -->
                <h2 class="title-of-p-list font-weight-normal m-0 d-inline-block">Dry Fruits</h2><!-- /.title-of-p-list -->
                <!-- View all the products, which we listed here. -->
                <a class="btn-view-all ml-auto rounded d-flex justify-content-center font-weight-bold align-items-center col-primary-dark p-0" href="#">
                    <Span class="font-12 ml-1 mr-1">All Dry Fruits</Span> <span class="icon-right-arrow font-12 ml-1 m-auto"></span>
                </a><!-- /.btn-view-all -->
            </div><!-- /.list-top-title -->
            <div class="owl-carousel owl-products-list owl-theme mt-3">
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                             <!-- Image of Product -->
                             <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-dry-fru-kishmish.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block invsible">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="item-title col-primary m-0">Raisins (Kishmish)</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">200</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">200 gm</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: none!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: block!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                             <!-- Image of Product -->
                             <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-dry-fru-pistacchio.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">4% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Narmak Premium Pistacchio</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">2199</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">2300</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                             <!-- Image of Product -->
                             <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-dry-fru-kishmish.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block invsible">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="item-title col-primary m-0">Raisins (Kishmish)</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">200</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">200 gm</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                             <!-- Image of Product -->
                             <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-dry-fru-pistacchio.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">4% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Narmak Premium Pistacchio</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">2199</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">2300</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                             <!-- Image of Product -->
                             <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-dry-fru-kishmish.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block invsible">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="item-title col-primary m-0">Raisins (Kishmish)</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">200</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">200 gm</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
            </div><!-- /.owl-carousel /.owl-products-list -->
        </div><!-- /.my-container -->
    </div><!-- /.products-listed-sect -->


    <!-- ****************** Products-Listed-Section ******************* -->
    <!-- ********** Instant Foods Products ********** -->
    <div class="products-listed-sect">
        <div class="my-container">
            <div class="list-top-title d-flex">
                <!-- Title of the Listed Products -->
                <h2 class="title-of-p-list font-weight-normal m-0 d-inline-block">Instant Foods</h2><!-- /.title-of-p-list -->
                <!-- View all the products, which we listed here. -->
                <a class="btn-view-all ml-auto rounded d-flex justify-content-center font-weight-bold align-items-center col-primary-dark p-0" href="#">
                    <Span class="font-12 ml-1 mr-1">All Instant Foods</Span> <span class="icon-right-arrow font-12 ml-1 m-auto"></span>
                </a><!-- /.btn-view-all -->
            </div><!-- /.list-top-title -->
            <div class="owl-carousel owl-products-list owl-theme mt-3">
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-instant-food-flo.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block invsible">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="item-title col-primary m-0">FLO Chocolate Cake</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">120</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">pack of 12</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-instant-food-cocomo.png" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">4% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Cocomo Chocolate</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">120</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">pack of 12</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">2300</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: none!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: block!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-instant-food-flo.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block invsible">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="item-title col-primary m-0">FLO Chocolate Cake</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">120</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">pack of 12</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-instant-food-cocomo.png" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">4% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">Cocomo Chocolate</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">120</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">pack of 12</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">2300</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-instant-food-flo.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block invsible">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="item-title col-primary m-0">FLO Chocolate Cake</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">120</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">pack of 12</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
            </div><!-- /.owl-carousel /.owl-products-list -->
        </div><!-- /.my-container -->
    </div><!-- /.products-listed-sect -->


    <!-- ****************** Products-Listed-Section ******************* -->
    <!-- ********** Frozen Foods Products ********** -->
    <div class="products-listed-sect">
        <div class="my-container">
            <div class="list-top-title d-flex">
                <!-- Title of the Listed Products -->
                <h2 class="title-of-p-list font-weight-normal m-0 d-inline-block">Frozen Foods</h2><!-- /.title-of-p-list -->
                <!-- View all the products, which we listed here. -->
                <a class="btn-view-all ml-auto rounded d-flex justify-content-center font-weight-bold align-items-center col-primary-dark p-0" href="#">
                    <Span class="font-12 ml-1 mr-1">All Frozen Foods</Span> <span class="icon-right-arrow font-12 ml-1 m-auto"></span>
                </a><!-- /.btn-view-all -->
            </div><!-- /.list-top-title -->
            <div class="owl-carousel owl-products-list owl-theme mt-3">
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-frozen-food-paratha.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block invsible">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="item-title col-primary m-0">Dawn Frozen Paratha</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">130</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">pack of 5</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: none!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: block!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-frozen-food-kabab.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">4% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">K&Ns Chapli Kabak</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">295</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">small pack</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">2300</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-frozen-food-paratha.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block invsible">2% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="item-title col-primary m-0">Dawn Frozen Paratha</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">130</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">pack of 5</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-frozen-food-burger.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">4% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">K&Ns Burger Patties</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">315</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">small pack</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">2300</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
                <div class="my-item mb-2">
                    <div class="card">
                        <a href="#">
                            <!-- Image of Product -->
                            <div class="card-img-top card bg-dark rounded-0 border-0 text-white">
                                <img class="product-image rounded-0" src="./assets/img/searched-frozen-food-kabab.jpg" class="card-img" alt="..."><!-- /.product-image -->
                                <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                                    <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                                        <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                                        <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                                    </div><!-- /.overlay-inner -->
                                </div><!-- /.card-img-overlay -->
                            </div><!-- /.card-img-top -->
                            <div class="card-body pt-2 pb-1">
                                <div class="offer-btn col-white bg-danger rounded border border-light font-13 invisible">
                                    <span class="icon-radio-unchecked mr-1"></span>
                                    <p class="offer-detail m-0 text-uppercase d-inline-block">4% OFF</p>
                                </div><!-- /.offer-btn -->
                                <p class="card-text item-title col-primary m-0">K&Ns Chapli Kabak</p><!-- /.item-title -->
                                <div class="price-div col-warning">
                                    <span class="m-0">Rs</span>
                                    <span class="item-price">295</span> <!-- /.item-price -->
                                    <span class="m-0">/</span>
                                    <span class="item-measure font-13 col-black">small pack</span><!-- /.item-measure -->
                                </div><!-- /.price-div -->
                                <div class="full-price-div card-text col-black m-0 invisible">
                                    <span>Rs</span>
                                    <span class="item-offer-cross-price">2300</span><!-- /.item-offer-cross-price -->
                                </div><!-- /.full-price-div -->
                            </div><!-- card-body -->
                        </a><!-- a -->
                        <div class="add-to-cart-div p-1">
                            <button type="button" class="add-to-cart-btn btn w-100 btn-success rounded-0" style="display: block!important;">
                                <span>Add to Cart</span>
                            </button> <!-- /.add-to-cart-btn -->
                            <div class="add-to-cart-add-remove" style="display: none!important;">
                                <div class="add-to-cart-inner d-flex align-items-center justify-content-center">
                                    <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                                    <p class="product-cart-count text-center rounded-0 m-0 d-inline-block">0</p> <!-- /.product-cart-count -->
                                    <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                                </div><!-- /.add-to-cart-inner -->
                            </div><!-- /.add-to-cart-section -->
                        </div><!-- /.add-to-cart-div -->
                    </div><!-- /.card -->
                </div><!-- /.my-item -->
            </div><!-- /.owl-carousel /.owl-products-list -->
        </div><!-- /.my-container -->
    </div><!-- /.products-listed-sect -->


    <!-- ****************** Filter-Section ******************* -->
    <?php
    include './incl/side-filters.php';
    ?>

    <!-- ****************** Footer-Section ******************* -->
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