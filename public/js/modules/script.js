function number_format() {
	let elements = document.querySelectorAll('.price_formator');
	for (let elem of elements) {
		elem.dataset.realPrice = elem.innerHTML;
		elem.innerHTML = Number(elem.innerHTML).toLocaleString('ru-RU');
	}
}

document.addEventListener("DOMContentLoaded", () => {
	number_format();
});


// 'use strict';
// document.addEventListener('DOMContentLoaded', () => {
// });

const iconMenu = document.querySelector(".icon-menu");
const body = document.querySelector("body");
const menuBody = document.querySelector(".mob-menu");
const menuListItemElems = document.querySelector(".mob-menu__list");
const mobsearch = document.querySelector(".mob-search");
const headsearch = document.querySelector(".header__search-mob");
const filterMob = document.querySelector(".page__sidebar-filter-block-mob");
const sidebarBody = document.querySelector(".page__sidebar-body");

//BURGER
if (iconMenu) {
  iconMenu.addEventListener("click", function () {
    iconMenu.classList.toggle("active");
    body.classList.toggle("_lock");
    menuBody.classList.toggle("active");
  });
}

if (filterMob) {
  filterMob.addEventListener("click", function () {
    sidebarBody.classList.toggle("active");
  });
}

// Строка поиска на мобилках 
if (mobsearch) {
  mobsearch.addEventListener("click", function () {
    headsearch.classList.toggle("_active");
  });
}

// Закрытие моб меню при клике на якорную ссылку
if (menuListItemElems) {
  menuListItemElems.addEventListener("click", function () {
    iconMenu.classList.toggle("active");
    body.classList.toggle("_lock");
    menuBody.classList.toggle("active");
  });
}

// Плавная прокрутка
const smotScrollElems = document.querySelectorAll('a[href^="#"]:not(a[href="#"])');

smotScrollElems.forEach(link => {
  link.addEventListener('click', (event) => {
    event.preventDefault()

    const id = link.getAttribute('href').substring(1)

    document.getElementById(id).scrollIntoView({
      behavior: 'smooth'
    });
  })
});

