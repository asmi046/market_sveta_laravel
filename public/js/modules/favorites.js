import axios from 'axios'


let favorites_in_list = 0

function update_fav_counter(new_count) {

    let bascet_counter = document.querySelectorAll(".favorites_counter")
    for (let elem of bascet_counter) {
        favorites_in_list = new_count
        elem.innerHTML = new_count
    }
    
}

function favorites_to_page() {
            axios.get('/favorites/get', {
                
            })
            .then((response) => {
                console.log(response.data)
                if (response.data.length == 0) return;

                    update_fav_counter(response.data.count)

                    for (let element of response.data.position) {
                        let card = document.querySelector('.main-prod-card__column[data-prodid="'+element.product_sku+'"]')
                        if (card != undefined)
                        {
                            card.classList.add("in-favorites")
                        }
                    }    
                    
                
            })
            .catch(error => console.log(error));
}

document.addEventListener("DOMContentLoaded", () => { 
    
    favorites_to_page();

    let add_buttons = document.querySelectorAll(".to_favorites")

    for (let elem of add_buttons)
        elem.addEventListener("click", function (e) {
            e.preventDefault()
            let product_id = elem.dataset.prodid;
            
            

            console.log(this.classList.contains("active"))
            if (this.classList.contains("active")) {
            axios.delete('/favorites/delete/', {
                data: {
                    _token: document.querySelector('meta[name="_token"]').content,
                    product_id: product_id
                }
            })
            .then(() => {
                let main_card = document.querySelector(".main-prod-card__column[data-prodid='"+product_id+"']");

                update_fav_counter(parseInt(favorites_in_list)+1)

                elem.classList.toggle("active")
                main_card.classList.toggle("in-favorites")
            })
            .catch(error => console.log(error));
        } else {
            
                axios.post('/favorites/add/', {
                   
                        _token: document.querySelector('meta[name="_token"]').content,
                        product_id: product_id
                
                })
                .then(() => {
                    let main_card = document.querySelector(".main-prod-card__column[data-prodid='"+product_id+"']");

                    update_fav_counter(parseInt(favorites_in_list)+1)

                    elem.classList.toggle("active")
                    main_card.classList.toggle("in-favorites")
                })
                .catch(error => console.log(error));
            }

            // let data = new FormData()
            // data.append("product_id", product_id)
            // data.append("_token", tiken)

            // var xhr = new XMLHttpRequest()
            //     if (elem.classList.contains("active"))
            //         {
            //             console.log("dell")
            //             console.log(tiken)
            //             xhr.open("DELETE", "/favorites/delete", true)
            //         }
            //     else
            //         {
            //             console.log("add")
            //             console.log(tiken)
            //             xhr.open("post", "/favorites/add", true)

                        
            //         }

            //         xhr.responseType = 'json'
            //         xhr.setRequestHeader('Accept', 'application/json')
                
            //     xhr.onload = function () {
            //         console.log(xhr)
            //         if (xhr.status == 422) {
                        
            //             for (let error of Object.entries(xhr.response.errors) )
            //             {
            //                 console.log(error[0])
            //                 console.log(error[1][0])
            //             }
            //         } else

            //         if (xhr.status == 200) {
            //             let main_card = document.querySelector(".main-prod-card__column[data-prodid='"+product_id+"']");

            //             update_fav_counter(parseInt(favorites_in_list)+1)

            //             elem.classList.toggle("active")
            //             main_card.classList.toggle("in-favorites")
            //         }

            //     };

            //     xhr.onerror = function () {
            //         alert(xhr.responseText)
            //         console.log(xhr.status)
            //     };

            //     xhr.send(data);
        });

})