@extends('layout.all')
@section('title', "Категория")

@section('content')

    <section id="category_page" class="select-prod">
        <div class="_container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('home')}}">Главная</a></li>
                    <li>Категория</li>
                </ul>
            </div>

            <h1>Категория</h1>

            <div class="page__body d-flex">

                <aside class="page__sidebar">

                    <div class="page__sidebar-title-block d-flex">
                        <h1 class="page__sidebar-title">Светильники</h1>
                        <div class="page__sidebar-amount">23212 товаров</div>
                    </div>

                    <div class="page__sidebar-filter-block-mob">
                        <p class="page__sidebar-filter-block-mob-text">Фильтры</p>
                    </div>

                    <div class="page__sidebar-body">
                        <div class="loaderSize" id="categoryFilterLoader" style="display: none;">Загрузка...</div>

                        <div class="page__sidebar-navigation">
                            <div class="spollers-block" data-spollers data-one-spoller>

                                <div class="page__sidebar-navigation-col">
                                    <div class="page__sidebar-navigation-block-name d-flex">
                                        <div class="page__sidebar-navigation-name">Категории</div>
                                    </div>
                                    <ul class="page__sidebar-navigation-menu sidebar-navigation-catMenu">
                                        <li class="sidebar-navigation-catMenu-item">
                                            <a href="#" class="sidebar-navigation-catMenu-item-link">Каталог</a>
                                        </li>
                                        <li class="sidebar-navigation-catMenu-item">
                                            <a href="#" class="sidebar-navigation-catMenu-item-link">Светильники</a>
                                        </li>
                                        <li class="sidebar-navigation-catMenu-item">
                                            <a href="#" class="sidebar-navigation-catMenu-item-link">Подвесные</a>
                                        </li>
                                        <li class="sidebar-navigation-catMenu-item">
                                            <a href="#" class="sidebar-navigation-catMenu-item-link">Потолочные</a>
                                        </li>
                                        <li class="sidebar-navigation-catMenu-item">
                                            <a href="#" class="sidebar-navigation-catMenu-item-link">Настенные</a>
                                        </li>
                                        <li class="sidebar-navigation-catMenu-item">
                                            <a href="#" class="sidebar-navigation-catMenu-item-link">Настенно-потолочные</a>
                                        </li>
                                        <li class="sidebar-navigation-catMenu-item">
                                            <a href="#" class="sidebar-navigation-catMenu-item-link">Накладные светильники</a>
                                        </li>
                                        <li class="sidebar-navigation-catMenu-item">
                                            <a href="#" class="sidebar-navigation-catMenu-item-link">Встраиваемые</a>
                                        </li>
                                        <li class="sidebar-navigation-catMenu-item">
                                            <a href="#" class="sidebar-navigation-catMenu-item-link">Точечные светильники</a>
                                        </li>
                                        <li class="sidebar-navigation-catMenu-item">
                                            <a href="#" class="sidebar-navigation-catMenu-item-link">Ночники</a>
                                        </li>
                                        <li class="sidebar-navigation-catMenu-item">
                                            <a href="#" class="sidebar-navigation-catMenu-item-link">Мебельные</a>
                                        </li>
                                        <li class="sidebar-navigation-catMenu-item">
                                            <a href="#" class="sidebar-navigation-catMenu-item-link">Для растений</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="page__sidebar-navigation-col page__sidebar-navigation-col-price">
                                    <div class="page__sidebar-navigation-block-name d-flex">
                                        <div class="page__sidebar-navigation-name">ЦЕНА</div>
                                    </div>
                                    <form class="page__sidebar-navigation-col-price-selects">
                                        <div class="page__sidebar-navigation-col-price-selects-col">
                                            <div class="page__sidebar-navigation-col-price-selects-text">от</div>
                                            <input type="number" class="page__sidebar-navigation-col-price-selects-input" name="num"
                                                min="1" max="1000000" value="1">
                                            <div class="page__sidebar-navigation-col-price-selects-text">руб</div>
                                        </div>
                                        <div class="page__sidebar-navigation-col-price-selects-col">
                                            <div class="page__sidebar-navigation-col-price-selects-text">до</div>
                                            <input type="number" class="page__sidebar-navigation-col-price-selects-input" name="num"
                                                min="1" max="1000000" value="2">
                                            <div class="page__sidebar-navigation-col-price-selects-text">руб</div>
                                        </div>
                                    </form>
                                    <form class="page__sidebar-navigation-col-price-switch d-flex">
                                        <div class="page__sidebar-navigation-col-price-switch-col">
                                            <div class="switch-block">
                                                <input type="checkbox" id="price-switch-sale" class="switch-block__input" />
                                                <label for="price-switch-sale" class="switch-block__label"></label>
                                            </div>
                                            <div class="page__sidebar-navigation-col-price-switch-name">Распродажа</div>
                                        </div>
                                        <div class="page__sidebar-navigation-col-price-switch-col">
                                            <div class="switch-block">
                                                <input type="checkbox" id="price-switch-exclusive" class="switch-block__input" />
                                                <label for="price-switch-exclusive" class="switch-block__label"></label>
                                            </div>
                                            <div class="page__sidebar-navigation-col-price-switch-name">Эксклюзив</div>
                                        </div>
                                        <div class="page__sidebar-navigation-col-price-switch-col">
                                            <div class="switch-block">
                                                <input type="checkbox" id="price-switch-new" class="switch-block__input" />
                                                <label for="price-switch-new" class="switch-block__label"></label>
                                            </div>
                                            <div class="page__sidebar-navigation-col-price-switch-name">Новинки</div>
                                        </div>
                                    </form>
                                </div>

                                <div class="page__sidebar-navigation-col">
                                    <div class="page__sidebar-navigation-block-name d-flex">
                                        <div class="page__sidebar-navigation-name">ЗАБРАТЬ ИЗ МАГАЗИНА</div>
                                        <div class="switch-block">
                                            <input type="checkbox" id="toggle" class="switch-block__input" />
                                            <label for="toggle" class="switch-block__label"></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="page__sidebar-navigation-col spollers-block__item">
                                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>РАЗМЕРЫ</div>
                                    <div class="page__sidebar-navigation-body spollers-block__body">

                                    </div>
                                </div>

                                <div class="page__sidebar-navigation-col spollers-block__item">
                                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>СТИЛЬ</div>
                                    <div class="page__sidebar-navigation-body spollers-block__body">

                                        <div class="page__sidebar-navigation-body-menu">

                                            <input type="text" placeholder="Поиск по списку"
                                                class="page__sidebar-navigation-body-menu-search">

                                            <div class="page__sidebar-navigation-body-menu-options options">
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="1" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Американский</span>274</span>
                                                </label>
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="2" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Арт-деко</span>596</span>
                                                </label>
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="3" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Восточный</span>102</span>
                                                </label>
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="4" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Дизайнерский</span>522</span>
                                                </label>
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="5" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Замковый</span>50</span>
                                                </label>
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="6" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Кантри</span>289</span>
                                                </label>
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="7" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Классика</span>1444</span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="page__sidebar-navigation-col spollers-block__item">
                                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>МЕСТО ПРИМЕНЕНИЯ
                                    </div>
                                    <div class="page__sidebar-navigation-body spollers-block__body">

                                    </div>
                                </div>

                                <div class="page__sidebar-navigation-col spollers-block__item">
                                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>ТИП ЛАМПОЧКИ</div>
                                    <div class="page__sidebar-navigation-body spollers-block__body">

                                    </div>
                                </div>

                                <div class="page__sidebar-navigation-col spollers-block__item">
                                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>ФОРМА СВЕТИЛЬНИКА
                                    </div>
                                    <div class="page__sidebar-navigation-body spollers-block__body">

                                    </div>
                                </div>

                                <div class="page__sidebar-navigation-col spollers-block__item">
                                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>ПАРАМЕТРЫ ПЛАФОНОВ
                                    </div>
                                    <div class="page__sidebar-navigation-body spollers-block__body">

                                    </div>
                                </div>

                                <div class="page__sidebar-navigation-col spollers-block__item">
                                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>ТИП УПРАВЛЕНИЯ</div>
                                    <div class="page__sidebar-navigation-body spollers-block__body">

                                    </div>
                                </div>

                                <div class="page__sidebar-navigation-col spollers-block__item">
                                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>ОСОБЕННОСТИ</div>
                                    <div class="page__sidebar-navigation-body spollers-block__body">

                                    </div>
                                </div>

                                <div class="page__sidebar-navigation-col">
                                    <div class="page__sidebar-navigation-block-name d-flex">
                                        <div class="page__sidebar-navigation-name">ПУЛЬТ ДУ</div>
                                        <div class="switch-block">
                                            <input type="checkbox" id="toggle-2" class="switch-block__input" />
                                            <label for="toggle-2" class="switch-block__label"></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="page__sidebar-navigation-col spollers-block__item">
                                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>ВЫКЛЮЧАТЕЛЬ</div>
                                    <div class="page__sidebar-navigation-body spollers-block__body">

                                        <div class="page__sidebar-navigation-body-menu">

                                            <div class="page__sidebar-navigation-body-menu-options options">
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="8" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Присутствует</span></span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="page__sidebar-navigation-col spollers-block__item">
                                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>ТИП ПОДВЕСА</div>
                                    <div class="page__sidebar-navigation-body spollers-block__body">

                                        <div class="page__sidebar-navigation-body-menu">

                                            <div class="page__sidebar-navigation-body-menu-options options">
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="9" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Провод</span>3585</span>
                                                </label>
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="10" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Трос</span>1310</span>
                                                </label>
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="11" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Цепь</span>404</span>
                                                </label>
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="12" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Штанга</span>235</span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="page__sidebar-navigation-col spollers-block__item">
                                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>СТРАНА</div>
                                    <div class="page__sidebar-navigation-body spollers-block__body">

                                        <div class="page__sidebar-navigation-body-menu">

                                            <input type="text" placeholder="Поиск по списку"
                                                class="page__sidebar-navigation-body-menu-search">

                                            <div class="page__sidebar-navigation-body-menu-options options">
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="1" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Австрия</span>152</span>
                                                </label>
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="2" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Беларусь</span>581</span>
                                                </label>
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="3" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Бельгия</span>559</span>
                                                </label>
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="4" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Венгрия</span>721</span>
                                                </label>
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="5" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Германия</span>3906</span>
                                                </label>
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="6" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Дания</span>795</span>
                                                </label>
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="7" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Испания</span>1267</span>
                                                </label>
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="8" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Италия</span>789</span>
                                                </label>
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="9" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Китай</span>1654</span>
                                                </label>
                                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                                        type="radio" value="10" name="form[option]">
                                                    <span
                                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Россия</span>368</span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </aside>

                <main class="page__main main">

                    <div class="page__main-catCard d-flex">

                        <div class="page__main-catCard-column">
                            <a href="#" class="circleCard">
                                <div class="circleCard__img">
                                    <div class="circleCard__img-nuar_blk nuar_blk"></div>
                                    <img src="img/popular/08.png" alt="">
                                </div>
                                <div class="circleCard__name">
                                    ПОДВЕСНЫЕ
                                    СВЕТИЛЬНИКИ
                                </div>
                            </a>
                        </div>

                        <div class="page__main-catCard-column">
                            <a href="#" class="circleCard">
                                <div class="circleCard__img">
                                    <div class="circleCard__img-nuar_blk nuar_blk"></div>
                                    <img src="img/popular/09.png" alt="">
                                </div>
                                <div class="circleCard__name">
                                    ПОТОЛОЧНЫЕ
                                    СВЕТИЛЬНИКИ
                                </div>
                            </a>
                        </div>

                        <div class="page__main-catCard-column">
                            <a href="#" class="circleCard">
                                <div class="circleCard__img">
                                    <div class="circleCard__img-nuar_blk nuar_blk"></div>
                                    <img src="img/popular/10.png" alt="">
                                </div>
                                <div class="circleCard__name">
                                    НАСТЕННЫЕ
                                    СВЕТИЛЬНИКИ
                                </div>
                            </a>
                        </div>

                        <div class="page__main-catCard-column">
                            <a href="#" class="circleCard">
                                <div class="circleCard__img">
                                    <div class="circleCard__img-nuar_blk nuar_blk"></div>
                                    <img src="img/popular/11.png" alt="">
                                </div>
                                <div class="circleCard__name">
                                    НАКЛАДНЫЕ
                                    СВЕТИЛЬНИКИ
                                </div>
                            </a>
                        </div>

                        <div class="page__main-catCard-column">
                            <a href="#" class="circleCard">
                                <div class="circleCard__img">
                                    <div class="circleCard__img-nuar_blk nuar_blk"></div>
                                    <img src="img/popular/12.png" alt="">
                                </div>
                                <div class="circleCard__name">
                                    СВЕТОДИОДНЫЕ
                                    СВЕТИЛЬНИКИ
                                </div>
                            </a>
                        </div>

                        <div class="page__main-catCard-column">
                            <a href="#" class="circleCard">
                                <div class="circleCard__img">
                                    <div class="circleCard__img-nuar_blk nuar_blk"></div>
                                    <img src="img/popular/13.png" alt="">
                                </div>
                                <div class="circleCard__name">
                                    ВСТРАИВАЕМЫЕ
                                    СВЕТИЛЬНИКИ
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="page__main-banner banner">

                    </div>

                    <div class="main-prod-card d-flex">

                        <div class="main-prod-card__column">
                            <div class="prod-card__body d-flex">
                                <a href="#" class="prod-card__favorites-icon favorites-icon"></a>
                                <a href="#" class="prod-card__img">
                                    <img src="img/product/pr-08.jpg" alt="">
                                </a>
                                <div class="prod-card__text">
                                    <div class="prod-card__text-sale">Акция</div>
                                    <h4 class="prod-card__text-title">
                                        Подвесной светильник Lightstar Escica 806010
                                    </h4>
                                    <div class="prod-card__inner d-flex">
                                        <p class="prod-card__manuf">Lightstar (ИТАЛИЯ)</p>
                                        <p class="prod-card__avail">В наличии</p>
                                    </div>
                                    <div class="prod-card__old-price-block d-flex">
                                        <div class="prod-card__old-price rub">14 520</div>
                                        <div class="prod-card__sale-icon">-60%</div>
                                    </div>
                                </div>
                                <div class="prod-card__price-item d-flex">
                                    <p class="prod-card__price rub">6 463 </p>
                                    <a href="#" class="btn">В корзину</a>
                                </div>
                            </div>
                        </div>

                        <div class="main-prod-card__column">
                            <div class="prod-card__body d-flex">
                                <a href="#" class="prod-card__favorites-icon favorites-icon"></a>
                                <a href="#" class="prod-card__img">
                                    <img src="img/product/pr-08.jpg" alt="">
                                </a>
                                <div class="prod-card__text">
                                    <div class="prod-card__text-sale">Акция</div>
                                    <h4 class="prod-card__text-title">
                                        Подвесной светильник Lightstar Escica 806010
                                    </h4>
                                    <div class="prod-card__inner d-flex">
                                        <p class="prod-card__manuf">Lightstar (ИТАЛИЯ)</p>
                                        <p class="prod-card__avail">В наличии</p>
                                    </div>
                                    <div class="prod-card__old-price-block d-flex">
                                        <div class="prod-card__old-price rub">14 520</div>
                                        <div class="prod-card__sale-icon">-60%</div>
                                    </div>
                                </div>
                                <div class="prod-card__price-item d-flex">
                                    <p class="prod-card__price rub">6 463 </p>
                                    <a href="#" class="btn">В корзину</a>
                                </div>
                            </div>
                        </div>

                        <div class="main-prod-card__column">
                            <div class="prod-card__body d-flex">
                                <a href="#" class="prod-card__favorites-icon favorites-icon"></a>
                                <a href="#" class="prod-card__img">
                                    <img src="img/product/pr-08.jpg" alt="">
                                </a>
                                <div class="prod-card__text">
                                    <div class="prod-card__text-sale">Акция</div>
                                    <h4 class="prod-card__text-title">
                                        Подвесной светильник Lightstar Escica 806010
                                    </h4>
                                    <div class="prod-card__inner d-flex">
                                        <p class="prod-card__manuf">Lightstar (ИТАЛИЯ)</p>
                                        <p class="prod-card__avail">В наличии</p>
                                    </div>
                                    <div class="prod-card__old-price-block d-flex">
                                        <div class="prod-card__old-price rub">14 520</div>
                                        <div class="prod-card__sale-icon">-60%</div>
                                    </div>
                                </div>
                                <div class="prod-card__price-item d-flex">
                                    <p class="prod-card__price rub">6 463 </p>
                                    <a href="#" class="btn">В корзину</a>
                                </div>
                            </div>
                        </div>

                        <div class="main-prod-card__column">
                            <div class="prod-card__body d-flex">
                                <a href="#" class="prod-card__favorites-icon favorites-icon"></a>
                                <a href="#" class="prod-card__img">
                                    <img src="img/product/pr-08.jpg" alt="">
                                </a>
                                <div class="prod-card__text">
                                    <div class="prod-card__text-sale">Акция</div>
                                    <h4 class="prod-card__text-title">
                                        Подвесной светильник Lightstar Escica 806010
                                    </h4>
                                    <div class="prod-card__inner d-flex">
                                        <p class="prod-card__manuf">Lightstar (ИТАЛИЯ)</p>
                                        <p class="prod-card__avail">В наличии</p>
                                    </div>
                                    <div class="prod-card__old-price-block d-flex">
                                        <div class="prod-card__old-price rub">14 520</div>
                                        <div class="prod-card__sale-icon">-60%</div>
                                    </div>
                                </div>
                                <div class="prod-card__price-item d-flex">
                                    <p class="prod-card__price rub">6 463 </p>
                                    <a href="#" class="btn">В корзину</a>
                                </div>
                            </div>
                        </div>

                        <div class="main-prod-card__column">
                            <div class="cardImage">
                                <img src="img/cardImage/01.jpg" alt="">
                            </div>
                        </div>

                        <div class="main-prod-card__column">
                            <div class="prod-card__body d-flex">
                                <a href="#" class="prod-card__favorites-icon favorites-icon"></a>
                                <a href="#" class="prod-card__img">
                                    <img src="img/product/pr-08.jpg" alt="">
                                </a>
                                <div class="prod-card__text">
                                    <div class="prod-card__text-sale">Акция</div>
                                    <h4 class="prod-card__text-title">
                                        Подвесной светильник Lightstar Escica 806010
                                    </h4>
                                    <div class="prod-card__inner d-flex">
                                        <p class="prod-card__manuf">Lightstar (ИТАЛИЯ)</p>
                                        <p class="prod-card__avail">В наличии</p>
                                    </div>
                                    <div class="prod-card__old-price-block d-flex">
                                        <div class="prod-card__old-price rub">14 520</div>
                                        <div class="prod-card__sale-icon">-60%</div>
                                    </div>
                                </div>
                                <div class="prod-card__price-item d-flex">
                                    <p class="prod-card__price rub">6 463 </p>
                                    <a href="#" class="btn">В корзину</a>
                                </div>
                            </div>
                        </div>

                        <div class="main-prod-card__column">
                            <div class="prod-card__body d-flex">
                                <a href="#" class="prod-card__favorites-icon favorites-icon"></a>
                                <a href="#" class="prod-card__img">
                                    <img src="img/product/pr-08.jpg" alt="">
                                </a>
                                <div class="prod-card__text">
                                    <div class="prod-card__text-sale">Акция</div>
                                    <h4 class="prod-card__text-title">
                                        Подвесной светильник Lightstar Escica 806010
                                    </h4>
                                    <div class="prod-card__inner d-flex">
                                        <p class="prod-card__manuf">Lightstar (ИТАЛИЯ)</p>
                                        <p class="prod-card__avail">В наличии</p>
                                    </div>
                                    <div class="prod-card__old-price-block d-flex">
                                        <div class="prod-card__old-price rub">14 520</div>
                                        <div class="prod-card__sale-icon">-60%</div>
                                    </div>
                                </div>
                                <div class="prod-card__price-item d-flex">
                                    <p class="prod-card__price rub">6 463 </p>
                                    <a href="#" class="btn">В корзину</a>
                                </div>
                            </div>
                        </div>

                        <div class="main-prod-card__column">
                            <div class="prod-card__body d-flex">
                                <a href="#" class="prod-card__favorites-icon favorites-icon"></a>
                                <a href="#" class="prod-card__img">
                                    <img src="img/product/pr-08.jpg" alt="">
                                </a>
                                <div class="prod-card__text">
                                    <div class="prod-card__text-sale">Акция</div>
                                    <h4 class="prod-card__text-title">
                                        Подвесной светильник Lightstar Escica 806010
                                    </h4>
                                    <div class="prod-card__inner d-flex">
                                        <p class="prod-card__manuf">Lightstar (ИТАЛИЯ)</p>
                                        <p class="prod-card__avail">В наличии</p>
                                    </div>
                                    <div class="prod-card__old-price-block d-flex">
                                        <div class="prod-card__old-price rub">14 520</div>
                                        <div class="prod-card__sale-icon">-60%</div>
                                    </div>
                                </div>
                                <div class="prod-card__price-item d-flex">
                                    <p class="prod-card__price rub">6 463 </p>
                                    <a href="#" class="btn">В корзину</a>
                                </div>
                            </div>
                        </div>

                        <div class="main-prod-card__column">
                            <div class="prod-card__body d-flex">
                                <a href="#" class="prod-card__favorites-icon favorites-icon"></a>
                                <a href="#" class="prod-card__img">
                                    <img src="img/product/pr-08.jpg" alt="">
                                </a>
                                <div class="prod-card__text">
                                    <div class="prod-card__text-sale">Акция</div>
                                    <h4 class="prod-card__text-title">
                                        Подвесной светильник Lightstar Escica 806010
                                    </h4>
                                    <div class="prod-card__inner d-flex">
                                        <p class="prod-card__manuf">Lightstar (ИТАЛИЯ)</p>
                                        <p class="prod-card__avail">В наличии</p>
                                    </div>
                                    <div class="prod-card__old-price-block d-flex">
                                        <div class="prod-card__old-price rub">14 520</div>
                                        <div class="prod-card__sale-icon">-60%</div>
                                    </div>
                                </div>
                                <div class="prod-card__price-item d-flex">
                                    <p class="prod-card__price rub">6 463 </p>
                                    <a href="#" class="btn">В корзину</a>
                                </div>
                            </div>
                        </div>

                        <div class="main-prod-card__column">
                            <div class="prod-card__body d-flex">
                                <a href="#" class="prod-card__favorites-icon favorites-icon"></a>
                                <a href="#" class="prod-card__img">
                                    <img src="img/product/pr-08.jpg" alt="">
                                </a>
                                <div class="prod-card__text">
                                    <div class="prod-card__text-sale">Акция</div>
                                    <h4 class="prod-card__text-title">
                                        Подвесной светильник Lightstar Escica 806010
                                    </h4>
                                    <div class="prod-card__inner d-flex">
                                        <p class="prod-card__manuf">Lightstar (ИТАЛИЯ)</p>
                                        <p class="prod-card__avail">В наличии</p>
                                    </div>
                                    <div class="prod-card__old-price-block d-flex">
                                        <div class="prod-card__old-price rub">14 520</div>
                                        <div class="prod-card__sale-icon">-60%</div>
                                    </div>
                                </div>
                                <div class="prod-card__price-item d-flex">
                                    <p class="prod-card__price rub">6 463 </p>
                                    <a href="#" class="btn">В корзину</a>
                                </div>
                            </div>
                        </div>

                        <div class="main-prod-card__column">
                            <div class="prod-card__body d-flex">
                                <a href="#" class="prod-card__favorites-icon favorites-icon"></a>
                                <a href="#" class="prod-card__img">
                                    <img src="img/product/pr-08.jpg" alt="">
                                </a>
                                <div class="prod-card__text">
                                    <div class="prod-card__text-sale">Акция</div>
                                    <h4 class="prod-card__text-title">
                                        Подвесной светильник Lightstar Escica 806010
                                    </h4>
                                    <div class="prod-card__inner d-flex">
                                        <p class="prod-card__manuf">Lightstar (ИТАЛИЯ)</p>
                                        <p class="prod-card__avail">В наличии</p>
                                    </div>
                                    <div class="prod-card__old-price-block d-flex">
                                        <div class="prod-card__old-price rub">14 520</div>
                                        <div class="prod-card__sale-icon">-60%</div>
                                    </div>
                                </div>
                                <div class="prod-card__price-item d-flex">
                                    <p class="prod-card__price rub">6 463 </p>
                                    <a href="#" class="btn">В корзину</a>
                                </div>
                            </div>
                        </div>

                        <div class="main-prod-card__column">
                            <div class="prod-card__body d-flex">
                                <a href="#" class="prod-card__favorites-icon favorites-icon"></a>
                                <a href="#" class="prod-card__img">
                                    <img src="img/product/pr-08.jpg" alt="">
                                </a>
                                <div class="prod-card__text">
                                    <div class="prod-card__text-sale">Акция</div>
                                    <h4 class="prod-card__text-title">
                                        Подвесной светильник Lightstar Escica 806010
                                    </h4>
                                    <div class="prod-card__inner d-flex">
                                        <p class="prod-card__manuf">Lightstar (ИТАЛИЯ)</p>
                                        <p class="prod-card__avail">В наличии</p>
                                    </div>
                                    <div class="prod-card__old-price-block d-flex">
                                        <div class="prod-card__old-price rub">14 520</div>
                                        <div class="prod-card__sale-icon">-60%</div>
                                    </div>
                                </div>
                                <div class="prod-card__price-item d-flex">
                                    <p class="prod-card__price rub">6 463 </p>
                                    <a href="#" class="btn">В корзину</a>
                                </div>
                            </div>
                        </div>

                        <div class="main-prod-card__column">
                            <div class="prod-card__body d-flex">
                                <a href="#" class="prod-card__favorites-icon favorites-icon"></a>
                                <a href="#" class="prod-card__img">
                                    <img src="img/product/pr-08.jpg" alt="">
                                </a>
                                <div class="prod-card__text">
                                    <div class="prod-card__text-sale">Акция</div>
                                    <h4 class="prod-card__text-title">
                                        Подвесной светильник Lightstar Escica 806010
                                    </h4>
                                    <div class="prod-card__inner d-flex">
                                        <p class="prod-card__manuf">Lightstar (ИТАЛИЯ)</p>
                                        <p class="prod-card__avail">В наличии</p>
                                    </div>
                                    <div class="prod-card__old-price-block d-flex">
                                        <div class="prod-card__old-price rub">14 520</div>
                                        <div class="prod-card__sale-icon">-60%</div>
                                    </div>
                                </div>
                                <div class="prod-card__price-item d-flex">
                                    <p class="prod-card__price rub">6 463 </p>
                                    <a href="#" class="btn">В корзину</a>
                                </div>
                            </div>
                        </div>

                        <div class="main-prod-card__column">
                            <div class="prod-card__body d-flex">
                                <a href="#" class="prod-card__favorites-icon favorites-icon"></a>
                                <a href="#" class="prod-card__img">
                                    <img src="img/product/pr-08.jpg" alt="">
                                </a>
                                <div class="prod-card__text">
                                    <div class="prod-card__text-sale">Акция</div>
                                    <h4 class="prod-card__text-title">
                                        Подвесной светильник Lightstar Escica 806010
                                    </h4>
                                    <div class="prod-card__inner d-flex">
                                        <p class="prod-card__manuf">Lightstar (ИТАЛИЯ)</p>
                                        <p class="prod-card__avail">В наличии</p>
                                    </div>
                                    <div class="prod-card__old-price-block d-flex">
                                        <div class="prod-card__old-price rub">14 520</div>
                                        <div class="prod-card__sale-icon">-60%</div>
                                    </div>
                                </div>
                                <div class="prod-card__price-item d-flex">
                                    <p class="prod-card__price rub">6 463 </p>
                                    <a href="#" class="btn">В корзину</a>
                                </div>
                            </div>
                        </div>

                        <div class="main-prod-card__column">
                            <div class="cardImage">
                                <img src="img/cardImage/02.jpg" alt="">
                            </div>
                        </div>

                        <div class="main-prod-card__column">
                            <div class="prod-card__body d-flex">
                                <a href="#" class="prod-card__favorites-icon favorites-icon"></a>
                                <a href="#" class="prod-card__img">
                                    <img src="img/product/pr-08.jpg" alt="">
                                </a>
                                <div class="prod-card__text">
                                    <div class="prod-card__text-sale">Акция</div>
                                    <h4 class="prod-card__text-title">
                                        Подвесной светильник Lightstar Escica 806010
                                    </h4>
                                    <div class="prod-card__inner d-flex">
                                        <p class="prod-card__manuf">Lightstar (ИТАЛИЯ)</p>
                                        <p class="prod-card__avail">В наличии</p>
                                    </div>
                                    <div class="prod-card__old-price-block d-flex">
                                        <div class="prod-card__old-price rub">14 520</div>
                                        <div class="prod-card__sale-icon">-60%</div>
                                    </div>
                                </div>
                                <div class="prod-card__price-item d-flex">
                                    <p class="prod-card__price rub">6 463 </p>
                                    <a href="#" class="btn">В корзину</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- <div class="show-link">
                        <a href="#" class="show-link__btn">Показать еще</a>
                    </div> -->

                    <!-- <nav class="pagination d-flex">
                        <div class="pagination__nav-links d-flex">
                            <a class="pagination__back" href="#">Назад</a>
                            <span class="pagination__numbers">1</span>
                            <a class="pagination__numbers current" href="#">2</a>
                            <a class="pagination__numbers" href="#">3</a>
                            <a class="pagination__numbers" href="#">4</a>
                            <a class="pagination__numbers" href="#">5</a>
                            <div class="pagination__block-dot d-flex">
                                <span class="pagination__dot">.</span>
                                <span class="pagination__dot">.</span>
                                <span class="pagination__dot">.</span>
                            </div>
                            <a class="pagination__numbers" href="#">60</a>
                            <a class="pagination__next" href="#">Вперед</a>
                        </div>
                    </nav> -->

                </main>

            </div>
        </div>
    </section>

@endsection