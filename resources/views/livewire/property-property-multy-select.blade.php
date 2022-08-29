<div class="page__sidebar-navigation-col spollers-block__item">
    <div wire:click="toggleElement" class="page__sidebar-navigation-name spollers-block__title @if ($show) _active @endif"  >СТИЛЬ</div>
    

        <div class="page__sidebar-navigation-body spollers-block__body @if ($show) _showed @endif">

            <div class="page__sidebar-navigation-body-menu">

                <input type="text" placeholder="Поиск по списку"
                    class="page__sidebar-navigation-body-menu-search">

                <div class="page__sidebar-navigation-body-menu-options options">
                    @foreach ($param_list as $key => $value)
                    
                        <label class="page__sidebar-navigation-body-menu-options-item options__item">
                            <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                type="radio" value="1" name="form[option]">
                            <span
                                class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                    class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">{{$key}}</span>{{$value}}</span>
                        </label>

                    @endforeach
                    
                </div>
            </div>
        </div>
    
</div>