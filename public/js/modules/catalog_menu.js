document.addEventListener("DOMContentLoaded", () => { 
    let wrapper = document.querySelector(".catalog_menu_wrapper")
    let catalog_btn = document.querySelector(".open_cat_menu")

    catalog_btn.addEventListener("click", function (e) {
        e.preventDefault()
        wrapper.style.display = "block"
    })

    wrapper.addEventListener("click", function (e) {
        e.preventDefault()
        wrapper.style.display = "none"
    });

    document.querySelector(".close_catalog").addEventListener("click", function (e) {
        e.preventDefault()
        wrapper.style.display = "none"
    });
})