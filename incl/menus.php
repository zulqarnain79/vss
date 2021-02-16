<!-- ********** Menus-Section ********** -->
<div class="menus-section">
    <div class="menu-sect-inn">
        <nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
            <div class="nav-logo d-flex align-items-center justify-content-center">
                <a class="navbar-brand m-auto" href="#" onclick="openSideMenu()">
                    <!-- &#9776; = Menus-Icon -->
                    <span class="icon-menu font-25 p-2"></span>
                </a>
                <a class="navbar-brand ml-2" href="./index.php">
                    <img class="img-fluid mb-hide" src="./assets/img/logo-pk.png" alt="">
                    <img class="img-fluid desk-hide mb-show" src="./assets/img/logo-white-pk.png" alt="">
                </a>
            </div><!-- /.nav-logo -->

            <div class="collapse ml-auto d-flex">
                <form class="form-inline my-2 my-lg-0 ml-auto mb-hide">
                    <div class="menu-search-div form-control ml-auto" onclick="openSideSearch()" style="background-color: rgb(245, 245, 245); color: rgb(126, 124, 124);">
                        <span class="font-12 font-weight-bold">Search for an item on katvi...</span>
                        <span class="icon-search font-18 ml-3 font-weight-bold col-black"></span>
                    </div><!-- /.menu-search-div -->
                </form>
                <div class="menu-cart-div ml-3 d-flex align-items-center">
                    <div class="my-cart">
                        <span class="icon-cart font-30"></span>
                        <p class="para-cart-count m-0 px-1 rounded-circle col-white d-inline-block font-12" style="background-color: red;">0</p>
                    </div><!-- /.my-cart -->
                    <div class="cart-price ml-3">
                        <span class="badge badge-success px-3 py-2 font-16">
                            <p class="m-0">Rs 0</p>
                        </span>
                    </div><!-- /.cart-price -->
                </div><!-- /.menu-cart-div -->
            </div> <!-- /.collapse -->

            <form class="form-inline mb-2 my-lg-0 w-100 desk-hide mb-show">
                <div class="menu-search-div form-control ml-auto" onclick="openSideSearch()">
                    <span class="icon-search font-14 font-weight-bold col-black" style="color: rgb(156, 156, 156);"></span>
                    <span class="font-13 ml-3" style="color: rgb(119, 117, 117);">Search for an item on
                        katvi...</span>
                </div><!-- /.menu-search-div -->
            </form>
        </nav> <!-- /.navbar -->
    </div><!-- /.menu-sect-inn -->
</div> <!-- /.menus-section -->


<!-- ********** SideMenu-Section ********** -->
<?php
    include './incl/side-menus.php';
?>

<!-- ********** Side-Search-Section ********** -->
<?php
    include './incl/side-search.php';
?>