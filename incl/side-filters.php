<!-- ********** Side-Filter-Section ********** -->
<div class="side-filter-section">
    <div id="side-filter-shaodow" class="side-filter-shaodow" onclick="closeSideFilter()"> </div>
    <!-- /.side-filter-shaodow -->
    <div id="side-filter" class="side-filter">
        <div class="top-options">
            <div class="t-options d-flex justify-content-between">
                <a class="close-btn-side-search ml-auto" href="#" onclick="closeSideFilter()">
                    <span class="txt mr-1">Back to list</span>
                    <span class="icon-arrow-right font-weight-bold ico"></span>
                </a>
            </div><!-- /.t-options -->
            <span type="button" class="clear-all-filters mt-4">
                <span class="icon-cancel-circle pt-2- font-weight-bold ico"></span>
                <span class="txt ml-1-">Clear Filters</span>
            </span><!-- /.clear-all-filters -->
        </div><!-- /.top-options -->
        <div class="side-filter-body" id="side-filter-body">
            <div class="filter-list">

                <!-- Katvi Filter -->
                <div class="jumbotron px-3 py-3 mb-3 rounded-0">
                    <h6 class="filter-title m-0 font-18">Brand</h6>
                    <hr class="my-2 mb-3"><!-- /.hr - horizontal-line -->
                    <div class="form-group form-check">
                        <input type="checkbox" class="katvi-filter-check form-check-input" id="katvi-filter-check">
                        <label class="form-check-label" for="katvi-filter-check">Katvi</label>
                    </div>
                </div> <!-- /.jumbotron -->

                <!-- Price Filter -->
                <div class="jumbotron px-3 py-3 mb-3 rounded-0">
                    <h6 class="filter-title m-0 font-18">Price</h6>
                    <hr class="my-2 mb-3"><!-- /.hr - horizontal-line -->
                    <div class="form-group form-check">
                        <input type="checkbox" class="price-filter-check form-check-input" id="price-filter-check-1">
                        <label class="form-check-label" for="price-filter-check-1">Less than Rs.100</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="price-filter-check form-check-input" id="price-filter-check-2">
                        <label class="form-check-label" for="price-filter-check-2">Rs.100 to Rs.200</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="price-filter-check form-check-input" id="price-filter-check-3">
                        <label class="form-check-label" for="price-filter-check-3">Rs.200 to Rs.500</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="price-filter-check form-check-input" id="price-filter-check-4">
                        <label class="form-check-label" for="price-filter-check-4">Rs.500 to Rs.1000</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="price-filter-check form-check-input" id="price-filter-check-5">
                        <label class="form-check-label" for="price-filter-check-5">Greater than 1000</label>
                    </div>
                </div> <!-- /.jumbotron -->

                <!-- Type Filter -->
                <div class="jumbotron px-3 py-3 mb-3 rounded-0">
                    <h6 class="filter-title m-0 font-18">Type</h6>
                    <hr class="my-2 mb-3"><!-- /.hr - horizontal-line -->
                    <div class="form-group form-check">
                        <input type="checkbox" class="type-filter-check form-check-input" id="type-filter-check-1">
                        <label class="form-check-label" for="type-filter-check-1">Organic</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="type-filter-check form-check-input" id="type-filter-check-2">
                        <label class="form-check-label" for="type-filter-check-2">Promotion</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="type-filter-check form-check-input" id="type-filter-check-3">
                        <label class="form-check-label" for="type-filter-check-3">In Season</label>
                    </div>
                </div> <!-- /.jumbotron -->

            </div><!-- /.filter-list -->
        </div><!-- /.side-filter-body -->
        <button type="button" class="btn-apply-filters btn btn-success btn-block font-weight-bold rounded-0">Apply Filters</button><!-- /.btn-apply-filters -->
    </div><!-- /.side-filter -->
</div> <!-- /.side-filter-section -->