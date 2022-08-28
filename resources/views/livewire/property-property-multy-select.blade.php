<div class="page__sidebar-navigation-col spollers-block__item">
    <div wire:click="toggleElement" class="page__sidebar-navigation-name spollers-block__title @if ($show) _active @endif"  >СТИЛЬ</div>
    @if ($show)

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
    @endif
</div>