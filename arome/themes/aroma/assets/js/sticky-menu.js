// window.addEventListener("scroll", function () {
//     if (window.innerWidth > 991) {
//         let menu = document.getElementById("header-main");
//         menu.classList.toggle("sticky", window.scrollY > 50);

//         let col3 = document.getElementById("header_logo");
//         let menu_ul = document.getElementById("menu");
//     } else {
//         menu.classList.remove("sticky");
//     }
// })

let searchButton = document.getElementById("search-icon").addEventListener("click", searchForm);

function searchForm() {
    let searchInput = document.getElementById("search_widget");

    searchInput.classList.toggle("active-form");
}