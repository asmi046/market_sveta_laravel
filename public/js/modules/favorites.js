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
           
            axios.post('/favorites/add', {
                _token: document.querySelector('meta[name="_token"]').content,
                product_id: product_id
            })
            .then((response) => {
                
                let main_card = document.querySelector(".main-prod-card__column[data-prodid='"+product_id+"']");

                if (response.data[0])
                {    
                    update_fav_counter(parseInt(favorites_in_list)+1)
                    elem.classList.add("active")
                    main_card.classList.add("in-favorites")
                }
                else { 
                    update_fav_counter(parseInt(favorites_in_list)-1)
                    elem.classList.remove("active")
                    main_card.classList.remove("in-favorites")
                }
            })
            .catch(error => console.log(error));
            
        });

})