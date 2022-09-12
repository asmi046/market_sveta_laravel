document.addEventListener("DOMContentLoaded", () => { 
    let add_buttons = document.querySelectorAll(".to_bascet")

    for (let elem of add_buttons)
    elem.addEventListener("click", function (e) {
        e.preventDefault()
        let product_id = elem.dataset.prodid;
        let tiken = elem.dataset.tiken;
        
        let data = new FormData()
        data.append("product_id", product_id)
        data.append("_token", tiken)

        var xhr = new XMLHttpRequest()
            
            xhr.open("post", "/bascet/add", true)
            xhr.responseType = 'json'
            xhr.setRequestHeader('Accept', 'application/json')
            
            xhr.onload = function () {
                console.log(xhr)
                if (xhr.status == 422) {
                    
                    for (let error of Object.entries(xhr.response.errors) )
                     {
                        console.log(error[0])
                        console.log(error[1][0])
                        form.querySelector(".input_"+error[0]).classList.add("input_error")

                     }
                } else

                if (xhr.status == 200) {
                    // document.location.href = "/thanks"
                }

            };

            xhr.onerror = function () {
                alert(xhr.responseText)
                console.log(xhr.status)
            };

            xhr.send(data);
    });

})