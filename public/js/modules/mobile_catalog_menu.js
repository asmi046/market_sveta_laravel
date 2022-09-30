document.addEventListener("DOMContentLoaded", () => { 
    let showMobCataloMenuBtn = document.querySelector('.show_mob_menu')
    let mobCatalogMenu = document.querySelector('.mobile_catalog_menu')

    let mobCatalogMenuList = document.querySelectorAll('.catalogMenuPunct')
    
    if (mobCatalogMenuList)
        for (let item of mobCatalogMenuList)
        item.onclick = (e) =>  {
            e.preventDefault()
            item.classList.toggle("_active")
        }
    
    if (showMobCataloMenuBtn)
        showMobCataloMenuBtn.onclick = (e) =>  {
            e.preventDefault()
            mobCatalogMenu.classList.toggle("mcm_active")
        }
    
})