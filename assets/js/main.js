/* --------------- Pre-Loading------------- */
// $(document).ready(function(){
    // 	$('div#loading').removeAttr('id');
// });
document.getElementById("body").style.overflowY = "hidden";
var loading_spinner = document.getElementById("loading_spinner");
var preloader = document.getElementById("preloading");
// window.addEventListener('load', function(){
// 	preloader.style.display = 'none';
// 	})

function pre_Loading(){
    preloader.style.display = 'none';
    loading_spinner.style.display = 'none';
    document.getElementById("body").style.overflowY = "scroll";
};
/*------------ End - Pre-Loading-----------  */


/* ------------------ Side Menus Section ------------------- */
function openSideMenu() {
    document.getElementById("sidemenu-shaodow").style.width = "100%";
    document.getElementById("menu").style.width = "350px";
    document.getElementById("body").style.overflowY = "hidden";
}
function closeSideMenu() {
    document.getElementById("menu").style.width = "0px";
    document.getElementById("sidemenu-shaodow").style.width = "0%";
    document.getElementById("body").style.overflowY = "scroll";
}
/* ------------- End - Side Menus Section ------------------ */


/* ------------------ Side Search Section ------------------- */
function openSideSearch() {
    document.getElementById("side-search-shaodow").style.width = "100%";
    document.getElementById("side-search").style.transform = "translate(0%, 0)";
    document.getElementById("body").style.overflowY = "hidden";
}
function closeSideSearch() {
    document.getElementById("side-search-shaodow").style.width = "0%";
    document.getElementById("side-search").style.transform = "translate(110%, 0)";
    document.getElementById("body").style.overflowY = "scroll";
}
/* ------------- End - Side Search Section ------------------ */


/* ------------------ Side Filter Section ------------------- */
function openSideFilter() {
    document.getElementById("side-filter-shaodow").style.width = "100%";
    document.getElementById("side-filter").style.transform = "translate(0%, 0)";
    document.getElementById("body").style.overflowY = "hidden";
}
function closeSideFilter() {
    document.getElementById("side-filter-shaodow").style.width = "0%";
    document.getElementById("side-filter").style.transform = "translate(-110%, 0)";
    document.getElementById("body").style.overflowY = "scroll";
}
/* ------------- End - Side Filter Section ------------------ */


/* ------------------ Categories Section ------------------- */
$('.home-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots:false,
    responsive: {
        0: {
            items: 3
        },
        600: {
            items: 8
        },
        1000: {
            items: 10
        }
    }
})
/* ------------- End - Categories Section ------------------ */


/* ------------------ Side Categories Section ------------------- */
function openSideCategories() {
    document.getElementById("side-cat-shaodow").style.width = "100%";
    document.getElementById("side-cat-menus").style.transform = "translate(0%, 0)";
    document.getElementById("body").style.overflowY = "hidden";
}
function closeSideCategories() {
    document.getElementById("side-cat-shaodow").style.width = "0%";
    document.getElementById("side-cat-menus").style.transform = "translate(110%, 0)";
    document.getElementById("body").style.overflowY = "scroll";
}
// if (mediaQuery_max600.matches <= '600px') {
//     // Then trigger an alert
//     alert('less than 600 px');
// } else {
//     alert('greater than 600 px');
// }
/* ------------- End - Side Categories Section ------------------ */


/* ----------------------- Best Seler Section ------------------------ */
$('.owl-best-seller').owlCarousel({
    loop:true,
    margin:10,
    nav: true,
    dots:false,
    responsive:{
        0:{
            items:2.2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
/* ------------------ End - Best Seler Section ----------------------- */


/* -----------------------  Side Brands Section ------------------------ */
function openSideBrands() {
    document.getElementById("side-brands-shadow").style.width = "100%";
    document.getElementById("side-brands-menus").style.transform = "translate(0%, 0)";
    document.getElementById("body").style.overflowY = "hidden";
}
function closeSideBrands() {
    document.getElementById("side-brands-shadow").style.width = "0%";
    document.getElementById("side-brands-menus").style.transform = "translate(110%, 0)";
    document.getElementById("body").style.overflowY = "scroll";
}
/* ------------------ End - Side Brands Section ----------------------- */



/* ----------------------- Products Listed Section ------------------------ */
$('.owl-products-list').owlCarousel({
    loop:true,
    margin:10,
    nav: true,
    dots:false,
    responsive:{
        0:{
            items:2 //2.2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
/* ------------------ End - Products Listed Section ----------------------- */



/* --------------------  Item-View Section -------------------------- */
$('#accordionCustomerReviews').on('hidden.bs.collapse', function () {
    // On Hide
    document.getElementById("reviews-toggle-ico").style.transform = "rotate(0deg)";
    document.getElementById("reviews-toggle-ico").style.transform = "translate(0, -8%)";
})
$('#accordionCustomerReviews').on('show.bs.collapse', function () {
    // On Show
    document.getElementById("reviews-toggle-ico").style.transform = "rotate(90deg)";
})
/* ------------------ End - Item-View Section ----------------------- */








