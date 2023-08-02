function number_format() {
	let elements = document.querySelectorAll('.price_formator');
	for (let elem of elements) {
		elem.dataset.realPrice = elem.innerHTML;
		elem.innerHTML = Number(elem.innerHTML).toLocaleString('ru-RU');
	}
}

function save_all_product_card_sku() {
    let elements = document.querySelectorAll(".main-prod-card__column[data-prodid]");
    let sku_list = [];
    for (let elem of elements) {
        sku_list.push(elem.dataset.prodid)
    }

    console.log(sku_list);

    localStorage.setItem("tovar_skus", JSON.stringify(sku_list));
}

document.addEventListener("DOMContentLoaded", () => {
	number_format();
    // save_all_product_card_sku();
});



