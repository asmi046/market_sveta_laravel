function hide_all_submenu() {
    
    let smls = document.querySelectorAll(".sub_cat_menu_wrapper")

    for (let elem of smls) {
        elem.style.display = "none"
        
    }

    let submenu_list = document.querySelectorAll(".catalog_menu nav a")
    for (let elem of submenu_list) { 
        elem.classList.remove("active")
    }
}

document.addEventListener("DOMContentLoaded", () => { 
    let wrapper = document.querySelector(".catalog_menu_wrapper")
    let catalog_btn = document.querySelector(".open_cat_menu")

    let submenu_list = document.querySelectorAll(".catalog_menu nav a")

    for (let elem of submenu_list) {
        elem.addEventListener("mouseover", function (e) {
            e.preventDefault()
            let sub_menu_name = elem.dataset.subwin
            hide_all_submenu()
            document.querySelector(".scm_"+sub_menu_name).style.display = "flex"
        })
        
        elem.addEventListener("mouseout", function (e) {
            e.preventDefault()
            elem.classList.add("active")
        })
    }


    catalog_btn.addEventListener("click", function (e) {
        e.preventDefault()
        wrapper.style.display = "flex"
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