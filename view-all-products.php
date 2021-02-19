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

  <title>Best Seller - All Products</title>
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

  <div class="product-view-tabs mt-2">
    <div class="my-container">
      <ul class="nav ftco-tab-nav nav-pills m-0" id="pills-tab" role="tablist">
        <li class="nav-item ftco-animate px-1 mt-1">
          <a class="nav-link active border border-success rounded-0" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All</a>
        </li><!-- /.nav-item -->
        <li class="nav-item ftco-animate px-1 mt-1">
          <a class="nav-link border border-success rounded-0" id="pills-lunch-vegetables-tab" data-toggle="pill" href="#pills-lunch-vegetables" role="tab" aria-controls="pills-lunch-vegetables" aria-selected="false">
            <span class="icon-all-cat-2 mr-1 ico"></span>
            <span class="txt">Vegetables</span>
          </a>
        </li><!-- /.nav-item -->
        <li class="nav-item ftco-animate px-1 mt-1">
          <a class="nav-link border border-success rounded-0" id="pills-fresh-fruit-tab" data-toggle="pill" href="#pills-fresh-fruit" role="tab" aria-controls="pills-fresh-fruit" aria-selected="false">
            <span class="icon-all-cat-2 mr-1 ico"></span>
            <span class="txt">Fresh Fruits</span>
          </a>
        </li><!-- /.nav-item -->
        <li class="nav-item ftco-animate px-1 mt-1">
          <a class="nav-link border border-success rounded-0" id="pills-lunch-vegetables-tab" data-toggle="pill" href="#pills-lunch-vegetables" role="tab" aria-controls="pills-lunch-vegetables" aria-selected="false">
            <span class="icon-all-cat-2 mr-1 ico"></span>
            <span class="txt">Vegetables</span>
          </a>
        </li><!-- /.nav-item -->
        <li class="nav-item ftco-animate px-1 mt-1">
          <a class="nav-link border border-success rounded-0" id="pills-fresh-fruit-tab" data-toggle="pill" href="#pills-fresh-fruit" role="tab" aria-controls="pills-fresh-fruit" aria-selected="false">
            <span class="icon-all-cat-2 mr-1 ico"></span>
            <span class="txt">Fresh Fruits</span>
          </a>
        </li><!-- /.nav-item -->
        <li class="nav-item ftco-animate px-1 mt-1">
          <a class="nav-link border border-success rounded-0" id="pills-lunch-vegetables-tab" data-toggle="pill" href="#pills-lunch-vegetables" role="tab" aria-controls="pills-lunch-vegetables" aria-selected="false">
            <span class="icon-all-cat-2 mr-1 ico"></span>
            <span class="txt">Vegetables</span>
          </a>
        </li><!-- /.nav-item -->
        <li class="nav-item ftco-animate px-1 mt-1">
          <a class="nav-link border border-success rounded-0" id="pills-fresh-fruit-tab" data-toggle="pill" href="#pills-fresh-fruit" role="tab" aria-controls="pills-fresh-fruit" aria-selected="false">
            <span class="icon-all-cat-2 mr-1 ico"></span>
            <span class="txt">Fresh Fruits</span>
          </a>
        </li><!-- /.nav-item -->
      </ul><!-- /.nav -->
    </div><!-- /.my-container -->
  </div><!-- /.product-view-tabs -->

  <div class="breadcrumb-section">
    <div class="my-container d-flex align-items-center">
      <nav class="breadcrumb-nav" aria-label="breadcrumb">
        <ol class="breadcrumb m-0 py-3 px-0 rounded-0 bg-col-white font-14">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <!-- <li class="breadcrumb-item"><a href="#">Vegetables $ Fruits</a></li> -->
          <!-- <li class="breadcrumb-item"><a href="#">Fresh Fruits</a></li> -->
          <li class="breadcrumb-item active" aria-current="page">Best Seller</li>
        </ol><!-- /.breadcrumb -->
      </nav><!-- /.breadcrumb-nav -->
      <div class="filter-btn ml-auto rounded px-2 py-1-" onclick="openSideFilter()">
        <span class="col-success font-18 txt col-primary">Filters</span>
      </div><!-- /.filter-btn -->
    </div><!-- /.my-container -->
  </div><!-- /.breadcrumb-section -->


  <!-- ****************** View-All-Products-Section ******************* -->
  <div class="view-all-product-sec v-a-pr">
    <div class="empty-view text-center" style="display: none;">
      <p class="m-auto">No Product Found</p>
    </div><!-- /.empty-view -->
    <div class="my-container m-con">
      <div class="tab-content t-con">
        <!-- *********** Tab-Panel *********** -->
        <div class="tab-pane t-pa fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
          <div class="row r">
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-fruit-orange.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                          <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                            <span class="icon-radio-unchecked mr-1"></span>
                            <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                          </div><!-- /.offer-btn -->
                        </div><!-- /.card-img-overlay -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
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
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
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
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
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
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
             <!-- *********** Item *********** -->
             <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-veg-onion-bag.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                          <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                            <span class="icon-radio-unchecked mr-1"></span>
                            <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                          </div><!-- /.offer-btn -->
                        </div><!-- /.card-img-overlay -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Onion Bag</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">5 kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-veg-potato.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Potato</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">1 kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-fruit-orange.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13" style="display: none;">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Kinnu Malta</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0" style="display: none;">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-veg-onion.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13" style="display: none;">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Onion</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1 Kg</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0" style="display: none;">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
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
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13" style="display: none;">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Banana</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0" style="display: none;">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-veg-potato.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13" style="display: none;">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Potato</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">1 Kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0" style="display: none;">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
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
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
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
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
             <!-- *********** Item *********** -->
             <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-veg-onion-bag.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                          <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                            <span class="icon-radio-unchecked mr-1"></span>
                            <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                          </div><!-- /.offer-btn -->
                        </div><!-- /.card-img-overlay -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Onion Bag</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">5 kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-veg-potato.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Potato</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">1 kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-fruit-orange.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13" style="display: none;">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Kinnu Malta</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0" style="display: none;">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-veg-onion.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13" style="display: none;">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Onion</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1 Kg</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0" style="display: none;">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
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
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13" style="display: none;">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Banana</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0" style="display: none;">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-veg-potato.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13" style="display: none;">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Potato</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">1 Kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0" style="display: none;">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.tab-pane -->

        <!-- *********** Tab-Panel *********** -->
        <div class="tab-pane t-pa fade" id="pills-lunch-vegetables" role="tabpanel" aria-labelledby="pills-lunch-vegetables-tab">
        <div class="row r">
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-veg-onion-bag.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                          <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                            <span class="icon-radio-unchecked mr-1"></span>
                            <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                          </div><!-- /.offer-btn -->
                        </div><!-- /.card-img-overlay -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Onion Bag</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">5 kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-veg-potato.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Potato</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">1 kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-veg-onion.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13" style="display: none;">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Onion</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1 Kg</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0" style="display: none;">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-veg-onion-bag.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13" style="display: none;">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Onion Bag</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">5 Kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0" style="display: none;">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-veg-potato.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13" style="display: none;">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Potato</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">1 Kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0" style="display: none;">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-veg-potato.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Potato</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">1 kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-veg-onion.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13" style="display: none;">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Onion</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1 Kg</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0" style="display: none;">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-veg-onion-bag.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13" style="display: none;">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Onion Bag</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">5 Kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0" style="display: none;">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-veg-potato.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13" style="display: none;">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Potato</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">1 Kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0" style="display: none;">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
          </div><!-- /.row -->
        </div> <!-- /.tab-pane -->

        <!-- *********** Tab-Panel *********** -->
        <div class="tab-pane t-pa fade" id="pills-fresh-fruit" role="tabpanel" aria-labelledby="pills-fresh-fruit-tab">
          <div class="row r">
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-fruit-orange.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                          <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                            <span class="icon-radio-unchecked mr-1"></span>
                            <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                          </div><!-- /.offer-btn -->
                        </div><!-- /.card-img-overlay -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
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
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
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
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
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
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-fruit-orange.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13" style="display: none;">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Kinnu Malta</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0" style="display: none;">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-fruit-orange.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13" style="display: none;">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Kinnu Malta</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0" style="display: none;">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
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
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
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
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-fruit-orange.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13" style="display: none;">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Kinnu Malta</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0" style="display: none;">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-fruit-orange.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13" style="display: none;">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Kinnu Malta</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0" style="display: none;">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
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
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
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
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-fruit-orange.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13" style="display: none;">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Kinnu Malta</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0" style="display: none;">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
            <!-- *********** Item *********** -->
            <div class="my-products m-prod col-12 col-sm-6 col-md-4 col-lg-3 ftco-animate mb-3 px-0">
              <div class="my-card card rounded-0 mx-1">
                <a href="#">
                  <div class="row m-0">
                    <div class="image-row col-5 col-sm-12 p-0">
                      <!-- Image Card on Product -->
                      <div class="card card-img-top bg-dark rounded-0 border-0 text-white">
                        <img class="product-image rounded-0" src="./assets/img/searched-fruit-orange.jpg" class="card-img" alt="...">
                        <!-- /.product-image -->
                        <div class="card-img-overlay py-2 d-flex align-items-center" style="display: none!important;">
                          <div class="overlay-inner mt-auto d-flex align-items-center justify-content-center w-100">
                            <span class="cart-product-count d-flex font-16 bg-col-danger font-weight-bold">1</span><!-- /.cart-product-count -->
                            <span class="font-16 msg font-weight-bold ml-2">in your cart</span>
                          </div><!-- /.overlay-inner -->
                        </div><!-- /.card-img-overlay -->
                        <div class="offer-btn col-white bg-danger rounded border border-light font-13" style="display: none;">
                          <span class="icon-radio-unchecked mr-1"></span>
                          <p class="offer-detail m-0 text-uppercase d-inline-block">2% OFF</p>
                        </div><!-- /.offer-btn -->
                      </div><!-- /.card -->
                    </div><!-- /.image-row -->
                    <div class="details-row col-7 col-sm-12">
                      <p class="item-title col-primary m-0">Kinnu Malta</p><!-- /.item-title -->
                      <div class="price-div col-warning">
                        <span class="m-0">Rs</span>
                        <span class="item-price">1210</span> <!-- /.item-price -->
                        <span class="m-0">/</span>
                        <span class="item-measure font-13 col-black">kg</span><!-- /.item-measure -->
                      </div><!-- /.price-div -->
                      <div class="full-price-div card-text col-black m-0" style="display: none;">
                        <span>Rs</span>
                        <span class="item-offer-cross-price">1231</span><!-- /.item-offer-cross-price -->
                      </div><!-- /.full-price-div -->
                    </div><!-- /.details-row -->
                  </div><!-- /.row -->
                </a><!-- /.a -->
                <div class="add-to-cart-section">
                  <button class="btn-item-remove my-btn icon-minus rounded-0 font-20 m-0" style="display: none;"></button><!-- /.btn-item-remove -->
                  <button class="btn-item-add my-btn icon-plus font-weight-bold rounded-0 font-20 m-0"></button><!-- /.btn-item-add -->
                </div><!-- /.add-to-cart-section -->
              </div> <!-- /.my-card -->
            </div> <!-- /.my-products /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.tab-pane -->
      </div><!-- /.tab-content -->
    </div><!-- /.my-container -->
  </div><!-- /.view-all-product-sec -->


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