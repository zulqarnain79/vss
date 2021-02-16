// Media Quries
// Define the query
const mediaQuery_min600 = window.matchMedia('(min-width: 600px)')
//----------

/* ------------------ Side Menus Section ------------------- */
function openSideMenu() {
    document.getElementById("sidemenu-shaodow").style.width = "100%";
    document.getElementById("menu").style.width = "350px";
}
function closeSideMenu() {
    document.getElementById("menu").style.width = "0px";
    document.getElementById("sidemenu-shaodow").style.width = "0%";
}
/* ------------- End - Side Menus Section ------------------ */


/* ------------------ Side Search Section ------------------- */
function openSideSearch() {
    document.getElementById("side-search-shaodow").style.width = "100%";
    document.getElementById("side-search").style.transform = "translate(0%, 0)";
}
function closeSideSearch() {
    document.getElementById("side-search-shaodow").style.width = "0%";
    document.getElementById("side-search").style.transform = "translate(110%, 0)";
}
/* ------------- End - Side Search Section ------------------ */


/* ------------------ Categories Section ------------------- */
$('.home-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    responsive: {
        0: {
            items: 1
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
}
function closeSideCategories() {
    document.getElementById("side-cat-shaodow").style.width = "0%";
    document.getElementById("side-cat-menus").style.transform = "translate(110%, 0)";
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
    nav:false,
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
}
function closeSideBrands() {
    document.getElementById("side-brands-shadow").style.width = "0%";
    document.getElementById("side-brands-menus").style.transform = "translate(110%, 0)";
}
/* ------------------ End - Side Brands Section ----------------------- */



/* ----------------------- Products Listed Section ------------------------ */
$('.owl-products-list').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
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








