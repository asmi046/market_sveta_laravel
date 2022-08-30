<aside wire:init="get_filter" class="page__sidebar">   
    
        <div class="page__sidebar-body">
            <div wire:loading >
                Загружаем фильтры...
            </div>

            @if (!empty($filter_zn))
            
                <div class="page__sidebar-navigation">
                    <div class="spollers-block" data-spollers data-one-spoller>
        
                        <div class="page__sidebar-navigation-col">
                            <div class="page__sidebar-navigation-block-name d-flex">
                                <div wire:click="do_do" class="page__sidebar-navigation-name">Категории</div>
                            </div>
                            <ul class="page__sidebar-navigation-menu sidebar-navigation-catMenu">
                                @foreach ($sub_cat as $item)
                                    <li class="sidebar-navigation-catMenu-item">
                                        <a href="{{route('category', $item->slug)}}" class="sidebar-navigation-catMenu-item-link">{{$item->name}}</a>
                                    </li>    
                                @endforeach
                                

                            </ul>
                        </div>
        
                        <form method="GET" action="{{url()->current()}}">
                            @livewire('property-price-select')
                            @livewire('property-property-multy-select', ["property_name" => 'style'])
                        </form>
        
                    </div>
        
                </div>

            @endif
        </div>
    
    </aside>