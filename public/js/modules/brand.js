document.addEventListener("DOMContentLoaded", () => { 
    let searchFeild = document.getElementById("search_brand_input")
    let searchResult = document.getElementById("brand_search_result")
    
    if (searchFeild)
    searchFeild.addEventListener("input", function (e) { 
        if (searchFeild.value == "") {
            searchResult.innerHTML = ""
            return
        }

        let subvalse = all_brands[searchFeild.value[0].toUpperCase()]
        if (subvalse == undefined) return;

        let rezstr = ""
        for (let element of subvalse) {
           if (element.brand.toUpperCase().indexOf(searchFeild.value.toUpperCase(), 0) >= 0)
                rezstr +="<a href='/brand/"+element.slug+"'>"+element.brand+"</a>" 
        }

        searchResult.innerHTML = rezstr 

        console.log(rezstr)
    })
})